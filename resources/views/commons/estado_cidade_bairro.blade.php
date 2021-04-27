<script type = "text/javascript" >
    $(document).ready(function () {
        var estado = $("#ufId");
        var cidade = $("#cidadeId");

        function getListaCidades() {
            var idEstado = $("#ufId option:selected").text();
            $.ajax
            ({
                url: '/api/fetchCidadesByFarmaciaEstadoAction/' + idEstado,
                type: 'GET',
                datatype: 'application/json',
                contentType: 'application/json',
                success:

                    function (result) {

                        $("#cidadeId").html("");

                        $("#cidadeId").append
                        ($('<option></option>').val("").html("Selecione uma cidade"));

                        $.each(result, function (i, cidade) {

                            $("#cidadeId").append
                            ($('<option></option>').val(cidade.CIDADE_NOME).html(cidade.CIDADE_NOME));

                        })

                        if ($("#cidadeId").val() != "") {
                            getListaBairros();
                        }

                    },
                error: function () {
                    alert("Ocorreu um erro ao carregar as cidades")
                },
            });
        }

        function getListaBairros() {

            var idCidade = cidade.val();
            $.ajax
            ({
                url: '/api/fetchBairrosByCidade/' + idCidade,
                type: 'GET',
                datatype: 'application/json',
                contentType: 'application/json',
                success:

                    function (result) {

                        $("#bairroId").html("");

                        $("#bairroId").append
                        ($('<option></option>').val("").html("Selecione um bairro"));

                        $.each(result, function (i, bairro) {

                            $("#bairroId").append
                            ($('<option></option>').val(bairro.LGV_FARMACIA_BAIRRO).html(bairro.LGV_FARMACIA_BAIRRO));

                        })

                    },
                error: function () {
                    alert("Ocorreu um erro ao carregar os bairros")
                },
            });
        }

        estado.on("change", getListaCidades);
        cidade.on("change", getListaBairros);

        $("a[data-muse-uid='U859']").on('click', function(event){
            event.preventDefault();

            $("form[name='FormBusca']").submit();


        });

    });
</script>