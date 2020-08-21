<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    //
    public function index(){
        $data= \App\Ujian::all();
        return view('ujian.index',['data'=>$data]);
    }

    public function create(Request $request){
        // return $request->all();
        \App\Ujian::create($request->all());
        return redirect('/ujian')->with('success','Data berhasil di simpan');
    }
}
