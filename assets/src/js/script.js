


//carosel speed control
 $(document).ready(function(){
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    autoplay:true,
    autoplaySpeed:3000,
    dots: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 3,
    asNavFor: '.slider-for',
    autoplay:true,
    autoplaySpeed:2000,
    dots: false,
    focusOnSelect: true,
     responsive: [
      {
        breakpoint: 1024,
        settings: {
            centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
            centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        
        breakpoint: 480,
        settings: {
           centerMode: false,
        //centerPadding: '60px',
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('a[data-slide]').click(function(e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.slider-nav').slick('slickGoTo', slideno - 1);
  });
  $(".readmore_expand").click(function(){
    $(this).parent().children(".prod_home_textbox_inner").addClass("expand_readmore_div");
    //$(this).hide();
    $(this).parent().children(".readmore_expandforless").show();
  });
  $(".readmore_expandforless").click(function(){
    $(this).parent().children(".prod_home_textbox_inner").removeClass("expand_readmore_div");
    $(this).hide();
    $(this).parent().children(".readmore_expand").show();
  });
  $(".partner_tri").click(function(){
    $(".be_a_partnr_cont").fadeIn("slow");
    $(this).parent().parent().parent().parent().find(".mob_overlycont").fadeOut();

  });
   $(".close_beapartner").click(function(){
    $(".be_a_partnr_cont").fadeOut("slow");
  });

  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

       //>=, not <=
      if (scroll >= 500) {
          $(".menubar").addClass("fixed_header");
      }
      else {
        $(".menubar").removeClass("fixed_header");
      }
  });
  $(".menu_mobile").click(function(){
    $(this).children(".fa").fadeIn();
    $('.menu_mobile').not(this).each(function(){
      $(this).children(".fa").fadeOut();
    });
  });
  $(".close_section").click(function(){
    $(this).parent(".mob_overlycont").fadeOut("slow");
  });
  $(".hamburger__icon").click(function(){
    $(".mob_overlycont").fadeIn("slow");
  });
     //jaralax

      // $('.jarallax').jarallax({
      //       speed: 0.5,
      //       imgWidth: 1366,
      //       imgHeight: 768
        //});

      //wow

       wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };

     
 });
 $(document).ready(function(){
   // Add smooth scrolling to all links
   $("a").on('click', function(event) {

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
       }, 2000, function(){

         // Add hash (#) to URL when done scrolling (default click behavior)
         window.location.hash = hash;
       });
     } // End if
   });
 });
 ///////////////////////////////////////// gallery start ///////////////////////////////
 
 ////////////////////////////////////////gallery end///////////////////////////////////////////////////

 