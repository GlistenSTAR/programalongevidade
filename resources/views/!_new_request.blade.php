@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!new_request.css"/>
  <div class="container new_request">
    <div class="row">
      <hr style="border-top:7px solid #2DBAD1; width:70%; margin-bottom:0" align="left">
      <h2><b>Novo pedido de medicamento</b></h2>
      <p>{{explode(" ",Auth::user()->name)[0]}}, você deve primeiramente nos informar os dados do médico que lhe prescreveu o medicamento, e logo em seguida nos informar qual medicamento deseja solicitar o desconto. Preenchendo essas informações, basta clicar no botão "concluir".</p>
      <div align="center first mb-5" style="width:100%">
        <h3 align="center">ETAPA<span class="badge badge-primary">1</span> Nos informe os dados do médico</h3> 
        <p class="small_padding mb-5">Essas informações constam na receita médica que você recebeu. O CRM é o registro do seu médico e deve estar junto do carimbo dele na receita/prescrição. ATENÇÃO: Ao digitar o CRM, não digite letras, somente os números devem ser informados. Caso o registro do seu médico possua zeros como dígitos iniciais, você deve omiti-los. Veja o exemplo: 0003772PR – Você deve informar somente: 3772.</p>
      </div>
      <div class="container mt-5" style="width:80%">
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
          <select id="cad_uf_crm" name="UfCrm" required class="cad_caixa_selecao form-control">
            <option value="" selected>UF</option>
            @foreach ($laEstados as $estado)
            <option value="{{$estado->ESTADO_ID}}">{{$estado->ESTADO_UF}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div align="center second mt-3" style="width:100%">
        <h3 align="center">ETAPA<span class="badge badge-primary">2</span> Selecione o produto desejado</h3> 
        <p class="small_padding">Selecione inicialmente o produto, e logo em seguida a apresentação em miligramas e também a quantidade de comprimidos.</p>
      </div>
      <div class="container" style="width:60%">
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
        <div class="row checkarea" align="center">
          <input type="checkbox" id="aceito_regulamento" name="aceito_regulamento" value="aceito_regulamento">
          <span class="ml-5"><b>Conheço o regulamento do programa e concordo as cláusulas previstas nele</b></span>
        </div>
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
  <script type="text/javascript" src="/js/form_control.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          $("#submit_request").on("click", function(event){
              var blockDiv = document.createElement('div');
              $(blockDiv).css({'width' : '2200px', 'height' : '4200px', 'position' : 'absolute', 'z-index' : '1000000000000'});
              $(blockDiv).html(" ");
              $(event.currentTarget).parent().css({'position' : 'relative'});
              $(event.currentTarget).parent().append(blockDiv);

              event.preventDefault();

              if (!$("#aceito_regulamento")[0].checked) {

                  alert("É necessário concordar com as cláusulas do contrato.");
                  $(event.currentTarget).parent().css({'position' : 'static'});
                  $(blockDiv).remove();

              } else {

                  if (validateForm($('input'), $('select'), null)) {

                      $("#submit_request").on("click", function(event){});
                      $("#submit_request").text("Aguarde...");

                      var form = generateForm('/submits/post_nova_requisicao', 'POST', '{{csrf_token()}}', $('input'), $('select'), null);
                      $('body').append(form);
                      form.submit();
                  } else {
                      $(event.currentTarget).parent().css({'position' : 'static'});
                      $(blockDiv).remove();
                  }

              }

          });

          function getListaApresentacao() {

              var marca = $("#cad_produtos").val();
              $.ajax
              ({
                  url: '/api/fetchProdutosByMarca/' + marca,
                  type: 'GET',
                  datatype: 'application/json',
                  contentType: 'application/json',
                  success:

                      function (result) {

                          $("#cad_produto_apresentacao").html("");
                          $("#cad_produto_apresentacao").append($('<option value="">Selecione uma opção</option>'));
                          var lastProduct = null;

                          $.each(result, function (i, produto) {
                              if (lastProduct == null || lastProduct != produto.LGV_PRODUTO_DESCRICAO) {
                                  $("#cad_produto_apresentacao").append($('<option value="'+produto.LGV_PRODUTO_ID+'">'+produto.LGV_PRODUTO_DESCRICAO+'</option>'));
                                  lastProduct = produto.LGV_PRODUTO_DESCRICAO;
                              }
                          })
                      },
                  error: function () {
                      alert("Ocorreu um erro ao carregar as opções")
                  },
              });
          }

          $("#cad_produtos").on("change", getListaApresentacao);

      });
  </script>
@endsection