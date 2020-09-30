 @extends('layout.master')

 <!-- @section('title', 'directori') -->

 @section('container')

 


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
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Our Services</span>
            <h2 class="heading"><strong class="text-primary">Health Services</strong> We Provided</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="service-v1 text-center">
              <span class="flaticon-stethoscope"></span>
              <h3>Check Up</h3>
              <p>Rp. 50.000.00 s/d Rp. 200.000.00</p>
            </a>
          </div>
          
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="service-v1 text-center">
              <span class="flaticon-sphygmomanometer"></span>
              <h3>Swab Test</h3>
              <p>Rp. 800.000.00 s/d Rp. 1000.000.00</p>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="service-v1 text-center">
              <span class="flaticon-thermometer"></span>
              <h3>Rapid Test</h3>
              <p>Rp. 100.000.00 s/d Rp. 300.000.00</p>
            </a>
          </div>
        </div>
      </div>
    </div>



    <!-- Call to Action Well -->
    <div class="card text-white bg-primary my-5 py-4 text-center ">
      <div class="card-body text-light">
        <table class="table">
          <tbody>
            <tr style="text-align: left;">
              <th style="color: white;" scope="row">Alamat </th>
              <td>:</td>
              <td style="color: white;">{{$rsud->alamat}}</td>
              <!-- <td>@mdo</td> -->
            </tr>
            <tr style="text-align: left;">
              <th style="color: white;" scope="row">No Telp </th>
              <td>:</td>
              <td style="color: white;">{{$rsud->no_telp}}</td>
              <!-- <td>@fat</td> -->
            </tr >
            <tr style="text-align: left;">
              <th style="color: white;" scope="row">Jadwal Buka </th>
              <td>:</td>
              <td style="color: white;">{{$rsud->jadwal_buka}}</td>
              <!-- <td>@twitter</td> -->
            </tr>
          </tbody>
        </table>
        
      </div>
    </div>
 </div>


 @endsection