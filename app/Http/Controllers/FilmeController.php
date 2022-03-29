<?php

namespace App\Http\Controllers;


use App\Models\filme;
use Illuminate\Http\Request;


class FilmeController extends Controller
{
    public function index(){
        $data = filme::all();
        return view('home', ['films' => $data]);
    }

    public function add(){
        return view('add_movie');
    }

    public function insert(Request $request)
    {
        $data = filme::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('movie-image/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('home')->with('success ',' Data Berhasi di Tambahkan. ');
    }

    public function show($id)
    {
        $film = filme::find($id);
        return view('detail_movie', ['films'=>$film]);
    }
    public function delete($id){
        $data = filme::find($id); 
        $data->delete();   

        return redirect()->route('home')->with('success ',' Data Berhasil Di Hapus . ');
    }

    public function tampilanData($id){
        $data = filme::find($id);
        // dd($data);

        return view('edit_movie', compact('data'));
    }

    public function Update(Request $request, $id){
        $data = filme::find($id); 
        $data->update($request->all()); 

        if($request->hasFile('image')){
            $request->file('image')->move('movie-image/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('home')->with('success ',' Data Berhasil Di Update . ');
    }
    
}
