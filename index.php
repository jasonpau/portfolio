<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=devide-width, initial-scale=1" />
  <title>Jason Pau - Web Developer</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <header>
    <div id="header-content">
      <div class="logo">
        Jason Pau Development
      </div>
      <nav>
        <a href="#portfolio-content">Portfolio</a>
        <a href="#about-content">About</a>
        <a href="#contact-content">Contact</a>
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

    <div id="portfolio-content" name="portfolio">
      <section class="content-box">
        <h1>Portfolio</h1>
        <hr />
        <section class="application-box">

        </section>
        <section class="application-box">

        </section>
        <section class="application-box">

        </section>
        <section class="application-box">

        </section>
        <section class="application-box">

        </section>
        <section class="application-box">

        </section>
      </section>
    </div>

    <div id="about-content" name="about">
      <section class="content-box">
        <h1>About</h1>
        <hr />
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius eos ex magnam minima praesentium quae quas quisquam reprehenderit sunt! Atque cupiditate, delectus deserunt eligendi facere fugit id illum iste laboriosam nemo officia quaerat quasi quod recusandae repellendus, sequi sunt ut! Aperiam distinctio nihil odio sapiente tenetur? Ab adipisci, et harum incidunt numquam perspiciatis quae quam similique. Aliquam amet at delectus dignissimos dolores excepturi expedita in ipsa, iusto nam natus nisi nulla numquam provident quam, quas quasi quidem reiciendis rem saepe sint totam voluptas. Asperiores et, explicabo fugit harum modi nam nihil odio odit, optio quos, sint totam velit voluptatibus.</p>
        <section class="icons-technologies">
          <h2>Technologies</h2>
          <img src="images/javascript-original.svg" alt="" title="" />
          <img src="images/jquery-original-wordmark.svg" alt="" title="" />
          <img src="images/html5-original-wordmark.svg" alt="" title="" />
          <img src="images/css3-original-wordmark.svg" alt="" title="" />
          <img src="images/react-original-wordmark.svg" alt="" title="" />
          <img src="images/php-plain.svg" alt="" title="" />
          <img src="images/mysql-original-wordmark.svg" alt="" title="" />
          <img src="images/drupal-original-wordmark.svg" alt="" title="" />
          <img src="images/wordpress-original.svg" alt="" title="" />
        </section>
        <section class="icons-tools">
          <h2>Tools & Workflow</h2>
          <img src="images/git-original-wordmark.svg" alt="Git" title="Git" />
          <img src="images/github-original-wordmark.svg" alt=GitHub" title="GitHub" />
          <img src="images/phpstorm-original-wordmark.svg" alt="PhpStorm" title="PhpStorm" />
          <img src="images/slack-original-wordmark.svg" alt="Slack" title="Slack" />
          <img src="images/illustrator-plain.svg" alt="" title="" />
          <img src="images/photoshop-plain.svg" alt="" title="" />
          <!-- todo add meistertask logo? -->
        </section>
        <a href="assets/jason_pau_resume.pdf" target="_blank">Learn More</a>
      </section>
    </div>

    <div id="contact-content">
      <a name="contact"></a>
      <section class="content-box">
        <h1>Contact</h1>
        <hr />
        <form method="post" action="contact_handler.php">
        <input type="text" name="name" id="form-name" placeholder="Name" />
          <input type="text" name="email" id="form-email" placeholder="Email" />
          <input type="text" name="subject" id="form-subject" placeholder="Subject Line" />
          <input type="text" name="value" id="form-value" placeholder="Optional comments" />
          <textarea name="message" id="form-message" rows="7" placeholder="Message" ></textarea>
          <button type="button" id="form-submit" >Send</button>
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
          var a = '949';
          var b = '415';
          var c = '8145';
          var d = 'tel:';
          document.write('<a href="' + d + a + b + c + '" target="_blank">(' + a + ') ' + b + '-' + c + '</a>');
        </script>
      </p>
      <p>
        <script type="text/javascript">
          var a = 'dev@';
          var b = 'jasonp';
          var c = 'au.com';
          var d = 'lto:';
          document.write('<a href="mai' + d + a + b + c + '" target="_blank">' + a + b + c + '</a>');
        </script>
      </p>
      <p class="copyright">Copyright &copy; 2017 Jason Pau. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>