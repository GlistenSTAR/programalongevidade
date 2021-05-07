@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!product.css"/>

  <div class="dot_line"></div>
  <div class="container success_order_ok mb-5" align="left">
    <hr style="border-top:7px solid #2DBAD1; width:60%; margin-bottom:0" align="left">
    <h1 style="width:100%" align="left"><b>Pedido efetuado com sucesso!</b></h1>
    <p>{{explode(" ",Auth::user()->name)[0]}}, finalizamos com sucesso o seu pedido para o produto . Agora basta que você dirija-se a uma das mais de 47.000 farmácias em todo o Brasil atendidas pelo programa Longevidade e faça a compra do medicamento com desconto.</p>
    <p>Enviamos também um e-mail de confirmação para a sua caixa postal cadastrada, e nesse e-mail há todas as informações detalhadas do seu pedido efetivada.</p> 
    <p>Agradecemos a sua participação em nosso programa e esperamos poder ter contribuído com a manutenção de seu tratamento. Conte conosco para futuras requisições.</p>
    <div class="gold_border_area">
      <div class="small_gold_border_area">
        <h2><b>O que você deseja fazer agora ?</b></h2>
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
@endsection