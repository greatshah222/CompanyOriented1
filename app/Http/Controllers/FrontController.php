<?php

namespace App\Http\Controllers;
use App\Product;


use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');

    }
    public function menus()
    {
        $menus=Product::all();
        return view('front.menus',compact('menus'));

    }
    public function menu()
    {
        return view('front.menu');

    }


}
