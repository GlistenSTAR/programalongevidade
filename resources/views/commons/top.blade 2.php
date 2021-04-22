<div class="clearfix grpelem" id="pu8153"><!-- group -->
    <div class="browser_width mse_pre_init" id="u8153-bw">
        <div id="u8153"><!-- simple frame --></div>
    </div>
    <div class="clearfix mse_pre_init shared_content" id="u8237-4" data-IBE-flags="txtStyleSrc" data-content-guid="u8237-4_content"><!-- content -->
        <h1>AINDA NÃO É CADASTRADO ?</h1>
    </div>
    <div class="clearfix mse_pre_init shared_content" id="u8248-4" data-IBE-flags="txtStyleSrc" data-content-guid="u8248-4_content"><!-- content -->
        <h1>JÁ É CADASTRADO ?</h1>
    </div>
    <a href="/fale_conosco" class="nonblock nontext clearfix mse_pre_init shared_content" id="u8241-4" data-IBE-flags="txtStyleSrc" data-content-guid="u8241-4_content"><!-- content -->
        <h1 id="u8241-2">•&nbsp; FALE CONOSCO</h1>
    </a>
    <a class="nonblock nontext clearfix mse_pre_init shared_content" id="u8238-4" href="http://www.torrent.com.br" target="_blank" title="Visite o site da Torrent do Brasil" data-IBE-flags="txtStyleSrc" data-content-guid="u8238-4_content"><!-- content --><h1 id="u8238-2">•&nbsp; VISITE O SITE DA TORRENT</h1></a>
    <a class="nonblock nontext clearfix mse_pre_init shared_content" id="u9321-4" href="/lgv_login" data-href="page:U17922" data-IBE-flags="txtStyleSrc" data-content-guid="u9321-4_content"><!-- content --><h1 id="u9321-2">•&nbsp; NOVO PEDIDO</h1></a>
    <div class="Button gradient rounded-corners clearfix mse_pre_init" id="buttonu8254"><!-- container box -->
        <div class="nonblock nontext clearfix grpelem shared_content" id="u8255-4" data-content-guid="u8255-4_content"><!-- content -->
            <h1 id="u8255-2">INICIAR MEU CADASTRO</h1>
        </div>
    </div>
    <div class="mse_pre_init shared_content" id="u8246" data-content-guid="u8246_content"><!-- custom html -->
        <form name="FormCadastro" action="/cadastro_adesao" method="post" id="FormCadastro">
            {{ csrf_field() }}
            <input name="cpfContato" id="cpfContato" class="form-home-cadastro" data-content-type='cpf' type="text" placeholder="Digite o seu CPF para começarmos"></form>
    </div>
    <div class="clip_frame mse_pre_init" id="u8244"><!-- image -->
        <img class="block temp_no_img_src" id="u8244_img" data-orig-src="images/home_longevidade_seta_forms.png?crc=4194458960" alt="" width="18" height="23" src="images/blank.gif?crc=4208392903"/>
    </div>
    <div class="clip_frame mse_pre_init" id="u8242"><!-- image -->
        <img class="block temp_no_img_src" id="u8242_img" data-orig-src="images/home_longevidade_seta_forms.png?crc=4194458960" alt="" width="18" height="23" src="images/blank.gif?crc=4208392903"/>
    </div>
    <form name="FormLogin" action="/api/consultaCadastro" method="post" id="FormLogin">
    <div class="mse_pre_init shared_content" id="u8249" data-content-guid="u8249_content"><!-- custom html -->
            {{ csrf_field() }}
            <input name="cpfCadastro" id="cpfCadastro" class="form-home-acesso-cpf" type="text" data-content-type='cpf' placeholder="Informe seu CPF">
    </div>
    <div class="mse_pre_init shared_content" id="u8252" data-content-guid="u8252_content"><!-- custom html -->
            <input name="dtNascimentoCadastro" id="dtNascimentoCadastro" class="form-home-acesso-dt-nascto" data-content-type='data' type="text" placeholder="Data de nascimento">
    </div>
    </form>
    <a class="nonblock nontext Button gradient rounded-corners clearfix mse_pre_init" id="buttonu8239" href="#" data-href="page:U14636"><!-- container box --><div class="clearfix grpelem shared_content" id="u8240-4" data-content-guid="u8240-4_content"><!-- content --><h1 id="u8240-2">ACESSAR</h1></div></a>

    <div class="clip_frame mse_pre_init" id="u8256"><!-- image -->
        <img class="block temp_no_img_src" id="u8256_img" data-orig-src="images/home_longevidade_divisor_topo.jpg?crc=3889311943" alt="" width="1" height="71" src="images/blank.gif?crc=4208392903"/>
    </div>
    <div class="clip_frame mse_pre_init" id="u8250"><!-- image -->
        <img class="block temp_no_img_src" id="u8250_img" data-orig-src="images/home_longevidade_divisor_topo.jpg?crc=3889311943" alt="" width="1" height="71" src="images/blank.gif?crc=4208392903"/>
    </div>
    <a class="nonblock nontext clearfix mse_pre_init shared_content" id="u8247-4" href="regulamento" data-href="page:U18852" data-IBE-flags="txtStyleSrc" data-content-guid="u8247-4_content"><!-- content --><h1 id="u8247-2">(Tenho dúvidas)</h1></a>
    <a class="nonblock nontext clearfix mse_pre_init shared_content" id="u8253-4" href="regulamento" data-href="page:U18852" data-IBE-flags="txtStyleSrc" data-content-guid="u8253-4_content"><!-- content --><h1 id="u8253-2">(Tenho dúvidas)</h1></a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="/js/field_formater.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/form_control.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        @php

        $lsErrorAlert = "";

        if (!empty( app('request')->input('error'))) {
            $lsErrorAlert = "alert('O seu CPF com a data de nascimento informada não constam em nosso banco de dados.')";
        }

        @endphp

        {!! $lsErrorAlert !!}

        $("div[data-content-guid='u8255-4_content']").unbind().on("click", function (event) {

            event.preventDefault();

            if ($("#cpfContato").val() != "") {

                var form = generateForm("/cadastro_adesao", "post", '{{csrf_token()}}', $('input'), null, null);
                $('body').append(form);
                form.submit();


            } else {
                alert("Por favor preencha seu CPF");
            }


        });


        $("a[data-href='page:U14636']").unbind().on("click", function (event) {

            var blockDiv = document.createElement('div');
            $(blockDiv).css({'width' : '2200px', 'height' : '4200px', 'position' : 'absolute', 'z-index' : '1000000000000'});
            $(blockDiv).html(" ");
            $(event.currentTarget).parent().css({'position' : 'relative'});
            $(event.currentTarget).parent().append(blockDiv);

            event.preventDefault();
            event.stopPropagation();
            event.stopImmediatePropagation();


            if ($("#cpfCadastro").val() != "" && $("#dtNascimentoCadastro").val() != "") {

                $("a[data-href='page:U14636']").on("click", function(event){});
                $("a[data-href='page:U14636'] h1").text("Aguarde...");

                var form = generateForm("/api/consultaCadastro", "post", '{{csrf_token()}}', $('input'), null, null);
                $('body').append(form);
                form.submit();

            } else {
                alert("Por favor preencha seu CPF/Data de Nascimento");
                $(event.currentTarget).parent().css({'position' : 'static'});
                $(blockDiv).remove();
            }

            return false;

        });

    });
</script>
<style type="text/css">
    .Button {
        cursor: pointer !important;
    }
</style>
@include("commons.terms_lightbox")