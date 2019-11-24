$(document).ready(function() {
    
    /* ======= CSS Animated Hamburger Icon for Bootstrap ======= */
    /* Ref: http://codepen.io/impondesk/pen/EaKoXY */
    
    $(".navbar-toggle").on("click", function () {
         $(this).toggleClass("active");
    });  
    	
	/* ======= Stop Video Playing When Close the Modal Window ====== */
    $("#modal-video .close").on("click", function() {
        $("#modal-video iframe").attr("src", $("#modal-video iframe").attr("src"));        
    });
    
    /* ====== Fullscreen Modal ====== */
	// .modal-backdrop classes
    $(".modal-fullscreen").on('show.bs.modal', function () {
      setTimeout( function() {
        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
      }, 0);
    });
    $(".modal-fullscreen").on('hidden.bs.modal', function () {
      $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    });
    
    /* ======= FAQ accordion ======= */
    $('.card-toggle').on('click', function () {
      if ($(this).find('svg').attr('data-icon') == 'plus-square' ) {
        $(this).find('svg').attr('data-icon', 'minus-square');
      } else {
        $(this).find('svg').attr('data-icon', 'plus-square');
      };
    });
	  
    
     /* ======= Testimonial Bootstrap Carousel ======= */
     /* Ref: http://getbootstrap.com/javascript/#carousel */
    $('#testimonials-carousel').carousel({
      interval: 8000 
    });
    
    

});