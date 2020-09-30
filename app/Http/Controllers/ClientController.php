<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    

     public function client(Request $request)
    {
        // $jumlah_client = Client::all()->count();
        // return view('dashboard.index1')->with('jumlah_client', $jumlah_client);
    	if ($request->has('cari')) {
            $data_client = \App\User::where('name','LIKE','%'.$request->cari.'%')->get(); 
        }else{
    		$data_client = \App\User::all();
        }
    	return view('/client', ['data_client' => $data_client]);
    }

    public function create(Request $request)
    {
    	//table user
    	$user = new \App\User;
    	$user->role = 'client';
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	// $user->remember_token = str_random(60);
    	$user->save();
    	//table client
    	$request->request->add(['user_id' => $user->id ]);
    	$client = \App\Client::create($request->all());

    	return redirect('/login')->with('sukses', 'berhasil register');
    }

    public function edit($id)
    {
    	$client_edit = \App\Client::find($id);
    	return view('dashboard/editclient', ['client_edit' => $client_edit]);
    }

    public function update(Request $request,$id)
    {
    	// dd($request->all());
    	$client_edit = \App\Client::find($id);
    	$client_edit->update($request->all());
   //  	if ($request->hasFile('avatar')) {
   //  		$request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
   //  		$client_edit->avatar = $request->file('avatar')->getClientOriginalName();
			// $client_edit->save();
    	// }
    	return redirect('/client')->with('sukses', 'data berhasil di edit');
    }

    public function delete($id)
    {
    	$client_edit = \App\User::find($id);
    	$client_edit->delete($client_edit);
    	return redirect('/client')->with('sukses', 'user telah di blokir');
    }

    public function profile($id)
    {
    	$client = \App\Client::find($id);
    	return view('/profile', ['client' => $client]);
    }

    public function home()
    {
    	return view('/home');
    }

    public function about()
    {
        return view('/about');
    }
    

 	// public function detail(Request $request)
  //   {
  //   	if ($request->has('cari')) {
  //           $data_client = \App\Client::where('name','LIKE','%'.$request->cari.'%')->get(); 
  //       }else{
  //   		$data_client = \App\Client::all();
  //       }
  //   	return view('/detail', ['data_client' => $data_client]);
  //   }
    
}
