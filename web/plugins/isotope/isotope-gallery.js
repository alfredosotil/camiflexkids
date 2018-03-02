// ISOTOPE GALLERY

var IsotopeGallery = function () {

    var _init = function () {
        // BEGIN: ISOTOPE GALLERY 1 INIT
        // init ilightbox
//        $('.c-ilightbox-image-1').iLightBox();

        // init isotope gallery
        var $grid1 = $('.c-content-isotope-gallery.c-opt-1').imagesLoaded(function () {
            // init Isotope after all images have loaded
            $grid1.isotope({
                // options...
                itemSelector: '.c-content-isotope-item',
                layoutMode: 'packery',
                fitWidth: true,
                percentPosition: true,
            });
        });
        // END: ISOTOPE GALLERY 1

        // BEGIN: ISOTOPE GALLERY 2 INIT
        // init ilightbox
//        $('.c-ilightbox-image-2').iLightBox({skin: 'light'});

        // init isotope gallery
        var $grid2 = $('.c-content-isotope-gallery.c-opt-2').imagesLoaded(function () {
            // init Isotope after all images have loaded
            $grid2.isotope({
                // options...
                itemSelector: '.c-content-isotope-item',
                layoutMode: 'packery',
                fitWidth: true,
                percentPosition: true,
            });
        });
        // END: ISOTOPE GALLERY 2

        // BEGIN: ISOTOPE GALLERY 3 INIT
        // init ilightbox
//        $('.c-ilightbox-image-3').iLightBox();

        // init isotope gallery
        var $grid3 = $('.c-content-isotope-gallery.c-opt-3').imagesLoaded(function () {
            // init Isotope after all images have loaded
            $grid3.isotope({
                // options...
                itemSelector: '.c-content-isotope-item',
                layoutMode: 'packery',
                fitWidth: true,
                percentPosition: true,
            });
        });
        // END: ISOTOPE GALLERY 3

        // BEGIN: ISOTOPE GALLERY 4 INIT
        // init ilightbox
//        $('.c-ilightbox-image-4').iLightBox();
        $('img[data-lightbox-gallery]').iLightbox({
                type: 'image', //'image', 'inline', 'ajax', 'iframe', 'swf' and 'html'
                loop: true,
                arrows: true,
                closeBtn: true,
                title: null,
                href: null,
                content: null,
                beforeShow: function(a, b){ },
                onShow: function(a, b){ },
                beforeClose: function(){ },
                afterClose: function(){ },
                onUpdate: function(a){ },
                template: {
			container: '<div class="iLightbox-container"></div>',
			image: '<div class="iLightbox-media"></div>',
			iframe: '<div class="iLightbox-media iLightbox-iframe"></div>',
			title: '<div class="iLightbox-details"></div>',
			error: '<div class="iLightbox-error">The requested content cannot be loaded.<br/>Please try again later.</div>',
			closeBtn: '<a href="#" class="iLightbox-close"></a>',
			prevBtn: '<div class="iLightbox-btnPrev"><a href="javascript:;"></a></div>',
			nextBtn: '<div class="iLightbox-btnNext"><a href="javascript:;"></a></div>'
		}
            });
        // init isotope gallery
        var $grid4 = $('.c-content-isotope-gallery.c-opt-4').imagesLoaded(function () {
            // init Isotope after all images have loaded
            $grid4.isotope({
                // options...
                itemSelector: '.c-content-isotope-item',
                layoutMode: 'packery',
                fitWidth: true,
                percentPosition: true,
            });
        });
        // Filter buttons
        $('.c-content-isotope-filter-1').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid4.isotope({filter: filterValue});
            $('.c-content-isotope-filter-1 .c-isotope-filter-btn').removeClass('c-active');
            $(this).addClass('c-active');

            // scroll to top of element on click
            $('html, body').stop();
            $('html, body').animate({
                scrollTop: $("#c-isotope-anchor-1").offset().top
            }, 500);
        });
        // END: ISOTOPE GALLERY 4

        // BEGIN: ISOTOPE GALLERY 5 INIT
        // init ilightbox
//        $('.c-ilightbox-image-5').iLightBox();

        // init isotope gallery
        var $grid5 = $('.c-content-isotope-gallery.c-opt-5').imagesLoaded(function () {
            // init Isotope after all images have loaded
            $grid5.isotope({
                // options...
                itemSelector: '.c-content-isotope-item',
                layoutMode: 'packery',
                fitWidth: true,
                percentPosition: true,
            });
        });
        // Filter buttons
        $('.c-content-isotope-filter-2').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid5.isotope({filter: filterValue});
            $('.c-content-isotope-filter-2 .c-isotope-filter-btn').removeClass('c-active');
            $(this).addClass('c-active');

            // scroll to top of element on click
            $('html, body').stop();
            $('html, body').animate({
                scrollTop: $("#c-isotope-anchor-2").offset().top
            }, 500);
        });
        // END: ISOTOPE GALLERY 5

    }

    return {
        //main function to initiate the module
        init: function () {

            _init();

        }

    };
}();

$(document).ready(function () {
    IsotopeGallery.init();
});