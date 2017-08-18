jQuery.validator.addMethod("dominio", function(value, element) {
    return this.optional(element) || /\w+@epn.edu.ec/.test(value);
}, "Por favor ingrese su correo institucional EPN");

$("#loginform").validate({
    rules:{
        "_username":{
            required:true
        },
        "_password":{
            required:true,
            minlength:5
        }
    },
    messages:{
        "_username":{
            required:"Es necesario un nombre de usuario"
        },
        "_password":{
            required:"Vuelve a escribir la contraseña",
            minlength:"La contraseña debe ser mayor a 5 caracteres"
        }
    },
    highlight: function(element, errorClass, validClass) {
        $(element).addClass('form-control-danger').removeClass('form-control-success');
        $(element).parent().addClass('has-danger').removeClass('has-success');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('form-control-danger').addClass('form-control-success');
        $(element).parent().removeClass('has-danger').addClass('has-success');
    }
});
$("#registroform").validate({
    rules:{
        "fos_user_registration_form[email]":{
            required:true,
            email:true,
            dominio:true
        },
        "fos_user_registration_form[username]":{
            required:true
        },
        "fos_user_registration_form[plainPassword][first]":{
            required:true,
            minlength:5
        },
        'fos_user_registration_form[plainPassword][second]':{
            required:true,
            equalTo:"#fos_user_registration_form_plainPassword_first"
        }
    },
    messages:{
        "fos_user_registration_form[email]":{
            required:"Se necesita un Email"
        },
        "fos_user_registration_form[username]":{
            required:"Ingresa tu nombre de Usuario"
        },
        "fos_user_registration_form[plainPassword][first]":{
            required:"Ingresa una contraseña",
            minlength:"Se necesita mas de 5 caracteres"
        },
        'fos_user_registration_form[plainPassword][second]':{
            required:"Repite la contraseña",
            equalTo:"Las contraseñas no coinciden"
        }
    },
    highlight: function(element, errorClass, validClass) {
        $(element).addClass('form-control-danger').removeClass('form-control-success');
        $(element).parent().addClass('has-danger').removeClass('has-success');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('form-control-danger').addClass('form-control-success');
        $(element).parent().removeClass('has-danger').addClass('has-success');
    }
});