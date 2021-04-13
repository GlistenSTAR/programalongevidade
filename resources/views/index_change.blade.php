<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/layout_main.css"/>
@extends('layouts.layout')
@section('content')
  <div class="main_page">
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner" style="margin-top:22px" align="center">
        <div class="carousel-item active">
          <img src="images/home_longevidade_Descontinuados_18042018-v2.jpg?crc=148256787" >
        </div>
        <div class="carousel-item">
          <img src="images/home_longevidade_n02_v05.jpg?crc=278936673">
        </div>
        <div class="carousel-item">
          <img src="images/home_longevidade_n03_v05.jpg?crc=4065725384">
        </div>
      </div>
      <div class="carousel-indicators">
        <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
        <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></li>
        <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></li>
      </div>
    </div>
  </div>
@endsection
