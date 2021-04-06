<script type="text/javascript">
    $(document).ready(function() {

        var estado;

        estado = $("#fc_estado");


    function getListaCidades() {

            var idEstado = estado.val();
            $.ajax
            ({
                url: '/api/fetchCidadesByEstado/' + idEstado,
                type: 'GET',
                datatype: 'application/json',
                contentType: 'application/json',
                success:

                    function (result) {


                        $("#fc_cidade").html("");
                        $("#fc_cidade").append($('<option value="">Selecione uma cidade</option>'));


                        $.each(result, function (i, cidade) {

                                $("#fc_cidade").append
                                ($('<option></option>').val(cidade.CIDADE_ID).html(cidade.CIDADE_NOME));

                        })
                    },
                error: function () {
                    alert("Ocorreu um erro ao carregar as cidades")
                },
            });
        }

        estado.on("change", getListaCidades);

    });
</script>