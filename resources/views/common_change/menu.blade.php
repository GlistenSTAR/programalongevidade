<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@if(Auth::check()!=1)
  <div class="menus" style="width:100%">
    <div class="menu_background"></div>
    <nav class="navbar navbar-default" >
      <div class="container mt-2 mb-2">
        <div class="navbar-header">
          <a class="navbar-brand" href="/" style="float:left">
            <img src="images/home-longevidade-log.jpg?crc=259478626" alt="" width="390" height="88"/>
          </a>
          <button 
            type="button" 
            class="navbar-toggle" 
            data-toggle="collapse" 
            data-target="#navbar" 
            style="background-color:transparent; position:absolute; right:0; top:15px"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <a href="/sobre"><li><b>Sobre <br>a Torrent</b></li></a>
            <a href="/programa"><li><b>Sobre <br>o Programa</b></li></a>
            <a href="/produtos"><li><b>Produtos <br>participantes</b></li></a>
            <a href="/farmacias"><li><b>Onde comprar <br>os produtos</b></li></a>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="menus_mobile mt-1 mb-1 pt-3">
    <div id="mobile_logo"></div>
    <div class="list">
      <ul class="list-group">
        <a href="/lgv_login"><li class="list-group-item mt-2 mb-2" style="background: #00A0D9">NOVO PEDIDO</li></a>
        <a href="/cadastro_adesao"><li class="list-group-item mt-1" style="background: #00A0D9">CADASTRAR-SE</li></a>
        <a href="/"><li class="list-group-item mt-1" style="background: #223164">Página inicial</li></a>
        <a href="/sobre"><li class="list-group-item mt-1" style="background: #223164">Sobre a Torrent</li></a>
        <a href="/programa"><li class="list-group-item mt-1" style="background: #223164">Sobre o programa</li></a>
        <a href="/produtos"><li class="list-group-item mt-1" style="background: #223164">Produtos participantes</li></a>
        <a href="/farmacias"><li class="list-group-item mt-1" style="background: #223164">Onde encontrar os produtos</li></a>
        <a href="/fale_conosco"><li class="list-group-item mt-1" style="background: #223164">Fale conosco</li></a>
      </ul>
    </div>
    <script>
      $(document).ready(function(){
        $("#mobile_logo").click(function(){
          $(".menus_mobile").toggleClass("toggle");
        });
      });
    </script>
  </div>
@else
<div class="menus" style="width:100%">
    <div class="menu_background"></div>
    <nav class="navbar navbar-default" >
      <div class="container mt-2 mb-2">
        <div class="navbar-header">
          <a class="navbar-brand" href="/" style="float:left">
            <img src="images/home-longevidade-log.jpg?crc=259478626" alt="" width="390" height="88"/>
          </a>
          <button 
            type="button" 
            class="navbar-toggle" 
            data-toggle="collapse" 
            data-target="#navbar" 
            style="background-color:transparent; position:absolute; right:0; top:15px"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <a href="/sobre"><li><b>Sobre <br>a Torrent</b></li></a>
            <a href="/programa"><li><b>Sobre <br>o Programa</b></li></a>
            <a href="/produtos"><li><b>Produtos <br>participantes</b></li></a>
            <a href="/farmacias"><li><b>Onde comprar <br>os produtos</b></li></a>
          </ul>
        </div>
      </div>
    </nav>
  </div> 
  <div class="menus_mobile_logined mt-1 mb-1 pt-3">
    <div id="mobile_logo"></div>
    <div class="list">
      <ul class="list-group">
        <a href="/altera_dados_pessoais"><li class="list-group-item mt-2 mb-2" style="background: #00A0D9">DADOS PESSOAIS</li></a>
        <a href="/nova_requisicao"><li class="list-group-item mt-2 mb-2" style="background: #00A0D9">NOVO PEDIDO</li></a>
        <a href="/logout"><li class="list-group-item mt-1" style="background: #00A0D9">DESCONECTAR-SE</li></a>
        <a href="/"><li class="list-group-item mt-1" style="background: #223164">Página inicial</li></a>
        <a href="/sobre"><li class="list-group-item mt-1" style="background: #223164">Sobre a Torrent</li></a>
        <a href="/programa"><li class="list-group-item mt-1" style="background: #223164">Sobre o programa</li></a>
        <a href="/produtos"><li class="list-group-item mt-1" style="background: #223164">Produtos participantes</li></a>
        <a href="/farmacias"><li class="list-group-item mt-1" style="background: #223164">Onde encontrar os produtos</li></a>
        <a href="/fale_conosco"><li class="list-group-item mt-1" style="background: #223164">Fale conosco</li></a>
      </ul>
    </div>
    <script>
      $(document).ready(function(){
        $("#mobile_logo").click(function(){
          $(".menus_mobile_logined").toggleClass("toggle");
        });
      });
    </script>
  </div>
@endif


<div class="empty_space"></div>