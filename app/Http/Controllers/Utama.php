<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Utama extends Controller
{
    public function index(){

        $databarang = DB::table('barang')->get();
        return view('utama',['databarang' => $databarang]);
    }

    public function front(){

        $databarang = DB::table('barang')->get();
        return view('front',['databarang' => $databarang]);
    }

}
