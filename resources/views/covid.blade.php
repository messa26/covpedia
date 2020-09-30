 @extends('layout/main')


 @section('title', 'directori')

 @section('container')
<style type="text/css">
	body{
		background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(/bg.png);
		background-repeat: no-repeat;
		background-size: cover;
		color: white;
	}
</style>
<body>
<div class="container" style="padding-top: 100px;">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center">Update Information Covid-19 <br> Sulawesi Selatan</h1>
			<hr class="my-3 mt-3">
		</div>
	</div>
</div>
 
<div class="container text-center " style="padding-top: 50px;">
	<div class="row">
		<div class="col-4">
			<img src="/corona.png" class="img-thumbnail rounded-circle" style="width: 250px;">
		</div>
		<div class="col-4">
				<img src="/PDP.png" class="img-thumbnail rounded-circle" style="width: 250px;">
			</div>
		<div class="col-4">
				<img src="/ODP.png" class="img-thumbnail rounded-circle" style="width: 250px;">
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<h1 class="mt-3">Positif Corona</h1>
		</div>
		<div class="col-4">
				<h1 class="mt-3">PDP Corona</h1>
			</div>
		<div class="col-4">
				<h1 class="mt-3">ODP Corona</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
						<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
			  Lihat Selengkapnya >>
			</button>

			<!-- Modal -->
			<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" style="color: black;">
			        <h1>Jumlah Posotif Corona <br> Di Daerah SulSel</h1>
			       <p>MAKASSAR, KOMPAS.com - Jumlah pasien yang terinfeksi Covid-19 di Sulawesi Selatan menjadi 82 kasus setelah mengalami penambahan 2 orang pada Minggu (5/4/2020) malam. <br>

					Kepala Dinas Kesehatan Sulawesi Selatan Ichsan Mustari mengatakan,  2 tambahan kasus baru pasien Covid-19 berada di Kota Makassar dari transmisi lokal. <br>
					Ichsan mengatakan, pasien positif virus corona paling banyak berada di Kota Makassar dengan 54 pasien. <br>Sementara itu, 13 lainnya berada di Kabupaten Gowa, Maros 7 pasien, Sidrap 3, Pinrang 2 pasien, serta Bulukumba, Luwu Timur, dan Soppeng masing-masing 1 orang. <br>

					"Yang positif ini kalau kita lihat di web Kemenkes itu 83 orang sementara data di kita 82. Karena ada satu pasien yang positif tidak berdomisili di Sulsel. Dia hanya dirawat di Makassar tapi (tracing) kontaknya ada di wilayahnya (di luar Sulsel)," kata Ichsan saat konferensi pers, Minggu malam. <br>

					Ichsan mengatakan, dari 82 kasus positif Covid-19 di Sulawesi Selatan, sudah ada 7 pasien yang meninggal dunia. <br>

					Beberapa pasien baru diketahui positif usai meninggal dunia karena hasil uji laboratoriumnya keluar setelah meninggal dunia. </p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
	<div class="col-4">
						<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop2">
			  Lihat Selengkapnya >>
			</button>

			<!-- Modal -->
			<div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" style="color: black;">
			        <h1>Jumlah PDP Corona <br> Di Daerah SulSel</h1>
			       <p>Sementara untuk pasien dalam pengawasan (PDP) ada 263 orang di mana 13 di antaranya meninggal dunia.</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
	<div class="col-4">
						<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop3">
			  Lihat Selengkapnya >>
			</button>

			<!-- Modal -->
			<div class="modal fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" style="color: black;">
			        <h1>Jumlah ODP Corona <br> Di Daerah SulSel</h1>
			       <p>Sementara itu, jumlah orang dalam pemantauan (ODP) di Sulawesi Selatan mengalami peningkatan yang sangat signifikan. Kini angka ODP Covid-19 mencapai angka 2.166 orang. <br>
			       "Jumlah ODP kita semakin bertambah. Sekali lagi itu tidak menunjukkan angka yang membuat kita panik. Itu lebih bagaimana teman-teman bergerak cepat dalam men-tracing kontak pasien Covid-19 melihat dan memantau ini. Pemantauan mereka itu selama 14 hari," ujar Ichsan.</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
	</div>
</div>
</body>
 
@endsection
    

  