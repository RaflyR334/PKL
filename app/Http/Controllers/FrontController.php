<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function product()
    {
        return view('product');
    }

    public function detailpro()
    {
        return view('detailpro');
    }

    public function cart()
    {
        return view('cart');
    }

    public function compaire()
    {
        return view('compaire');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function userd()
    {
        return view('userd');
    }

    //method selanjutnya untuk bagian front
}
