<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $checkouts = Checkout::with('Event')->whereUserId(Auth::id())->get();
        // dd($checkouts);
        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}