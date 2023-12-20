<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Tag;


class TagsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }

    public function showTag()
    {
        $tags = Tag::all();

        return view('user.tags.show', compact('tags'));

    }

  
    public function createTag()
    {
        $data = Auth::user();
        return view('user.tags.create', compact('data'));
    }
    public function storeTag(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
    
        $name = $request->input('name');
    
        $tagId = Tag::latest()->value('id') ?? 0;
        $tagId += 1;
    
        $slug = Str::slug($name, '-') . '-' . $tagId;
    
        $tag = new Tag();
        $tag->user_id = Auth::user()->id;
        $tag->name = $name;
        $tag->slug = $slug;
    
     
        $tag->save();
    
        return redirect()->back()->with('status', 'Tag Created Successfully');
    }
    

    public function editTag(Tag $tag)
    {
        $data = array();
        if (Session::has('LoggedUser')) {
        $data = User::where('email', '=', Session::get('LoggedUser'))->first();
    }


        return view('user.tags.edit' ,compact('data' ,'tag'));
    }


    public function updateTag(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|unique:tag,name,' .$tag->id,
        ]);
    
       $tag->name = $request->input('name');
       $tag->slug = Str::slug($request->input('name')); // Generate slug from name
       $tag->user_id = Auth::user()->id;
       $tag->save();
    
        return redirect()->back()->with('status', 'Tag Updated Successfully');
    }

    public function deleteTag(Tag $tag)
    {
       $tag->delete();
        return redirect()->back()->with('status', 'Tag Deleted Successfully');
    }
}