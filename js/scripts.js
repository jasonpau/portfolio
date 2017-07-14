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

  // setting up the click event listeners and handlers for each of the main menu links
  $('header').on('click', '.nav-link', function() {
    // hide the menu after a click, but only when on mobile
    if ($(window).width() < 768) {
      $('#main-nav').hide();
    }
    // chained a stop method call to end all currently running animations on the html/body before starting a new one
    $('html, body').stop().animate({
      'scrollTop': $(this.attributes.href.value).offset().top
    }, 700);
  });

  // show/hide the menu when clicking the menu button
  $('#nav-toggle').on('click', function() {
    $('#main-nav').toggle();
  });

  // make sure the menu nav always shows on desktop
  $(window).resize(function() {
    if ($(window).width() > 768) {
      $('#main-nav').show();
    }
  });

  // setting up the click event listeners and handlers for each of the above links
  $('#application-container').on('click', '.application-box', function() {
    $('body').toggleClass('disable-scroll');
    $('.modal:nth-child('+ ($('.application-box').index(this) + 1) + ')').show();
  });

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

  var message = $('#form-submit-message');

  // reset previous error messages
  clearErrors();
  message.hide();

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
    var ajaxData = {
      method: 'post',
      url: 'email_handler.php',
      dataType: 'json',
      data: {
        name: inputName.val().trim(),
        email: inputEmail.val().trim(),
        subject: inputSubject.val().trim(),
        message: inputMessage.val().trim(),
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

// removes all form error messages
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