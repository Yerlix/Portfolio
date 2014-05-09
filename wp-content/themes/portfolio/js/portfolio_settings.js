$(document).ready(function(){

    var $container = $('#portfolio-container')
    // initialize Isotope
        $container.isotope({
            // options...
            resizable: false, // disable normal resizing
            layoutMode : 'fitRows',
            itemSelector : '.isotope-item',
            animationEngine : 'best-available',

            // set columnWidth to a percentage of container width
            masonry: { columnWidth: $container.width() / 5 }
        });

        // update columnWidth on window resize
        $(window).smartresize(function(){
            $container.isotope({
            // update columnWidth to a percentage of container width
            masonry: { columnWidth: $container.width() / 5 }
            });
        });
        $container.imagesLoaded( function(){

                $container.isotope({
                    // options...
                });
        });

        $('#portfolio-filter a').click(function(){
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });
            return false;
        });
});