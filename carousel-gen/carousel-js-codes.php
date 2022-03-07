<script type="text/javascript">
// slider image handler
  $(document).ready(function(){
    //karuzela
    var existingCarouselSlides = $('[data-istnieje~="istnieje"]');
    for (var i = 0; i < existingCarouselSlides.length; i++) {
      existingCarouselSlides[i].classList.remove("hide-carousel-item")
    };



    let isDesktop = true;
    const breakPoint = 630;
    $(window).width() > breakPoint ? isDesktop = true : isDesktop = false;


    function setDesktopImages() {
      $('#slide-image-one').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-1-mobile.jpg");
      $('#slide-image-two').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-1-mobile.jpg");
      $('#slide-image-three').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/pozy-1-mobile.jpg");
      $('#slide-image-four').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-2-mobile.jpg");
      $('#slide-image-five').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/plusy-2-mobile.jpg");
      $('#slide-image-six').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-2-mobile.jpg");
      $('#slide-image-seven').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/pozy-2-mobile.jpg");
      $('#slide-image-eight').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/plusy-3-mobile.jpg");
      $('#slide-image-nine').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-3-mobile.jpg");
      $('#slide-image-ten').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/czworo-3-mobile.jpg");
      $('#slide-image-eleven').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-3-mobile.jpg");
      $('#slide-image-twelve').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-5-mobile.jpg");
      $('#slide-image-thirteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/plusy-4-mobile.jpg");
      $('#slide-image-fourteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/czworo-4-mobile.jpg");
      $('#slide-image-fifteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-4-mobile.jpg");
      $('#slide-image-sixteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/czworo-3-mobile.jpg");
      $('#slide-image-seventeen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/pozy-3-mobile.jpg");
      $('#slide-image-eighteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/czworo-4-mobile.jpg");
      $('#slide-image-nineteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-5-mobile.jpg");
      $('#slide-image-twenty').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-4-mobile.jpg");
      $('#slide-image-twenty-one').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/plusy-3-mobile.jpg");

    }

    function setMobileImages() {
      $('#slide-image-one').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-1-desktop.jpg");
      $('#slide-image-two').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-1-desktop.jpeg");
      $('#slide-image-three').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/pozy-1-desktop.jpg");
      $('#slide-image-four').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-2-desktop.jpg");
      $('#slide-image-five').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/plusy-2-desktop.jpg");
      $('#slide-image-six').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-2-desktop.jpeg");
      $('#slide-image-seven').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/pozy-2-desktop.jpg");
      $('#slide-image-eight').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/plusy-3-desktop.jpg");
      $('#slide-image-nine').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-3-desktop.jpg");
      $('#slide-image-ten').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/czworo-3-desktop.jpg");
      $('#slide-image-eleven').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-3-desktop.jpeg");
      $('#slide-image-twelve').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-5-desktop.jpg");
      $('#slide-image-thirteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/plusy-4-desktop.jpg");
      $('#slide-image-fourteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/czworo-4-desktop.jpg");
      $('#slide-image-fifteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-4-desktop.jpeg");
      $('#slide-image-sixteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/czworo-3-desktop.jpg");
      $('#slide-image-seventeen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/pozy-3-desktop.jpg");
      $('#slide-image-eighteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/czworo-4-desktop.jpg");
      $('#slide-image-nineteen').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/victoria-5-desktop.jpeg");
      $('#slide-image-twenty').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/niepamiec-4-desktop.jpg");
      $('#slide-image-twenty-one').attr("src", "<?php echo get_template_directory_uri(); ?>/images/slider/plusy-3-desktop.jpg");



    }

    if (!isDesktop) {
      setDesktopImages();
    } else if (isDesktop) {
      setMobileImages();
    }

    $(window).resize(function() {
      if (isDesktop && $(window).width() < breakPoint) {
        isDesktop = false;
        setDesktopImages();

      } else if (!isDesktop && $(window).width() > breakPoint) {
        isDesktop = true;
        setMobileImages();

      }
    })

    var carousels = $(".carousel-item-container");
    for (var i = 0; i < carousels.length; i++) {
      if( carousels[i].dataset.istnieje !== "istnieje") {
        carousels[i].parentNode. removeChild(carousels[i]);
      }
      // carousels[i].remove()
    }
// SLICK
      $('.carousel-container').slick({
        // infinite: false,
        slidesPerRow: 3,
        slidesToShow: 3,
        arrows: false,
        dots: true,
        slidesToScroll: 1,
        initialSlide: 3,
        respondTo: "min",
        autoplay: true,
        variableWidth: true,
        responsive: [
      {
        breakpoint: 1250,
        settings: {
          slidesToShow: 2,
          dots: true,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: true
        }
      },
      {
        breakpoint: 600,
        setting: {
          arrows: true
        }
      }
    ]
    });




    // var allCarouselSlides = [<?php echo do_shortcode('[sv slug="karuzela_1_istnieje"]'); ?>, <?php echo do_shortcode('[sv slug="karuzela_2_istnieje"]'); ?>, <?php echo do_shortcode('[sv slug="karuzela_3_istnieje"]'); ?>, <?php echo do_shortcode('[sv slug="karuzela_4_istnieje"]'); ?>]
    // var carouselSlidesTest = ["istnieje", , "istnieje"]
    //
    // var fruits = ["apple", "orange", "cherry"];
    // fruits.forEach(myFunction);
    //
    // function myFunction(item, index) {
    //   console.log(item, index);;
    // }
    //
    // data-istenieje. i na podstawie data-istnieje bede dodawal klase displaynoneimportant
  });
</script>