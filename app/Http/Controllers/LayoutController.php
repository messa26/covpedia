<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function direktori(Request $request)
    {
    	if ($request->has('cari')) {
            $data_rsud = \App\Rsud::where('nama_rsud','LIKE','%'.$request->cari.'%')->get(); 
        }else{
    		$data_rsud = \App\Rsud::all();
        }
    	return view('layout.direktori', ['data_rsud' => $data_rsud]);
    	
    }

    public function about(Request $request)
    {
    	return view('layout.about');
    }

    public function detail($id)
    {
        $rsud = \App\Rsud::find($id);
        return view('layout.detail', ['rsud' => $rsud]);


    }

    public function contact(Request $request)
    {
    	$data_covid = \App\Covid::all();
        
        return view('layout.contact', ['data_covid' => $data_covid]);
    }

    public function home(Request $request)
    {
    	$data_covid = \App\Covid::all();
        
        return view('layout.home', ['data_covid' => $data_covid]);
    }

    public function covid($id)
    {
        $covid_edit = \App\Covid::find($id);
        return view('dashboard.editcovid', ['covid_edit' => $covid_edit]);
    }

    public function updatecovid(Request $request,$id)
    {
    	// dd($request->all());
    	$rsud_edit = \App\Covid::find($id);
    	$rsud_edit->update($request->all());
    	
    	return redirect('/dashboard')->with('sukses', 'data berhasil di edit');
    }
}
