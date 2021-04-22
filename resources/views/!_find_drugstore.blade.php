@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!drugstore.css"/>

  <div class="container_fluid find_drug">
    <div class="background"><div class="faca"></div>
      <p class="faca_letter mt-5"><b>Onde nos encontrar</b></p>
    </div>
    <hr style="border-top:40px solid #2DBAD1; margin-top:0; margin-bottom:10px">
    <div class="green_dot_line"></div>
    <div class="container" align="center">
      <hr style="border-top:7px solid #2DBAD1;width:75%; margin-bottom:0">
      <h1>Vamos encontrar uma farmácia aí perto de você?</h1>
      <p class="mb-5">Abaixo você pode localizar mais 47.000 pontos de venda de nossos produtos em todo o Brasil. Você inicialmente selecionar o seu estado, aguardar a caixa de cidades exibir as localidades, e assim que selecionar a sua cidade, os bairros também serão carregados logo em seguida. Clicando no botão "consultar agora" nós faremos a exibição do nome da farmácia, o endereço completo do local e também o telefone de contato se esses estiverem disponíveis em nosso banco de dados.</p>
      <div class="row mt-5 mb-5">
          <div class="col-md-2" align="right">
            <img class="block" id="u603_img" alt="" width="86" height="82" data-muse-src="images/home_icone_localizar_farmacia.png?crc=4214829112" src="images/home_icone_localizar_farmacia.png?crc=4214829112" data-nsfw-filter-status="sfw" style="visibility: visible;">
          </div>
          <div class="col-md-7 form-group" align="left" style="margin-top:auto; margin-bottom:auto">
            <select class="uf" name="uf" id="ufID">
              <option value="" selected>UF</option>
              @foreach ($laEstados as $estado)
              <option value="{{$estado->ESTADO_ID}}">{{$estado->ESTADO_UF}}</option>
              @endforeach
            </select>
            <select class="cidade" name="cidade" id="cidadeId">
              <option value="" selected>Cidade</option>
            </select>
            <select class="bairro" name="bairro" id="bairroId">
              <option value="" selected>Bairro</option>
            </select>
          </div>
          <div class="col-md-3" align="left" style="margin-top:auto; margin-bottom:auto">
            <button class="btn btn-primary form-control form-control-lg" id="find_dragstore" style="width:200px!important;">CONSULTAR AGORA</button>
          </div>
        </div>
      <div class="mb-5">
        <p style="font-size:14px; color: #223064">Precisa de ajuda para consultar os pontos de venda?</p>
      </div>
      </div>
    </div>
  </div>
  @include("commons.estado_cidade_bairro")
    <script>
        $(document).ready(function () {

          $("#find_dragstore").on("click", function (event) {
                // console.log("2");
                event.preventDefault();
                if (validateForm(null, $('select'), null)) {
                    var form = generateForm('/busca_farmacias', 'POST', '{{csrf_token()}}', null, $('select'), null);
                    $('body').append(form);
                    form.submit();
                }
            });
        });
    </script>
@endsection