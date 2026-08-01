window.onscroll = function () {
    myFunction();
};

var header = document.getElementById("header-top"),
    sticky = header ? header.offsetTop : 0;

function myFunction() {
    if (!header) return;
    window.pageYOffset > sticky + 10
        ? header.classList.add("sticky")
        : header.classList.remove("sticky");
}

function openModal() {
    var modal = document.getElementById("myModal");
    if (modal) modal.style.display = "block";
}

function closeModal() {
    var modal = document.getElementById("myModal");
    if (modal) modal.style.display = "none";
}

window.addEventListener("scroll", myFunction);


/* ---------------- Slick Sliders ---------------- */

$(document).ready(function () {

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


/* ---------------- Back To Top ---------------- */

let mybutton = document.getElementById("btn-back-to-top");

function scrollFunction() {
    if (!mybutton) return;

    document.body.scrollTop > 20 || document.documentElement.scrollTop > 20
        ? mybutton.style.display = "block"
        : mybutton.style.display = "none";
}

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

window.onscroll = function () {
    scrollFunction();
};

if (mybutton) {
    mybutton.addEventListener("click", backToTop);
}
