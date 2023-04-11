<?php

namespace App\Http\Controllers\cheque;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Membership;
use App\Models\Price;
use App\Models\offerPrice;
use Carbon\Carbon;

class ChequeController extends Controller
{
    //

    public function submitcheque(Request $request){
        try {

            $request->validate([
                'file' => 'image|mimes:jpg,jpeg,png',
    
            ]);

            $price = Price::first();
            $offerPrice = offerPrice::where('from_date','<=',Carbon::now())->where('to_date','>=',Carbon::now())->first();
            $payablePrice= $offerPrice ? (($price->price)-($offerPrice->offer_price)) : $price->price;



            $membership = new Membership;
            if($request->file()) {
                $fileName = time().rand(10,100).'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('cheques', $fileName, 'public');
                $membership->user_id=Auth::user()->id;
                $membership->amount = $payablePrice;
                $membership->cheque_status = 'pending';
                $membership->payment_mode = 'cheque';                
                $membership->cheque_number = $request->cheque_number;
                $membership->bank_name = $request->accountholder_name;
                $membership->accountholder_name = $request->accountholder_name;
                if($offerPrice){
                    $membership->discount=$offerPrice->offer_price;
                    $membership->offer_id=$offerPrice->id;
                }
                $membership->cheque_image = '/storage/' . $filePath;
                // $membership->vault_id = $request->vault_id;
                $membership->save();
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }
        }catch (\Exception $e) {
            return redirect()
            ->route('createTransaction')
            ->with('error', $e->getMessage() ?? 'Something went wrong.');
    }
    }
}
