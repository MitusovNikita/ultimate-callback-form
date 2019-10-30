$(document).ready(function() {
    $(".modal-link").click(
        function(){
            $(".popup-overlay").toggle();
            $(".popup").toggle();
        });
    $(".popup-overlay, .cross").click(
        function(){
            $(".popup-overlay").toggle();
            $(".popup").toggle();
        });

    $("form").submit(function(e){
        e.preventDefault();

        var name = $("#ult-form-name" ).val();
        var phone = $("#ult-form-phone" ).val();
        var mail = $("#ult-form-mail" ).val();
        var message = $("#ult-form-message" ).val();
        var recaptcha = grecaptcha.getResponse();

        $.ajax({
            data: ({
                Имя: name,
                Телефон: phone,
                Email: mail,
                Сообщение: message,
                Recaptcha: recaptcha
            }),
            type: 'post',
            url: 'mail.php',
            success: function(data) {
                $(".ult-form-request").html(data);
            }
        });
    });
});
