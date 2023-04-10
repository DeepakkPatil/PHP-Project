// JavaScript Document



$(window).load(function () {
    "use strict";
    // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({
        'overflow': 'visible'
    });
})

$(document).ready(function () {
    "use strict";

    // scroll menu

    //old header starts
    // var sections = $('.section'),
    //     nav = $('.navbar-fixed-top,footer'),
    //     nav_height = nav.outerHeight();

    // $(window).on('scroll', function () {
    //     var cur_pos = $(this).scrollTop();

    //     sections.each(function () {
    //         var top = $(this).offset().top - nav_height,
    //             bottom = top + $(this).outerHeight();

    //         if (cur_pos >= top && cur_pos <= bottom) {
    //             nav.find('a').removeClass('active');
    //             sections.removeClass('active');

    //             $(this).addClass('active');
    //             nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
    //         }
    //     });
    // });

    // nav.find('a').on('click', function () {
    //     var $el = $(this),
    //         id = $el.attr('href');

    //     $('html, body').animate({
    //         scrollTop: $(id).offset().top - nav_height + 2
    //     }, 600);

    //     return false;
    // });

    //old header ends
    //new header starts
    
    // window.addEventListener('DOMContentLoaded', setup);

    // function setup() {
    //     //Open and close mobile nav
    //     function showHideNav() {
    //         const nav = document.getElementById('header-nav');
    //         nav.classList.toggle('slide-in'); 
    //     }
    
    //     const burger = document.getElementById('burger'); 
    //     burger.addEventListener('click', showHideNav, false); 
    
    //     //Slide in animation for individual <li>s 
    //     const lis = document.querySelectorAll('#header-nav>ul>li'); 
    
    //     let num = lis.length; 
    //     let delay = 0.3;  
    //     while(num > 0) {
    //         lis[lis.length - num].style.animationDelay = delay + 's'; 
    //         num--; 
    //         delay += 0.3; 
    //     }     
    
    // }
    // new header ends

    // Menu opacity
    // old header 
    // if ($(window).scrollTop() > 80) {
    //     $(".navbar-fixed-top").addClass("bg-nav");
    // } else {
    //     $(".navbar-fixed-top").removeClass("bg-nav");
    // }
    // $(window).scroll(function () {
    //     if ($(window).scrollTop() > 80) {
    //         $(".navbar-fixed-top").addClass("bg-nav");
    //     } else {
    //         $(".navbar-fixed-top").removeClass("bg-nav");
    //     }
    // });
    jQuery(document).ready(function($) {
      // Scroll to the desired section on click
      // Make sure to add the `data-scroll` attribute to your `<a>` tag.
      // Example: 
      // `<a data-scroll href="#my-section">My Section</a>` will scroll to an element with the id of 'my-section'.
      function scrollToSection(event) {
        event.preventDefault();
        var $section = $($(this).attr('href')); 
        $('html, body').animate({
          scrollTop: $section.offset().top
        }, 1000);
      }
      $('[data-scroll]').on('click', scrollToSection);
    }(jQuery));

    // new header 1
    const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

const linkItem = document.querySelectorAll(".nav-item");


hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});


$(document).ready(function() {
  var typewriterText = $("#typewriter-text");
  var typewriterCursor = $(".typewriter-cursor");

  var words = ["App Developer", "Full Stack Developer", "Designer", "ML Enthusiast"];
  var index = 0;
  var isDeleting = false;

  function type() {
    var word = words[index];
    var text = typewriterText.text();

    if (isDeleting) {
      typewriterText.text(text.slice(0, -1));
    } else {
      typewriterText.text(word.slice(0, text.length + 1));
    }

    if (text === word) {
      isDeleting = true;
    }

    if (text === "" && isDeleting) {
      index = (index + 1) % words.length;
      isDeleting = false;
    }

    setTimeout(type, 200);
  }

  type();
});



 //scroll to top starts
const button = document.querySelector('.btn');

const displayButton = () => {
  window.addEventListener('scroll', () => {
  
    if (window.scrollY > 100) {
      button.style.display = "block";
    } else {
      button.style.display = "none";
    }
  });
};

const scrollToTop = () => {
  button.addEventListener("click", () => {
    window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    }); 
  });
};

displayButton();
scrollToTop();

 //scroll to top ends

for (let i = 0; i < linkItem.length; i++) {
    linkItem[i].addEventListener('click',()=>{
        navLinks.classList.remove("open");
        hamburger.classList.remove("toggle");
        links.forEach(link => {
            link.classList.remove("fade");
        });
    })

}


// new header 1 ends



    // Parallax
    var parallax = function () {
        $(window).stellar();
    };

    $(function () {
        parallax();
    });

    // AOS
    AOS.init({
        duration: 1200,
        once: true,
        disable: 'mobile'
    });

    //  isotope
    $('#projects').waitForImages(function () {
        var $container = $('.portfolio_container');
        $container.isotope({
            filter: '*',
        });

        $('.portfolio_filter a').click(function () {
            $('.portfolio_filter .active').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 500,
                    animationEngine: "jquery"
                }
            });
            return false;
        });

    });

    //about animation text
    var words = ['UI Design', 'Visual Storytelling', 'User Experiance'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});

    //animatedModal
    $("#demo01,#demo02,#demo03,#demo04,#demo05,#demo06,#demo07,#demo08,#demo09").animatedModal();

    // Contact Form 	

    // validate contact form
    $(function () {
        $('#contact-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true
                },
                phone: {
                    required: false
                },
                message: {
                    required: true
                }

            },
            messages: {
                name: {
                    required: "This field is required",
                    minlength: "your name must consist of at least 2 characters"
                },
                email: {
                    required: "This field is required"
                },
                message: {
                    required: "This field is required"
                }
            },
            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serialize(),
                    url: "process.php",
                    success: function () {
                        $('#contact :input').attr('disabled', 'disabled');
                        $('#contact').fadeTo("slow", 1, function () {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor', 'default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function () {
                        $('#contact').fadeTo("slow", 1, function () {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });

    });
});