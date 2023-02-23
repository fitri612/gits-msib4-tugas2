<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Personal Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="Unique - Responsive vCard Template" />
  <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
  <meta name="author" content="lmtheme" />
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/normalize.css" type="text/css">
  <link rel="stylesheet" href="css/animate.css" type="text/css">
  <link rel="stylesheet" href="css/transition-animations.css" type="text/css">
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css/main-red.css" type="text/css">

  <link rel="stylesheet" href="preview/style.css" type="text/css">

  <script>
    function startMarquee() {
      var marquee = document.getElementById('marquee');
      var speed = 2;
      var direction = 'left';
      var spacing = 20;
      var count = 2;
      marquee.setAttribute('scrollamount', speed);
      marquee.setAttribute('direction', direction);
      marquee.setAttribute('hspace', spacing);
      marquee.setAttribute('loop', count);
    }
  </script>

  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
</head>

<body>
  <div class="preloader">
    <div class="preloader-animation">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

  <div id="page" class="page">
    <header id="site_header" class="header mobile-menu-hide header-color-light">
      <div class="my-photo tilt-effect">
        <img src="images/profileNav.png" alt="image">
      </div>

      <div class="site-title-block">
        <h1 class="site-title">Lailatul Fitriyah</h1>
      </div>

      <div class="site-nav">
        <ul id="nav" class="site-main-menu">
          <li>
            <a class="pt-trigger" href="#home" data-animation="21"><i
                class="menu-icon pe-7s-icon pe-7s-home"></i>Home</a>
          </li>
          <li>
            <a class="pt-trigger" href="#about_me" data-animation="17"><i
                class="menu-icon pe-7s-icon pe-7s-user"></i>About me</a>
          </li>
          <li>
            <a class="pt-trigger" href="#resume" data-animation="18"><i
                class="menu-icon pe-7s-icon pe-7s-id"></i>Resume</a>
          </li>
          <li>
            <a class="pt-trigger" href="#portfolio" data-animation="19"><i
                class="menu-icon pe-7s-icon pe-7s-portfolio"></i>Portfolio</a>
          </li>
          <li>
            <a class="pt-trigger" href="#contact" data-animation="20"><i
                class="menu-icon pe-7s-icon pe-7s-mail"></i>Contact</a>
          </li>
        </ul>
      </div>
    </header>

    <div class="mobile-header mobile-visible">
      <div class="mobile-logo-container">
        <div class="mobile-site-title">Lailatul Fitriyah</div>
      </div>

      <a class="menu-toggle mobile-visible">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div id="main" class="site-main">
      <div class="pt-wrapper" style="background-image: url(images/bg.png);">
        <div class="subpages">

          <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
            <div class="section-inner">
              <div class="home-page-block">
                <h2>Lailatul Fitriyah</h2>
                <marquee id="marquee" behavior="scroll" direction="left" onmouseover="this.stop()"
                  onmouseout="this.start()">
                  <p class="home-page-description">Mobile-Developer</p>
                  <p class="home-page-description">Frontend-developer</p>
                  <p class="home-page-description">UI & UX Designer</p>
                </marquee>
                <div class="owl-carousel text-rotation">
                  <div class="item">
                    <p class="home-page-description">Mobile-Developer</p>
                  </div>
                  <div class="item">
                    <p class="home-page-description">Frontend-developer</p>
                  </div>
                  <div class="item">
                    <p class="home-page-description">UI & UX Designer</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="pt-page pt-page-2" data-id="about_me">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper clearfix">
                  <h2 class="section-title">About Me</h2>
                  <h5 class="section-description">Developer, Design, and Creativity</h5>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                  <div class="my-photo-block tilt-effect">
                    <img src="images/photo.jpeg" alt="">
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                  <h3>I am Mobile Developer in <br> PT GRAPHIE GLOBAL INTERAKTIF</h3>
                  <p>I am a motivated student from dian nuswantoro university majoring in Informatics Engineering
                    Department and have a passion in web and mobile development. I've been focused on gettinggood grades
                    throughout my school years. by joining several organization and courses. i've been well equipments
                    by web development.</p>
                  <p>I have a deep interest in learning about web development. and being part organizations to impact
                    society. I'm a forever learner and wellcome any recommendations on things to do that challange me
                    always to have a growth mindset. I currently work in mobile devision at PT GRAPHIE GLOBAL
                    INTERAKTIF, which my jobs like slicing Ui, fetching data with API, and Clean Architecture</p>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                  <ul class="info-list">
                    <li><span class="title">Age</span><span class="value">21</span></li>
                    <li><span class="title">Residence</span><span class="value">ID</span></li>
                    <li><span class="title">Address</span><span class="value">Grobogan</span></li>
                    <li><span class="title">e-mail</span><span class="value"><a
                          href="mailto:lailatulfitriyah9216@gmail.com"><span class="__cf_email__"
                            data-cfemail="aecbc3cfc7c2eecbd6cfc3dec2cb80cdc1c3">lailatulfitriyah9216@gmail.com</span></a></span>
                    </li>
                    <li><span class="title">FullTime</span><span class="value available">Available</span></li>
                  </ul>

                  <ul class="social-links">
                    <li><a class="tip social-button" href="https://twitter.com/fitringer612" title="Twitter"><i
                          class="fa fa-twitter"></i></a></li>
                    <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                    <li><a class="tip social-button" href="https://www.linkedin.com/in/lailatul-fitriyah-5964611a7/"
                        title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="tip social-button" href="https://github.com/fitri612" title="Google Plus"><i
                          class="fa fa-github"></i></a>
                    </li>
                    <li><a class="tip social-button" href="https://www.instagram.com/fitrifff_/" title="Instagram"><i
                          class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>

              <div class="block-title">
                <h3>Services</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block">
                    <div class="service-info">
                      <img src="images/service/web_design_icon.png" alt="Responsive Design">
                      <h4>Mobile App</h4>
                      <p>
                        Serve as a mobile developer using React Native and Java. I have experience in developing
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block">
                    <div class="service-info">
                      <img src="images/service/photography_icon.png" alt="Photography">
                      <h4>Website</h4>
                      <p>
                        Serve as a web developer using React Js and Laravel. I have experience in developing
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block">
                    <div class="service-info">
                      <img src="images/service/creativity_icon.png" alt="Creativity">
                      <h4>Creativity</h4>
                      <p>
                        Serve as a UI/UX Designer using Adobe XD and Figma. I have experience in designing
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block">
                    <div class="service-info">
                      <img src="images/service/advetising_icon.png" alt="Advetising">
                      <h4>Networking & Troubleshooting Computer</h4>
                      <p>
                        Serve as a Network Engineer using Mikrotik and Cisco. I have experience in networking
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="pt-page pt-page-3" data-id="resume">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper">
                  <h2 class="section-title">Resume</h2>
                  <h5 class="section-description">
                    Study, work, experience, skills, education, etc.
                  </h5>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Education</h3>
                  </div>
                  <div class="timeline">
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2020</h5>
                      <h4 class="event-name">University</h4>
                      <span class="event-description">Dian Nuswantoro</span>
                      <p>Major in Informatics Technology.</p>
                    </div>
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2017</h5>
                      <h4 class="event-name">Vocational High School</h4>
                      <span class="event-description">Texmaco Semarang</span>
                      <p>Major in Computer network Engineering.</p>
                    </div>
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2014</h5>
                      <h4 class="event-name">Junior High School</h4>
                      <span class="event-description">Gubug 1</span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Experience</h3>
                  </div>
                  <div class="timeline">
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Oct 2022 - Current</h5>
                      <h4 class="event-name">Mobile-developer</h4>
                      <span class="event-description">PT Graphie Global Interaktif </span>
                      <p>Slicing Ui, API Integration, and Clean Architecture.</p>
                    </div>
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Aug 2022 - Jan 2023</h5>
                      <h4 class="event-name">FrontEnd Web and Mobile Developer</h4>
                      <span class="event-description">PT Hacktivate Teknologi Indonesia</span>
                      <p>Learn intermediate about react js and react native, the final of this i can make some
                        application like news website, e-commerce website, hotel app, movie website.</p>
                    </div>
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Sep 2020 - Dec 2022</h5>
                      <h4 class="event-name">Gemnastik Competition 2022</h4>
                      <span class="event-description">Software development</span>
                      <p>Build tourist app in semarang.</p>
                    </div>
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Oct 2020 - Current</h5>
                      <h4 class="event-name">Informatics Engineering Student Associatio</h4>
                      <span class="event-description">Science and Technology Devision</span>
                      <p>SecretaryField ofScience andTechnology.</p>
                    </div>
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Oct 2020 - Current</h5>
                      <h4 class="event-name">Dian Nuswantoro ComputerClub</h4>
                      <span class="event-description">Web Division</span>
                      <p>Web Division Speaker of Dian Nuswantoro ComputerClub.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Design Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>Web and Mobile Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-1"></div>
                    </div>
                  </div>

                  <div class="block-title">
                    <h3>Coding Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>HTML</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                    <h4>CSS</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-5"></div>
                    </div>

                    <h4>jQuery</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div>

                    <h4>Wordpress</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>

                    <h4>PHP</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div>

                    <h4>Codeigniter 3</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                    <h4>Laravel</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                    <h4>Javascript</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div>

                    <h4>Vue JS</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div>

                    <h4>React Js and React Native</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-9"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="pt-page pt-page-4" data-id="portfolio">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper">
                  <h2 class="section-title">Portfolio</h2>
                  <h5 class="section-description">My Best Works</h5>
                </div>
              </div>

              <div class="portfolio-content">
                <ul id="portfolio_filters" class="portfolio-filters">
                  <li class="active">
                    <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="media">Application</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="illustration">Website</a>
                  </li>
                </ul>
                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">
                  <figure class="item" data-groups='["all", "media"]'>
                    <a href="#">
                      <img src="images/portfolio/1.png" alt="">
                      <div>
                        <h5 class="name">Newfemme Application</h5>
                        <small>Application</small>
                        <i class="pe-7s-icon pe-7s-display2"></i>
                      </div>
                    </a>
                  </figure>

                  <figure class="item" data-groups='["all", "media"]'>
                    <a title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                      <img src="images/portfolio/2.png" alt="">
                      <div>
                        <h5 class="name">Tawaf Application</h5>
                        <small>Application-V</small>
                        <i class="pe-7s-icon pe-7s-video"></i>
                      </div>
                    </a>
                  </figure>

                  <figure class="item" data-groups='["all","media"]'>
                    <a>
                      <img src="images/portfolio/3.png" alt="">
                      <div>
                        <h5 class="name">Hotel Application</h5>
                        <small>Application</small>
                        <i class="pe-7s-icon pe-7s-photo"></i>
                      </div>
                    </a>
                  </figure>

                  <figure class="item" data-groups='["all", "media"]'>
                    <a>
                      <img src="images/portfolio/4.png" alt="">
                      <div>
                        <h5 class="name">Tourist Application In Semarang</h5>
                        <small>Media</small>
                        <i class="pe-7s-icon pe-7s-display2"></i>
                      </div>
                    </a>
                  </figure>

                  <figure class="item" data-groups='["all", "illustration"]'>
                    <a>
                      <img src="images/portfolio/5.png" alt="">
                      <div>
                        <h5 class="name">E-Commerce</h5>
                        <small>Website</small>
                        <i class="pe-7s-icon pe-7s-photo"></i>
                      </div>
                    </a>
                  </figure>

                  <figure class="item" data-groups='["all", "illustration"]'>
                    <a>
                      <img src="images/portfolio/6.png" alt="">
                      <div>
                        <h5 class="name">Moview</h5>
                        <small>Website</small>
                        <i class="pe-7s-icon pe-7s-display2"></i>
                      </div>
                    </a>
                  </figure>

                  <figure class="item" data-groups='["all", "illustration"]'>
                    <a>
                      <img src="images/portfolio/7.png" alt="">
                      <div>
                        <h5 class="name">News</h5>
                        <small>Website</small>
                        <i class="pe-7s-icon pe-7s-video"></i>
                      </div>
                    </a>
                  </figure>

                  <figure class="item" data-groups='["all",  "illustration"]'>
                    <a>
                      <img src="images/portfolio/8.png" alt="">
                      <div>
                        <h5 class="name">Tokopedia</h5>
                        <small>Website</small>
                        <i class="pe-7s-icon pe-7s-display2"></i>
                      </div>
                    </a>
                  </figure>
                </div>

              </div>
            </div>
          </section>

          <!-- Contact Subpage -->
          <section class="pt-page pt-page-5" data-id="contact">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper">
                  <h2 class="section-title">Contact</h2>
                  <h5 class="section-description">Get in Touch</h5>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Get in Touch</h3>
                  </div>
                  <p>If you want to connect, make friends or apply for collaboration, please contact me through the
                    social media that is available or you can also use the form on the side.</p>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Grobogan, ID</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-mail"></i>
                    </div>
                    <div class="ci-text">
                      <h5><a href="mailto:lailatulfitriyah9216@gmail.com" class="__cf_email__"
                          data-cfemail="1f7e737a676c72766b775f7a677e726f737a317c7072">lailatulfitriyah9216@gmail.com</a>
                      </h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icFon pe-7s-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Freelance Available</h5>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Contact Form</h3>
                  </div>
                  <form method="post" action="./send_email.php">
                    <div class="messages"></div>
                    <div class="controls">
                      <div class="form-group">
                        <input id="name" type="text" name="name" class="form-control" placeholder="Full Name"
                          required="required" data-error="Name is required.">
                        <div class="form-control-border"></div>
                        <i class="form-control-icon pe-7s-user"></i>
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                        <input id="email" type="email" name="email" class="form-control" placeholder="Email Address"
                          required="required" data-error="Valid email is required.">
                        <div class="form-control-border"></div>
                        <i class="form-control-icon pe-7s-mail"></i>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <textarea id="message" name="message" class="form-control" placeholder="Message for Me" rows="4"
                          required="required" data-error="Please, leave me a message."></textarea>
                        <div class="form-control-border"></div>
                        <i class="form-control-icon pe-7s-comment"></i>
                        <div class="help-block with-errors"></div>
                      </div>
                      <input type="submit" class="button btn-send" value="submit">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- End Contact Subpage -->
        </div>
      </div>
      <!-- /Page changer wrapper -->
    </div>
    <!-- /Main Content -->
  </div>

  <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/pages-switcher.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/validator.js"></script>
  <script src="js/jquery.shuffle.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/tilt.jquery.min.js"></script>
  <script src="js/jquery.hoverdir.js"></script>
  <script src="js/main.js"></script>

  <!-- Demo Color changer Script -->
  <script src="preview/lmpixels-demo-panel.js"></script>
  <!-- /Demo Color changer Script -->
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
    data-cf-beacon='{"rayId":"7761cdbf9ed44bbc","version":"2022.11.3","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>