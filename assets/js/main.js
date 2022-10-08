// include file html
$(document).ready(
    includeHTML,
    scrollX,
);

function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        /*search for elements with a certain atrribute:*/
        file = elmnt.getAttribute("file-template");
        if (file) {
            /* Make an HTTP request using the attribute value as the file name: */
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        elmnt.innerHTML = this.responseText;
                    }
                    if (this.status == 404) {
                        elmnt.innerHTML = "Page not found.";
                    }
                    /* Remove the attribute, and call this function once more: */
                    elmnt.removeAttribute("file-template");
                    includeHTML();
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            /* Exit the function: */
            return;
        }
    }

    console.log("chayj funto");
}

$(document).scroll(scrollX);

function scrollX() {
    var srollTop = $(document).scrollTop();
    if (srollTop <= 100) {
        $('.l-header').removeClass('l-header-scroll');
    } else {
        $('.l-header').addClass('l-header-scroll');
    }
}

$(document).ready(function () {
    $('.home-overview_galley .galley').slick({
        infinite: true,
        dots: true,
        speed: 300,
        arrows: false,
        autoplay: true,
    });

    $('.home-slide .home-slide_list').slick({
        infinite: true,
        dots: true,
        speed: 300,
        arrows: false,
        autoplay: false,
        slidesToScroll: 1,
        slidesToShow: 3,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});