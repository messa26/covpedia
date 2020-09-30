<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsud;
use App\Client;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        // $jumlah_rsud = Rsud::all()->count();
        // return view('dashboard.index1')->with('jumlah_rsud', $jumlah_rsud);
        $data_covid = \App\Covid::all();
        
        return view('dashboard.index1', ['data_covid' => $data_covid]);
    }

    public function profile()
    {
    	
    	return view('/profile');
    }

    public function datarsud(Request $request)
    {
        if ($request->has('cari')) {
            $dash_rsud = \App\Rsud::where('nama_rsud','LIKE','%'.$request->cari.'%')->get(); 
        }else{
           $dash_rsud = \App\Rsud::all();
        }
        return view('/datarsud', ['dash_rsud' => $dash_rsud]);
    }

    public function input()
    {
        
        return view('/input');
    }
    public function index1()
    {

        $data_covid = \App\Covid::all();
        
        return view('dashboard.index1', ['data_covid' => $data_covid]);
        
        
    }
    public function index2()
    {
        
        return view('dashboard.index2');
    }
    public function index3()
    {
        
        return view('/dashboard.index3');
    }

    // public function client(Request $request)
    // {
    //     # code...
    //     $jumlah_client = Client::all()->count();
    //     return view('dashboard.index1')->with('jumlah_client', $jumlah_client);
    // }
}
