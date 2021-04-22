@php

    $style = "";
    $marginTop = 0;

    if ($key > 0) {

        if ($key == 1) {

            $marginTop = 960;

        } else if ($key > 1) {

            $marginTop = 960 + (422 * ($key - 1));
        }

        $style = "style=\"margin: ".$marginTop."px -10000px -1px 0%;\"";

    }


 $telefone = (!empty($farmacia->LGV_FARMACIA_TELEFONE) ? 'TELEFONE: '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[0].' - '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[1] : "");


@endphp

<div class="clearfix grpelem" id="u81884" {!! $style !!}><!-- column -->
    <!-- m_editable region-id="editable-static-tag-U81881-BP_320" template="busca_farmacias_logado.html" data-type="image" -->

    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U81912-BP_320" template="busca_farmacias_logado.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
    <div class="clip_frame colelem shared_content" data-muse-uid="U81881" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81881_content1" id="u81881"><!-- image -->
        <img class="block" alt="" width="52" height="52" data-muse-src="images/localizando_farmacias.png?crc=101785025" src="images/localizando_farmacias.png?crc=101785025" id="u81881_img">
    </div><div class="clearfix colelem shared_content" id="u81912-4" data-muse-uid="U81912" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u81912-4_content"><!-- content -->
        <p id="u81912-2">{{$farmacia->LGV_FARMACIA_NOME}}</p>
    </div><div class="clearfix colelem shared_content" id="u81878-6" data-muse-uid="U81878" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u81878-6_content"><!-- content -->
        <p id="u81878-2">{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}} {{$farmacia->LGV_FARMACIA_ENDERECO}} {{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}}
            - {{$farmacia->LGV_FARMACIA_BAIRRO}} - {{$farmacia->LGV_FARMACIA_CIDADE}}
            - {{$farmacia->LGV_FARMACIA_UF}}</p>
        <p id="u81878-4">CEP {{$farmacia->LGV_FARMACIA_ENDERECO_CEP}} - {{$farmacia->LGV_FARMACIA_EMAIL}} - {{ $telefone }}</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U81883-BP_320" template="busca_farmacias_logado.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U81878-BP_320" template="busca_farmacias_logado.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

    <!-- /m_editable -->
    <div class="clearfix colelem" id="pu81887"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U81887-BP_320" template="busca_farmacias_logado.html" data-type="image" data-ice-options="clickable" data-ice-editable="link" -->

        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U81899-BP_320" template="busca_farmacias_logado.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <a class="nonblock nontext clip_frame grpelem shared_content" href="https://www.google.com.br/maps/search/{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}}+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_ENDERECO)}}+{{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}}+-+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_CIDADE)}}+-+{{$farmacia->LGV_FARMACIA_UF}}+-+{{$farmacia->LGV_FARMACIA_ENDERECO_CEP}}" target="_blank" data-muse-uid="U81887" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81887_content1" id="u81887"><!-- image --><img class="block" alt="" title="Veja esse endereço no mapa" width="64" height="68" data-muse-src="images/mapa_acessa_farmacia.png?crc=87601278" src="images/mapa_acessa_farmacia.png?crc=87601278" id="u81887_img"></a><div class="clearfix grpelem shared_content" id="u81899-4" data-muse-uid="U81899" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u81899-4_content"><!-- content -->
            <p>Veja no mapa esse endereço</p>
        </div>
        <!-- /m_editable -->
    </div>
</div>