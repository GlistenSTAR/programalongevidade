@extends('layouts.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="css/!profile.css"/>

<div class="saved_profile container" align="center">
  <hr style="border-top:7px solid #2DBAD1; width:70%; margin-bottom:0" align="left">
  <h2 align="left">Dados pessoais alterados com sucesso!</h2>
  <p align="left">{{explode(" ",Auth::user()->name)[0]}} ,  seus dados cadastrais foram alterados com sucesso e acabamos de lhe enviar uma confirmação por e-mail. Com o seu cadastro atualizado, será sempre fácil falar conosco, solicitar informações e permitir que façamos contato com você. Utilize um dos botões abaixo para continuar a sua navegação.</p>

  <div class="gold_border_area mb-5" align="left">
    <div class="small_gold_border_area">
      <h2>O que você deseja fazer agora ?</h2>
    </div>
    <div class="row mt-5 mb-5" align="center">
      <div class="col-md-6 mt-5" style="padding-left:0 padding-right:0">
        <div class="col-md-4" align="right">
          <img class="block" id="u67850_img" alt="" width="40" height="40" data-muse-src="images/nova_requisicao.jpg?crc=3885135111" src="images/nova_requisicao.jpg?crc=3885135111">
        </div>
        <div class="col-md-8">
          <button class="btn btn-lg btn-primary mb-3" id="new_order">FAZER UM NOVO PEDIDO</button>
          <p>Utilize este botão para solicitar novos descontos em medicamentos do programa Longevidade</p>
        </div>
      </div>
      <div class="col-md-6 mt-5" style="padding-left:0 padding-right:0">
        <div class="col-md-2" align="right">
        <img class="block" id="u67852_img" alt="" width="40" height="40" data-muse-src="images/alterar_dados_pessoais.jpg?crc=3914973714" src="images/alterar_dados_pessoais.jpg?crc=3914973714">
        </div>
        <div class="col-md-9">
          <button class="btn btn-lg btn-primary mb-3" id="change_data_content">ALTERAR MEUS DADOS PESSOAIS</button>
          <p>Utilize esse botão para alterar seus dados pessoais já cadastrados no programa Longevidade</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function () {
        $("#new_order").click(function(){
            window.location.href = "/nova_requisicao";
        });
        $("#change_data_content").click(function(){
            window.location.href = "/altera_dados_pessoais";
        });
    });
  </script>
@endsection