@php

    $telefone = (!empty($farmacia->LGV_FARMACIA_TELEFONE) ? 'TELEFONE: '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[0].' - '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[1] : "");

@endphp
<div class="clearfix colelem" id="u25594"><!-- column -->
    <!-- m_editable region-id="editable-static-tag-U22332-BP_320" template="busca_farmacias.html" data-type="image" -->

    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U22329-BP_320" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
    <div class="clip_frame colelem shared_content" data-muse-uid="U22332" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u22332_content1" id="u22332"><!-- image -->
        <img class="block" alt="" width="52" height="52" data-muse-src="images/localizando_farmacias.png?crc=101785025" src="images/localizando_farmacias.png?crc=101785025" id="u22332_img">
    </div><div class="clearfix colelem shared_content" id="u22329-4" data-muse-uid="U22329" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u22329-4_content"><!-- content -->
        <p id="u22329-2">{{$farmacia->LGV_FARMACIA_NOME}}</p>
    </div><div class="clearfix colelem shared_content" id="u25295-6" data-muse-uid="U25295" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u25295-6_content"><!-- content -->
        <p id="u25295-2">{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}} {{$farmacia->LGV_FARMACIA_ENDERECO}} {{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}}
            - {{$farmacia->LGV_FARMACIA_BAIRRO}} - {{$farmacia->LGV_FARMACIA_CIDADE}}
            - {{$farmacia->LGV_FARMACIA_UF}}</p>
        <p id="u25295-4">CEP {{$farmacia->LGV_FARMACIA_ENDERECO_CEP}} - {{$farmacia->LGV_FARMACIA_EMAIL}} - {{$telefone}}</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U22326-BP_320" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U25295-BP_320" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

    <!-- /m_editable -->
    <div class="clearfix colelem" id="pu26077"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U26077-BP_320" template="busca_farmacias.html" data-type="image" data-ice-options="clickable" data-ice-editable="link" -->

        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U26205-BP_320" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <a class="nonblock nontext clip_frame grpelem shared_content" href="https://www.google.com.br/maps/search/{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}}+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_ENDERECO)}}+{{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}}+-+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_CIDADE)}}+-+{{$farmacia->LGV_FARMACIA_UF}}+-+{{$farmacia->LGV_FARMACIA_ENDERECO_CEP}}" target="_blank" data-muse-uid="U26077" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u26077_content1" id="u26077"><!-- image --><img class="block" alt="" title="Veja esse endereço no mapa" width="64" height="68" data-muse-src="images/mapa_acessa_farmacia.png?crc=87601278" src="images/mapa_acessa_farmacia.png?crc=87601278" id="u26077_img"></a><div class="clearfix grpelem shared_content" id="u26205-4" data-muse-uid="U26205" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u26205-4_content"><!-- content -->
            <p>Veja no mapa esse endereço</p>
        </div>
        <!-- /m_editable -->
    </div>
</div>