<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function transaction(){

        $this->CustomerAuthCheck();
        $customer_contact=Session::get('customer_contact');
        $transactions=DB::table('transferts')
            ->where('sender_number',$customer_contact)
            ->get();

        return view('dashboard.histo')->with('transactions',$transactions);

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
