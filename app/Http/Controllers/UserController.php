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

    public function event(Request $request)
    {
        $categories = Category::all();
        $tags = Tag::all();
    
        $sortOption = $request->input('sort'); // Get the sorting option from the request
    
        // Check for the previous sort option stored in the session
        $previousSortOption = session('previous_sort');
    
        // Toggle sorting order if the same sorting option is selected again
        if ($sortOption === $previousSortOption) {
            // Reverse the sorting order
            $sortOption = ($sortOption === 'price_low_high') ? 'price_high_low' : 'price_low_high';
        }
    
        switch ($sortOption) {
            case 'price_low_high':
                $events = Event::where('price', '<=', 10000)->orderBy('price')->paginate(20);
                break;
            case 'price_high_low':
                $events = Event::where('price', '>', 10000)->orderByDesc('price')->paginate(20);
                break;
            case 'recommended':
                $events = Event::inRandomOrder()->paginate(20); // Fetch events randomly
                break;
            default:
                $events = Event::latest()->paginate(20); // Default sorting by latest
                break;
        }
    
        // Store the current sort option in the session
        session(['previous_sort' => $sortOption]);
    
        return view('ticketHub.events', compact('tags', 'events', 'categories'));
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
        $tags = Tag::latest()->paginate(20);
    
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
