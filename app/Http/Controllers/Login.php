<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function index(){
        return view ('Login');
    }

    public function register (Request $request){
        DB::table('customer')->insert([
            'nama_customer' => $request->nama_customer,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('login');
    }

    public function masuk(Request $request){
        $customer = DB::table('customer')->where('email', $request->email)->first();
        if($customer->password == $request->password){
            Session::put('id_customer', $customer->id);
            echo 'Data disimpan dengan session id = '.$request->session()->get('id');
            return redirect('/utama');
        }else {
            echo "Anda gagal login";
        }

    }

    public function keluar(){
        Session::forget('id_customer');
        return redirect('/');
    }
}
