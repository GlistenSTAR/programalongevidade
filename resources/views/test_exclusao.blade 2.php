<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Título da Página (Estrutura básica de uma página com HTML 5)</title>
    <link href="/js/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
    <style>
        body{
            font-family: "Trebuchet MS", sans-serif;
            margin: 50px;
        }
        .demoHeaders {
            margin-top: 2em;
        }
        #dialog-link {
            padding: .4em 1em .4em 20px;
            text-decoration: none;
            position: relative;
        }
        #dialog-link span.ui-icon {
            margin: 0 5px 0 0;
            position: absolute;
            left: .2em;
            top: 50%;
            margin-top: -8px;
        }
        #icons {
            margin: 0;
            padding: 0;
        }
        #icons li {
            margin: 2px;
            position: relative;
            padding: 4px 0;
            cursor: pointer;
            float: left;
            list-style: none;
        }
        #icons span.ui-icon {
            float: left;
            margin: 0 4px;
        }
        .fakewindowcontain .ui-widget-overlay {
            position: absolute;
        }
        select {
            width: 200px;
        }
    </style>
</head>
<body>
<a href="#" id="dialog-link">Clique aqui para excluir seu cadastro</a>
{{--<button id="dialog-link" class="ui-button ui-corner-all ui-widget">--}}
{{--    <span class="ui-icon ui-icon-newwin"></span>Open Dialog--}}
{{--</button>--}}

<div id="dialog" title="ANONIMIZAÇÃO">
    <p>AQUI VAI O TEXTO PARA ANONIMIZAÇÃO</p>
</div>
<script src="/js/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
<script src="/js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script type="text/javascript">
    // $(document).ready(function () {

        $( "#dialog" ).dialog({
            autoOpen: false,
            width: 400,
            buttons: [
                {
                    text: "CONCORDO",
                    click: function() {
                        $( this ).dialog( "close" );

                        $.ajax
                        ({
                            url: '/api/exclude_terms/',
                            type: 'GET',
                            datatype: 'application/json',
                            contentType: 'application/json',
                            success:

                                function (result) {

                                    window.location = "/";

                                },
                            error: function () {
                                alert("Ocorreu um erro ao realizar a anonimização")
                            },
                        });

                    }
                },
                {
                    text: "NÃO CONCORDO",
                    click: function() {
                        $( this ).dialog( "close" );
                    }
                }
            ]
        });


        $( "#dialog-link" ).click(function( event ) {
            $( "#dialog" ).dialog( "open" );
            event.preventDefault();
        });

    $( "#dialog-link, #icons li" ).hover(
        function() {
            $( this ).addClass( "ui-state-hover" );
        },
        function() {
            $( this ).removeClass( "ui-state-hover" );
        }
    );

    // });
</script>
</body>
</html>