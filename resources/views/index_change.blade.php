<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/layout_main.css"/>
@extends('layouts.layout')
@section('content')
  <div class="main_page">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators" >
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="images/home_longevidade_Descontinuados_18042018-v2.jpg?crc=148256787" >
        </div>

        <div class="item">
          <img src="images/home_longevidade_n02_v05.jpg?crc=278936673">
        </div>

        <div class="item">
          <img src="images/home_longevidade_n03_v05.jpg?crc=4065725384">
        </div>
      </div>
    </div>
  </div>
@endsection
