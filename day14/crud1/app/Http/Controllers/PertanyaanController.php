<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index(){
        $list_pertanyaan = Pertanyaan::all();
        return view('pertanyaan',['list_pertanyaan'=>$list_pertanyaan]);
    }

    public function create(){
        return view('pertanyaan_tambah');
    }

    public function store(Request $request){
        //validation skipped
        $judul = $request->judul;
        $isi = $request->isi;

        $pertanyaan = new Pertanyaan;
        $pertanyaan->judul = $judul;
        $pertanyaan->isi = $isi;
        $pertanyaan->save();
        return redirect()->route('pertanyaan_index');
    }    

    public function detail($id){
        $pertanyaan = Pertanyaan::where('id',$id)->first();
        if($pertanyaan == NULL){
            abort(404);
        }
        return view('pertanyaan_detail',['pertanyaan'=>$pertanyaan]);
    }

    public function edit($id){
        $pertanyaan = Pertanyaan::where('id',$id)->first();
        return view('pertanyaan_edit',['pertanyaan'=>$pertanyaan]);
    }

    public function editProcess(Request $request){
        $judul = $request->judul;
        $isi = $request->isi;
        $id = $request->id;

        $pertanyaan = Pertanyaan::find($id);
        
        $pertanyaan->judul =  $judul;
        $pertanyaan->isi = $isi;
        $pertanyaan->save();
        return redirect()->route('pertanyaan_index');
    }

    public function delete($id){
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect()->route('pertanyaan_index');
    }
}
