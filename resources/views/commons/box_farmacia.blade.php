@php

 $telefone = (!empty($farmacia->LGV_FARMACIA_TELEFONE) ? 'TELEFONE: '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[0].' - '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[1] : "");

@endphp

<div class="clearfix colelem" id="u25594"><!-- group -->
    <div class="clearfix grpelem" id="ppu22332"><!-- column -->
        <div class="clearfix colelem" id="pu22332"><!-- group -->
            <!-- m_editable region-id="editable-static-tag-U22332-BP_infinity" template="busca_farmacias.html" data-type="image" -->
            <div class="clip_frame grpelem" id="u22332" data-muse-uid="U22332" data-muse-type="img_frame"><!-- image -->
                <img class="block temp_no_img_src shared_content" id="u22332_img" data-orig-src="images/localizando_farmacias.png?crc=101785025" alt="" width="61" height="61" data-muse-src="images/localizando_farmacias.png?crc=101785025" src="images/blank.gif?crc=4208392903" data-content-guid="u22332_img_content"/>
            </div>
            <!-- /m_editable -->
            <div class="clearfix grpelem" id="pu22329-4"><!-- column -->
                <!-- m_editable region-id="editable-static-tag-U22329-BP_infinity" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
                <div class="clearfix colelem" id="u22329-4" data-muse-uid="U22329" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
                    <p id="u22329-2" class="shared_content" data-content-guid="u22329-2_content">{{$farmacia->LGV_FARMACIA_NOME}}</p>
                </div>
                <!-- /m_editable -->
            </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U25295-BP_infinity" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="clearfix colelem" id="u25295-6" data-muse-uid="U25295" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
            <p id="u25295-2" class="shared_content" data-content-guid="u25295-2_content">{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}} {{$farmacia->LGV_FARMACIA_ENDERECO}} {{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}} - {{$farmacia->LGV_FARMACIA_BAIRRO}} - {{$farmacia->LGV_FARMACIA_CIDADE}} - {{$farmacia->LGV_FARMACIA_UF}}</p>
            <p id="u25295-4" class="shared_content" data-content-guid="u25295-4_content">CEP {{$farmacia->LGV_FARMACIA_ENDERECO_CEP}} - {{$farmacia->LGV_FARMACIA_EMAIL}} - {{$telefone}}</p>
        </div>
        <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem" id="pu26077"><!-- column -->
        <!-- m_editable region-id="editable-static-tag-U26077-BP_infinity" template="busca_farmacias.html" data-type="image" data-ice-options="clickable" data-ice-editable="link" -->
        <a class="nonblock nontext clip_frame colelem" id="u26077" href="https://www.google.com.br/maps/search/{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}}+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_ENDERECO)}}+{{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}}+-+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_CIDADE)}}+-+{{$farmacia->LGV_FARMACIA_UF}}+-+{{$farmacia->LGV_FARMACIA_ENDERECO_CEP}}" target="_blank" data-muse-uid="U26077" data-muse-type="img_frame"><!-- image --><img class="block temp_no_img_src shared_content" id="u26077_img" data-orig-src="images/mapa_acessa_farmacia.png?crc=87601278" alt="" title="Veja esse endereço no mapa" width="75" height="79" data-muse-src="images/mapa_acessa_farmacia.png?crc=87601278" src="images/blank.gif?crc=4208392903" data-content-guid="u26077_img_content"/></a>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U26205-BP_infinity" template="busca_farmacias.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="clearfix colelem" id="u26205-4" data-muse-uid="U26205" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
            <p class="shared_content" data-content-guid="u26205-4_0_content">Veja no mapa esse endereço</p>
        </div>
        <!-- /m_editable -->
    </div>
</div>