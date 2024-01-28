<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SupplierController extends Controller
{
    public function getdata(Request $request)
    {
        $user_type=Auth::user()->user_type;
        if($user_type=='1'){
            $user=auth()->user();
            $products=Product::where('user_id',$request->user()->id)->get();
            return view('supplier.productlist',compact('products'));
        }else{
            return redirect()->back();
        }
    }

    public function createproduct()
    {
        $user_type=Auth::user()->user_type;
        if($user_type=='1'){
            $categories=Category::all();
            return view('supplier.createproduct',compact('categories'));
        }else{
            return redirect()->back();
        }
    }

    public function addproduct(Request $request)
    {
        $user_type=Auth::user()->user_type;
        if($user_type=='1'){
            $data = new Product;
            $data->name=$request->name;
            $data->description=$request->description;
            $fileName=time().$request->file('photo')->getClientOriginalName();
            $path= $request->file('photo')->storeAs('images',$fileName,'public');
            $data["photo"]='/storage/'.$path;
            $data->price=$request->price;
            $data->user_id=$request->user()->id;
            $data->category_id=$request->category_id;
            $data->save();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
    public function editproduct($id)
    {
        $user_type=Auth::user()->user_type;
        if($user_type=='1'){
            $products = Product::findorFail($id);
            return view('supplier.editproduct',compact('products'));
        }else{
            return redirect()->back();
        }
    }
    public function updateproduct(Request $request, $id)
    {
        $user_type=Auth::user()->user_type;
        if($user_type=='1'){
            $products = Product::Findorfail($id);
            $products->name = $request->name;
            $products->description  = $request->description;
            $products->price = $request->price;
            $products->save();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
    public function destroyproduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back();
    }
}
