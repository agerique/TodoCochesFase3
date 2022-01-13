$("#formulario1").submit(function() {
    let idioma = $('[data-confirm]').data('confirm');
    alert(idioma);
    if ($("#email1").val().length < 1) {
        let div = $("#email1Div");
        echo({
            { __('messages.tit') } });
        let msg = "{{ __('messages.tit') }} ";
        div.text(msg);
        div.css("color", "red");
        return false;
    }
    if ($("#email1").val().length >= 1) {
        let div = $("#email1Div");
        div.text("");
        let resultado = esValido($("#email1").val());
        if (resultado == false) {
            div.text("El formato email no es correcto");
            div.css("color", "red");
            return false;
        }
    }
    if ($("#password1").val().length < 1) {
        let div = $("#password1Div");
        div.text("La contraseña es un campo obligatorio");
        div.css("color", "red");
        return false;
    }
    if ($("#password1").val().length >= 1) {
        let div = $("#email1Div");
        div.text("");
    }
});

$("#formulario2").submit(function() {
    if ($("#nombre2").val().length < 1) {
        let div = $("#nombreDiv");
        div.text("El nombre es un campo obligatorio");
        div.css("color", "red");
        return false;
    }
    if ($("#nombre2").val().length >= 1) {
        let div = $("#nombreDiv");
        div.text("");
    }
    if ($("#apellidos").val().length < 1) {
        let div = $("#apellidosDiv");
        div.text("El apellido es un campo obligatorio");
        div.css("color", "red");
        return false;
    }
    if ($("#apellidos").val().length >= 1) {
        let div = $("#apellidosDiv");
        div.text("");
    }
    if ($("#email2").val().length < 1) {
        let div = $("#emailDiv");
        div.text("El email es un campo obligatorio");
        div.css("color", "red");
        return false;
    }
    if ($("#email2").val().length >= 1) {
        let div = $("#emailDiv");
        div.text("");
        let resultado = esValido($("#email2").val());
        if (resultado == false) {
            div.text("El formato email no es correcto");
            div.css("color", "red");
            return false;
        }

    }
    if ($("#pass1").val().length < 1) {
        let div = $("#pass1Div");
        div.text("La contraseña es un campo obligatorio");
        div.css("color", "red");
        return false;
    }
    if ($("#pass1").val().length >= 1) {
        $("#pass1Div").text("");
        let div = $("#passstrength");
        if (div.text() == "Débil!" || div.text() == "Más caracteres.") {
            return false;
        }
    }
    if ($("#pass2").val().length < 1) {
        let div = $("#pass2Div");
        div.text("La confirmación es obligatoria");
        div.css("color", "red");
        return false;
    }
    if ($("#pass2").val().length >= 1) {
        let div = $("#pass2Div");
        div.text("");
    }
    if ($("#pass1").val() != $("#pass2").val()) {
        let div = $("#pass2Div");
        div.text("La contraseña no coincide");
        div.css("color", "red");
        return false;
    }
    return true;
});

$("#submitInfo").click(function() {
    let info = $("#emailInfo").val();
    $("#email2").val(info);
});

function esValido(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
$('#pass1').keyup(function(e) {
    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    var enoughRegex = new RegExp("(?=.{6,}).*", "g");
    var div = $("#passstrength");
    var barra = $("#progress-bar");
    if (false == enoughRegex.test($(this).val())) {
        div.html('Más caracteres.');
        div.css("color", "red");
        barra.removeClass();
        barra.css("width", "10%")
        barra.addClass("bg-danger");
        return false;
    } else if (strongRegex.test($(this).val())) {
        div.html('Fuerte!');
        div.css("color", "green");
        barra.removeClass();
        barra.css("width", "90%")
        barra.addClass("bg-success");
        return false;
    } else if (mediumRegex.test($(this).val())) {
        div.html('Media!');
        div.css("color", "orange");
        barra.removeClass();
        barra.css("width", "50%")
        barra.addClass("bg-warning");
        return false;
    } else {
        div.html('Débil!');
        div.css("color", "red");
        barra.removeClass();
        barra.css("width", "25%")
        barra.addClass("bg-danger");
        return false;
    }
});