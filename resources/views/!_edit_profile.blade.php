@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!profile.css"/>

  <div class="edit_profile container" align="center">
    <hr style="border-top:7px solid #2DBAD1; width:70%; margin-bottom:0" align="left">
    <h2 align="left">Alteração de dados pessoais</h2>
    <p align="left">{{explode(" ",Auth::user()->name)[0]}} , você pode alterar somente os campos Nome, E-mail e os telefones fixo e celular. Os demais campos (CPF e Data de Nascimento) são campos utilizados para a sua identificação e não podem ser alterados. Assim que corrigir as informações que deseja, basta clicar em "efetuar alteração". Você receberá um e-mail de confirmação em alguns instantes.</p>
    <div class="row qwr" style="width:60%">
      <div class="col-md-6" align="left">
        <label>Name : </label>
        <input 
          type="text" 
          class="form-control cad_texto" 
          id="cad_nome" 
          name="Nome" 
          value="{{ trim($user->LGV_USER_NOME) }}" 
          required 
          placeholder="Digite seu nome" 
          data-content-type="nome_completo"
        >
        <br>
        <label>CPF : </label>
        <input 
          type="text" 
          class="form-control cad_texto" 
          id="cad_CPF" 
          name="Cpf" 
          required 
          value="{{$user->LGV_USER_CPF}}"  
          maxlength="14" 
          placeholder="Digite seu CPF" 
          data-content-type="cpf"
        >
        <br>
        <label>Telefone celular com DDD: : </label>
        <input 
          type="text" 
          class="form-control cad_texto" 
          id="cad_tel_celular" 
          name="TelCelular" 
          value="{{$user->LGV_USER_TELEFONE_CELULAR_DDD}}{{$user->LGV_USER_TELEFONE_CELULAR_NUMERO}}" 
          maxlength="15" 
          data-content-type='cel' 
          required placeholder="Ex.: (11) 5501-2500" 
        >
      </div>
      <div class="col-md-6" align="left">
        <label>E-mail : </label>
        <input 
          id="cad_email" 
          data-content-type='email' 
          name="Email" 
          type="text"
          value="{{trim($user->LGV_USER_EMAIL)}}"
          class="form-control cad_texto" 
          required 
          placeholder="Digite seu e-mail" 
          data-content-type="email" 
          {{!empty(trim($user->LGV_USER_EMAIL)) ? "readonly" : "" }} 
        >
        <br>
        <label>Data de Nascimento : </label>
        <input 
          type="text" 
          class="form-control cad_texto" 
          id="cad_dt_nascto" 
          value="{{$user->LGV_USER_DATA_NASCIMENTO->format(\Config::get("app.DEFAULT_DATE_FORMAT")) }}" 
          name="dtNascimento" 
          required 
          placeholder="Ex.: 18/04/1965" 
          data-content-type="data"
        >
        <br>
        <label>Telefone fixo com DDD : </label>
        <input 
          type="text" 
          class="form-control cad_texto" 
          id="cad_tel_fixo" 
          value="{{$user->LGV_USER_TELEFONE_FIXO_DDD}}{{$user->LGV_USER_TELEFONE_FIXO_NUMERO}}" 
          name="TelComercial" 
          data-content-type='tel' 
          required 
          placeholder="Ex.: (11) 5501-2500"
        >
      </div>
    </div>
    <div class="row mt-5 mb-5" align="center">
      <button class="btn btn-lg btn-default" id="confirm_change">SALVAR MEUS DADOS</button>
    </div>
  </div>
  <script type="text/javascript" src="/js/form_control.js"></script>
  <script type="text/javascript">

      $("#confirm_change").on("click", function(event) {

          var blockDiv = document.createElement('div');
          $(blockDiv).css({'width' : '2200px', 'height' : '4200px', 'position' : 'absolute', 'z-index' : '1000000000000'});
          $(blockDiv).html(" ");
          $(event.currentTarget).parent().css({'position' : 'relative'});
          $(event.currentTarget).parent().append(blockDiv);

          event.preventDefault();

          if (validateForm($('input'), null, null)) {

              $("#confirm_change").text("Aguarde...");

              var form = generateForm('/submits/post_altera_dados_pessoais', 'POST', '{{csrf_token()}}', $('input'), null, null);
              $('body').append(form);
              form.submit();
          } else {
              $(event.currentTarget).parent().css({'position' : 'static'});
              $(blockDiv).remove();
          }
      });
  </script>
@endsection