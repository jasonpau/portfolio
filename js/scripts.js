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

  // handling form submission
  $('#form-contact').on('submit', contactSubmit);
}

function contactSubmit(event) {
  event.preventDefault();

  var email_ok = true;
  var regexEmail = /^[a-zA-Z0-9.!#$%&’*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  var inputName = $('#form-name');
  var inputEmail = $('#form-email');
  var inputSubject = $('#form-subject');
  var inputMessage = $('#form-message');
  var inputValue = $('#form-value');

  // reset previous error messages
  clearErrors();

  // make sure each field contains something, and that our email is properly formatted
  if (inputName.val() === '') {
    $('#form-name-error').text('Please enter your name');
    email_ok = false;
  }
  if (!regexEmail.test(inputEmail.val())) { // regex validation
    $('#form-email-error').text('Please enter a valid email address');
    email_ok = false;
  }
  if (inputSubject.val() === '') {
    $('#form-subject-error').text('Please enter a subject line');
    email_ok = false;
  }
  if (inputMessage.val() === '') {
    $('#form-message-error').text('Please enter a message');
    email_ok = false;
  }

  if (email_ok) {
    disableSubmit();

    var message = $('#form-submit-message');

    var ajaxData = {
      method: 'post',
      url: 'email_handler.php',
      dataType: 'json',
      data: {
        name: inputName.val(),
        email: inputEmail.val(),
        subject: inputSubject.val(),
        message: inputMessage.val(),
        value: inputValue.val()
      },
      success: function(response) {
        console.log('success response:',response);
        message.removeClass('error')
          .addClass('success')
          .show()
          .text(response.message);
        inputName.val('');
        inputEmail.val('');
        inputSubject.val('');
        inputMessage.val('');
        inputValue.val('');
        reenableSubmit();
      },
      error: function() {
        message.removeClass('success')
          .addClass('error')
          .show()
          .text('There was an error sending your email.');
        reenableSubmit();
      }
    };

    $.ajax(ajaxData);
  }
}

function clearErrors() {
  $('#form-name-error').text('');
  $('#form-email-error').text('');
  $('#form-subject-error').text('');
  $('#form-message-error').text('');
  $('#form-submit-message').text('');
}

function disableSubmit() {
  $('#button-indicator').addClass('loading-spinner');
  $('#form-contact').attr('disabled', 'disabled');
  $('#form-submit-message').hide();
}

function reenableSubmit() {
  $('#button-indicator').removeClass('loading-spinner');
  $('#form-contact').removeAttr('disabled');
}