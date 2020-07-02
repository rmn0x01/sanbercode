<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;

class JawabanController extends Controller
{
    public function index(){
        $list_jawaban = Jawaban::all();
        return view('jawaban',['list_jawaban'=>$list_jawaban]);
    }
    
    public function store(Request $request,$id){
        $isi = $request->isi;
        $pertanyaan_id = $id;

        $jawaban = new Jawaban;
        $jawaban->isi = $isi;
        $jawaban->pertanyaan_id = $pertanyaan_id;
        $jawaban->save();
        return redirect()->route('jawaban_index');
    }

    public function detail($id){
        $list_jawaban = Jawaban::where('pertanyaan_id',$id)->get();
        return view('jawaban_detail',['list_jawaban'=>$list_jawaban,'q_id'=>$id]);
    }
}
