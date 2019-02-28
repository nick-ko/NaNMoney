<?php

namespace App\Http\Controllers;

use App\Transfert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TransfertController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
        $this->CustomerAuthCheck();
        return view('dashboard.transfert');
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(Request $request){

        $this->validate($request, [
            'sender_name' => 'required',
            'sender_number' => 'required',
            'receiver_name' => 'required',
            'receiver_number' => 'required',
            'transfert_montant' => 'required',
        ]);

        $transfert =new Transfert();
        $transfert->sender_name = $request['sender_name'];
        $transfert->sender_number = $request['sender_number'];
        $transfert->receiver_name = $request['receiver_name'];
        $transfert->receiver_number= $request['receiver_number'];
        $transfert->transfert_montant= $request['transfert_montant'];

        $transfert->save();
        $receivers=DB::table('customers')
            ->where('customer_contact', $request['receiver_number'])
            ->first();

        $senders=DB::table('customers')
            ->where('customer_contact', $request['sender_number'])
            ->first();

        $solde_receiver=$receivers->customer_solde;

        if($senders->customer_solde!= 0){

            $montant=$solde_receiver + $request['transfert_montant'];
            $credit=$senders->customer_solde - $request['transfert_montant'];

            if($request['transfert_montant'] > $senders->customer_solde){

                return redirect()->route('dashboard')->with(['error' => 'Votre montant est insuffisant pour effectuer ce transfert']);
            }else{
                DB::table('customers')
                    ->where('customer_contact', $request['receiver_number'])
                    ->update(['customer_solde'=>$montant]);

                DB::table('customers')
                    ->where('customer_contact', $request['sender_number'])
                    ->update(['customer_solde'=>$credit]);

                return redirect()->route('dashboard')->with(['message' => 'Transfert efféctué avec succes']);
            }
        }else{
            return redirect()->route('dashboard')->with(['error' => 'Votre montant est insuffisant pour effectuer ce transfert']);
        }

    }
    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function CustomerAuthCheck(){
        $customer_id=Session::get('id');
        if ($customer_id) {
            return;
        }else {
            return redirect('/connect')->send();
        }
    }
}
