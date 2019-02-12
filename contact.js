$(function () {

    window.verifyRecaptchaCallback = function (response) {
        $('input[data-recaptcha]').val(response).trigger('change');
    }

    window.expiredRecaptchaCallback = function () {
        $('input[data-recaptcha]').val("").trigger('change');
    }

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    console.log("ajax complete");
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable">' + messageText + '<span id="killer" class="button button--primary">Close</span></div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('.form-kill').remove();
                        $('#contact-form')[0].reset();
                        grecaptcha.reset();
                    }
                }
            });
            return false;
        }
    })
});


$(document).on("click","#killer", function () {
    $('.header .button--primary').removeClass('active').html("Contact Us");
    $('.modal').removeClass('active').fadeOut( "fast" ); 
});
