<?php

namespace App\Http\Controllers\Paypal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\offerPrice;
use App\Models\Membership;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    //
    public function createTransaction()
    {
        $price = Price::first();

        $offerPrice = offerPrice::where('from_date','<=',Carbon::now())->where('to_date','>=',Carbon::now())->first();

    if($offerPrice){
        // $payablePrice= $offerPrice ? (($price->price)-($offerPrice->offer_price)) : $price->price;
        $payablePrice= $offerPrice ? $offerPrice->offer_price : $offerPrice->price;
    
    }else{

        $offerPrice = offerPrice::first();
        $payablePrice=  $offerPrice->price;

    }


        return view('admin.paypal.transaction',compact('price','offerPrice','payablePrice'));
    }

    public function processTransaction(Request $request)
    {
        $price = Price::first();
        $offerPrice = offerPrice::where('from_date','<=',Carbon::now())->where('to_date','>=',Carbon::now())->first();

        if($offerPrice){
            // $payablePrice= $offerPrice ? (($price->price)-($offerPrice->offer_price)) : $price->price;
            $payablePrice= $offerPrice ? $offerPrice->offer_price : $offerPrice->price;
        
        }else{
    
            $offerPrice = offerPrice::first();
            $payablePrice=  $offerPrice->price;
    
        }
        // $payablePrice= $offerPrice ? (($price->price)-($offerPrice->offer_price)) : $price->price;
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $payablePrice
                    ]   
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        $price = Price::first();
        $offerPrice = offerPrice::where('from_date','<=',Carbon::now())->where('to_date','>=',Carbon::now())->first();

        if($offerPrice){
            // $payablePrice= $offerPrice ? (($price->price)-($offerPrice->offer_price)) : $price->price;
            $payablePrice= $offerPrice ? $offerPrice->offer_price : $offerPrice->price;
        
        }else{
    
            $offerPrice = offerPrice::first();
            $payablePrice=  $offerPrice->price;
    
        }
        // $payablePrice= $offerPrice ? (($price->price)-($offerPrice->offer_price)) : $price->price;
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $membership = new Membership;
            $membership->user_id=Auth::user()->id;
            $membership->paypal_transaction_id=$response['id'];
            $membership->amount = $payablePrice;
            $membership->payment_mode = 'Paypal';
            $membership->accountholder_name = $response['payer']['name']['given_name'].' '.$response['payer']['name']['surname'];
            $membership->start_date = date("Y-m-d H:i:s");
            $membership->end_date = date('Y-m-d H:i:s', strtotime(' + 1 year'));
            $membership->status = 1;
            if($offerPrice){
                $membership->discount=(($offerPrice->price)-($offerPrice->offer_price));
                $membership->offer_id=$offerPrice->id;
            }
            $membership->save();
            // $details = [
            //     'desciption' => 'Hi admin,' . Auth::user()->user_name . 'has been taken a new membership via paypal.',
            //     // 'body' => $request->description
            // ];
            // Mail::to($request->email)->send(new \App\Mail\RenewMembership ($details));

            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.');

        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function cancelTransaction(Request $request)
    {

        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
