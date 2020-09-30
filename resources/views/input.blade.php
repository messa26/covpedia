@extends('dashboard/master')

 @section('title', 'Data Client')

@section('container')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Content Wrapper. Contains page content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-auth-small mt-5" enctype="multipart/form-data" action="/rsud/create" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			  	<label for="sigin-Nama RSUD" class="control-label sr-only">Nama RSUD</label>
			  	<input type="text" name="nama_rsud" class="form-control" id="sigin-Nama RSUD" value="" placeholder="Nama RSUD">
			  </div>
			  <div class="form-group">
			  	<label for="sigin-alamat" class="control-label sr-only">alamat</label>
			  	<input type="text" name="alamat" class="form-control" id="sigin-alamat" value="" placeholder="alamat">
			  </div>
			   <div class="form-group">
			  	<label for="sigin-No Telp" class="control-label sr-only">No Telp</label>
			  	<input type="text" name="no_telp" class="form-control" id="sigin-No Telp" value="" placeholder="No Telp">
			  </div>
			   <div class="form-group">
			  	<label for="sigin-Jadwal Buka" class="control-label sr-only">Jadwal Buka</label>
			  	<input type="text" name="jadwal_buka" class="form-control" id="sigin-Jadwal Buka" value="" placeholder="Jadwal Buka">
			  </div>
			  <div class="form-group">
			  	<label for="sigin-about" class="control-label sr-only">about</label>
			  	<input  type="text" name="about" class="form-control" id="sigin-about"  placeholder="about">
			  </div>
			  <div class="custom-file mb-3">
			    <input name="avatar" type="file" class="custom-file-input" id="validatedCustomFile" required>
			    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
			    <div class="invalid-feedback">Example invalid custom file feedback</div>
			  </div>
			   <div class="form-group clearfix"></div>
			   <button type="submit" class="btn btn-success btn-lg btn-block text-center">Submit</button>
			</form>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>

 @endsection