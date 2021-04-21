@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!drugstore.css"/>

  <div class="container_fluid position_drugstore">
    <div class="background"><div class="faca"></div>
      <p class="faca_letter mt-5"><b>Farmácias aí perto de você</b></p>
    </div>
    <hr style="border-top:10px solid #2DBAD1; margin-top:0; margin-bottom:10px">
    <div class="green_dot_line"></div>
    <div class="container" align="center">
      <hr style="border-top:7px solid #2DBAD1;width:75%; margin-bottom:0" align="left">
      <h2 align="left">Encontramos a(s) seguinte(s) farmácia(s) na sua região:</h2>
      <p align="left">Estado: {{$estado}}&nbsp; |&nbsp; Cidade: {{$cidade}}&nbsp; |&nbsp; Bairro: {{$bairro}}</p>   
       
      @foreach($laFarmacias as $farmacia)
      <?php $telefone = (!empty($farmacia->LGV_FARMACIA_TELEFONE) ? 'TELEFONE: '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[0].' - '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[1] : "");?>

      <div class="box_position row mt-5 mb-5" style="width:80%" align="left">
        <div class="col-md-8 ml-5">
          <p style="font-size:18px">
            <img src="images/localizando_farmacias.png?crc=101785025">
            {{$farmacia->LGV_FARMACIA_NOME}}
          </p>
          <p>
            {{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}} {{$farmacia->LGV_FARMACIA_ENDERECO}} {{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}} - {{$farmacia->LGV_FARMACIA_BAIRRO}} - {{$farmacia->LGV_FARMACIA_CIDADE}} - {{$farmacia->LGV_FARMACIA_UF}}<br>
          </p>
          <P>
            CEP {{$farmacia->LGV_FARMACIA_ENDERECO_CEP}} - {{$farmacia->LGV_FARMACIA_EMAIL}} - {{$telefone}}
          </P>
        </div>
        <div class="col-md-2" align="center">
          <img src="images/mapa_acessa_farmacia.png?crc=87601278"><p>Veja no mapa esse endereço</p>
        </div>
      </div>
      @endforeach
    </div>
      <div class="green_dot_line"></div>
    <div class="container">
      <hr style="border-top:7px solid #2DBAD1;width:75%; margin-bottom:0">
      <div class="find_dragstore" align="center">
      <h1>Deseja refazer a sua busca por farmácias?</h1>
      <div class="container mb-5">
        <div class="row">
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
          <p>Precisa de ajuda para consultar os pontos de venda?</p>
        </div>
      </div>
    </div>
    <!-- <div class="green_dot_line"></div> -->
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