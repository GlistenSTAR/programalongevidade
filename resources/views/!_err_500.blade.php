@extends('layouts.layout')
@section('content')
  <div class="container_fluid error_page">
    <div class="dot_line" style="padding-bottom:0"></div>
    <div align="center">
      <div align="center" class="blue_box">
        <h1>Ops... algo aconteceu de errado</h1>
      </div>
    </div>
    <div class="background">
      <div class="container">
        <div class="row mt-5 mb-5">
          <div class="col-md-5" align="center">
            <img src="images/erro_inesperado_404.png?crc=334447011">
          </div>
          <div class="col-md-7" align="center">
            <h2>Por alguma razão técnica não<br> conseguimos processar a sua solicitação.</h2>
            <p>{{ $err_msg }}</p>
            <p>Veja abaixo o erro que encontramos, e quando fizer contato com a nossa equipe técnica, por favor, mencione a mensagem abaixo:</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection