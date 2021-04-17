<script src="js/field_formater.js"></script>
<script src="/js/jquery.mask.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/form_control.js"></script>

@if(!Auth::check())
    <div class="header" style="position: fixed; width:100%">
        <div class="container">
            <div class="row pt-3" style="color:white; font-size:12px;padding-right:0px">
            <div class="col-md-5" style="padding-right:0">
                <div class="row">
                    <div class="col-md-6" style="padding-right:0">
                    <form name="FormCadastro" action="/cadastro_adesao" method="post" id="FormCadastro">
                        {{ csrf_field() }}
                        <i class="fas fa-angle-right" style="font-size:30px">
                        <span style="font-size:13px; vertical-align:middle"><b>AINDA NÃO É CADASTRADO ?</b></span>
                        </i>
                        <input 
                            type="text" 
                            class="form-control form-control-sm form-home-cadastro" 
                            name="cpfContato" 
                            id="cpfContato" 
                            data-content-type='cpf' 
                            placeholder="Digite o seu CPF para começarmos" 
                            style="padding-left:0"
                        >
                    </form>
                    </div>
                    <div class="col-md-5 mt-2" align="center">
                        <span style="font-size:13px; vertical-align:middle"><b>(Tenho dúvidas)</b></span>
                        <button class="btn-sm btn-primary form-control mt-2" id="registeration" style="font-size:11px;margin-top:2px;height:37px"><b>INICIAR MEU CADASTRO</b></button>
                    </div>
                <img class="block" alt="" width="1" height="71" src="images/home_longevidade_divisor_topo.jpg?crc=3889311943" id="u8256_img">
                </div>
            </div>
            <div class="col-md-4 mr-3">
                <form name="FormLogin" action="/api/consultaCadastro" method="post" id="FormLogin">
                    {{ csrf_field() }}
                    <i class="fas fa-angle-right" style="font-size:30px; margin-left:-12px">
                        <span style="font-size:13px; vertical-align:middle"><b>JÁ É CADASTRADO ?</b></span>
                        <span style="font-size:13px; vertical-align:middle" class="ml-5">(Tenho dúvidas)</span>
                    </i>
                    <div class="row header_second">
                        <div class="col-md-4">
                            <input 
                                type="text" 
                                name="cpfCadastro" 
                                id="cpfCadastro" 
                                maxlength="14" 
                                autocomplete="off" 
                                data-content-type="cpf" 
                                class="form-control form-control-sm form-home-acesso-cpf" 
                                placeholder="Informe seu CPF" 
                                style="padding-left:0"
                            >
                        </div>
                        <div class="col-md-4">
                            <input 
                                name="dtNascimentoCadastro" 
                                data-content-type="data" 
                                maxlength="10" 
                                autocomplete="off" 
                                id="dtNascimentoCadastro" 
                                type="text" 
                                class="form-control form-control-sm form-home-acesso-dt-nascto" 
                                placeholder="Data de nascimento" 
                                style="padding-left:0"
                            >
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-sm btn-primary form-control" style="font-size:13px" id="access_button"><b>ACESSAR</b></button>
                        </div>
                    </div>
                </form>
            </div>
            <img class="block" alt="" width="1" height="71" src="images/home_longevidade_divisor_topo.jpg?crc=3889311943" id="u8256_img">
            <div class="col-md-2 mt-1" style="padding-left:0px;padding-right:0px">
                    <ul class="mb-0 header_third_part">
                        <li><a href="/fale_conosco"><b>FALE CONOSCO</b></a></li>
                        <li><a href="http://www.torrent.com.br"><b>VISITE O SITE DA TORRENT</b></a></li>
                        <li><a href="/lgv_login"><b>NOVO PEDIDO</b></a></li>
                    </ul>
            </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            @php
                $lsErrorAlert = "";
                if (!empty( app('request')->input('error'))) {
                    $lsErrorAlert = "alert('O seu CPF com a data de nascimento informada não constam em nosso banco de dados.')";
                }
            @endphp
            {!! $lsErrorAlert !!}

            $("#registeration").unbind().on("click", function (event) {
                event.preventDefault();
                if ($("#cpfContato").val() != "") {
                    var form = generateForm("/cadastro_adesao", "post", '{{ csrf_token() }}', $('input'), null, null);
                    $('body').append(form);
                    form.submit();
                } else {
                    alert("Por favor preencha seu CPF");
                }
            });


            $("#access_button").unbind().on("click", function (event) {
                var blockDiv = document.createElement('div');
                $(blockDiv).css({'width' : '2200px', 'height' : '4200px', 'position' : 'absolute', 'z-index' : '1000000000000'});
                $(blockDiv).html(" ");
                $(event.currentTarget).parent().css({'position' : 'relative'});
                $(event.currentTarget).parent().append(blockDiv);

                event.preventDefault();
                event.stopPropagation();
                event.stopImmediatePropagation();

                if ($("#cpfCadastro").val() != "" && $("#dtNascimentoCadastro").val() != "") {

                    $("#access_button").on("click", function(event){});
                    $("#access_button").text("Aguarde...");

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
        @include("commons.terms_lightbox")
    @else
        <div class="header_logined" style="position: fixed; width:100%">
            <div class="container">
                <div class="row pt-3" style="color:white; font-size:12px;padding-right:0px">
                <div class="col-md-4" style="padding-right:0">
                    <div class="row">
                        <div class="col-md-11" style="padding-right:0">
                            <i class="fas fa-angle-right" style="font-size:30px">
                                <span style="font-size:13px; vertical-align:middle"><b>BEM-VINDO(A) - VOCÊ ESTÁ CONECTADO:</b></span>
                            </i>
                            <p style="font-size:18px; vertical-align:middle;">
                                <b>{{Auth::user()->name}}</b>
                                <!-- {{$user->LGV_USER_NOME}} -->
                            </p>
                        </div>
                    <img class="block" alt="" width="1" height="71" src="images/home_longevidade_divisor_topo.jpg?crc=3889311943" id="u8256_img">
                    </div>
                </div>
                <div class="col-md-5 mr-3">
                        <i class="fas fa-angle-right" style="font-size:30px; margin-left:-12px">
                            <span style="font-size:13px; vertical-align:middle"><b>O QUE VOCÊ DESEJA FAZER AGORA?</b></span>
                        </i>
                        <div class="row header_second">
                            <div class="col-md-3" style="padding-left:5px; padding-right:5px">
                                <button class="btn btn-sm btn-primary form-control" style="font-size:13px" id="new_request"><b>NOVO PEDIDO</b></button>
                            </div>
                            <div class="col-md-6" style="padding-left:5px; padding-right:5px">
                                <button class="btn btn-sm btn-primary form-control" style="font-size:13px" id="change_data"><b>ALTERAR DADOS PESSOAIS</b></button>
                            </div>
                            <div class="col-md-3" style="padding-left:5px; padding-right:5px">
                                <button class="btn btn-sm btn-primary form-control" style="font-size:13px" id="logout"><b>SAIR</b></button>
                            </div>
                        </div>
                </div>
                <img class="block" alt="" width="1" height="71" src="images/home_longevidade_divisor_topo.jpg?crc=3889311943" id="u8256_img">
                <div class="col-md-2 mt-1" style="padding-left:0px;padding-right:0px">
                        <ul class="mb-0 header_third_part">
                            <li><a href="/fale_conosco"><b>FALE CONOSCO</b></a></li>
                            <li><a href="http://www.torrent.com.br"><b>VISITE O SITE DA TORRENT</b></a></li>
                            <li><a href="/lgv_login"><b>NOVO PEDIDO</b></a></li>
                        </ul>
                </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#new_request').click(function(){
                    window.location = "/nova_requisicao";
                });
                $('#change_data').click(function(){
                    window.location = "/altera_dados_pessoais";
                });
                $('#logout').click(function(){
                    window.location = "/logout";
                });
            });
        </script>
    @endif
    </script>