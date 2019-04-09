<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Order;
use App\Http\Helper\ResponseBuilder;

class Youtube extends Controller
{
    //
    public function list(){
       $data= User::all();
       $status=true;
       $info="Data is Listed Successfully";
      return  ResponseBuilder::result($status,$info,$data);
    }

    public function order(Request $request){
        print_r($request->input());
        $order = new Order;
        $order->orderNumber=$request->input('OrderNumber');
        $order->user_id=$request->input('user_id');
        // $result= $order->save();
        $result= 0;
if($result==1){
        $status=true;
        $info="Data saved successfully";
    }else{
        $status=false;
        $info="Data not saved successfully";

    }
    
    return  ResponseBuilder::result($status,$info);
    }
}
