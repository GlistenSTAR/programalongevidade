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
  <div class="container-fluid register">
    <div class="register_header" style=""> <!---relative --->
      <div class="row"  style="height:100px!important"> <!---relative --->
        <div class="heading" align="center"> <!---absolute --->
          <div>Ainda não tem cadastro? Comece por aqui.</div>
        </div>
      </div>
      <div align="center" style="color:white">
        <h1>
          Nos informe o seu melhor e-mail
        </h1>
        <h4>O seu cadastro será feito de forma fácil e rápida</h4>
      </div>
      <div class="container main">
        <div class="row" align="center">
          <div class="col-md-3" align="right">
            <img class="block" id="u570_img" alt="" width="86" height="82" data-muse-src="images/home_icone_inicia_cadastro.png?crc=3891080647" src="images/home_icone_inicia_cadastro.png?crc=3891080647" data-nsfw-filter-status="sfw" style="visibility: visible;">
          </div>
          <div class="col-md-4" style="margin-top:auto; margin-bottom:auto">
            <input type="email" class="form-control input-lg" placeholder="Vamos começar com o seu e-mail?">
          </div>
          <div class="col-md-4" style="margin-top:auto; margin-bottom:auto">
            <button class="btn btn-lg btn-primary">CADASTRAR AGORA</button>
          </div>
        </div>
        <div align="center" style="margin-bottom:80px">
          <h4><a style="color:white">Já sou cadastrado. Como faço para acessar meus dados?</a></h4>
        </div>
      </div>
      <div class="dot_line"></div>
    </div>
  </div>
@endsection
