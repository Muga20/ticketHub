<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Event;

class CartController extends Controller
{
    //

    // public function checkout($event = null)
    // {
    //     $category = Category::all();
    //     $tags = Tag::all();
    //     $events = Event::where('slug', $event)->firstOrFail();

    //     return view('ticketHub.cart.checkout' , compact('ticket_details'));
    // }

    public function checkout()
    {
       
        return view('ticketHub.cart.checkout');
    }

}
