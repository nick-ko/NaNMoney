<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard(){

        $this->CustomerAuthCheck();

        $customer_id=Session::get('id');

        $customers=DB::table('customers')
            ->where('id',$customer_id)
            ->first();

        return view('dashboard.dashboard')->with('customers',$customers);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function connect(){
        return view('frontend.connect');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function signup(Request $request){

        $this->validate($request, [
            'customer_name' => 'required',
            'customer_contry' => 'required',
            'customer_contact' => 'required',
            'customer_password' => 'required|min:8',
            'customer_email' => 'required|email',
        ]);

        $customer_name = $request['customer_name'];
        $customer_email = $request['customer_email'];
        $customer_contact = $request['customer_contact'];
        $customer_contry = $request['customer_contry'];
        $customer_password = md5($request['customer_password']);

        $customer =new Customer();
        $customer->customer_name = $customer_name;
        $customer->customer_email = $customer_email;
        $customer->customer_contact = $customer_contact;
        $customer->customer_contry = $customer_contry;
        $customer->customer_password = $customer_password;
        $customer->save();

        $customer_email=$request->customer_email;
        $customer_password=md5($request->customer_password);

        $result=DB::table('customers')
            ->where('customer_email',$customer_email)
            ->where('customer_password',$customer_password)
            ->first();

        if ($result) {
            Session::put('customer_name', $result->customer_name);
            Session::put('customer_contact', $result->customer_contact);
            Session::put('id', $result->id);

            return Redirect::to('/dashboard')->with(['message'=>'Bienvenue  '.Session::get('customer_name')]);
        }


    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function signin(Request $request){

        $this->validate($request, [
            'customer_email' => 'required|email',
            'customer_password' => 'required|min:8'
        ]);

        $customer_email=$request->customer_email;
        $customer_password=md5($request->customer_password);

        $result=DB::table('customers')
            ->where('customer_email',$customer_email)
            ->where('customer_password',$customer_password)
            ->first();

        if ($result) {
            Session::put('customer_name', $result->customer_name);
            Session::put('customer_contact', $result->customer_contact);
            Session::put('id', $result->id);

            return Redirect::to('/dashboard')->with(['message'=>'Vous etez connecter']);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/connect');
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
