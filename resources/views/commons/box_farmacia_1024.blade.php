@php

    $telefone = (!empty($farmacia->LGV_FARMACIA_TELEFONE) ? 'TELEFONE: '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[0].' - '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[1] : "");

@endphp
<div class="clearfix colelem temp_no_id shared_content" data-orig-id="u25594" data-content-guid="u25594_content"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu22332"><!-- column -->
        <div class="clearfix colelem temp_no_id" data-orig-id="pu22332"><!-- group -->
            <!-- m_editable region-id="editable-static-tag-U22332-BP_1024" template="busca_farmacias.html" data-type="image" -->
            <div class="clip_frame grpelem temp_no_id shared_content" data-muse-uid="U22332" data-muse-type="img_frame" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-orig-id="u22332" data-content-guid="u22332_content"><!-- image -->
                <img class="block temp_no_id temp_no_img_src" data-orig-src="images/localizando_farmacias.png?crc=101785025" alt="" width="52" height="52" data-muse-src="images/localizando_farmacias.png?crc=101785025" data-orig-id="u22332_img" src="images/blank.gif?crc=4208392903"/>
            </div>
            <!-- /m_editable -->
            <div class="clearfix grpelem temp_no_id" data-orig-id="pu22329-4"><!-- column -->
                <!-- m_editable region-id="editable-static-tag-U22329-BP_1024" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
                <div class="clearfix colelem temp_no_id" data-muse-uid="U22329" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-orig-id="u22329-4"><!-- content -->
                    <span class="placeholder" data-placeholder-for="u22329-2_content">{{$farmacia->LGV_FARMACIA_NOME}}</span>
                </div>
                <!-- /m_editable -->
            </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U25295-BP_1024" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="clearfix colelem temp_no_id" data-muse-uid="U25295" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-orig-id="u25295-6"><!-- content -->
            <span class="placeholder" data-placeholder-for="u25295-2_content">{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}} {{$farmacia->LGV_FARMACIA_ENDERECO}} {{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}} - {{$farmacia->LGV_FARMACIA_BAIRRO}} - {{$farmacia->LGV_FARMACIA_CIDADE}} - {{$farmacia->LGV_FARMACIA_UF}}</span>
            <span class="placeholder" data-placeholder-for="u25295-4_content">CEP {{$farmacia->LGV_FARMACIA_ENDERECO_CEP}} - {{$farmacia->LGV_FARMACIA_EMAIL}} - {{$telefone}}</span>
        </div>
        <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu26077"><!-- column -->
        <!-- m_editable region-id="editable-static-tag-U26077-BP_1024" template="busca_farmacias.html" data-type="image" data-ice-options="clickable" data-ice-editable="link" -->
        <a class="nonblock nontext clip_frame colelem temp_no_id shared_content" href="https://www.google.com.br/maps/search/{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}}+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_ENDERECO)}}+{{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}}+-+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_CIDADE)}}+-+{{$farmacia->LGV_FARMACIA_UF}}+-+{{$farmacia->LGV_FARMACIA_ENDERECO_CEP}}" target="_blank" data-muse-uid="U26077" data-muse-type="img_frame" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-orig-id="u26077" data-content-guid="u26077_content"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/mapa_acessa_farmacia.png?crc=87601278" alt="" title="Veja esse endereço no mapa" width="64" height="68" data-muse-src="images/mapa_acessa_farmacia.png?crc=87601278" data-orig-id="u26077_img" src="images/blank.gif?crc=4208392903"/></a>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U26205-BP_1024" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="clearfix colelem temp_no_id" data-muse-uid="U26205" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-orig-id="u26205-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u26205-4_0_content">Veja no mapa esse endereço</span>
        </div>
        <!-- /m_editable -->
    </div>
</div>