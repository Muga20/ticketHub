<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class UserController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();

        return view("ticketHub.index" ,compact('categories'));
    }

    public function errorPage()
    {
        return view('ticketHub.constants.404page');
    }

    public function about()
    {
        return view('ticketHub.about');
    }

    public function contact()
    {
        return view('ticketHub.contact');
    }

    public function event()
    {
        return view('ticketHub.events');
    }

    public function singleEvent()
    {
        return view('ticketHub.singleEvent');
    }
  
    public function checkout()
    {
        return view('ticketHub.cart.checkout');
    }

    public function  orderConfirmation()
    {
        return view('ticketHub.cart.orderReceived');
    }

    public function dashboard()
    {
    return view('user.index',);
    }
}
