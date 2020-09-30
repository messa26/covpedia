 @extends('layout.master')


 <!-- @section('title', 'directori') -->

 @section('container')
    <!-- MAIN -->



    <div class="slide-item overlay" style="background-image: url('/images/hero_1.jpg'); background-attachment: fixed;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1 class="heading mb-5">Cari Tempat Rapid Test Yang Anda Inginkan Disini</h1>
            <p><form action="/layout/direktori" method="GET">
		      <input name="cari" class="form-control " type="search"  placeholder="Search" aria-label="Search" style="opacity: 0.8; border-radius: 20px;"> <button type="submit" class="btn btn-primary btn-sm" style="opacity: 0;"></button></p>
          </div>
        </div>
      </div>  
    </div>

<!-- <div class="container mt-3">
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
						      <a href="/rsud/{{$rsud->id}}/detail" type="button" class="btn btn-primary">Detail >></a>
						    </div>
					    </div>
					  </div>
				</div>
			</div>
		</div>
    @endforeach
</div> -->

    



    <div class="site-section">
      <div class="container">
      	@foreach($data_rsud as $rsud)
        <div class="row">
          <div class="col-lg-6">
            <p><a href="/direktori/{{$rsud->id}}/detail"><img src="/direktori/{{$rsud->avatar}}" class="img-fluid"></a></p>
          </div>
          <div class="col-lg-5 ml-auto">
            <!-- <span class="subheading">About Us</span> -->
            <h2 class="heading"><strong class="text-primary">{{$rsud->nama_rsud}}</strong></h2>
             <p class="card-text">alamat : {{$rsud->alamat}} <br>
						        					no tlp  : {{$rsud->no_telp}} <br>
						        					jadwal buka : {{$rsud->jadwal_buka}}<br>
						        					</p>
            <p><a href="#" class="btn btn-primary">Contact Us</a> <a href="/direktori/{{$rsud->id}}/detail" class="btn btn-secondary">See Detail</a></p>
          </div>
        </div>
        @endforeach
      </div>
    </div>

   <!--  <div class="site-section bg-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mr-auto">
            <span class="subheading">Our Mission</span>
            <h2 class="heading">We Provide <strong class="text-primary">High Solutions</strong> for Your Health</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, neque, dolorem. Iusto dolore omnis ex vero consequatur et deserunt officia incidunt.</p>
            
          </div>
          <div class="col-lg-6">
            <figure class="video-image">
              <a href="https://www.youtube.com/watch?v=vSndrIBTDUw" data-fancybox class="btn-play"><span class="icon-play"></span></a>
              <img src="/images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
        </div>
      </div>
    </div> -->

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
              <h3>General Surgery</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex!</p>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="service-v1 text-center">
              <span class="flaticon-telephone"></span>
              <h3>Outpatient Services</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex!</p>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="service-v1 text-center">
              <span class="flaticon-sphygmomanometer"></span>
              <h3>Respiratory Therapy</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex!</p>
            </a>
          </div>


          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="service-v1 text-center">
              <span class="flaticon-dna"></span>
              <h3>Cardiac Clinic</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex!</p>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="service-v1 text-center">
              <span class="flaticon-thermometer"></span>
              <h3>Laryngological Service</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex!</p>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="service-v1 text-center">
              <span class="flaticon-syringe"></span>
              <h3>Respiratory Therapy</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex!</p>
            </a>
          </div>

        </div>
      </div>
    </div>
    

    <!-- <div class="site-section bg-light title-wrap-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Our Team</span>
            <h2 class="heading"><strong class="text-primary">Our Dedicated</strong> Doctors</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section overlap-section">
      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="team">
              <img src="/images/person_1.jpg" alt="Image" class="img-fluid">
              <div class="team-inner">
                <h3>Dr. Jade Guzman</h3>
                <span>Cardiologist</span>
              </div>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="team">
              <img src="/images/person_2.jpg" alt="Image" class="img-fluid">
              <div class="team-inner">
                <h3>Dr. Hannah Ford</h3>
                <span>Dermatologist</span>
              </div>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="team">
              <img src="/images/person_3.jpg" alt="Image" class="img-fluid">
              <div class="team-inner">
                <h3>Dr. James Wilson</h3>
                <span>Surgeon</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center mb-5">
            <span class="subheading">What Client Says</span>
            <h2 class="heading"><strong class="text-primary">Happy</strong> Patients</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial text-center">
              <img src="/images/patient_1.jpg" alt="Image" class="img-fluid">
              <blockquote>
                <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                <cite class="author">Elizabeth Anderson, Hostpital Patients</cite>
              </blockquote>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial text-center">
              <img src="/images/person_2.jpg" alt="Image" class="img-fluid">
              <blockquote>
                <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                <cite class="author">Elizabeth Anderson, Hostpital Patients</cite>
              </blockquote>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial text-center">
              <img src="/images/person_3.jpg" alt="Image" class="img-fluid">
              <blockquote>
                <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                <cite class="author">Elizabeth Anderson, Hostpital Patients</cite>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mx-auto text-center mb-5">
            <span class="subheading">Latest Blog</span>
            <h2 class="heading"><strong class="text-primary">News</strong> & Updates</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="blog-entry">
              <a href="#" class="d-block">
                <img src="/images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta d-flex justify-content-center">
                <span>
                  <span class="icon-calendar"></span>
                  <span>23 Jul</span>
                </span>
                <span>
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </span>
                <span>
                  <span class="icon-comment"></span>
                  <span>2 Comments</span>
                </span>
              </div>
              <h2><a href="#">We're Providing the Quality Care</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-entry">
              <a href="#" class="d-block">
                <img src="/images/img_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta d-flex justify-content-center">
                <span>
                  <span class="icon-calendar"></span>
                  <span>23 Jul</span>
                </span>
                <span>
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </span>
                <span>
                  <span class="icon-comment"></span>
                  <span>2 Comments</span>
                </span>
              </div>
              <h2><a href="#">We're Providing the Quality Care</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-entry">
              <a href="#" class="d-block">
                <img src="/images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta d-flex justify-content-center">
                <span>
                  <span class="icon-calendar"></span>
                  <span>23 Jul</span>
                </span>
                <span>
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </span>
                <span>
                  <span class="icon-comment"></span>
                  <span>2 Comments</span>
                </span>
              </div>
              <h2><a href="#">We're Providing the Quality Care</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

@endsection


    