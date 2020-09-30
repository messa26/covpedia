<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- <title>Small Business - Start Bootstrap Template</title> -->

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">
  <link rel="icon"  href="/logo.jpg">

</head>

<body>

 @extends('layout/main')


 @section('title', 'directori')

 @section('container')

 

  <!-- Page Content -->
  <div class="container">
  	
    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0 mt-5" src="/direktori/{{$rsud->avatar}}" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">{{$rsud->nama_rsud}}</h1>
        <p>{{$rsud->about}}</p>
        <a class="btn btn-primary" href="https://www.google.co.id/maps/search/rumah+sakit+dan+klinik+di+makasar/@-5.1353022,119.3938323,12z/data=!3m1!4b1">lihat lokasi >></a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <table class="table">
          <tbody>
            <tr style="text-align: left;">
              <th scope="row">Alamat </th>
              <td>:</td>
              <td>{{$rsud->alamat}}</td>
              <!-- <td>@mdo</td> -->
            </tr>
            <tr style="text-align: left;">
              <th scope="row">No Telp </th>
              <td>:</td>
              <td>{{$rsud->no_telp}}</td>
              <!-- <td>@fat</td> -->
            </tr >
            <tr style="text-align: left;">
              <th scope="row">Jadwal Buka </th>
              <td>:</td>
              <td>{{$rsud->jadwal_buka}}</td>
              <!-- <td>@twitter</td> -->
            </tr>
          </tbody>
        </table>
        
      </div>
    </div>

    
   

  </div>
  <!-- /.container -->

  <!-- Footer -->
 @endsection

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
