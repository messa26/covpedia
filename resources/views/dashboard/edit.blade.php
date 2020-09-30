@extends('dashboard/master')

 @section('title', 'Edit client')

@section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

<!-- <div class="container "> -->
	<div class="row">
		<div class="col-12 ">
			<form class="form-auth-small mt-5" action="/rsud/{{$rsud_edit->id}}/update" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
			  <div class="form-group">
			  	<label for="sigin-Nama RSUD" class="control-label sr-only">Nama RSUD</label>
			  	<input type="text" name="nama_rsud" class="form-control" id="sigin-Nama RSUD" value="{{$rsud_edit->nama_rsud}}" placeholder="Nama RSUD">
			  </div>
			  <div class="form-group">
			  	<label for="sigin-alamat" class="control-label sr-only">alamat</label>
			  	<input type="text" name="alamat" class="form-control" id="sigin-alamat" value="{{$rsud_edit->alamat}}" placeholder="alamat">
			  </div>
			   <div class="form-group">
			  	<label for="sigin-No Telp" class="control-label sr-only">No Telp</label>
			  	<input type="text" name="no_telp" class="form-control" id="sigin-No Telp" value="{{$rsud_edit->no_telp}}" placeholder="No Telp">
			  </div>
			   <div class="form-group">
			  	<label for="sigin-Jadwal Buka" class="control-label sr-only">Jadwal Buka</label>
			  	<input type="text" name="jadwal_buka" class="form-control" id="sigin-Jadwal Buka" value="{{$rsud_edit->jadwal_buka}}" placeholder="Jadwal Buka">
			  </div>
			  <div class="form-group">
			  	<label for="sigin-avatar" class="control-label sr-only">avatar</label>
			  	<input class="btn btn-dark" type="file" name="avatar" class="form-control" id="sigin-avatar" value="{{$rsud_edit->jadwal_avatar}}" placeholder="avatar">
			  </div>
			   <div class="form-group clearfix"></div>
			   <button type="submit" class="btn btn-success btn-lg btn-block text-center">Update</button>
			</form>
		</div>
	</div>
<!-- </div> -->
</div>
</section>
</div>
@endsection