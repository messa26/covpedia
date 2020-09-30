<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>CovPedia - Admin</title>

    <link rel="icon"  href="/logo.jpg">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
   <nav class="navbar navbar-dark bg-dark" >
  <a class="navbar-brand" style="padding-left: 20px ; color: white;">CovPedia</a>
  
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-sm-4 col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" >
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column" >

          <li class="nav-item">
            <a href=""><img src="/me.png" style="width: 50px; border-radius: 50px; margin-left: 20px;"></a>
            <h5 style="color: white; margin-left: 20px; margin-top: 10px;">{{auth()->user()->name}}</h5>
          </li>
          <li class="nav-item bg-light" style="color: black; border-radius: 5px;">
            <a class="nav-link active" href="/dashboard" style="color: black">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="/input" style="color: white;">
              <span data-feather="file"></span>
              Input Data RSUD
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/client" style="color: white">
              <span data-feather="shopping-cart"></span>
              Data Client
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">
              <span data-feather="users"></span>
              #
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">
              <span data-feather="bar-chart-2"></span>
              #
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">
              <span data-feather="layers"></span>
              #
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('title')</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <a href="/logout" type="button" class="btn btn-sm btn-outline-secondary">logout</a>
        </div>
      </div>

      

      @yield('container')


    </main>
  </div>
</div>
      
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>