$(document).ready(function() {
    String.prototype.isEmpty = function() {
        if (!this.match(/\S/)) {
            return false;
        }

        return true;
    }

    $("input[data-content-type='cpf']").each(function (index, data) {
        $(data).mask('000.000.000-00');

        $(data).on('blur', function(){

            var cpf = $( this ).val().replace(/[^0-9]/g, '').toString();

            if( $( this ).val() != "" && cpf.length == 11 )
            {
                var v = [];

                //Calcula o primeiro dígito de verificação.
                v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
                v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
                v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
                v[0] = v[0] % 11;
                v[0] = v[0] % 10;

                //Calcula o segundo dígito de verificação.
                v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
                v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
                v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
                v[1] = v[1] % 11;
                v[1] = v[1] % 10;

                //Retorna Verdadeiro se os dígitos de verificação são os esperados.
                if ( (v[0] != cpf[9]) || (v[1] != cpf[10]) )
                {
                    alert('O CPF informado é inválido: ' + cpf);

                    $( this ).val('');
                    $( this ).focus();
                }
            }
            else if( $( this ).val() != "" && cpf.length != 11 )
            {
                alert('O CPF informado é inválido:' + cpf);

                $( this ).val('');
                $( this ).focus();
            }

        });

    });

    $("input[data-content-type='data']").each(function (index, data) {
        $(data).mask('00/00/0000');

        $(data).on('blur', function(){

            if( $( this ).val() != "" && !validateDate( $( this ).val())) {
                alert('A Data informada é inválida');

                $( this ).val('');
                $( this ).focus();
            }

        });

    });

    $("input[data-content-type='nome_completo']").each(function (index, data) {

        $(data).on('blur', function() {

            var nameArray = $(this).val().split(" ");

            if ($(this).val() != "" && (nameArray == null || nameArray.length <= 1)) {
                alert("Informe um nome e um sobrenome");
                $(this).val($(this).val() + " ");
                $( this ).focus();
            }

        });
    });

    $("input[data-content-type='tel']").each(function (index, data) {
        $(data).mask('(00) 0000-0000');
    });

    $("input[data-content-type='cel']").each(function (index, data) {
        $(data).mask('(00) 00000-0000');
    });

    $("input[data-content-type='crm']").each(function (index, data) {

        $(data).mask('0000000');

        $(data).on('keyup', function(){

            if(! $( this ).val().isEmpty()) {

                $( this ).val(parseInt($( this ).val(), 10));

            }

        });

    });

    $("input[data-content-type='email']").each(function (index, data) {

        $(data).on('blur', function(){

        if( $( this ).val() != "" && !validateEmail( $( this ).val())) {
                alert('O Email informado é inválido');

                $( this ).val('');
                $( this ).focus();
            }

        });
    });

});


function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}

function validateDate(txtDate)
{
    var currVal = txtDate;
    if(currVal == '')
        return false;

    var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; //Declare Regex
    var dtArray = currVal.match(rxDatePattern); // is format OK?

    if (dtArray == null)
        return false;

    //Checks for mm/dd/yyyy format.
    dtDay = dtArray[1];
    dtMonth = dtArray[3];
    dtYear = dtArray[5];

    var currentYear = (new Date()).getFullYear();

    if (dtMonth < 1 || dtMonth > 12)
        return false;
    else if (dtDay < 1 || dtDay> 31)
        return false;
    else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31)
        return false;
    else if (dtMonth == 2)
    {
        var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
        if (dtDay> 29 || (dtDay ==29 && !isleap))
            return false;
    } else if (currentYear - dtYear >= 120 || dtYear > currentYear) {
        return false;
    }
    return true;
}