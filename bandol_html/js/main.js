// MIS SCRIPTS
jQuery(document).ready (iniciar);
function iniciar(){	

	//TOPLINK
  jQuery("a.toplink").click(function() {
    jQuery("html, body").animate({
      scrollTop: jQuery(jQuery(this).attr("href")).offset().top + "px"
    }, {
      duration: 1000,
      easing: "swing"
    });
    return false;
  });

  $('.blockmap').click (function(){
  	$(this).css ('display','none');
  })  

  //COMPRIMIR ENVIOS DE FORMULARIO   
  $('input[type=number]').click (function (){
    var xname = $(this).attr("xname");
    $(this).attr('name', xname);
  });

  
  //MATCH HEIGHT
  $('.comida').matchHeight({
    //byRow: false,
  });

  $('#navbar-toggle').click (function(){
    $('#menumenu').slideToggle()
  });

  $('#menumenu li a').click (function(){      
    if ($(window).width() < 760) {     
       $('#menumenu').slideUp ('slow');
    }
  });



}; // fin iniciar