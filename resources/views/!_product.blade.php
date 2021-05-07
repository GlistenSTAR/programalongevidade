@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!product.css"/>

  <div class="container_fluid product">
    <div class="background"><div class="faca"></div>
      <p class="faca_letter"><b>Produtos participantes</b></p>
    </div>
    <hr style="border-top:40px solid #2DBAD1; margin-top:0; margin-bottom:5px">
    <div class="green_dot_line"></div>
    <div class="container mb-5">
      <div class="row" style="width:80%">
        <hr style="border-top:10px solid #2DBAD1; width:90%; margin-bottom:0" align="left">
        <h1 style="width:100%"><b>Quais são os produtos integrantes do programa?</b></h1>
        <p>Consulte a lista de produtos participantes do programa Longevidade. Se o produto pelo qual você procura estiver na lista abaixo, basta iniciar o processo de cadastro (caso você ainda não seja cadastrado(a)), selecionar o seu produto na lista disponível, informar o CRM do médico que lhe prescreveu o medicamento e dirigir-se à farmácia mais próxima para retirar o produto com maior facilidade de adesão ao tratamento.</p>
      </div>
      <div class="row gold_border mt-5 mb-5">
        <div class="col-md-2" align="center"><img src="images/favicon_longevidade.jpg?crc=4006560582"></div>
        <div class="col-md-8">
          <h1>Neblock</h1>
          <p>Este medicamento é destinado para o tratamento da hipertensão arterial (pressão sanguínea alta) e da insuficiência cardíaca (alteração da função cardíaca) em idosos (acima de 70 anos), com fração de ejeção (quantidade de sangue que sai do coração e vai para todo o organismo através dos vasos quando ocorre o batimento cardíaco) abaixo ou igual 35%.</p>
          <h4>APRESENTAÇÕES DESTE MEDICAMENTO</h4>
          <p>5mg com 30 comprimidos e 5mg com 60 comprimidos</p>
          <h4>DESCONTO CONCEDIDO PARA ESTE MEDICAMENTO</h4>
          <p>40%</p>
        </div>
        <div class="col-md-2" align="center">
          <a href="arquivos/bulas/bula_neblock.pdf" target="_blank">
            <img src="images/pdf_baixar_bulas.jpg?crc=122069707">
            <h4>BAIXAR A BULA</h4>
            <p>Baixe a bula deste medicamento em PDF</p>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection