// function animateCounter(element) {
//     const target = parseInt(element.dataset.target, 10);
//     const duration = 2000; // total animation time (ms)
//     const startTime = performance.now();

//     function update(currentTime) {
//         const elapsed = currentTime - startTime;
//         const progress = Math.min(elapsed / duration, 1);
//         const value = Math.floor(progress * target);

//         element.textContent = value.toLocaleString();

//         if (progress < 1) {
//             requestAnimationFrame(update);
//         } else {
//             element.textContent = target.toLocaleString() + '+';
//         }
//     }

//     requestAnimationFrame(update);
// }

function animateCounter(element) {
    const target = parseInt(element.dataset.target, 10);
    const duration = 2000;
    const startTime = performance.now();

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const value = Math.floor(progress * target);

        element.textContent = value.toLocaleString();

        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            element.textContent = target.toLocaleString() + '+';
        }
    }

    requestAnimationFrame(update);
}

document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll(".counter");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target); // Run only once
            }
        });
    }, {
        threshold: 0.5 // 50% visible hone par start hoga
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });

});

// INIT
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.counter').forEach(counter => {
        animateCounter(counter);
    });
    // hero slider
    $(document).ready(function () {
        let progressInterval;
        let currentProgress = 0;
        const autoplaySpeed = 3000; // 3 seconds

        // Initialize Slick Slider
        $('.hero-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: autoplaySpeed,
            pauseOnHover: false,
            pauseOnFocus: false
        });

        // Function to update active pagination
        function updateActivePagination(slideIndex) {
            $('.pagination-item').removeClass('active');
            $('.pagination-item[data-slide="' + slideIndex + '"]').addClass('active');
            resetProgressBar();
            startProgressBar();
        }

        // Function to reset progress bar
        function resetProgressBar() {
            $('.progress-bar').css('width', '0%');
            currentProgress = 0;
            if (progressInterval) {
                clearInterval(progressInterval);
            }
        }

        // Function to start progress bar
        function startProgressBar() {
            const activeItem = $('.pagination-item.active');
            const progressBar = activeItem.find('.progress-bar');

            currentProgress = 0;
            const increment = 100 / (autoplaySpeed / 100); // Update every 100ms

            progressInterval = setInterval(function () {
                currentProgress += increment;
                if (currentProgress >= 100) {
                    currentProgress = 100;
                    clearInterval(progressInterval);
                }
                progressBar.css('width', currentProgress + '%');
            }, 100);
        }

        // Start initial progress bar
        startProgressBar();

        // On slide change
        $('.hero-slider').on('afterChange', function (event, slick, currentSlide) {
            updateActivePagination(currentSlide);
        });

        // Custom pagination click
        $('.pagination-item').on('click', function () {
            const slideIndex = $(this).data('slide');
            $('.hero-slider').slick('slickGoTo', slideIndex);
            updateActivePagination(slideIndex);
        });

        // Pause autoplay on manual interaction (standard behavior)
        $('.pagination-item').on('click', function () {
            $('.hero-slider').slick('slickPause');

            // Resume after 5 seconds of inactivity
            setTimeout(function () {
                $('.hero-slider').slick('slickPlay');
            }, 5000);
        });
    });

    // homewater slider
    $(document).ready(function () {

        $('.patent_slider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: false,        // ❌ Desktop autoplay OFF
            arrows: false,
            dots: false,
            infinite: false,        // ❌ Desktop no loop

            responsive: [
                {
                    breakpoint: 992,     // ≤ 992px (tablet + mobile)
                    settings: {
                        slidesToShow: 3,
                        autoplay: true,  // ✅ autoplay ON
                        autoplaySpeed: 2000,
                        speed: 600,
                        infinite: true,  // 🔥 REQUIRED for autoplay
                        pauseOnHover: false
                    }
                },
                {
                    breakpoint: 576,     // ≤ 576px (mobile)
                    settings: {
                        slidesToShow: 2,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        speed: 600,
                        infinite: true,
                        pauseOnHover: false
                    }
                }
            ]
        });

        // 🔥 IMPORTANT: force recalculation
        $(window).on('resize orientationchange', function () {
            $('.patent_slider').slick('setPosition');
        });

        // homewater slider
        // $('.home_water_slider').slick({
        //     slidesToShow: 4,
        //     slidesToScroll: 1,
        //     dots: true,
        //     arrows: false,
        //     infinite: true,
        //     autoplay: true,
        //     autoplaySpeed: 3000,
        //     responsive: [
        //         {
        //             breakpoint: 992,
        //             settings: {
        //                 slidesToShow: 3,
        //                 slidesToScroll: 1,
        //             }
        //         },
        //         {
        //             breakpoint: 576,
        //             settings: {
        //                 slidesToShow: 1,
        //                 slidesToScroll: 1,
        //             }
        //         },
        //     ]
        // });
        
       $('.home_water_slider').each(function () {
    var show = parseInt($(this).attr('data-show')) || 4;

    $(this).slick({
        slidesToShow: show,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: Math.min(show, 3)
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: Math.min(show, 2)
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});
        
        
        $('.home_blogslider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            infinite: false,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true,
                        infinite: true,
                        autoplaySpeed: 3000,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        infinite: true,
                    }
                },
            ]
        });
        $('.home_customer').slick({
            infinite: true,
            slidesToShow: 7,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000,
            cssEase: 'linear',
            dots: false,
            arrows: false,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 476,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
            ]
        });
        $('.home_iws_slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
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
        $('.home_usp_slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
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

        // enquiry        
        $('.ft_eq_btn').click(function () {
            $('.inquiry-panel').addClass('active');
            $('.inquiry-overlay').addClass('active');
        });

        $('.close-inquiry, .inquiry-overlay').click(function () {
            $('.inquiry-panel').removeClass('active');
            $('.inquiry-overlay').removeClass('active');
        });
        
        // liquid slider

        $('.liquid_app_slider').slick({
            slidesToShow: 4,        
            centerMode: true,       
            centerPadding: '60px',  
            infinite: true,         
            autoplay: true,
            arrows: false,           
            dots: true,             

            responsive: [
                {
                    breakpoint: 1441,
                    settings: {
                        slidesToShow: 4,
                        centerMode: true
                    }
                },
                {
                    breakpoint: 1281,
                    settings: {
                        slidesToShow: 3,
                        centerMode: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        centerMode: true
                    }
                }
            ]
        });
        
        // old js sliders
          $(".banner-slider").slick({
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 11000,
        speed: 500,
        cssEase: "linear",
        pauseOnHover: false,
        pauseOnFocus: false,
        pauseOnDotsHover: false,
        responsive: [
            {
                breakpoint: 768,
                settings: { arrows: false }
            }
        ]
    });

    $(".trust-slider-for").slick({
        centerMode: true,
        centerPadding: "280px",
        slidesToScroll: 3,
        slidesToShow: 3,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        asNavFor: ".trust-slider-nav",
        responsive: [
            { breakpoint: 1440, settings: { centerPadding: "80px", slidesToShow: 3 } },
            { breakpoint: 1024, settings: { centerPadding: "40px", slidesToShow: 1 } },
            { breakpoint: 768, settings: { centerPadding: "40px", slidesToShow: 1 } },
            { breakpoint: 480, settings: { centerPadding: "40px", slidesToShow: 1 } },
            { breakpoint: 425, settings: { centerPadding: "10px", slidesToShow: 1 } }
        ]
    });

    $(".trust-slider-nav").slick({
        slidesToShow: 1,
        arrows: false,
        asNavFor: ".trust-slider-for",
        dots: true,
        fade: true,
        focusOnSelect: true,
        centerMode: true
    });

    $(".brand-slider").slick({
        slidesToShow: 5,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            { breakpoint: 1440, settings: { slidesToShow: 3 } },
            { breakpoint: 768, settings: { slidesToShow: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1 } }
        ]
    });

    $(".video-slider").slick({
        slidesToShow: 3,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        useTransform: false,
        responsive: [
            { breakpoint: 768, settings: { slidesToShow: 2 } },
            { breakpoint: 481, settings: { slidesToShow: 1 } }
        ]
    });

    $(".event-slider").slick({
        slidesToShow: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000
    });

    $(".product-detail").slick({
        slidesToShow: 1,
        dots: false,
        arrows: true
    });

    $(".manufacturing").slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });

    $(".cust_slid").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        autoplay: true,
        arrows: false,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 3 } },
            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1, dots: false } }
        ]
    });

    });
});




