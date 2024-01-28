<?php
use App\Mail\TestMail;
use App\Models\Product;
use App\Models\message;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products=Product::where('status','accepted')->get();
    $catagories=Category::all();
    return view('welcome',compact('products','catagories'));
});


Route::get('/supplier/productlist', function () {
    return view('supplier.productlist');
})->middleware(['auth', 'supplier'])->name('supplier');

Route::get('/auth/login', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::post('/test',[testController::class,'test']);
Route::get('/maintance',[testController::class,'maintance']);
Route::get('/result',[testController::class,'result']);


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('/admin/requests', function () {
    return view('admin.requests');
});

Route::get('/admin/requests',[AdminController::class,'getdataadmin']);
Route::get('/admin/dashboard',[AdminController::class,'getdata']);
Route::get('/destroy/{id}',[AdminController::class,'destroy']);
Route::post('/addcategory',[AdminController::class,'addcategory']);
Route::get('/create',[AdminController::class,'create']);
Route::get('/edit/{id}',[AdminController::class,'edit']);
Route::post('/update/{id}',[AdminController::class,'update']);
Route::get('/accept/{id}',[AdminController::class,'accept']);
Route::get('/reject/{id}',[AdminController::class,'reject']);
Route::get('/admin/message',[AdminController::class,'getmessageadmin']);
Route::get('/admin/order',[AdminController::class,'getorderadmin']);
Route::get('/deliver/{id}',[AdminController::class,'deliver']);
Route::get('/admin/carts',[AdminController::class,'getcartsadmin']);
Route::get('/readmessage/{id}',[AdminController::class,'readmessage']);
Route::get('/searchcat',[AdminController::class,'searchcat']);
Route::get('/sort',[AdminController::class,'sort'])->name('sort');
Route::get('/sort2',[AdminController::class,'sort2'])->name('sort2');


Route::get('/supplier/productlist',[SupplierController::class,'getdata']);
Route::get('/supplier/destroyproduct/{id}',[SupplierController::class,'destroyproduct']);
Route::get('/supplier/createproduct',[SupplierController::class,'createproduct']);
Route::post('/supplier/addproduct',[SupplierController::class,'addproduct']);
Route::get('/supplier/editproduct/{id}',[SupplierController::class,'editproduct']);
Route::post('/supplier/updateproduct/{id}',[SupplierController::class,'updateproduct']);


Route::get('/search',[UserController::class,'search']);
Route::get('/cart',[UserController::class,'cart']);
Route::get('/getmap',[UserController::class,'getmap'])->name('getmap');
Route::post('/savemessage',[UserController::class,'savemessage'])->name('savemessage');
Route::post('/addcart/{id}',[UserController::class,'addcart']);
Route::get('/cancel/{id}',[UserController::class,'cancel']);
Route::get('/user/getlist',[UserController::class,'getlist'])->name('user.product');


Route::get('payment',[PayPalController::class,'payment'])->name('payment');
Route::get('/cancel',[PayPalController::class,'cancel'])->name('payment.cancel');
Route::get('/payment/success',[PayPalController::class,'success'])->name('payment.success');



