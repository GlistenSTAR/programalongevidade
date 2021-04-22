@extends('layouts.layout')
@section('content')
  @if(!$login)
    <div class="main_page">
      <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" style="margin-top:22px" align="center">
          <div class="carousel-item active">
            <img src="images/home_longevidade_Descontinuados_18042018-v2.jpg?crc=148256787" >
          </div>
          <div class="carousel-item">
            <img src="images/home_longevidade_n02_v05.jpg?crc=278936673">
          </div>
          <div class="carousel-item">
            <img src="images/home_longevidade_n03_v05.jpg?crc=4065725384">
          </div>
        </div>
        <div class="carousel-indicators">
          <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
          <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></li>
          <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></li>
        </div>
      </div>
    </div>
    <div class="container-fluid register">
      <div class="register_header" style=""> <!---relative --->
        <div class="row"  style="height:100px!important"> <!---relative --->
          <div class="heading" align="center"> <!---absolute --->
            <div>Ainda não tem cadastro? Comece por aqui.</div>
          </div>
        </div>
        <div align="center" style="color:white">
          <h1>
            Nos informe o seu melhor e-mail
          </h1>
          <h4>O seu cadastro será feito de forma fácil e rápida</h4>
        </div>
          <div class="container main">
            <div class="row" align="center">
              <div class="col-md-3" align="right">
                <img class="block" id="u570_img" alt="" width="86" height="82" data-muse-src="images/home_icone_inicia_cadastro.png?crc=3891080647" src="images/home_icone_inicia_cadastro.png?crc=3891080647" data-nsfw-filter-status="sfw" style="visibility: visible;">
              </div>
              <div class="col-md-4" style="margin-top:auto; margin-bottom:auto">
                <input type="email" name="Email" class="form-control input-lg" placeholder="Vamos começar com o seu e-mail?" required>
              </div>
              <div class="col-md-3" style="margin-top:auto; margin-bottom:auto">
                <button class="btn btn-primary form-control form-control-lg" id="go_register" type="submit">CADASTRAR AGORA</button>
              </div>
            </div>
            <div align="center" style="margin-bottom:28px">
              <h4><a style="color:white">Já sou cadastrado. Como faço para acessar meus dados?</a></h4>
            </div>
          </div>
        <div class="dot_line"></div>
      </div>
    </div>
    <div class="find_dragstore" align="center">
      <h1>Que tal achar uma farmácia aí perto de você?</h1>
      <p>Localize a sua cidade pelos seletores abaixo</p>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    @include("commons.estado_cidade_bairro")
    <script>
        $(document).ready(function () {
          $("#go_register").on("click", function (event) {
            // console.log(1);
          var blockDiv = document.createElement('div');
          $(blockDiv).css({'width' : '2200px', 'height' : '4200px', 'position' : 'absolute', 'z-index' : '1000000000000'});
          $(blockDiv).html(" ");
          $(event.currentTarget).parent().css({'position' : 'relative'});
          $(event.currentTarget).parent().append(blockDiv);

          event.preventDefault();

          if (validateForm($('input'), null, null)) {
              var form = generateForm('/cadastro_adesao', 'POST', '{{csrf_token()}}', $('input'), null, null);
              $('body').append(form);
              form.submit();
          } else {
              $(event.currentTarget).parent().css({'position' : 'static'});
              $(blockDiv).remove();
          }
          });

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
    
    @else
        <div class="dot_line"></div> 
        <div class="main_page_logined container">
          <hr align="left">
          <h1><b>Olá {{explode(" ",Auth::user()->name)[0]}}, você está conectado ao site!</b></h1>
          <p style="color:grey; font-size:20px">
            Este é o seu painel pessoal. Aqui você pode efetuar novos pedidos de desconto para os medicamentos do programa Longevidade. Caso queira atualizar seus dados pessoais, utilize o botão "alterar dados pessoais". Você sempre receberá confirmações em seu e-mail para cada uma dessas ações.
          </p>
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
          <div class="delete_account_content mb-5">
            <h3 style="color:#212F63">Para você deixar o programa Longevidade:</h3>
            <p style="color:grey; text-align: justify; text-justify: inter-word;line-height:2;">Em atendimento à LGPD brasileira e seguindo as normas previstas em nossa política de privacidade, você pode solicitar a exclusão definitiva do seu cadastro do site e do sistema do programa Longevidade. Seus dados serão excluídos de nosso banco de dados, portanto, não teremos mais acesso a nenhum dado pessoal seu. Esse processo é chamado de anonimização e está previsto na LGPD brasileira.<br>
              Caso você queira excluir seu cadastro e realizar o processo de anonimização no programa Longevidade, por favor, <a id="dialog-link">clique NESTE LINK</a> e confirme a sua decisão. Uma vez que este processo seja realizado, você ainda poderá realizar novo cadastro e voltar a fazer parte do programa e usufruir dos benefícios oferecidos.</p>
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
    @endif  
@endsection
