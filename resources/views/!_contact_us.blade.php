@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" type="text/css" href="css/!contact_us.css"/>
  <div class="container_fluid contact_us">
    <div class="background"><div class="faca"></div>
      <div class="container">
        <p class="faca_letter"><b>Faça contato</b></p>
      </div>
    </div>
    <hr style="border-top:40px solid #2DBAD1; margin-top:0">
    <div class="container">
      <div class="row">
        <hr style="border-top:10px solid #2DBAD1; width:70%; margin-bottom:0" align="left">
        <h2>Você tem dúvidas? Fale com a nossa equipe</h2>
        <p>Nosso SAT e nossa equipe de gestão do programa Longevidade estão a sua disposição para esclarecer dúvidas sobre produtos, os termos do regulamento do programa e também sobre novas adesões. Utilize o formulário abaixo e aguarde nosso contato por meio do seu telefone ou e-mail.</p>
      </div>
      <div class="row">
        <div class="col-md-6 left">
          <div>
            <h3>Endereço da Torrent:</h3>
            <p>Avenida Dr. Chucri Zaidan, 1240<br>
              Edifício Morumbi Golden Tower- Torre A - 24º andar.<br>
              Santo Amaro – São Paulo/SP</p>
          </div>
          <div>
            <h3>Nosso e-mail de contato</h3>
            <p>sat@torrent.com.br</p>
          </div>
          <div>
            <h3><img class="block" id="u77115_img" alt="" width="27" height="27" data-muse-src="images/telefone_atendimento_longevidade2.png?crc=412204934" src="images/telefone_atendimento_longevidade2.png?crc=412204934">&nbsp;0800 333 1234</h3>
            <p>Caso você queira falar conosco sobre o programa<br> Longevidade utilize o número acima</p>
          </div>
        </div>
        <div class="col-md-6 right">
          <div>
            <label>Name : </label>
            <input type="text" class="form-control fc_texto" id="fc_nome" name="Nome" required placeholder="Digite seu nome" required>
          </div>

          <div>
            <label>E-mail : </label>
            <input id="fc_email" data-content-type='email' name="Email" type="text" class="form-control fc_texto" required placeholder="Digite seu e-mail">
          </div>
          <div>
            <label>Estado : </label>
            <select id="fc_estado" style="color:grey!important" name="Estado" class="fc_caixa_selecao form-control" required>
              <option value="">Selecione um estado</option>
              @foreach ($laEstados as $estado)
                <option value="{{$estado->ESTADO_ID}}">{{$estado->ESTADO_UF}} - {{$estado->ESTADO_NOME}}</option>
              @endforeach
            </select>
          </div>
          <div>
            <label>Cidade : </label>
            <select id="fc_cidade" name="Cidade" class="fc_caixa_selecao form-control" style="color:grey!important" required>
              <option value="" selectec>Selecione sua cidade</option>
            </select>
          </div>
          <div>
            <label>Motivo do seu contato : </label>
            <input type="text" class="form-control fc_texto" id="fc_motivo" name="Motivo" maxlength="255" placeholder="Como podemos ajudar?" required></div>
          <div>
            <label>Sobre qual produto quer falar : </label>
            <select id="fc_produtos" name="Produto" class="fc_caixa_selecao form-control" style="color:grey!important" required>
              <option value="">Selecione um Produto</option>
              @foreach ($laProdutos as $produto)
              <option value="{{$produto->LGV_PRODUTO_MARCA}}">{{$produto->LGV_PRODUTO_MARCA}}</option>
              @endforeach
            </select>
          </div>
          <div>
            <label>Sua mensagem : </label>
            <textarea class="form-control fc_caixa_texto" id="fc_mensagem" name="Mensagem" cols="40" rows="10" placeholder="Digite sua mensagem" required></textarea>
          </div>
          <div align="center">
            <button class="btn btn-default" id="submit">ENVIAR INFORMAÇÕES</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include("commons.estado_cidade_script")
  <script type="text/javascript">

      $("#submit").on("click", function(event) {
          var blockDiv = document.createElement('div');
          $(blockDiv).css({'width' : '2200px', 'height' : '4200px', 'position' : 'absolute', 'z-index' : '1000000000000'});
          $(blockDiv).html(" ");
          $(event.currentTarget).parent().css({'position' : 'relative'});
          $(event.currentTarget).parent().append(blockDiv);

          event.preventDefault();

          if (validateForm($('input'), $('select'), $('textarea'))) {

              $("#submit").on("click", function(event){});
              $("#submit").text("Aguarde...");

              var form = generateForm('/submits/post_fale_conosco', 'POST', '{{csrf_token()}}', $('input'), $('select'), $('textarea'));
              $('body').append(form);
              form.submit();
          } else {
              $(event.currentTarget).parent().css({'position' : 'static'});
              $(blockDiv).remove();
          }
      });
    </script>
@endsection