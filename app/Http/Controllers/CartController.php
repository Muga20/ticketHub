<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Event;
use App\Models\Order;
use Illuminate\Support\Str;
use App\Events\NewOrderCreated;


class CartController extends Controller
{


    public function checkout(Request $request, $events = null)
    {
        $category = Category::all();
        $tags = Tag::all();
        $events = Event::where('slug', $events)->firstOrFail();
    
        
        $selectedTickets = $request->input('ticketQuantity');
        $selectedTicketType = $request->input('ticketType');
    
    
        return view('ticketHub.cart.checkout', compact('category', 'events', 'tags', 'selectedTickets', 'selectedTicketType'));
    }


    public function storeOrder(Request $request)
    {
  
        // $request->validate([
        //     'first_name' => 'required
        //     'last_name' => 'required
        //     'email' => 'required|email
        //     'phone' => 'required
        //     'country' => 'required
        //     'postalCode' => 'required
        //     'ticketSerial' => 'required
        //     'event_id' => 'required 
        //     'total_amount' => 'required
        //     'status' => 'required
        // ]);
    

    $firstName = $request->input('first_name');
    $lastName = $request->input('last_name');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $country = $request->input('country');
    $postalCode = $request->input('postalCode');
    $eventId = $request->input('event_id');
    $totalAmount = $request->input('total_amount');
    $status = $request->input('status');  
    $numberOfTickets = $request->input('numberOfTickets'); 
    
    $order = new Order();
    $order->first_name = $firstName;
    $order->last_name = $lastName;
    $order->email = $email;
    $order->phone = $phone;
    $order->country = $country;
    $order->postalCode = $postalCode;
    $order->ticketSerial = Str::random(3) . mt_rand(100, 999); 
    $order->event_id = $eventId;
    $order->total_amount = $totalAmount;
    $order->status = 'Pending'; 
    $order->numberOfTickets = $numberOfTickets; 

    $order->save();
    event(new NewOrderCreated($order));

    return redirect()->back()->with('status', 'Order Created Successfully');
    }


    public function order()
    {
        $oder = Order::latest()->paginate(5);
        $events = Event::all();
        return view('user.orders.show' ,compact('oder' , 'events'));
    }

    public function deleteOrder(Order $item)
    {
        $item->delete();
        return redirect()->back()->with('status', 'Order Deleted Successfully');
    }

}
