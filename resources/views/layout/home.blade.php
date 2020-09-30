 @extends('layout/master')


 <!-- @section('title', 'directori') -->

 @section('container')
    <!-- MAIN -->



    <div class="slide-item overlay" style="background-image: url('images/hero_1.jpg'); background-attachment: fixed;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1 class="heading mb-5">Direktori Yang Menyediakan Tempat Rapid Test Covid-19</h1>
            <p><a href="/layout/direktori" class="btn btn-primary">Get started</a></p>
          </div>
        </div>
      </div>  
    </div>

    <div class="container quick-contact">
      <div class="row">
        <div class="col-lg-4">
          <a href="https://api.whatsapp.com/send?phone=628793824359" class="link-lg d-flex align-items-center">
            <span class="icon-phone"></span>
            <div>
              <span>Give us a call</span>
              <strong>0857 9382 4359</strong>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="#" class="link-lg d-flex align-items-center">
            <span class="icon-envelope"></span>
            <div>
              <span>Send us a message</span>
              <strong>covpedia@gmail.com</strong>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="https://www.google.co.id/maps/place/Pondok+Pesantren+Al+Ittihad+Cianjur/@-6.8016125,107.1714844,720m/data=!3m1!1e3!4m5!3m4!1s0x2e68536ad0d9d7a3:0xbd528f81cf2abe7b!8m2!3d-6.8019021!4d107.1726618" class="link-lg d-flex align-items-center">
            <span class="icon-room"></span>
            <div>
              <span>Visit us</span>
              <strong>SMK AL-Ittihad</strong>
            </div>
          </a>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p><img src="/images/about.png" alt="Image" class="img-fluid"></p>
          </div>
          <div class="col-lg-5 ml-auto">
            <span class="subheading">About Us</span>
            <h2 class="heading"><strong class="text-primary">We Are Happy To Serve You!</strong></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, neque, dolorem. Iusto dolore omnis ex vero consequatur et deserunt officia incidunt at illum corrupti adipisci consectetur, veniam veritatis? Neque, cupiditate.</p>
            <p><a href="#" class="btn btn-primary">Contact Us</a> <a href="/layout/about" class="btn btn-secondary">Read More</a></p>
          </div>
        </div>
      

     
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mx-auto text-center mb-5">
            <span class="subheading">HighLight</span>
            <h2 class="heading"><strong class="text-primary">Direktori</strong>Covid-19</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="blog-entry">
              <a href="/layout/direktori?cari=hermina" class="d-block">
                <img src="/direktori/hermina.png" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta d-flex justify-content-center">
                
              </div>
              <h2><a href="/layout/direktori?cari=hermina">Rumah Sakit Hermina Makassar</a></h2>
              <p>No.7, Jl. Toddopuli Raya Timur, Borong, Kec. Manggala, Kota Makassar, Sulawesi Selatan</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-entry">
              <a href="/layout/direktori?cari=wisata" class="d-block">
                <img src="/direktori/wisata.png" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta d-flex justify-content-center">
                
              </div>
              <h2><a href="/layout/direktori?cari=wisata">RS Wisata Universitas Indonesia Timur</a></h2>
              <p>Jl. Abd. Kadir No.70, Balang Baru, Kec. Tamalate, Kota Makassar, Sulawesi Selatan</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-entry">
              <a href="/layout/direktori?cari=stella" class="d-block">
                <img src="/direktori/stella.png" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta d-flex justify-content-center">
                
              </div>
              <h2><a href="/layout/direktori?cari=stella">RS Stella Maris Makassar</a></h2>
              <p>273, Jl. Somba OPU, Losari, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan</p>
            </div>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-4 offset-4">
          <form>
          <a class="nav-link active btn btn-primary" href="/layout/direktori">See More</a>
          </form>
        </div>
      </div>
    </div>
    </div>

 @foreach($data_covid as $covid)
 <div class="site-section bg-primary count-numbers">
       <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Data Kasus di Indonesia</span>
            <h2 class="heading"><strong class="text-light">Covid-19</strong>Update</h2>
          </div>
      <div class="container mt-5">
        <div class="row">
         <div class="col-4">
          <div class="counter-wrap text-center">
            <strong class="counter d-block"><span class="number" data-number="{{$covid->kasus}}">{{$covid->kasus}}</span></strong>
            <span>kasus</span>
          </div>
        </div>
        <div class="col-4">
          <div class="counter-wrap text-center">
            <strong class="counter d-block"><span class="number" data-number="{{$covid->sembuh}}">{{$covid->sembuh}}</span></strong>
            <span>sembuh</span>
          </div>
        </div>
        <div class="col-4">
          <div class="counter-wrap text-center">
            <strong class="counter d-block"><span class="number" data-number="{{$covid->meninggal}}">{{$covid->meninggal}}</span></strong>
            <span>meninggal</span>
          </div>
        </div>
       
      </div>
    </div>
    <p class="text-center mt-5" style="color: white; ">Terakhir di Update Pada Tanggal {{$covid->tanggal_update}}</p>
  </div>
@endforeach

@endsection


    