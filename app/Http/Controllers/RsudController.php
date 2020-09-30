<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RsudController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->has('cari')) {
            $data_rsud = \App\Rsud::where('nama_rsud','LIKE','%'.$request->cari.'%')->get(); 
        }else{
    		$data_rsud = \App\Rsud::all();
        }
    	return view('rsud.index', ['data_rsud' => $data_rsud]);
    }

    public function create(Request $request)
    {
        // dd($request);
        $name = time().$request->avatar->getClientOriginalName();
        $request->avatar->storeAs('public',$name);
    	\App\Rsud::create([
            'nama_rsud'     => request('nama_rsud'),
            'alamat'        => request('alamat'),
            'no_telp'       => request('no_telp'),
            'about'         => request('about'),
            'jadwal_buka'   => request('jadwal_buka'),
            'avatar'        => $name,
        ]);
    	return redirect('/datarsud')->with('sukses', 'data berhasil di input');
    }

    public function edit($id)
    {
    	$rsud_edit = \App\Rsud::find($id);
    	return view('/edit', ['rsud_edit' => $rsud_edit]);
    }

    

    public function update(Request $request,$id)
    {
    	// dd($request->all());
    	$rsud_edit = \App\Rsud::find($id);
    	$rsud_edit->update($request->all());
    	if ($request->hasFile('avatar')) {
    		$request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
    		$rsud_edit->avatar = $request->file('avatar')->getClientOriginalName();
			$rsud_edit->save();
    	}
    	return redirect('/datarsud')->with('sukses', 'data berhasil di edit');
    }

    public function delete($id)
    {
    	$rsud_edit = \App\Rsud::find($id);
    	$rsud_edit->delete($rsud_edit);
    	return redirect('/datarsud')->with('sukses', 'data berhasil di hapus');
    }

    public function profile($id)
    {
    	$rsud = \App\Rsud::find($id);
    	return view('/profile', ['rsud' => $rsud]);
    }

    public function learn()
    {
        return view('about.index');
    }

    public function covid()
    {
        return view('/covid');
    }

    public function detail($id)
    {
        $rsud = \App\Rsud::find($id);
        return view('/detail', ['rsud' => $rsud]);
    }


}
