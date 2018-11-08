var contactOptions = {
	'formId'			: '#contactForm',
	'errorBoxClass'		: '.help-block.text-danger',
	'submitButton'		: '#contactForm button[type="submit"]',
	'buttonLoadingGif'	: 'svg/ring-loading.svg',
	'succesMessage'		: '¡Gracias por contactarte!<br><span>Te contestaremos a la brevedad.</span>',
}

$(document).ready(function() {

	$(contactOptions.formId).on('submit', function(e) {

		e.preventDefault();

		var self = this;

        $(contactOptions.formId + ' ' + contactOptions.errorBoxClass).remove();

        name    = contactOptions.formId + ' input[name="name"]';
        email   = contactOptions.formId + ' input[name="email"]';
        phone   = contactOptions.formId + ' input[name="phone"]';
        message = contactOptions.formId + ' textarea[name="message"]';

        if (registrationValidator(name, email, phone, message))
        {
            $(contactOptions.submitButton).attr('disabled', true).append('<img src="' + contactOptions.buttonLoadingGif + '" class="submit-loader">');

            post_array = {
                'name'  : $(name).val(),
                'email' : $(email).val(),
                'phone' : $(phone).val(),
                'message' : $(message).val()
            }

            $.post($(self).attr('action'), post_array, function(data)
            {
                $(contactOptions.submitButton).attr('disabled', false).find('.submit-loader').remove();

                if (data.status == 'ok')
                {
                    emailSended();  
                }
                else
                {
                    
                }

            }, 'json');
        }

        return false;

	});

});

function emailSended()
{
	form_container = $(contactOptions.formId).parent();
    form_height = $(contactOptions.formId).height();
    $(form_container).css('min-height', form_height);
    $(contactOptions.formId).fadeOut(500, function() {

    	$(form_container).addClass('message-sended');
        $(form_container).append('<div class="message-ok" style="display:none;">' + contactOptions.succesMessage + '</div>');
        $(form_container).find('.message-ok').fadeIn(500);
    });
}

function registrationValidator(name, email, phone, message)
{
    count_error = 0;

    if ($(name).val().trim().length < 3)
    {
        $(name).parent().append('<div class="' + contactOptions.errorBoxClass.replace('.', ' ').replace('.', ' ') + '">Debe indicar su nombre y apellido.</div>');
        count_error++;
    }

    if ($(email).val().trim().length <= 0 || !validateEmail($(email).val().trim()))
    {
        $(email).parent().append('<div class="' + contactOptions.errorBoxClass.replace('.', ' ').replace('.', ' ') + '">Debe ingresar un email válido.</div>');
        count_error++;
    }

    if ($(phone).val().trim().length < 6)
    {
        $(phone).parent().append('<div class="' + contactOptions.errorBoxClass.replace('.', ' ').replace('.', ' ') + '">Debe ingresar un teléfono o celular.</div>');
        count_error++;
    }

    if (!$(message).val())
    {
        $(message).parent().append('<div class="' + contactOptions.errorBoxClass.replace('.', ' ').replace('.', ' ') + '">Debe ingresar el comentario que desea enviarnos.</div>');
        count_error++;
    }

    return count_error == 0;
}

function validateEmail(email)
{
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}