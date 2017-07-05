document.addEventListener('DOMContentLoaded', function() {
  console.log('The page has loaded!');
  console.log('jQuery? -> ', jQuery);

  var links = [
    {
      linkID: '#link-portfolio',
      locationID: '#portfolio-content'
    },
    {
      linkID: '#link-about',
      locationID: '#about-content'
    },
    {
      linkID: '#link-contact',
      locationID: '#contact-content'
    }
  ];

  for (var i = 0; i < links.length; i++) {
    (function(current_i) {
      $('nav').on('click', links[current_i]['linkID'], function() {
        $('html, body').stop(); // stop all currently running animations on the html/body before starting a new one
        $('html, body').animate({
          'scrollTop': $(links[current_i]['locationID']).offset().top
        }, 1000);
      });
    })(i); // anonymous self-invoking function to set the value of i to the current loop iteration (otherwise closure issues)
  }
});


// (function($) {
//   $(document).ready(function() {
//     $('html, body').animate({
//       'scrollTop':   $('#portfolio-content').offset().top
//     }, 2000);
//   });
// })(jQuery);