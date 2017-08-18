/**
 * Created by andrestaipe on 13/7/17.
 */
$(document).ready(function() {

    //MODAL

    $("#btnregistrologin").on("click",function (e) {
        e.preventDefault();
        $("#registromodal").removeClass("modalnone");
        $("#loginmodal").addClass("modalnone");
    });

    $("#btnloginregistro").on("click",function (e) {
        e.preventDefault();
        $("#loginmodal").removeClass("modalnone");
        $("#registromodal").addClass("modalnone");

    });

    // FORMULARIO DE CONTACTOS
    $("#btnenviar").on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url: 'app/Resources/views/default/formulariocontactos.php',
            method: 'post',
            dataType: 'json',
            data: {
                email: $("#email").val(),
                nombre: $("#nombre").val(),
                asunto: $("#asunto").val(),
                mensaje: $("#mensaje").val()
            },
            success: function (data) {
                console.log("success");
                console.log(data.mensaje);

                var clase_msg = 'alert-success';
                if (data.error) {
                    clase_msg = 'alert-danger';
                }

                var html = '<div id="sms" class="alert ' + clase_msg +  ' alert-dismissible" role="alert">';
                html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                html += '<span aria-hidden="true">&times;</span>';
                html += '</button>';
                html += data.mensaje;
                html += '</div>';

                $('.container').prepend(html);

                $('#sms').slideUp(10000);
            },
            error:function () {
                console.log("error");
            },
            always:function() {
                console.log("done");
            }

        });

    });

    //ACTIVE ON NAVS

    $(".navbar-nav li").on("click", function() {
        $(".navbar-nav li").removeClass("active");
        $(this).addClass("active");
    });

    //VIDEO
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

    // scroll
    $('body').scrollspy({target: ".nav", offset: 200});

    // Add smooth scrolling on all links inside the navbar
    $("#pestanas a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }  // End if
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
        windowHeight = $(window).height() + 5,
        videoWidth,
        videoHeight;

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}
