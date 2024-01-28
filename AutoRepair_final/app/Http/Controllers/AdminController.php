<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\message;
use App\Models\Cart;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    //
    public function getdata()
    {
        $categories=Category::all();
        return view('admin.dashboard',compact('categories'));
    }


    public function getdataadmin()
    {
        $products=Product::all();
        return view('admin.requests',compact('products'));
    }

    public function accept($id)
    {
        $data = Product::find($id);
        $data->status = 'accepted';
        $data->save();
        return redirect()->back();

    }
    public function reject($id)
    {
        $data = Product::find($id);
        $data->status = 'rejected';
        $data->save();
        return redirect()->back();

    }
    public function deliver($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function create()
    {
        return view('admin.create');
    }
    public function addcategory(Request $request)
    {
        $data = new Category;
        $data->name=$request->name;
        $data->description=$request->description;

        $data->save();
        //return response('تم التسجيل');
        return redirect()->back();
    }
    public function edit($id)
    {
        $categories = Category::findorFail($id);

        return view('admin.edit',compact('categories'));

    }
    public function update(Request $request, $id)
    {
        $categories = Category::Findorfail($id);
        $categories->name = $request->name;
        $categories->description  = $request->description;
        $categories->save();
        return redirect()->back();
    }
    public function getorderadmin(Request $request)
    {
        $cart=cart::where('user_id',$request->user()->id)->get();
        return view('admin.order',compact('cart'));
    }

    public function getmessageadmin()
    {
        $messages=message::all();
        return view('admin.message',compact('messages'));
    }
    public function readmessage($id)
    {
        $data = message::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function searchcat(Request $request){
        $search_text=$_GET['query'];
        $categories = Category::where('name','Like','%'.$search_text.'%')->get();
        return view('admin.dashboard',compact('categories'));

    }
    public function sort(Request $request)
{
    $column = $request->get('column');
    $direction = $request->get('direction');
    $products = Product::orderBy($column, $direction)->get();
    return view('admin.requests', compact('products'));
}
public function sort2(Request $request)
{
    $column = $request->get('column');
    $direction = $request->get('direction');
    $categories = Category::orderBy($column, $direction)->get();
    return view('admin.dashboard', compact('categories'));
}
   /* public function getcartsadmin()
    {
        $carts=Cart::all();
        return view('admin.carts',compact('carts'));
    }
    */


}
