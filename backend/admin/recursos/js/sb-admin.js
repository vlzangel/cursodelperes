var table = "";
jQuery(document).ready(function() {
    table = jQuery('#dataTable').DataTable({
        "language": {
            "emptyTable":           "No hay datos disponibles en la tabla.",
            "info":                 "Del _START_ al _END_ de _TOTAL_ ",
            "infoEmpty":            "Mostrando 0 registros de un total de 0.",
            "infoFiltered":         "(filtrados de un total de _MAX_ registros)",
            "infoPostFix":          " (actualizados)",
            "lengthMenu":           "Mostrar _MENU_ registros",
            "loadingRecords":       "Cargando...",
            "processing":           "Procesando...",
            "search":               "Buscar:",
            "searchPlaceholder":    "Dato para buscar",
            "zeroRecords":          "No se han encontrado coincidencias.",
            "paginate": {
                "first":            "Primera",
                "last":             "Última",
                "next":             "Siguiente",
                "previous":         "Anterior"
            },
            "aria": {
                "sortAscending":    "Ordenación ascendente",
                "sortDescending":   "Ordenación descendente"
            }
        },
        "scrollX": true,
        "ajax": {
            "url": HOME+"/ajax/list.php",
            "type": "POST"
        }
    });

} );

function abrir_link(_this){
    jQuery.post(
        HOME+"/modales/"+_this.attr("data-modal")+".php",
        {
            ID: _this.attr("data-id")
        },
        function(data){
            jQuery("#modal .modal-body").html( data );
            jQuery("#modal #modalTitulo").html( _this.attr("data-titulo") );
            jQuery("#abrir_modal").click();
        }
    );
}

function cerrar(){
    jQuery("#modal .close").click();
}

function initDimenciones(W, H){
    GW = W;
    GH = H;
}

var GW = 800;
var GH = 600;
function subirImg(evt){
    var files = evt.target.files;
    getRealMime(this.files[0]).then(function(MIME){
        if( MIME.match("image.*") ){
            var reader = new FileReader();
            reader.onload = (function(theFile) {
                return function(e) {
                    redimencionar(e.target.result, GW, GH, function(img){
                        img_cargada(img); 
                    });
                };
           })(files[0]);
           reader.readAsDataURL(files[0]);
        }else{
            alert("Solo se permiten imagenes");
        }
    }).catch(function(error){
        alert("Solo se permiten imagenes");
    });     
}

function redimencionar(IMG_CACHE, _W, _H, CB){
    contenedor_temp();
    var ximg = new Image();
    ximg.src = IMG_CACHE;
    ximg.onload = function(){
        jQuery("#kmimos_redimencionar_imagenes #kmimos_img_temp").attr("src", ximg.src);
        var rxi = jQuery("#kmimos_redimencionar_imagenes #kmimos_img_temp")[0];
        var rw = rxi.width;
        var rh = rxi.height;
        if( rw < _W && rh < _H ){
            CB( IMG_CACHE );
        }else{
            var w = _W;
            var h = _H;
            if( rw > rh ){
                h = Math.round( ( rh * w ) / rw );
            }else{
                w = Math.round( ( rw * h ) / rh );
            }
            CA = d("<canvas id='kmimos_canvas' width='"+w+"' height='"+h+"'>");
            jQuery("#kmimos_redimencionar_imagenes #kmimos_canvas_temp").html(CA);
            CA = jQuery("#kmimos_redimencionar_imagenes #kmimos_canvas_temp #kmimos_canvas");
            CTX = c("kmimos_canvas");
            if(CTX){
                CTX.drawImage(ximg, 0, 0, w, h);
                CB( CA[ 0 ].toDataURL("image/jpeg") );
            }else{
                return false;
            }
        }
    }
}

function getRealMime(file) {
    return new Promise((resolve, reject) => {
        if (window.FileReader && window.Blob) {
            let slice = file.slice(0, 4);
            let reader = new FileReader();
          
            reader.onload = () => {
                let buffer = reader.result;
                let view = new DataView(buffer);
                let signature = view.getUint32(0, false).toString(16);
                let mime = 'unknown';

                switch ( String(signature).toLowerCase() ) {
                    case "89504e47":
                        mime = "image/png";
                    break;
                    case "47494638":
                        mime = "image/gif";
                    break;
                    case "ffd8ffe0":
                        mime = "image/jpeg";
                    break;
                    case "ffd8ffe1":
                        mime = "image/jpeg";
                    break;
                    case "ffd8ffe2":
                        mime = "image/jpeg";
                    break;
                    case "ffd8ffe3":
                        mime = "image/jpeg";
                    break;
                    case "ffd8ffe8":
                        mime = "image/jpeg";
                    break;
                }

                resolve(mime);

            }
            reader.readAsArrayBuffer(slice);
        } else {
            reject(new Error('Usa un navegador moderno para una mejor experiencia'));
        }
    });
}

function initImg(id){
    document.getElementById(id).addEventListener("change", subirImg, false);
} 

function d(s){ return jQuery(s)[0].outerHTML; }
function c(i){
   var e = document.getElementById(i);
   if(e && e.getContext){
        var c = e.getContext('2d');
        if(c){ return c; }
   }
   return false;
}

function contenedor_temp(){
    if( jQuery("#kmimos_redimencionar_imagenes").html() == undefined ){
        var img = jQuery("<img>", {
            id: "kmimos_img_temp"
        })[0].outerHTML;

        var cont_canvas = jQuery("<span>", {
            id: "kmimos_canvas_temp"
        })[0].outerHTML

        var cont_general = jQuery("<div>", {
            id: "kmimos_redimencionar_imagenes",
            html: cont_canvas+img,
            style: "display: none;"
        })[0].outerHTML;

        return jQuery("body").append(cont_general);
    }else{
        var img = jQuery("<img>", {
            id: "kmimos_img_temp"
        })[0].outerHTML;

        var cont_canvas = jQuery("<span>", {
            id: "kmimos_canvas_temp"
        })[0].outerHTML

        var cont_general = jQuery("<div>", {
            id: "kmimos_redimencionar_imagenes",
            html: cont_canvas+img,
            style: "display: none;"
        })[0].outerHTML;

        jQuery("#kmimos_redimencionar_imagenes").html(cont_general);
    }
}




(function($) {
    "use strict"; // Start of use strict
    // Configure tooltips for collapsed side navigation
    $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
        template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip" style="pointer-events: none;"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })
    // Toggle the side navigation
    $("#sidenavToggler").click(function(e) {
        e.preventDefault();
        $("body").toggleClass("sidenav-toggled");
        $(".navbar-sidenav .nav-link-collapse").addClass("collapsed");
        $(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
    });
    // Force the toggled class to be removed when a collapsible nav link is clicked
    $(".navbar-sidenav .nav-link-collapse").click(function(e) {
        e.preventDefault();
        $("body").removeClass("sidenav-toggled");
    });
    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
        var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
        this.scrollTop += (delta < 0 ? 1 : -1) * 30;
        e.preventDefault();
    });
    // Scroll to top button appear
    $(document).scroll(function() {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });
    // Configure tooltips globally
    $('[data-toggle="tooltip"]').tooltip()
    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });
})(jQuery); // End of use strict

