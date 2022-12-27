<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Checkout;
use Auth;

class HomeController extends Controller
{
    public function index() {
        $product = Event::all();
        return view('index', compact('product'));
    }

    public function dashboard() {
        $checkouts = Checkout::with('event')->where('user_id',Auth::id())->get();
        return view('user.dashboard', [
            "checkouts" => $checkouts
        ]);
    }
}
