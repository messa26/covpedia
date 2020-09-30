@extends('dashboard/master')

@section('title', 'Dashboard')

@section('container')


      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
      @endif
      <h2>Directory Data</h2>
      <form class="form-inline mb-3" method="GET" action="/dashboard">
        <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search RSUD" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <td>NAMA RSUD</td>
              <td>ALAMAT RSUD</td>
              <td>NO TELEPHONE</td>
              <td>JADWAL BUKA</td>
              <td>AKSI</td>
      
            </tr>
            @foreach($dash_rsud as $rsud)
            <tr>
              <th>{{$rsud->nama_rsud}}</th>
              <th>{{$rsud->alamat}}</th>
              <th>{{$rsud->no_telp}}</th>
              <th>{{$rsud->jadwal_buka}}</th>
              <th>
                <a href="/rsud/{{$rsud->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                <a href="/rsud/{{$rsud->id}}/delete" class="btn btn-warning btn-sm">Delete</a>
                <a href="/rsud/{{$rsud->id}}/profile" class="btn btn-success btn-sm">Detail</a>
              </th>
              
            </tr>
          </thead>
          <tbody>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection