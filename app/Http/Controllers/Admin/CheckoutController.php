<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Mail\Invoice\AfterPayment;
use Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode; // buat generate qr code

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $bookingCode = $checkout->booking_code;
        // booking code qrcode (image)
        $qrcode = QrCode::size(150)->generate($bookingCode);
        // dump($qrcode->html);
        // echo '<pre>'; print_r($qrcode); echo '</pre>';
        $checkout['qrcode'] = $qrcode;
        $checkout->save();

        // send invoice through email to user
        Mail::to($checkout->User->email)->send(new AfterPayment($checkout)); // embed the qrcode

        $request->session()->flash('success', "Invoice with ID {$checkout->id} has been sent!");
        return redirect(route('admin.dashboard'));
     }
}