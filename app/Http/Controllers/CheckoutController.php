<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Checkout;
use App\Models\Event;
use App\Http\Requests\User\Checkout\Store;
use App\Models\User;
use Auth;
use Mail;
use App\Mail\Checkout\AfterCheckout;

class CheckoutController extends Controller
{
    public function create(Event $event , Request $request)
    {
        if ($event->isRegistered) {
            $request->session()->flash('error' , "You already registered on {$event->title} concert.");
            return redirect(route('user.dashboard'));
        }

        return view('checkout.create', [
            "event" => $event
        ]);
    }

    public function store(Request $request, $event_id)
    {
        $event = Event::where('id', $event_id)->first();
        if ($event) {
            try {
                DB::beginTransaction();
                // mapping request data
                $data = $request->all();
                $data['user_id'] = Auth::id();
                $data['event_id'] = $event->id;
    
                // update user data
                $user = Auth::user();
                $user->email = $data['email'];
                $user->name = $data['name'];
                $user->phone = $data['phone'];
                $user->address = $data['address'];
                $user->save();
    
                // create checkout
                $checkout = Checkout::create($data);
                DB::commit();

                // sending email
                Mail::to(Auth::user()->email)->send(new AfterCheckout($checkout));
    
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->withErrors(['msg' => $e->getMessage()]);
            } catch (\Throwable $ex) {
                DB::rollBack();
                return redirect()->back()->withErrors(['msg' => $ex->getMessage()]);
            }
            return redirect(route('checkout.success'));
        } else {
            return ('Data not found');
        }
    }

    public function success()
    {
        return view('checkout.success');
    }

    public function invoice(Checkout $checkout)
    {
        return $checkout;
    }
}
