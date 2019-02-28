<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Customer;
use App\Transfert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allUser(){
        $this->CustomerAuthCheck();

        $users=Customer::all();
        return view('backend.users')->with('users',$users);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allTransaction(){
        $transactions=Transfert::all();
        return view('backend.transactions')->with('transactions',$transactions);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){

        return view('backend.login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $this->CustomerAuthCheck();

        $transactions=Transfert::all();
        $users=Customer::all();
        return view('backend.home')->withTransactions($transactions)
                                        ->withUsers($users);
    }

    public function logoutAdmin(Request $request){
        $request->session()->flush();
        return redirect('/');
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request){

        $this->validate($request, [
            'admin_email' => 'required|email',
            'admin_password' => 'required|min:8'
        ]);

        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);

        $result=DB::table('admins')
            ->where('admin_email',$admin_email)
            ->where('admin_password',$admin_password)
            ->first();

        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/home');
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function CustomerAuthCheck(){
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else {
            return redirect('/admin')->send();
        }
    }
}
