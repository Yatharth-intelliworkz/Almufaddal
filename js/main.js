// header
window.addEventListener("scroll", function () {
  const header = document.querySelector(".header");
  if (window.scrollY > 0) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {

  $('.hero_slider').slick({
    autoplay: false,
    autoplaySpeed: 4000,
    fade: true,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          arrows: false,
        }
      }
    ]
  });

  // Custom Navigation
  $('.prev').click(function () {
    $('.hero_slider').slick('slickPrev');
  });

  $('.next').click(function () {
    $('.hero_slider').slick('slickNext');
  });

  $('.hero_slider').on('beforeChange', function () {
    // Remove the direct pseudo-element manipulation
    $('.slick-dots li').removeClass('progress-active');
    // Add the class to the first dot to restart animation
    $('.slick-dots li.slick-active').addClass('progress-active');
  });

  // process slider
  $('.processslider').slick({
    dots: false,
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 500,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 576,
        settings: {
          arrows: false,
          autoplaySpeed: 2000,
          speed: 2000,
        }
      }
    ]
  });

  // indus slider
  // $('.home_inds_slider').slick({
  //   infinite: true,
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   // centerMode:true,
  //   autoplaySpeed: 4000,
  //   dots: true,
  //   arrows: false,
  //   responsive: [
  //     {
  //       breakpoint: 1024,
  //       settings: {
  //         slidesToShow: 2,
  //         slidesToScroll: 1,
  //       }
  //     },
  //     {
  //       breakpoint: 576,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //       }
  //     },
  //   ]
  // });

  // servcice slider
  $('.service_slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 4000,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });

  // test slider
  $('.test_msg_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    autoplay: false,
    autoplaySpeed: 2000,
    pauseOnHover: false,
    pauseOnFocus: false,
    asNavFor: '.test_face_slider',
    responsive: [
      {
        breakpoint: 576,
        settings: {
          arrows: false,
          dots: true
        }
      }
    ]

  });
  $('.test_face_slider').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    infinte: true,
    arrows: false,
    loop: true,
    asNavFor: '.test_msg_slider',
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 4,
        }
      }
    ]
  });
  // test slider


  // search box
  $('.search-btn').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('open');
    $('.search-box__dropdown').toggleClass('open');
  });

  // Prevent hiding when clicking inside the search input
  $('.search-box__dropdown').on('click', function (e) {
    e.stopPropagation(); // Prevent event bubbling
  });

  // Hide dropdown when clicking outside
  $(document).on('click', function (e) {
    if (!$(e.target).closest('.search-box').length) {
      $('.search-box__dropdown').removeClass('open');
      $('.search-btn').removeClass('open');
    }
  });

});

// cetificate qm slider
$('.certificate_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  infinte: true,
  loop: true,
  arrows: true,
});
// network slider
$('.network_slider').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  infinite: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 1200, // screens < 1200px
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 992, // screens < 992px
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768, // screens < 768px
      settings: {
        slidesToShow: 2,
        arrows: false,
        dots: true
      }
    },
    {
      breakpoint: 576, // screens < 576px
      settings: {
        slidesToShow: 1,
        arrows: false,
        dots: true
      }
    }
  ]
});


// category select js
$(document).ready(function () {
  $("#categoryFilter").change(function () {
    var selectedCategory = $(this).val(); // Jo category select hui
    $(".category-item .row").hide(); // Pehle sabko hide kar do

    if (selectedCategory === "all") {
      $(".category-item .row").show(); // Agar "Show All" select hai, toh sab wapas show ho
    } else {
      $("#" + selectedCategory).show(); // Sirf selected category ka section show ho
    }
  });
});

// project


const slider = $('.project_slider');

$('#exampleModal').on('shown.bs.modal', () => {
  if (!slider.hasClass('slick-initialized')) {
    slider.slick({ slidesToShow: 1, dots: true, arrows: false });
  }
}).on('hidden.bs.modal', () => {
  if (slider.hasClass('slick-initialized')) slider.slick('unslick');
});

slider.on('click', '.slick-dots li', e => e.preventDefault());


// 
$('.boiler_slider').slick({
  centerMode: true,
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 4000,
  dots: false,
  arrows: false,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
         dots: true,
         autoplay: true,
         centerMode: false,
      }
    }
  ]
});

$('#boiler-next').on('click', function () {
  $('.boiler_slider').slick('slickNext');
});


$('#boiler-prev').on('click', function () {
  $('.boiler_slider').slick('slickPrev');
});




