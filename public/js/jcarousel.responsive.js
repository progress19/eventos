(function($) {
    $(function() {
        
        var jcarousel = $('.jcarousel');
        
    $('.jcarousel')
        .jcarousel()       // init jcarousel
        .jcarouselSwipe(); // init jcarouselSwipe

        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth()+10;

                if (width > 1024) {
                    width = width / 1;
                } else if (width >= 415) {
                    width = width / 3;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });


    /* destinos */
            
    $('.jcarousel_destinos')
        .jcarousel()       // init jcarousel
        .jcarouselSwipe(); // init jcarouselSwipe

    var jcarousel = $('.jcarousel_destinos');

        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width > 1024) {
                    width = width / 3;
                } else if (width >= 415) {
                    width = width / 1;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular',
                //center: true,
            });

        $('.jcarousel-control-prev-destinos')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next-destinos')
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination-destinos')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });


    });


})(jQuery);
