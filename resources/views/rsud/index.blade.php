 @extends('layout/main')


 @section('title', 'directori')

 @section('container')




 <div class="container mt-5">
	<div class="row">
		<div class="col-12">
			<h1 class="mt-3 text-center">Direktori Covid Pedia Untuk <br> Rapid Test Covid-19</h1>
		</div>	
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<hr class="my-3">
		</div>
	</div>
	<div class="row">
		<div class="col-md-11">
			<form class="my-2 my-lg-0" action="/rsud" method="GET">
		      <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari Tempat Rapid Test Yang Anda Inginkan Disini" aria-label="Search" style="">
		     
		</div>
		<div class="col-md-1">
			 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		</div>
	</div>
</div>
<div class="container mt-3">
  	@foreach($data_rsud as $rsud)
		<div class="row">
			<div class="col-12">
				<div class="card mb-3" style="max-width: 1150px;">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <a href="/rsud/{{$rsud->id}}/detail"><img src="/direktori/{{$rsud->avatar}}" class="card-img" alt="..."></a>
					    </div>
					    <div class="col-md-8">
						    <div class="card-body">
						        <a href="/rsud/{{$rsud->id}}/detail"><h3 class="card-title">{{$rsud->nama_rsud}}</h3></a>
						        <p class="card-text">alamat : {{$rsud->alamat}} <br>
						        					no tlp  : {{$rsud->no_telp}} <br>
						        					jadwal buka : {{$rsud->jadwal_buka}}<br>
						        					</p>
						      <p class="card-text"><small class="text-muted">Last updated 1 mounth ago</small></p>
						        <!-- Button trigger modal -->
						      <a href="/rsud/{{$rsud->id}}/detail" type="button" class="btn btn-primary">Detail >></a>
						    </div>
					    </div>
					  </div>
				</div>
			</div>
		</div>
    @endforeach
</div>	
@endsection
    

  