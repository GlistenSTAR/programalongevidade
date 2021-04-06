<link rel="stylesheet" type="text/css" href="/css/jquery.cookiebar.css" />
<script type="text/javascript" src="/js/jquery.cookiebar.js"></script>
<script type="text/javascript">

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function acceptTerms() {
        setCookie('LGV_USER_LGPD', 1, 9999);
        setCookie('LGV_USER_DATA', Date.now(), 9999);
    }

    // $(document).ready(function () {
        if (getCookie('LGV_USER_LGPD') == "") {
            $.cookieBar({
                forceShow: true,
                message: 'Utilizamos cookies e tecnologias descritas em nossos termos de uso e política de privacidade e, ao clicar em "DE ACORDO", ou continuar navegando neste website, você concorda com essas condições.',
                acceptButton: true,
                acceptText: 'DE ACORDO',
                acceptFunction: acceptTerms,
                declineButton: false,
                declineText: 'Disable Cookies',
                declineFunction: null,
                policyButton: true,
                policyText: 'POLÍTICA DE PRIVACIDADE',
                policyURL: '/politica-de-privacidade/',
                autoEnable: true,
                acceptOnContinue: false,
                acceptOnScroll: false,
                acceptAnyClick: false,
                expireDays: 9999,
                renewOnVisit: false,
                effect: 'slide',
                element: 'body',
                append: true,
                fixed: true,
                bottom: true,
                zindex: ''
            });
        }

        @if (!empty(session('paciente')) && !session('paciente')->LGV_USER_LGPD)
        if (getCookie('LGV_USER_LGPD') != "") {

            $.ajax
            ({
                url: '/api/accept_terms/',
                type: 'GET',
                datatype: 'application/json',
                contentType: 'application/json',
                success:

                    function (result) {

                        alert(result);

                    },
                error: function () {
                    alert("Ocorreu um erro ao aceitar os termos")
                },
            });

        }
        @endif

    // });
</script>