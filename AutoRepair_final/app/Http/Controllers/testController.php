<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function maintance(){

        return view('user.maintance');
    }
    public function test(Request $request){

        $oiltypes_5 = ['shell','mobil','rehnara','Castrol','Total'];
        $ans1 = $request->oiltype;
        $ans2 = $request->DistaceWithUseOil;
        $tire_pressure = $request->TirePressure;

        $repairs = [];

        if( $ans2 >= 10000 && 20000>$ans2  && in_array($ans1,$oiltypes_5)){
           array_push($repairs,'Wiper water control');
           array_push($repairs,'Engine cleaning with foam');
           array_push($repairs,'Change engine oil and engine oil filter');
        }
        if ($ans2 >= 20000 &&$ans2<30000 && in_array($ans1,$oiltypes_5)){
            array_push($repairs,'Wiper water control');
            array_push($repairs,'Engine cleaning with foam');
            array_push($repairs,'Change engine oil and engine oil filter');
            array_push($repairs,'Change the air and air conditioning filter');

         }

        if($ans2 >= 30000 &&$ans2 < 40000 && in_array($ans1,$oiltypes_5)){

            array_push($repairs,'Wiper water control');
            array_push($repairs,'Engine cleaning with foam');
            array_push($repairs,'Change engine oil and engine oil filter');
            array_push($repairs,'Changing the spark plugs');


          }
        if($ans2 >= 40000&&$ans2 < 50000 && in_array($ans1,$oiltypes_5)){
            array_push($repairs,'Wiper water control');
           array_push($repairs,'Engine cleaning with foam');
           array_push($repairs,'Change engine oil and engine oil filter');
           array_push($repairs,'Change the air and air conditioning filter');
            array_push($repairs,'Brake fluid change and TcT oil change');

           }
        if($ans2 >= 50000 &&$ans2 < 60000 && in_array($ans1,$oiltypes_5)){
            array_push($repairs,'Wiper water control');
           array_push($repairs,'Engine cleaning with foam');
           array_push($repairs,'Change engine oil and engine oil filter');

          }
          if($ans2 >= 60000 &&$ans2 < 70000 && in_array($ans1,$oiltypes_5)){

           array_push($repairs,'Change the air and air conditioning filter');
           array_push($repairs,'Wiper water control');
           array_push($repairs,'Engine cleaning with foam');
           array_push($repairs,'Change engine oil and engine oil filter');
           array_push($repairs,'Changing the spark plugs');
           array_push($repairs,'Changing the belt of the catina and changing the external belt');

          }
          if($ans2 >= 70000 &&$ans2 < 80000 && in_array($ans1,$oiltypes_5)){
            array_push($repairs,'Wiper water control');
           array_push($repairs,'Engine cleaning with foam');
           array_push($repairs,'Change engine oil and engine oil filter');

          }
          if($ans2 >= 80000 &&$ans2 < 90000 && in_array($ans1,$oiltypes_5)){
            array_push($repairs,'Wiper water control');
            array_push($repairs,'Engine cleaning with foam');
            array_push($repairs,'Change engine oil and engine oil filter');
            array_push($repairs,'Change the air and air conditioning filter');
            array_push($repairs,'Changing the belt of the catina and changing the external belt');


          }
        if($ans2 >= 90000 &&$ans2 < 100000 && in_array($ans1,$oiltypes_5)){
            array_push($repairs,'Wiper water control');
            array_push($repairs,'Engine cleaning with foam');
            array_push($repairs,'Change engine oil and engine oil filter');
            array_push($repairs,'Changing the spark plugs');

         }
         if($ans2 > 100000 && in_array($ans1,$oiltypes_5)){
            array_push($repairs,'Manual transmission oil change');
            array_push($repairs,'Change the air and air conditioning filter');
            array_push($repairs,'Wiper water control');
            array_push($repairs,'Engine cleaning with foam');
            array_push($repairs,'Change engine oil and engine oil filter');
         }
        if($tire_pressure > 36){

            array_push($repairs,'need to check tire pressurer');
        }
        if(!$repairs ){
            array_push($repairs,'No Problem We Detect');
        }
        return view('user.result',compact('repairs'));

    }
}
