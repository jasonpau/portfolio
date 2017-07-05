$(document).ready(function() {
  createEventListeners();
});

function createEventListeners() {

  // links and destinations for the smooth scroll animations
  var links = [
    { linkID: '#logo',
      locationID: 'html'
    },
    { linkID: '#link-portfolio',
      locationID: '#portfolio-content'
    },
    { linkID: '#link-about',
      locationID: '#about-content'
    },
    { linkID: '#link-contact',
      locationID: '#contact-content'
    }
  ];

  // links and destinations for the application modal windows
  var modals = [
    { linkID: '#app-1',
      locationID: '#modal-1'
    },
    { linkID: '#app-2',
      locationID: '#modal-2'
    },
    { linkID: '#app-3',
      locationID: '#modal-3'
    },
    { linkID: '#app-4',
      locationID: '#modal-4'
    },
    { linkID: '#app-5',
      locationID: '#modal-5'
    },
    { linkID: '#app-6',
      locationID: '#modal-6'
    }
  ];

  // setting up the click event listeners and handlers for each of the above links
  for (var i = 0; i < links.length; i++) {
    (function(current_i) {
      $('header').on('click', links[current_i]['linkID'], function() {
        // hide the menu after a click, but only when on mobile
        if ($(window).width() < 768) {
          $('#header-content nav').hide();
        }
        // chained a stop method call to end all currently running animations on the html/body before starting a new one
        $('html, body').stop().animate({
          'scrollTop': $(links[current_i]['locationID']).offset().top
        }, 700);
      });
    })(i); // self-invoking function to set the value of i to the current loop iteration (otherwise closure issues)
  }

  // show/hide the menu when clicking the menu button
  $('#nav-toggle').on('click', function() {
    $('#header-content nav').toggle();
  });

  // make sure the menu nav always shows on desktop
  $(window).resize(function() {
    if ($(window).width() > 768) {
      $('#header-content nav').show();
    }
  });

  // setting up the click event listeners and handlers for each of the above links
  for (var m = 0; m < modals.length; m++) {
    (function(current_m) {
      $('#portfolio-content').on('click', modals[current_m]['linkID'], function() {
        $('body').toggleClass('disable-scroll');
        $(modals[current_m]['locationID']).show();
      });
    })(m); // self-invoking function to set the value of i to the current loop iteration (otherwise closure issues)
  }

  // add close buttons to all modal exit buttons
  $('.button-close').click(function() {
    $(this).closest('.modal').hide();
    $('body').toggleClass('disable-scroll');
  });

}
