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
                <h3 class="card-title">DataTable with minimal features & hover style </h3>
                <a href="/input" style="float: right;"><img src="/bootstrap-icons/file-earmark-plus-fill.svg" alt="" width="32" height="32" title="Bootstrap"></a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>NAMA RSUD</th>
                      <th>ALAMAT RSUD</th>
                      <th>NO TELEPHONE</th>
                      <th>JADWAL BUKA</th>
                      <th>AKSI</th>
                  </tr>
                  </thead>
                  @foreach($dash_rsud as $rsud)
                  <tbody>
                  <tr>
                      <td>{{$rsud->nama_rsud}}</td>
                      <td>{{$rsud->alamat}}</td>
                      <td>{{$rsud->no_telp}}</td>
                      <td>{{$rsud->jadwal_buka}}</td>
                      <td>
                        <a type="button" href="/rsud/{{$rsud->id}}/edit" class="btn btn-primary btn-sm">
                         <img src="/bootstrap-icons/pencil-square.svg">
                        </a>
                        <a type="button" href="/rsud/{{$rsud->id}}/delete" class="btn btn-warning btn-sm">
                          <img src="/bootstrap-icons/trash.svg">
                        </a>
                        <a type="button" href="/rsud/{{$rsud->id}}/profile" class="btn btn-success btn-sm">
                          <img src="/bootstrap-icons/eye.svg">
                        </a>
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

