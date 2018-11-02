$(document).ready(function(){

    $(".dropdown-toggle").dropdown();
    (function() {
        $(window).on('scroll', function() {
        });
    }());




        /*
        =========================================================================================
        3. PROGRESS BAR
        =========================================================================================
        */
        $(".hover_box_inner").hover(function(){
            $(".progress_cont").each(function() {
                var base = $(this);
                var windowHeight = $(window).height();
                var itemPos = base.offset().top;
                var scrollpos = $(window).scrollTop() + windowHeight - 100;
                if (itemPos <= scrollpos) {
                    var auptcoun = base.find(".progress-bar").attr("aria-valuenow");
                    base.find(".progress-bar").css({
                        "width": auptcoun + "%"
                    });
                    var str = base.find(".skill>span").text();
                    var res = str.replace("%", "");
                    if (res == 0) {
                        $({
                            countNumber: 0
                        }).animate({
                            countNumber: auptcoun
                        }, {
                            duration: 4000,
                            easing: 'linear',
                            step: function() {
                                base.find(".skill>span").text(Math.ceil(this.countNumber) + "%");
                            }
                        });
                    }
                }
            });
        });

        /*
        =========================================================================================
        5.  BANNER SLIER
        =========================================================================================
        */

        var banner_slider = jQuery("#banner_slider");
        banner_slider.owlCarousel({
            loop: true,
            margin: 0,
            lazyLoad:true,
            center: true,
            smartSpeed: 1500,                
            autoplay:true,
            nav: true,
            dots:false,
            navText: ["<img src='images/bannerarrowleft.png'>","<img src='images/bannerarrowright.png'>"],  
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });


        /*
        =========================================================================================
        13. COUNTER
        =========================================================================================
        */
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        

        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        })

        /*
        =========================================================================================
        13. ACCORDION
        =========================================================================================
        */

        $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
        });

        $('.collapse').on('hidden.bs.collapse', function () {
            $(this).prev().removeClass('active');
        });

});

