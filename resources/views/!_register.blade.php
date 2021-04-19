@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!register.css"/>

  <div class="container_fluid register">
    <div class="background"><div class="faca"></div>
      <p class="faca_letter"><b>Pedido</b></p>
    </div>
    <hr style="border-top:40px solid #2DBAD1; margin-top:0">
    <div class="container">
      <div class="row">
        <hr style="border-top:10px solid #2DBAD1; width:70%; margin-bottom:0" align="left">
        <h2>Faça aqui o seu cadastro e seu pedido</h2>
        <p>O processo de pedido ao programa é bem simples, fácil e rápido. Abaixo você deve preencher os campos com seus dados pessoais, atentando-se sempre ao correto preenchimento do CPF e data de nascimento, pois eles serão os dados chave para suas futuras solicitações. No item 2, você deverá nos informar os dados do médico que lhe prescreveu o medicamento e no item 3, basta nos informar para qual produto você deseja o benefício. Após a conclusão desse processo você receberá imediatamente um e-mail de confirmação. Verifique suas pastas de spam e lixo eletrônico, pois nosso e-mail pode ter ido ido automaticamente para uma dessas pastas.</p>
      </div>
    </div>
    <div class="dot_line"></div>
    <div class="container" align="center">
      <div align="center first mb-5" style="width:50%">
        <h3 align="center">ETAPA<span class="badge badge-primary">1</span> Forneça seus dados pessoais</h3> 
        <p class="small_padding mb-5">Digite corretamente seus dados cadastrais. Eles serão usados sempre que você precisar fazer novas solicitações de medicamentos.</p>
      </div>
      <div class="row" style="width:60%" align="left">
        <div class="col-md-6">
          <label>Name : </label>
          <input type="text" class="form-control cad_texto" id="cad_nome" name="Nome" required placeholder="Digite seu nome">
          <br>
          <label>CPF : </label>
          <input type="text" class="form-control cad_texto" id="cad_CPF" name="Cpf" required value="{{ $userCpf }}" maxlength="14" placeholder="Digite seu CPF">
          <br>
          <label>Telefone celular com DDD: : </label>
          <input type="text" class="form-control cad_texto" id="cad_tel_celular" name="TelCelular" maxlength="15" required placeholder="Ex.: (11) 5501-2500">
        </div>
        <div class="col-md-6">
          <label>E-mail : </label>
          <input id="cad_email" data-content-type='email' name="Email" type="text" class="form-control cad_texto" required placeholder="Digite seu e-mail">
          <br>
          <label>Data de Nascimento : </label>
          <input type="text" class="form-control cad_texto" id="cad_dt_nascto" name="dtNascimento" required placeholder="Ex.: 18/04/1965">
          <br>
          <label>Telefone fixo com DDD : </label>
          <input type="text" class="form-control cad_texto" id="cad_tel_fixo" name="TelComercial" required placeholder="Ex.: (11) 5501-2500">
        </div>
      </div>
      <div align="center first mb-5" style="width:50%">
        <h3 align="center">ETAPA<span class="badge badge-primary">2</span> Nos informe os dados do médico</h3> 
        <p class="small_padding mb-5">Essas informações constam na receita médica que você recebeu. O CRM é o registro do seu médico e deve estar junto do carimbo dele na receita/prescrição. ATENÇÃO: Ao digitar o CRM, não digite letras, somente os números devem ser informados. Caso o registro do seu médico possua zeros como dígitos iniciais, você deve omiti-los. Veja o exemplo: 0003772PR – Você deve informar somente: 3772.</p>
      </div>
      <div class="row" style="width:60%" align="left">
        <div class="col-md-6">
          <label>Nome do médico : </label>
          <input type="text" class="form-control cad_texto" id="cad_medico" name="NomeMedico" required placeholder="Digite o nome do médico">
        </div>
        <div class="col-md-4">
          <label>CRM : </label>
          <input type="number" class="form-control cad_texto_crm" id="cad_med_crm" name="Crm" required placeholder="Somente númeross">
        </div>
        <div class="col-md-2">
          <label>UF do CRM : </label>
          <select class="cad_caixa_selecao form-control" name="UfCrm" id="cad_uf_crm">
            <option value="" selected>UF</option>
            @foreach ($laEstados as $estado)
            <option value="{{$estado->ESTADO_ID}}">{{$estado->ESTADO_UF}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div align="center first mb-5" style="width:50%">
        <h3 align="center">ETAPA<span class="badge badge-primary">3</span> Selecione o produto desejado</h3> 
        <p class="small_padding mb-5">Selecione inicialmente o produto, e logo em seguida a apresentação em miligramas e também a quantidade de comprimidos.</p>
      </div>
      <div class="row mt-5" style="width:50%" align="left">
        <div class="col-md-6">
          <label>Medicamento : </label>
          <select id="cad_produtos" name="Medicamento" required class="cad_caixa_selecao form-control">
            <option value="">Selecione uma opção</option>
            @foreach ($laProdutos as $produto)
            <option value="{{$produto->LGV_PRODUTO_MARCA}}">{{$produto->LGV_PRODUTO_MARCA}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6">
          <label>Apresentação : </label>
          <select id="cad_produto_apresentacao" name="Apresentacao" required class="cad_caixa_selecao form-control">
            <option value="">Selecione uma opção</option>
          </select>
        </div>
      </div>
      <div class="row checkarea" align="center" style="width:80%">
        <input type="checkbox" id="aceito_regulamento" name="aceito_regulamento" value="aceito_regulamento">
        <span class="ml-5"><b>Conheço o regulamento do programa e concordo as cláusulas previstas nele</b></span>
      </div>
      <div class="container mb-5">
        <div class="no_accept">
          <div align="center">
            <a href="/regulamento">Quero conhecer o regulamento do programa</a>
          </div>
          <div align="center">(Você será direcionado para uma nova página)</div>
        </div>
        <div class="mt-5" align="center">
          <button id="submit_request" class="btn btn-lg btn-default">CONCLUIR A SOLICITAÇÃO</button>
        </div>
      </div>
    </div>
  </div>
@endsection