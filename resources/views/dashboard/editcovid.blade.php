@extends('dashboard/master')

 @section('title', 'Dashboard')

@section('container')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

		<!-- <div class="container text-center"> -->
			<div class="row">
				<div class="col-12 ">
					<form class="form-auth-small mt-5" action="/covid/{{$covid_edit->id}}/update" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
					  <div class="form-group">
					  	kasus :
					  	<label for="sigin-Nama covid" class="control-label sr-only">kasus</label>
					  	<input type="text" name="kasus" class="form-control" id="" value="{{$covid_edit->kasus}}" placeholder="">
					  </div>
					  <div class="form-group">
					  	sembuh:
					  	<label for="sigin-email" class="control-label sr-only">sembuh</label>
					  	<input type="text" name="sembuh" class="form-control" id="" value="{{$covid_edit->sembuh}}" placeholder="">
					  </div>
					   <div class="form-group">
					   	meninggal
					  	<label for="sigin-No Telp" class="control-label sr-only">meninggal</label>
					  	<input type="text" name="meninggal" class="form-control" id="" value="{{$covid_edit->meninggal}}" placeholder="">
					  </div>
					  <div class="form-group">
					  	date update:
					  	<label for="sigin-No Telp" class="control-label sr-only">tanggal update</label>
					  	<input type="date" name="tanggal_update" class="form-control" id="" value="{{$covid_edit->tanggal_update}}" placeholder="">
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