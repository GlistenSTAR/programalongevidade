@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!register.css"/>

  <div class="container_fluid login" align="center">
    <div class="row login_background">
      <div class="blue_background">Faça seu login</div>
    </div>
    <hr style="border-top:30px solid #2DBAD1; width:100%; margin-top:0">
    <div class="dot_line"></div>
    <div class="grey_back" align="center">
      <div class="container" align="center">
        <div class="row" style="width:100%; color: #223163">
          <h2 align="center" style="width:100%;">Que bom que você está de volta!</h2>
          <p align="center" style="width:100%;">(Preencha os campos e faça novas requisições de medicamentos)</p>
          <p style="padding-left:150px; padding-right:150px">Use o seu CPF e sua data de nascimento para atualizar seus dados pessoais ou então fazer novas requisições de medicamentos no programa Longevidade. Caso não lembre os dados que informou quando efetuou seu cadastro, utilize a opção "Esqueci meus dados de acesso" e aguarde que lhe enviaremos em instantes um e-mail com as informações.</p>
        </div>
        <div class="row" style="width:40%" align="center">
            <label>CPF: (Apenas números)</label>
            <input id="cad_CPF" name="cpfCadastro" class="cad_texto form-control" type="text" maxlength="255" data-content-type='cpf' placeholder="Digite seu CPF" required />
        </div>
        <div class="row" style="width:40%" align="center">
          <label>Data de Nascimento: (DD/MM/AAAA)</label>
          <input id="cad_dt_nascto" name="dtNascimento" class="cad_texto form-control" type="text" maxlength="255" data-content-type='data' placeholder="Ex.: 18/04/1965" required />
        </div>
        <div class="row mt-5 mb-5" align="center">
          <button class="btn btn-lg btn-default" id="submit_login">ACESSAR MEUS DADOS</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="/js/form_control.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
          $("#submit_login").on("click", function (event) {

              var blockDiv = document.createElement('div');
              $(blockDiv).css({'width' : '2200px', 'height' : '4200px', 'position' : 'absolute', 'z-index' : '1000000000000'});
              $(blockDiv).html(" ");
              $(event.currentTarget).parent().css({'position' : 'relative'});
              $(event.currentTarget).parent().append(blockDiv);

              event.preventDefault();

              if (validateForm($('input'), null, null)) {

                  $("#submit_login").on("click", function(event){});
                  $("#submit_login").text("Aguarde...");

                  var form = generateForm('/api/consultaCadastro', 'POST', '{{csrf_token()}}', $('input'), null, null);
                  $('body').append(form);
                  form.submit();
              } else {
                  $(event.currentTarget).parent().css({'position' : 'static'});
                  $(blockDiv).remove();
              }
          });
      });
  </script>
@endsection