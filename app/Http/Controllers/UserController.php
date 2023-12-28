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
        $categories = Category::has('events')->withCount('events')->take(3)->get();
        $slides = Slider::all();
        $events = Event::latest()->paginate(20);

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


    public function category(Request $request)
    {
        $categories = Category::withCount('events')->get();
        $selectedCategoryId = $request->input('category_id');
        $tags = Tag::latest()->paginate(6);
    
        if ($selectedCategoryId) {
            $selectedCategory = Category::findOrFail($selectedCategoryId);
            $events = $selectedCategory->events()->paginate(10);
        } else {
            $events = Event::paginate(10); 
        }
    
        return view('ticketHub.eventsInCategory', compact('categories', 'events', 'tags'));
    }
    



    public function dashboard()
    {
    return view('user.index',);
    }
}
