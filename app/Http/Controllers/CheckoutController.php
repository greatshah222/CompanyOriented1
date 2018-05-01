<?php

namespace App\Http\Controllers;
use App\Mail\GotNewOrder;
use App\Mail\NewUserWelcome;
use App\Order;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storePayment(Request $request)
    {
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => Cart::total()*100, // Amount in cents
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Indian Cuisine food charge"
            ));

        } catch (\Stripe\Error\Card $e) {
            // The card has been declined
        }
        //Create the order
        Order::createOrder();

        //redirect user to some page
        session()->flash('notif',' Thankyou for the purchase.You will be notified when the food is ready');

Session::forget('cart');
Mail::to(Auth::user()->email)->send(new NewUserWelcome());
        Mail::to('great.shah222@gmail.com')->send(new GotNewOrder());


        return redirect()->route('name');

    }


}
