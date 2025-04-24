// Import required dependencies
import 'bootstrap';
import 'owl.carousel';
import 'wow.js';

// Import custom styles
import './styles/app.scss';

// Initialize WOW.js for animations
new WOW().init();

// Initialize Owl Carousel
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});

// Add smooth scrolling to all links
$(document).ready(function(){
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });
}); 