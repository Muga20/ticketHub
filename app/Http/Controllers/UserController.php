<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Event;
use App\Models\Tag;

class UserController extends Controller
{
    //Slider
    public function index()
    {
        $categories = Category::all();
        $slides = Slider::all();
        $events = Event::latest()->paginate(5);

        return view("ticketHub.index" ,compact('categories' , 'slides' ,'events' ));
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
        $categories = Category::all();
        $tags = Tag::all();
        $events = Event::latest()->paginate(12);
        return view('ticketHub.events' ,compact('tags','events' ,'categories'));
    }

    public function singleEvent($event = null)
    {
        $category = Category::all();
        $tags = Tag::all();
        $events = Event::where('slug', $event)->firstOrFail();

        return view('ticketHub.singleEvent' , compact('category' , 'events' ,'tags' ));
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
