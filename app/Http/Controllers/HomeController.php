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

    public function dashboard()
    {
        switch (Auth::user()->is_admin) {
            case true:
                return redirect(route('admin.dashboard'));
                break;
            
            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
