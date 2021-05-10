@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!register.css"/>

  <div class="container sucesse_register">
    <div class="row">
      <hr style="border-top:5px solid #2DBAD1; width:60%; margin-bottom:0" align="left">
      <h1>Cadastro e pedido concluídos com SUCESSO!</h1> 
      <div>
        <h2>Seja bem-vindo(a)</h2>
        <p>Recebemos seus dados pessoais e os dados de seu pedido de benefícios de forma correta. Agora, basta você se dirigir a um dos pontos de venda (farmácias) em todo o Brasil e solicitar o seu medicamento com desconto. Há um link no menu superior "Onde comprar os produtos" - Basta visitar essa página e você poderá encontrar uma farmácia aí perto de você.</p>
        <h2 class="mt-5">Este é o seu painel pessoal</h2>
        <p>Este é o seu painel pessoal. Aqui você pode efetuar novos pedidos de desconto para os medicamentos do programa Longevidade. Caso queira atualizar seus dados pessoais, utilize o botão "alterar dados pessoais". Você sempre receberá confirmações em seu e-mail para cada uma dessas ações.</p>
      </div>
    </div>
    <div class="gold_border_area mb-5">
      <div class="small_gold_border_area">
        <h2>O que você deseja fazer agora ?</h2>
      </div>
      <div class="row mt-5 mb-5" align="center" id="desktop">
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

      <div class="row mt-5 mb-5 wsx" id="mobile">
        <div class="col-md-6 mt-5" style="padding-left:0 padding-right:0">
          <div class="row">
            <div class="col-2" align="right">
              <img class="block" id="u67850_img" alt="" width="40" height="40" data-muse-src="images/nova_requisicao.jpg?crc=3885135111" src="images/nova_requisicao.jpg?crc=3885135111">
            </div>
            <div class="col-10" align="left">
              <button class="btn btn-lg btn-primary mb-3" id="new_order" style="font-size: 16px!important">FAZER UM NOVO PEDIDO</button>
            </div>
            <p>Utilize este botão para solicitar novos descontos em medicamentos do programa Longevidade</p>
          </div>
        </div>
        <div class="col-md-6 mt-5" style="padding-left:0 padding-right:0">
          <div class="row">
            <div class="col-2" align="right">
              <img class="block" id="u67852_img" alt="" width="40" height="40" data-muse-src="images/alterar_dados_pessoais.jpg?crc=3914973714" src="images/alterar_dados_pessoais.jpg?crc=3914973714">
            </div>
            <div class="col-10" align="left">
              <button class="btn btn-lg btn-primary mb-3" id="change_data_content" style="font-size: 13px; width:225px; padding-left:auto; padding-right:auto">ALTERAR MEUS DADOS PESSOAIS</button>
            </div>
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