@php

    $telefone = (!empty($farmacia->LGV_FARMACIA_TELEFONE) ? 'TELEFONE: '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[0].' - '.explode(',',$farmacia->LGV_FARMACIA_TELEFONE)[1] : "");

@endphp
<div class="clearfix colelem shared_content" data-content-guid="u81884_content" id="u81884"><!-- group -->
    <div class="clearfix grpelem" id="ppu81881"><!-- column -->
        <div class="clearfix colelem" id="pu81881"><!-- group -->
            <!-- m_editable region-id="editable-static-tag-U81881-BP_1024" template="busca_farmacias_logado.html" data-type="image" -->
            <div class="clip_frame grpelem shared_content" data-muse-uid="U81881" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81881_content1" id="u81881"><!-- image -->
                <img class="block" alt="" width="52" height="52" data-muse-src="images/localizando_farmacias.png?crc=101785025" src="images/localizando_farmacias.png?crc=101785025" id="u81881_img">
            </div>
            <!-- /m_editable -->
            <div class="clearfix grpelem" id="pu81912-4"><!-- column -->
                <!-- m_editable region-id="editable-static-tag-U81912-BP_1024" template="busca_farmacias_logado.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

                <!-- /m_editable -->
                <!-- m_editable region-id="editable-static-tag-U81883-BP_1024" template="busca_farmacias_logado.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
                <div class="clearfix colelem shared_content" id="u81912-4" data-muse-uid="U81912" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u81912-4_content"><!-- content -->
                    <p id="u81912-2">{{$farmacia->LGV_FARMACIA_NOME}}</p>
                </div>
                <!-- /m_editable -->
            </div>
        </div><div class="clearfix colelem shared_content" id="u81878-6" data-muse-uid="U81878" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u81878-6_content"><!-- content -->
            <p id="u81878-2">{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}} {{$farmacia->LGV_FARMACIA_ENDERECO}} {{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}}
                - {{$farmacia->LGV_FARMACIA_BAIRRO}} - {{$farmacia->LGV_FARMACIA_CIDADE}}
                - {{$farmacia->LGV_FARMACIA_UF}}</p>
            <p id="u81878-4">CEP {{$farmacia->LGV_FARMACIA_ENDERECO_CEP}} - {{$farmacia->LGV_FARMACIA_EMAIL}} - {{$telefone}}</p>
        </div>
        <!-- m_editable region-id="editable-static-tag-U81878-BP_1024" template="busca_farmacias_logado.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

        <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem" id="pu81887"><!-- column -->
        <!-- m_editable region-id="editable-static-tag-U81887-BP_1024" template="busca_farmacias_logado.html" data-type="image" data-ice-options="clickable" data-ice-editable="link" -->
        <a class="nonblock nontext clip_frame colelem shared_content" href="https://www.google.com.br/maps/search/{{$farmacia->LGV_FARMACIA_ENDERECO_LOGRADOURO}}+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_ENDERECO)}}+{{$farmacia->LGV_FARMACIA_ENDERECO_NUMERO}}+-+{{str_replace(' ', '+', $farmacia->LGV_FARMACIA_CIDADE)}}+-+{{$farmacia->LGV_FARMACIA_UF}}+-+{{$farmacia->LGV_FARMACIA_ENDERECO_CEP}}" target="_blank" data-muse-uid="U81887" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81887_content1" id="u81887"><!-- image --><img class="block" alt="" title="Veja esse endereço no mapa" width="64" height="68" data-muse-src="images/mapa_acessa_farmacia.png?crc=87601278" src="images/mapa_acessa_farmacia.png?crc=87601278" id="u81887_img"></a><div class="clearfix colelem shared_content" id="u81899-4" data-muse-uid="U81899" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u81899-4_content"><!-- content -->
            <p>Veja no mapa esse endereço</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U81899-BP_1024" template="busca_farmacias_logado.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

        <!-- /m_editable -->
    </div>
</div>