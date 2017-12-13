( function ($) {
    var $topo = $( '.topo' ),
        $firstTag = $( '[rel=tag]' ).first();

    $firstTag.css( 'margin-left', 5 );

    $topo.click( function () {
        $( 'html,body' ).animate({ scrollTop : 0 }, 300 );

        return false;
    });

    $( '#contato-form' ).validate({
        rules: {
            Nome: {
                required: true,
                minlength: 2
            },
            Email: {
                required: true,
                email: true
            },
            Assunto: {
                required: true,
                minlength: 2
            },
            Mensagem: {
                required: true,
                minlength: 5
            },
        },
        messages: {
            Nome: {
                required: 'Insira seu nome',
                minlength: 'O nome deve conter no mínimo 2 caracteres'
            },
            Email: {
                required: 'Insira seu email',
                email: 'Insira um email válido'
            },
            Assunto: {
                required: 'Insira o assunto',
                minlength: 'O assunto deve conter no mínimo 2 caracteres'
            },
            Mensagem: {
                required: 'Escreva sua mensagem',
                minlength: 'A mensagem deve conter no mínimo 5 caracteres'
            }
        }
    });

    $( '#pergunta-form' ).validate({
        rules: {
            Nome: {
                required: true,
                minlength: 2
            },
            Email: {
                required: true,
                email: true
            },
            Pergunta: {
                required: true,
                minlength: 5
            },
        },
        messages: {
            Nome: {
                required: 'Insira seu nome',
                minlength: 'O nome deve conter no mínimo 2 caracteres'
            },
            Email: {
                required: 'Insira seu email',
                email: 'Insira um email válido'
            },
            Mensagem: {
                required: 'Escreva sua pergunta',
                minlength: 'A pergunta deve conter no mínimo 5 caracteres'
            }
        }
    });
})(jQuery);