<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
//    public function step1()
//    {
//        if (Auth::check()) {
//            return redirect()->route('checkout.shipping');
//        }
//
//        return redirect('login');
//    }

    public function food()
    {
        return view('front.food-info');
    }

    public function payment()
    {
        return view('front.payment');
    }

    public function storePayment(Request $request)
    {
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => Cart::total()*100, // Amount in cents
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Example charge"
            ));

            session()->flash('notif','Category successfully deleted.');
            return back();
        } catch (\Stripe\Error\Card $e) {
            // The card has been declined
        }   }


}
