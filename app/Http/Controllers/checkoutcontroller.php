<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\order;
use App\Models\orderitem;
use App\Models\cart;
use App\Models\courses;
class CheckoutController extends Controller
{
    public function index(){
        $data = Cart::where('user_id',Auth::id())-> get();
        return view('frontend.checkout', ['data' => $data]);
    }
    public function placeOrder(Request $request)
    {
        $order = new order();
        $order->first_name = $request->input('first_name');
        $order->last_name = $request->input('last_name');
        $order->billing_address = $request->input('billing_address');
        $order->city = $request->input('city');
        $order->country = $request->input('country');
        $order->postcode = $request->input('postcode');
        $order->contact = $request->input('contact');
        $order->state = $request->input('state');
        $order->state_zipcode = $request->input('state_zipcode');
        $order->save();
        
        $cartitems = cart::where('user_id', Auth::id())->get();
        foreach($cartitems as $item)
        {
            $orderitem = OrderItem::create([
                'order_id' => $order->order_id,
                'course_id' => $item->course_id,
                'price' => $item->courses->price,
            ]);
            $course = courses::Where('course_id',$item->course_id)->first();
            $course->update();
        }
        $cartitem = cart::where('user_id', Auth::id())->get();
        cart::destroy($cartitem);
        
    }
}
