<?php

namespace App\Http\Controllers;

use App\cus_order;
use Illuminate\Http\Request;

class Cus_OrderController extends Controller
{

    /**
     * Store a new customer order.
     *
     * @param  Request  $request
     * @return Response
     */
    public function reg_order(Request $request)
    {

        //validate incoming request 
        $this->validate($request, [
            'shipname' => 'string',
            'merchant_cred' => 'required|string',
            'date' => 'date',
            'email' => 'required|email',
            'merchant_id' => 'string',
            'payment_code' => 'string',
            'amount' => 'regex:/^\d*(\.\d{2})?$/',
            'gst' => 'regex:/^\d*(\.\d{2})?$/',
            'svc' => 'regex:/^\d*(\.\d{2})?$/',
            'del' => 'regex:/^\d*(\.\d{2})?$/',
            'customfield1' => 'string',
            'customfield2' => 'string',
            'customfield3' => 'string',
            'customfield4' => 'string',
            'telephone' => 'string',
            'merchant_id' => 'string',
            'mmerCID' => 'string',
            'country' => 'string',
            'api_key' => 'required|exists:api_key,api_key'
        ]);

        try {

            $cus_order = new cus_order;
            $cus_order->shipname = $request->input('shipname');
            $api_key = $request->input('api_key');
            $shipname = $request->input('shipname');
            //$cus_order->date = $request->input('date');
            $cus_order->email = $request->input('email');
            $cus_order->merchant_cred = $request->input('merchant_cred');
            $cus_order->customfield1 = $request->input('customfield1');
            $cus_order->customfield2 = $request->input('customfield2');
            $cus_order->customfield3 = $request->input('customfield3');
            $cus_order->customfield4 = $request->input('customfield4');
            $cus_order->merchant_id = $request->input('merchant_id');
            $cus_order->shipcountry = $request->input('country');
            $cus_order->total_amount = $request->input('amount');
            $cus_order->telephone = $request->input('telephone');
            $cus_order->gst_amount = $request->input('gst');
            $cus_order->svc_amount = $request->input('svc');
            $cus_order->del_amount = $request->input('del');
            $cus_order->hash = crc32($shipname);
            $cus_order->save();

            //return successful response
            return response()->json(['cus_order' => $cus_order, 'message' => 'Order in progress'], 201);

        } catch (\Exception $e) {

             $errorCode = $e->errorInfo[1];
             if($errorCode == 1062){

                 return response()->json(['message' => 'ID duplication detected'], 409);

             }
            //return error message

             else {
                 
                 return response()->json(['message' => $e], 409);

                  }
        }

    }

    public function showOneRegOrder($hashkey)
    {

        try {           

            $order = cus_order::where('hash', $hashkey)
                 ->get();

            //return successful response
            return response()->json(['order' => $order, 'message' => 'Order in progress'], 200);

        } catch (\Exception $e) {

            //return error message
            return response()->json(['message' => 'order not found!'], 404);
        }

    }

}
