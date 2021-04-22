function generateForm(formAction, formMethod, csrfToken, pageInputs, pageSelects, pageTextAreas) {

    var form = document.createElement('form');
    form.setAttribute('action', formAction);
    form.setAttribute('method', formMethod);

    if (pageInputs != null) {
        pageInputs.each(function (index, data) {
            $(form).append(data);
        });
    }

    if (pageSelects != null) {
        pageSelects.each(function (index, data) {
            $(form).append(data);
        });
    }

    if (pageTextAreas != null) {
        pageTextAreas.each(function (index, data) {
            $(form).append(data);
        });
    }

    var inputToken = document.createElement('input');
    inputToken.setAttribute('type', 'hidden');
    inputToken.setAttribute('name', '_token');
    inputToken.setAttribute('value', csrfToken);

    $(form).append(inputToken);

    return form;
}

function validateForm(pageInputs, pageSelects, pageTextAreas) {

    var isFormValid = true;

    var errLabel = document.createElement('label');
    $(errLabel).val("Esse campo é obrigatório!");
    $(errLabel).css({"color": "red", "font-weight": "bold", "position":"absolute"});

    if (pageInputs != null) {
        pageInputs.each(function (index, data) {

            if($(data).attr('required') && $(data).val() == "") {
                isFormValid = false;
                $(data).css({"border-color": "red", "border-style": "solid", "border-width" : "1px"});

                $('body').append($(errLabel));
            }
        });
    }

    if (pageSelects != null) {
        pageSelects.each(function (index, data) {

            if($(data).attr('required') && $(data).val() == "") {

                isFormValid = false;
                $(data).css({"border-color": "red", "border-style": "solid", "border-width" : "1px"});
            }

        });
    }

    if (pageTextAreas != null) {
        pageTextAreas.each(function (index, data) {

            if($(data).attr('required') && $(data).val() == "") {

                isFormValid = false;
                $(data).css({"border-color": "red", "border-style": "solid", "border-width" : "1px"});
            }

        });
    }

    if (!isFormValid) {

        alert("Os campos marcados em vermelho são obrigatórios");
    }

    return isFormValid;

}

