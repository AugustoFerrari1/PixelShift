/* global $ */

$(document).ready(function () {
  $('.js-slick-carousel').slick({
    dots: true,
    infinite: true,
    speed: 400,
    fade: true,
    cssEase: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: true,
    pauseOnFocus: true,
    prevArrow:
      '<button type="button" class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow:
      '<button type="button" class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          dots: true,
        },
      },
    ],
  });

  function activateSlideAnimations($slide, slideIndex) {
    const $title = $slide.find('h2');
    const $description = $slide.find('p');
    const $button = $slide.find('.verMas');
    const $image = $slide.find('.side-image');

    // Resetear animaciones
    $title.removeClass('animate');
    $description.removeClass('animate');
    $button.removeClass('animate');
    $image.removeClass('animate');

    $('.bg-image').removeClass('active');
    $(`.bg-image[data-slide="${slideIndex}"]`).addClass('active');

    setTimeout(() => {
      $title.addClass('animate');
    }, 200);

    setTimeout(() => {
      $description.addClass('animate');
    }, 600);

    setTimeout(() => {
      $button.addClass('animate');
    }, 1000);

    setTimeout(() => {
      $image.addClass('animate');
    }, 800);
  }

  // Función para resetear animaciones
  function resetSlideAnimations($slide) {
    $slide.find('h2, p, .verMas').removeClass('animate');
    $slide.find('.side-image').removeClass('animate');
  }

  // Manejar eventos del carousel
  $('.js-slick-carousel').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    resetSlideAnimations($(slick.$slides[currentSlide]));
  });

  $('.js-slick-carousel').on('afterChange', function (event, slick, currentSlide) {
    activateSlideAnimations($(slick.$slides[currentSlide]), currentSlide);
  });

  // Activar animaciones del primer slide
  activateSlideAnimations($('.js-slick-carousel .slick-slide').first(), 0);

  // Soporte para navegación por teclado
  $(document).keydown(function (e) {
    if (e.keyCode === 37) {
      $('.js-slick-carousel').slick('slickPrev');
    } else if (e.keyCode === 39) {
      $('.js-slick-carousel').slick('slickNext');
    }
  });
});
