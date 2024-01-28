<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function search(Request $request){
        $search=$request->search;
        $data = product::where('name','Like','%'.$search.'%')->get();
        return view('welcome',compact('data'));
    }

    public function cart(Request $request){
        $user=auth()->user();
        $cart=cart::where('user_id',$request->user()->id)->get();
        return view('user.cart',compact('cart'));
    }


    public function addcart(Request $request ,$id)
    {

        if(Auth::id()){

            $user=auth()->user();
            $product=product::find($id);
            $cart=new Cart;
            $cart->photo=$product->photo;
            $cart->name=$user->name;
            $cart->user_id=$request->user()->id;
            $cart->product_Name =$product->name;
            $cart->price =$product->price;
            $cart->quantity =$request->quantity;
            $cart->save();
            return redirect()->back()->with('cart', 'Added To Cart Succssefully ');;
        }
        else{
            return redirect('login');
        }
    }

    public function cancel($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function getmap()
    {

        return view('user.map');
    }
    public function savemessage(Request $request){

        $data = new message;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->message=$request->message;
        $data->save();

        return redirect()->back()->with('message', 'Message send Succssefully ');


    }



}
