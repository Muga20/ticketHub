<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Event;

class CartController extends Controller
{


    public function checkout($events = null)
    {
        $category = Category::all();
        $tags = Tag::all();
        $events = Event::where('slug', $events)->firstOrFail();

        return view('ticketHub.cart.checkout', compact('category' , 'events' ,'tags' ));
    }
    
    


    public function order()
    {
        $tags = Tag::latest()->paginate(5);
        return view('user.order.show' ,compact('tags'));
    }

}
