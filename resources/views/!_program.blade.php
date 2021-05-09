@extends('layouts.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="css/!program.css"/>

<div class="container_fluid program"> 
  <div class="background"><div class="faca"></div>
    <div class="container">
      <p class="faca_letter"><b>Conheça o Longevidade</b></p>
    </div>
  </div>
  <hr style="border-top:35px solid #2DBAD1; margin-top:0; margin-bottom:5px">
  <div class="green_dot_line"></div>
  <div class="container pad_text">
    <div class="row mt-5 mb-5">
      <p>O Programa Longevidade é um programa de relacionamento com dicas e serviços que serão úteis para seu tratamento, fornecendo inclusive, descontos na compra de alguns medicamentos da Torrent Pharma prescritos pelo seu médico. Você ainda poderá obter informações sobre saúde e qualidade de vida neste site. É muito simples fazer parte deste programa, veja como funciona.</p>
    </div>
  </div>
  <div class="dot_line"></div> 
  <div class="odd_ground" align="center">
    <div align="center" style="width:246px;">
      <div class="blue_border">ETAPA<span class="badge badge-primary">01</span></div>
    </div>
    <h4>Verifique se o produto prescrito pelo seu médico consta da lista abaixo. Esses são os produtos participantes do Programa Longevidade:</h4>
    <h3><b>Neblock</b></h3>
  </div>
  <div class="dot_line"></div>
  <div class="emtpy" style="height:100px"></div>
  <div class="dot_line"></div>
  <div class="odd_ground" align="center">
    <div align="center" style="width:246px;">
      <div class="blue_border">ETAPA<span class="badge badge-primary">02</span></div>
    </div>
    <h4>Seu médico prescreveu um medicamento que faz parte do Programa Longevidade. Tenha em mãos a receita, seu nome e número do CRM ou com o carimbo do seu médico.</h4>
  </div>
  <div class="dot_line"></div>
  <div class="emtpy" style="height:100px"></div>
  <div class="dot_line"></div>
  <div class="odd_ground" align="center">
    <div align="center" style="width:246px;">
      <div class="blue_border">ETAPA<span class="badge badge-primary">03</span></div>
    </div>
    <h4>Após o cadastro, você poderá fazer a compra do medicamento informando à farmácia o seu CPF. São mais de 47.000 pontos de venda no Brasil que podem</h4>
    <a href="/farmacias">ser consultados aqui.</a>
  </div>
  <div class="dot_line"></div>

  <div class="normal container mb-5 mt-5">
    <label>Recomendações</label>
    <p>Observe atentamente o período de tratamento indicado pelo seu médico na prescrição. Respeite a prescrição do seu médico. Não tome medicamentos por conta própria.</p>
    <label>Validade</label>
    <p>A Torrent Pharma reserva-se o direito de alterar ou interromper o programa Programa Longevidade a qualquer momento, sem aviso prévio.</p>
    <label>Dúvidas frequentes</label>
    <p>Abaixo selecionamos as perguntas mais recorrentes recebidas em nossa central de atendimento. Utilize as caixas de seleção abaixo, e veja se a sua questão se encontra disponível em um delas.</p>
  </div>
  <div class="accordian_area container mb-5 mt-5">
    <button class="accordion">☉ Qual é o desconto concedido?</button>
    <div class="panel">
      <p>O desconto é concedido sobre o Preço Máximo ao Consumidor* e varia de acordo com o produto selecionado. O percentual exato do desconto é informado no final do cadastro. *O Preço Máximo ao Consumidor é determinado pelo Governo Federal.</p>
    </div>

    <button class="accordion">☉ Como faço para me cadastrar?</button>
    <div class="panel">
      <p>Cadastrar-se no Programa Longevidade é muito simples. Basta ter em mãos seus dados pessoais (nome, endereço e CPF) e os dados da receita médica (quando o produto exigir prescrição). Depois, basta preencher o formulário aqui e pronto! Seu CPF já estará validado para a compra em qualquer um dos 47.000 pontos de venda credenciados ao Programa Longevidade.</p>
    </div>

    <button class="accordion">☉ Onde posso comprar?</button>
    <div class="panel">
      <p>O Programa Longevidade possui mais de 47.000 farmácias credenciadas. A lista completa pode ser consultada aqui</p>
    </div>

    <button class="accordion">☉ Por que não posso comprar em qualquer farmácia?</button>
    <div class="panel">
      <p>O credenciamento de farmácias depende de uma série de fatores: desejo da farmácia em fazer parte da rede, condições técnicas, condições comerciais, entre outros fatores. Hoje, você pode encontrar o Programa Longevidade em mais de 47.000 farmácias no Brasil todo, incluindo-se as grandes redes.</p>
    </div>

    <button class="accordion">☉ Consigo efetuar a compra com desconto apenas com meu CPF?</button>
    <div class="panel">
      <p>A Torrent do Brasil mudou a forma de identificação na farmácia. Você pode simplesmente mencionar o número do seu CPF ao balconista. Mais rápido e prático!</p>
    </div>

    <button class="accordion">☉ Preciso fazer um novo cadastro para aderir a outro produto?</button>
    <div class="panel">
      <p>Quando você faz um cadastro no Programa Longevidade, precisa informar o produto que tomará. Será liberada a compra desse produto apenas. Com uma nova prescrição, será necessário apenas informar os dados novos - produto e os dados do médico. Basta fazer o login aqui e acrescentar o novo medicamento. É muito fácil recuperar ou criar a sua senha!</p>
    </div>

    <button class="accordion">☉ Por que nem todos os produtos estão no programa?</button>
    <div class="panel">
      <p>Os produtos estão entrando gradativamente no Programa Longevidade e dependem de vários fatores. Visite regularmente o nosso website para saber quais produtos estão incluídos no programa.</p>
    </div>
  </div>
</div>
<script>
  var acc = document.getElementsByClassName("accordion");
  var pan = document.getElementsByClassName("panel");
  var i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      /* Toggle between adding and removing the "active" class,
      to highlight the button that controls the panel */
      for(var j=0; j<acc.length; j++){
        pan[j].style.display = "none";
        acc[j].classList.remove("active");
      }
      this.classList.toggle("active");
        
      /* Toggle between hiding and showing the active panel */
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
</script>
@endsection