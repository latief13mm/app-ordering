<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Order extends Controller
{
    public function order(Request $request){
        DB::table('keranjang')->insert([
            'id_customer' => Session::get('id_customer'),
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ]);
        return redirect('/');
    }

    public function keranjang(){
        $keranjang = DB::table('cart')->get();
        return view('keranjang', ['keranjang' => $keranjang]);
    }

    public function checkout(){
        $id_check = rand().rand().rand();
        $total = 0;
        $data = DB::table('keranjang')->where('id_customer',Session::get('id_customer'))->get();
        foreach ($data as $krj){
            $barang = DB::table('barang')->where('id',$krj->id_barang)->get();
            foreach ($barang as $brg ){
                $total += ($krj->jumlah * $brg->harga);
                DB::table('detail_checkout')->insert([
                    'id_checkout' => $id_check,
                    'id_barang' => $krj->id_barang,
                    'jumlah' => $krj->jumlah
                ]);
            }
        }
        DB::table('checkout')->insert([
            'id_checkout' => $id_check,
            'id_customer' => Session::get('id_customer'),
            'total' => $total
        ]);
        return redirect('/checkout_list');
    }

    public function checkout_list(){
        $checkout = DB::table('check_out')->get();
        return view('checkout',['checkout' => $checkout]);

    }

    public function confirm(){
        return view('confirm');
    }

    public function confirm_simpan(Request $request){
        $this->validate($request,[
            'file' => 'required|max:2048'
        ]);
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'bukti_bayar';
        if($file->move($tujuan_upload,$nama_file)){
            DB::table('konfirmasi')->insert([
                'id_customer' => Session::get('id_customer'),
                'id_checkout' => $request->id_token,
                'bukti' => $nama_file
            ]);
            return redirect('/confirm');
        }
    }
}
