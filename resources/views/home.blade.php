 @extends('layout/main')


 @section('title', 'home')

 @section('container')
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <!-- <link rel="stylesheet" href="gallery-grid.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    


 <style type="text/css">
 	body {
    /*background-image: linear-gradient(to top, #ecedee 0%, #eceeef 75%, #e7e8e9 100%);*/
    /*min-height: 100vh;*/
    font: normal 16px sans-serif;
    /*padding: 60px 0;*/
}

.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    max-width: 800px;
    margin: 25px auto;
    color: #888;
    font-size: 18px;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}


.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}

.tz-gallery img {
    border-radius: 4px;
}

.baguetteBox-button {
    background-color: transparent !important;
}


@media(max-width: 768px) {
    body {
        padding: 0;
    }

    .container.gallery-container {
        border-radius: 0;
    }
}



 </style>

 <div class="jumbotron " style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/paralax.png');background-size: cover;height: 600px;mix-blend-mode: darken;color: white; background-attachment: fixed;">
		<div class="container " style="padding-top: 150px;">
			<h1 class="display-4">Covid Pedia</h1>
			  <p class="lead">Cari Tempat Penanganan covid-19 yang anda inginkan</p>
			  <hr class="my-4">
			  <p>cari Sekarang !!</p>
			  <a class="btn btn-primary btn-lg" href="/rsud" role="button">Learn more</a>
		</div>
	</div>
 
 <div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="mt-3" style="
									text-align: center;
									color: #333333;">
			Direktori yang menyediakan tempat Rapidtest <br>di beberapa kota sulawesi selatan</h1>
		</div>	
	</div>
</div>

<div class="container mt-5">
	<div class="row">
		<div class="col-5 offset-1">
			Rapid test COVID-19 adalah pemeriksaan dengan menguji sampel darah. Sampel darah itu digunakan untuk mendeteksi imunoglobulin, yaitu antibodi yang terbentuk apabila tubuh mengalami infeksi. Dengan rapid test, pasien tahap awal infeksi COVID-19 dapat bisa diidentifikasi lebih cepat.
		</div>
		<div class="col-5">
			Sedangkan PCR test adalah jenis pemeriksaan yang menggunakan sampel usapan lendir dari hidung atau tenggorokan. Lokasi ini dipilih karena menjadi tempat virus bereplikasi. Virus yang aktif memiliki material genetika yang bisa berupa DNA maupun RNA.
		</div>
	</div>
</div>


<div class="container mb-5 ">
	<div class="row">
		<div class="col-12">
			<hr class="my-5">
			<h1 class="mt-3" style="
									text-align: center;
									color: #333333;">
			PortFolio</h1>
		</div>	
	</div>
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/polio1.jpg">
                    <img src="/polio1.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/polio2.jpg">
                    <img src="/polio2.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="/polio3.jpg">
                    <img src="/polio3.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/polio4.jpg">
                    <img src="/polio4.jpg" alt="Coast">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/polio5.jpg">
                    <img src="/polio5.jpg" alt="Rails">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/polio6.jpg">
                    <img src="/polio6.jpg" alt="Traffic">
                </a>
            </div>
        </div>

    </div>
	

    

</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-4 offset-4">
			<form>
			<a class="nav-link active btn btn-dark" href="/rsud">Selengkapnya >></a>
			</form>
		</div>
	</div>
</div>	



									



<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

@endsection
    

  