<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function payment(){
        $data= [];
        $data['items']=[
            [
                'name'=>'My Cart',
                'price'=>475,
                'description'=>'Car tire, car oil And searchlight',
                'qty'=>1
            ]
            ];
            $data['invoice_id']=1;
            $data['invoice_description']= "order #{$data['invoice_id']} Invoice";
            $data['return_url']= route('payment.success');
            $data['cancel_url']= route('payment.cancel');
            $data['total']=475;

            $provider= new ExpressCheckout;
            $response= $provider->setExpressCheckout($data);
            $response= $provider->setExpressCheckout($data,true);
            return redirect($response['paypal_link']);


    }
            public  function cancel()
            {
                return redirect('/')->with('payy', 'Payment Faild ...Try Again ');
            }

            public  function success(Request $request){
            $provider= new ExpressCheckout;
            $response= $provider->getExpressCheckoutDetails($request->token);
            if(in_array(strtoupper($response['ACK']),['SUCCESS','SUCCESSWITHWARNING'] )){

                $user=auth()->user();
                $name=$user->name;
                $user_id=$user->id;
                return redirect('/')->with('pay', 'Payment Done Successfully ');


            }
            return redirect('/')->with('payy', 'Payment Faild ...Try Again ');
   }

}
