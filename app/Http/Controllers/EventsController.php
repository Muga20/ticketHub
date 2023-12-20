<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class EventsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }


    public function showEvents() {

        $user_id = session('user_id');
        $users = User::where('id', '!=', $user_id)->get();
        $categories = Category::all();
        $events = Event::latest()->paginate(5); // Adjust model name if needed
        $tags = Tag::latest()->paginate(5); // Adjust model name if needed
    
        return view('user.events.show', compact('events', 'tags', 'categories', 'users'));
    }
    


    public function createEvents(){
        $data = Auth::user();
        $categories = Category::all();
        $tags = Tag::all();
        $selectedTagIds = []; // Default to an empty array for creating a new event
    
        $ageRanges = [
            '12 years' => '12 years',
            '15 years' => '15 years',
            '18 years' => '18 years and above ',
        ];
    
        return view('user.events.create', compact('categories', 'data', 'tags', 'ageRanges', 'selectedTagIds'));
    }
    


    public function storeEvents(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'category_id' => 'required',
            'age' => 'required',
            'price' => 'required',
            'location' => 'required',
            'host' => 'required',
            'slots' => 'required',
            'tag_id' => 'required'
        ]);

        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $age = $request->input('age');
        $price = $request->input('price');
        $location = $request->input('location');
        $host = $request->input('host');
        $slots = $request->input('slots');
        $tag_id = $request->input('tag_id');
    
        if (Event::latest()->first() !== null) {
            $eventId = Event::latest()->first()->id + 1;
        } else {
            $eventId = 1;
        }
    
        $slug = Str::slug($title, '-') . '-' . $eventId;
        $user_id = Auth::user()->id;
       
    
        // File upload
        $image = 'storage/' . $request->file('image')->store('EventImages', 'public');


        $event = new Event();
        $event->title = $title;
        $event->category_id = $category_id;
        $event->tag_id = $tag_id;
        $event->slug = $slug;
        $event->description = $description;
        $event->user_id = $user_id;
        $event->image = $image;
        $event->age = $age;
        $event->price = $price;
        $event->location = $location;
        $event->host = $host;
        $event->slots = $slots;
    
        $event->save();
    
        return redirect()->back()->with('status', 'Event Created Successfully');
    }
    
    public function editEvents(Events $blog){

        $data = Auth::User();
        $categories = Category::all();

        return view('user.events.edit', compact('blog' , 'categories' ,'data'));
    }

    public function updateEvents(Request $request, Events $blog)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
            'body' => 'required'
        ]);
    
        $title = $request->input('title');
        $description = $request->input('description');
        $category_id = $request->input('category_id');
        $body = $request->input('body');
    
        // Update the blog attributes that the user wants to modify
        $blog->title = $title;
        $blog->description = $description;
        $blog->category_id = $category_id;
        $blog->body = $body;
    
        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            // Remove old image
            $blog->deleteImage();
    
            // Store the new image
            $image = 'storage/' . $request->file('image')->store('BlogImages', 'public');
            $blog->image = $image;
        }
    
        $blog->save();
    
        return redirect()->back()->with('status', 'Post Edited Successfully');
    }
    
    

    public function deleteEvents(Event $event){
        $event->delete();
        return redirect()->back()->with('status', 'Post Delete Successfully');
    }
}