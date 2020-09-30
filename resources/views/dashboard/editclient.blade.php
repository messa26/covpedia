@extends('dashboard/master')

 @section('title', 'Edit Data')

@section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

		<!-- <div class="container text-center"> -->
			<div class="row">
				<div class="col-12 ">
					<form class="form-auth-small mt-5" action="/client/{{$client_edit->id}}/update" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
					  <div class="form-group">
					  	<label for="sigin-Nama client" class="control-label sr-only">name</label>
					  	<input type="text" name="name" class="form-control" id="sigin-Nama client" value="{{$client_edit->name}}" placeholder="Nama client">
					  </div>
					  <div class="form-group">
					  	<label for="sigin-email" class="control-label sr-only">email</label>
					  	<input type="email" name="email" class="form-control" id="sigin-email" value="{{$client_edit->email}}" placeholder="email">
					  </div>
					   <div class="form-group">
					  	<label for="sigin-No Telp" class="control-label sr-only">password</label>
					  	<input type="text" name="password" class="form-control" id="sigin-No Telp" value="{{$client_edit->password}}" placeholder="No Telp">
					  </div>
					  
					   <div class="form-group clearfix"></div>
					   <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
					</form>
				</div>
			</div>
		<!-- </div> -->
	</div>
</section>
</div>

@endsection