@extends('dashboard/master')

 @section('title', 'Data Client')

@section('container')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     @if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
      @endif

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>name</th>
		              <th>email</th>
		              <th>password</th>
		              <th>aksi</th>
                  </tr>
                  </thead>
                  @foreach($data_client as $client)
                  <tbody>
                  <tr>
                      <td>{{$client->name}}</td>
		              <td>{{$client->email}}</td>
		              <td>{{$client->password}}</td>
		              
		              <td>
		                <!-- <a href="/client/{{$client->id}}/edit" class="btn btn-primary btn-sm">Edit</a> -->
		                <a href="/client/{{$client->id}}/delete" class="btn btn-warning btn-sm">Blokir User</a>
		                <!-- <a href="/client/{{$client->id}}/profile" class="btn btn-success btn-sm">Detail</a> -->
		              </td>
                  </tr>
                  </tbody>
                  @endforeach
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection