(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;

    const h = window.innerHeight;

    const mobile = w < 1300;

    const desktop = h < w;

    const menuMobile = document.querySelector('.menu-mobile .mainMenu');

    /*window.onresize = function(){ 

      const newW = window.innerWidth;

      if(newW != w){

        location.reload(); 

      }      

    };*/

    $('p.accordion').click(function () {
      $p = $(this).parent();

      $container = $(this).parents('.fornecedor');

      if ($p.hasClass('active')) {
        $p.removeClass('active');

        $container.removeClass('active');
      } else {
        $('.fornecedor').removeClass('active');

        $p.addClass('active');

        $container.addClass('active');
      }

      $('.item.active').not($p).removeClass('active');

      //$('.item.active').not($container).removeClass('active');
    });

    /* CARROSSEL */

    $('.carrossel').slick({
      slidesToShow: 1,

      slidesToScroll: 1,

      autoplay: true,

      dots: false,

      infinite: true,

      arrows: false,

      adaptiveHeight: true,

      fade: true,

      responsive: [
        {
          breakpoint: 769,

          settings: {
            //sdots: false,
          },
        },
      ],
    });

    $('#clientes .lista').slick({
      slidesToShow: 7,

      slidesToScroll: 1,

      autoplay: true,

      dots: false,

      infinite: true,

      arrows: false,

      adaptiveHeight: true,

      responsive: [
        {
          breakpoint: 769,

          settings: {
            slidesToShow: 2,

            slidesToScroll: 1,
          },
        },
      ],
    });

    $('#blog .blog .row').slick({
      slidesToShow: 3,

      slidesToScroll: 1,

      autoplay: false,

      dots: false,

      infinite: true,

      arrows: true,

      adaptiveHeight: true,

      responsive: [
        {
          breakpoint: 769,

          settings: {
            slidesToShow: 1,

            slidesToScroll: 1,
          },
        },
      ],
    });

    $('#depoimentos .lista').slick({
      slidesToShow: 1,

      slidesToScroll: 1,

      autoplay: true,

      dots: true,

      infinite: true,

      arrows: true,

      centerMode: true,

      adaptiveHeight: false,

      responsive: [
        {
          breakpoint: 768,

          settings: {
            arrows: false,

            slidesToShow: 1,

            dots: false,

            centerMode: false,
          },
        },
      ],
    });

    /* fancybox */

    $('[data-fancybox="gallery"]').fancybox({
      buttons: ['close'],

      loop: false,

      protect: true,
    });

    if (mobile) {
      $('.menu-menu-secundario-container')
        .appendTo('.menu-menu-principal-container')
        .show();

      /* botão do menu */

      $('.menuBtn').click(function () {
        $('.menuBtn').toggleClass('act');

        if ($('.menuBtn').hasClass('act')) {
          $('.mainMenu').addClass('act');
        } else {
          $('.mainMenu').removeClass('act');
        }
      });
    } else {
      /* botão do menu */

      $('.menuBtn').click(function () {
        $(this).toggleClass('act');

        if ($(this).hasClass('act')) {
          $('.menu-menu-secundario-container').addClass('act');
        } else {
          $('.menu-menu-secundario-container').removeClass('act');
        }
      });
    }

    /*--- mansory ---*/
    function resizeGridItem(item) {
      grid = document.querySelector('.page-template-page-pautas .itens');
      rowHeight = parseInt(
        window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'),
      );
      rowGap = parseInt(
        window.getComputedStyle(grid).getPropertyValue('grid-row-gap'),
      );
      rowSpan = Math.ceil(
        (item.querySelector('.content').getBoundingClientRect().height +
          rowGap) /
          (rowHeight + rowGap),
      );
      item.style.gridRowEnd = 'span ' + rowSpan;
    }

    function resizeAllGridItems() {
      allItems = document.getElementsByClassName('item');
      for (x = 0; x < allItems.length; x++) {
        resizeGridItem(allItems[x]);
      }
    }

    function resizeInstance(instance) {
      item = instance.elements[0];
      resizeGridItem(item);
    }

    window.onload = resizeAllGridItems();
    window.addEventListener('resize', resizeAllGridItems);

    allItems = document.getElementsByClassName('item');
    for (x = 0; x < allItems.length; x++) {
      imagesLoaded(allItems[x], resizeInstance);
    }
  });
})(jQuery);
