<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jason Pau - Web Developer</title>
<!--  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">-->
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <header>
    <div id="header-content">
      <div id="logo">
        Jason Pau Development
      </div>
      <button type="button" id="nav-toggle">Menu</button>
      <nav>
        <ul>
          <li><a href="#portfolio-content" id="link-portfolio">Portfolio</a></li>
          <li><a href="#about-content" id="link-about">About</a></li>
          <li><a href="#contact-content" id="link-contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div id="welcome-content">
      <section class="content-box">
        <h1>Hi, I'm Jason!</h1>
        <hr />
        <p>Web Developer - Designer - Professional Googler</p>
      </section>
    </div>

    <div id="portfolio-content">
      <section class="content-box">
        <h2>Portfolio</h2>
        <hr />
        <section class="application-box" id="app-1">
          <img src="" alt="" />
          <h3>Application 1</h3>
        </section>
        <section class="application-box" id="app-2">
          <img src="" alt="" />
          <h3>Application 2</h3>
        </section>
        <section class="application-box" id="app-3">
          <img src="" alt="" />
          <h3>Application 3</h3>
        </section>
        <section class="application-box" id="app-4">
          <img src="" alt="" />
          <h3>Application 4</h3>
        </section>
        <section class="application-box" id="app-5">
          <img src="" alt="" />
          <h3>Application 5</h3>
        </section>
        <section class="application-box" id="app-6">
          <img src="" alt="" />
          <h3>Application 6</h3>
        </section>
      </section>
    </div>

    <div id="about-content">
      <section class="content-box">
        <h2>About</h2>
        <hr />
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius eos ex magnam minima praesentium quae quas quisquam reprehenderit sunt! Atque cupiditate, delectus deserunt eligendi facere fugit id illum iste laboriosam nemo officia quaerat quasi quod recusandae repellendus, sequi sunt ut! Aperiam distinctio nihil odio sapiente tenetur? Ab adipisci, et harum incidunt numquam perspiciatis quae quam similique. Aliquam amet at delectus dignissimos dolores excepturi expedita in ipsa, iusto nam natus nisi nulla numquam provident quam, quas quasi quidem reiciendis rem saepe sint totam voluptas. Asperiores et, explicabo fugit harum modi nam nihil odio odit, optio quos, sint totam velit voluptatibus.</p>
        <section class="icons">
          <h3>Technologies</h3>
          <hr />
          <img src="images/javascript-original.svg" alt="" title="" />
          <img src="images/jquery-original-wordmark.svg" alt="" title="" />
          <img src="images/html5-original-wordmark.svg" alt="" title="" />
          <img src="images/css3-original-wordmark.svg" alt="" title="" />
          <img src="images/sass-original.svg" alt="" title="" />
          <img src="images/bootstrap-plain-wordmark.svg" alt="" title="" />
          <img src="images/react-original-wordmark.svg" alt="" title="" />
          <img src="images/php-plain.svg" alt="" title="" />
          <img src="images/mysql-original-wordmark.svg" alt="" title="" />
          <img src="images/drupal-original-wordmark.svg" alt="" title="" />
          <img src="images/wordpress-original.svg" alt="" title="" />
        </section>
        <section class="icons">
          <h3>Tools & Workflow</h3>
          <hr />
          <img src="images/git-original-wordmark.svg" alt="Git" title="Git" />
          <img src="images/github-original-wordmark.svg" alt="GitHub" title="GitHub" />
          <img src="images/npm-original-wordmark.svg" alt="Node Packet Manager" title="Node Packet Manager" />
          <img src="images/phpstorm-original-wordmark.svg" alt="PhpStorm" title="PhpStorm" />
          <img src="images/slack-original-wordmark.svg" alt="Slack" title="Slack" />
          <img src="images/illustrator-plain.svg" alt="Adobe Illustrator" title="Adobe Illustrator" />
          <img src="images/photoshop-plain.svg" alt="Adobe Photoshop" title="Adobe Photoshop" />
          <!-- todo add meistertask logo? -->
        </section>
        <a href="#" class="about-action" target="_blank">Download Resume</a>
      </section>
    </div>

    <div id="contact-content">
      <section class="content-box">
        <h2>Contact</h2>
        <hr />
        <form id="form-contact" method="post" action="email_handler.php">
          <input type="text" name="name" id="form-name" placeholder="Name" />
          <div class="form-error" id="form-name-error"></div>
          <input type="text" name="email" id="form-email" placeholder="Email" />
          <div class="form-error" id="form-email-error"></div>
          <input type="text" name="subject" id="form-subject" placeholder="Subject Line" />
          <div class="form-error" id="form-subject-error"></div>
          <input type="text" name="value" id="form-value" placeholder="Please leave this field empty" />
          <textarea name="message" id="form-message" rows="7" placeholder="Message"></textarea>
          <div class="form-error" id="form-message-error"></div>
          <button type="submit" id="form-submit">Send<div id="button-indicator" class=""></div></button>
          <p id="form-submit-message"></p>
        </form>
      </section>
    </div>
  </main>

  <footer>
    <div class="content-box">
      <div class="icons-social">
        <a href="https://linkedin.com/in/jasonpau" target="_blank">
          <img src="images/linkedin-plain.svg" alt="LinkedIn" title="LinkedIn" />
        </a>
        <a href="https://github.com/jasonpau" target="_blank">
          <img src="images/github-original.svg" alt="GitHub" title="GitHub" />
        </a>
      </div>
      <p>
        <script type="text/javascript">
          var a = 'dev@';
          var b = 'jasonp';
          var c = 'au.com';
          var d = 'lto:';
          document.write('<a href="mai' + d + a + b + c + '" target="_blank">' + a + b + c + '</a>');
        </script> |
        <script type="text/javascript">
          var a = '949';
          var b = '415';
          var c = '8145';
          var d = 'tel:';
          document.write('<a href="' + d + a + b + c + '" target="_blank">(' + a + ') ' + b + '-' + c + '</a>');
        </script>
      </p>
      <p class="copyright">Copyright &copy; 2017 Jason Pau. All Rights Reserved.</p>
    </div>
  </footer>

  <div class="modal" id="modal-1">
    <div class="button-close">&times;</div>
    <section class="content-box">
      <img src="images/npm-original-wordmark.svg" alt="" title="" />
      <h2>Application 1</h2>
      <p class="modal-links">
        <a href="#" target="_blank">GitHub</a> | <a href="#" target="_blank">Live</a>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aut cumque earum maxime non obcaecati perferendis quisquam, sint temporibus! Aliquid amet asperiores, assumenda, blanditiis dolorem ducimus eum id, impedit inventore ipsa laudantium maiores nisi odit repellat sapiente vel vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ipsam laboriosam nostrum quae quos tempora?</p>
      <button type="button" class="button-close">Close Window</button>
    </section>
  </div>

  <div class="modal" id="modal-2">
    <div class="button-close">&times;</div>
    <section class="content-box">
      <img src="images/npm-original-wordmark.svg" alt="" title="" />
      <h2>Application 2</h2>
      <p class="modal-links">
        <a href="#" target="_blank">GitHub</a> | <a href="#" target="_blank">Live</a>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aut cumque earum maxime non obcaecati perferendis quisquam, sint temporibus! Aliquid amet asperiores, assumenda, blanditiis dolorem ducimus eum id, impedit inventore ipsa laudantium maiores nisi odit repellat sapiente vel vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ipsam laboriosam nostrum quae quos tempora?</p>
      <button type="button" class="button-close">Close Window</button>
    </section>
  </div>

  <div class="modal" id="modal-3">
    <div class="button-close">&times;</div>
    <section class="content-box">
      <img src="images/npm-original-wordmark.svg" alt="" title="" />
      <h2>Application 3</h2>
      <p class="modal-links">
        <a href="#" target="_blank">GitHub</a> | <a href="#" target="_blank">Live</a>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aut cumque earum maxime non obcaecati perferendis quisquam, sint temporibus! Aliquid amet asperiores, assumenda, blanditiis dolorem ducimus eum id, impedit inventore ipsa laudantium maiores nisi odit repellat sapiente vel vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ipsam laboriosam nostrum quae quos tempora?</p>
      <button type="button" class="button-close">Close Window</button>
    </section>
  </div>

  <div class="modal" id="modal-4">
    <div class="button-close">&times;</div>
    <section class="content-box">
      <img src="images/npm-original-wordmark.svg" alt="" title="" />
      <h2>Application 4</h2>
      <p class="modal-links">
        <a href="#" target="_blank">GitHub</a> | <a href="#" target="_blank">Live</a>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aut cumque earum maxime non obcaecati perferendis quisquam, sint temporibus! Aliquid amet asperiores, assumenda, blanditiis dolorem ducimus eum id, impedit inventore ipsa laudantium maiores nisi odit repellat sapiente vel vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ipsam laboriosam nostrum quae quos tempora?</p>
      <button type="button" class="button-close">Close Window</button>
    </section>
  </div>

  <div class="modal" id="modal-5">
    <div class="button-close">&times;</div>
    <section class="content-box">
      <img src="images/npm-original-wordmark.svg" alt="" title="" />
      <h2>Application 5</h2>
      <p class="modal-links">
        <a href="#" target="_blank">GitHub</a> | <a href="#" target="_blank">Live</a>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aut cumque earum maxime non obcaecati perferendis quisquam, sint temporibus! Aliquid amet asperiores, assumenda, blanditiis dolorem ducimus eum id, impedit inventore ipsa laudantium maiores nisi odit repellat sapiente vel vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ipsam laboriosam nostrum quae quos tempora?</p>
      <button type="button" class="button-close">Close Window</button>
    </section>
  </div>

  <div class="modal" id="modal-6">
    <div class="button-close">&times;</div>
    <section class="content-box">
      <img src="images/npm-original-wordmark.svg" alt="" title="" />
      <h2>Application 6</h2>
      <p class="modal-links">
        <a href="#" target="_blank">GitHub</a> | <a href="#" target="_blank">Live</a>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aut cumque earum maxime non obcaecati perferendis quisquam, sint temporibus! Aliquid amet asperiores, assumenda, blanditiis dolorem ducimus eum id, impedit inventore ipsa laudantium maiores nisi odit repellat sapiente vel vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ipsam laboriosam nostrum quae quos tempora?</p>
      <button type="button" class="button-close">Close Window</button>
    </section>
  </div>

  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/scripts.js" ></script>
</body>
</html>