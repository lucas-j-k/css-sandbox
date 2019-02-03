<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Enriqueta|IBM+Plex+Mono|Zilla+Slab" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Tattoo Studio</title>
</head>
<body>

<div class="page-wrap">
  <div class="header">
    <div class="header__logo">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437947/theme-sandbox/tattoo/logo-png.png" alt="" class="header__logo-img">
    </div>
    <div class="header__title">TATTOO</div>
    <div class="header__social">
      <a href="" class="header__social-icon"><i class="fab fa-facebook-f"></i></a>
      <a href="" class="header__social-icon"><i class="fab fa-twitter"></i></a>
      <a href="" class="header__social-icon"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="header__toggle">
      <a href="#" class="header__toggle-button" id="menuOpen"><i class="fas fa-bars"></i></a>
    </div>
  </div>

  <div class="nav" id="nav-overlay">
      <div class="nav__toggle">
        <a href="#" class="nav__toggle-button" id="menuClose"><i class="fas fa-times"></i></a>
      </div>
      <ul class="nav__list">
        <li class="nav__list-item">Home</li>
        <li class="nav__list-item">About Us</li>
        <li class="nav__list-item">Artists</li>
        <li class="nav__list-item">Our Studio</li>
        <li class="nav__list-item">Contact Us</li>
      </ul>
      <div class="nav__social">
        <a href="" class="nav__social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="nav__social-icon"><i class="fab fa-twitter"></i></a>
        <a href="" class="nav__social-icon"><i class="fab fa-instagram"></i></a>
      </div>
  </div>

  <div class="homepage-splash">
    <div class="homepage-splash__overlay"></div>
  </div>

  <div class="title-bar">
    <h2 class="title-bar__heading">Latest Work</h2>
  </div>

  <div class="latest-work">
    <div class="latest-work__box">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437949/theme-sandbox/tattoo/tattoo-one.jpg" alt="" class="latest-work__img" onclick="openLightbox();setSlide(0)">
    </div>
    <div class="latest-work__box">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437951/theme-sandbox/tattoo/tattoo-two.jpg" alt="" class="latest-work__img" onclick="openLightbox();setSlide(1)">
    </div>
    <div class="latest-work__box">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437952/theme-sandbox/tattoo/tattoo-three.jpg" alt="" class="latest-work__img" onclick="openLightbox();setSlide(2)">
    </div>
    <div class="latest-work__box">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437947/theme-sandbox/tattoo/tattoo-four.jpg" alt="" class="latest-work__img" onclick="openLightbox();setSlide(3)">
    </div>
    <div class="latest-work__box">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437945/theme-sandbox/tattoo/tattoo-five.jpg" alt="" class="latest-work__img" onclick="openLightbox();setSlide(4)">
    </div>
    <div class="latest-work__box">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437949/theme-sandbox/tattoo/tattoo-six.jpg" alt="" class="latest-work__img" onclick="openLightbox();setSlide(5)">
    </div>
  </div>

  <div class="lightbox" id="lightbox">
    <div class="lightbox__content">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437949/theme-sandbox/tattoo/tattoo-one.jpg" alt="" class="lightbox__img">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437951/theme-sandbox/tattoo/tattoo-two.jpg" alt="" class="lightbox__img">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437952/theme-sandbox/tattoo/tattoo-three.jpg" alt="" class="lightbox__img">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437947/theme-sandbox/tattoo/tattoo-four.jpg" alt="" class="lightbox__img">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437945/theme-sandbox/tattoo/tattoo-five.jpg" alt="" class="lightbox__img">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437949/theme-sandbox/tattoo/tattoo-six.jpg" alt="" class="lightbox__img">
    </div>
    <div class="lightbox__controls">
      <div class="lightbox__button" id="backButton"><i class="fas fa-angle-left"></i></div>
      <div class="lightbox__button" id="closeLightbox" onclick="closeLightbox()"><i class="fas fa-times"></i></div>
      <div class="lightbox__button" id="nextButton"><i class="fas fa-angle-right"></i></div>
    </div>
  </div>

  <div class="title-bar">
    <h2 class="title-bar__heading">Our Artists</h2>
  </div>

  <div class="artists">
    <div class="artists__profile">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437953/theme-sandbox/tattoo/face-1.jpg" alt="" class="artists__img" />
      <div class="artists__text">
        <p class="artists__name">Artist One</p>
        <div class="artists__styles">
          <span class="artists__style-pill">Lorem</span>
          <span class="artists__style-pill">Ipsum</span>
          <span class="artists__style-pill">Dolor</span>
        </div>
      </div>
    </div>
    <div class="artists__profile">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437952/theme-sandbox/tattoo/face-2.jpg" alt="" class="artists__img" />
      <div class="artists__text">
        <p class="artists__name">Artist One</p>
        <div class="artists__styles">
          <span class="artists__style-pill">Lorem</span>
          <span class="artists__style-pill">Ipsum</span>
          <span class="artists__style-pill">Dolor</span>
        </div>
      </div>
    </div>
    <div class="artists__profile">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437952/theme-sandbox/tattoo/face-3.jpg" alt="" class="artists__img" />
      <div class="artists__text">
        <p class="artists__name">Artist One</p>
        <div class="artists__styles">
          <span class="artists__style-pill">Lorem</span>
          <span class="artists__style-pill">Ipsum</span>
          <span class="artists__style-pill">Dolor</span>
        </div>
      </div>
    </div>
    <div class="artists__profile">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437947/theme-sandbox/tattoo/face-4.jpg" alt="" class="artists__img" />
      <div class="artists__text">
        <p class="artists__name">Artist One</p>
        <div class="artists__styles">
          <span class="artists__style-pill">Lorem</span>
          <span class="artists__style-pill">Ipsum</span>
          <span class="artists__style-pill">Dolor</span>
        </div>
      </div>
    </div>
    <div class="artists__profile">
      <img src="https://res.cloudinary.com/duua3lsu1/image/upload/v1529437947/theme-sandbox/tattoo/face-5.jpg" alt="" class="artists__img" />
      <div class="artists__text">
        <p class="artists__name">Artist One</p>
        <div class="artists__styles">
          <span class="artists__style-pill">Lorem</span>
          <span class="artists__style-pill">Ipsum</span>
          <span class="artists__style-pill">Dolor</span>
        </div>
      </div>
    </div>
  </div>

  <div class="title-bar">
    <h2 class="title-bar__heading">Find Us</h2>
  </div>

  <div class="find-us">
    <div class="find-us__map">
    </div>
    <div class="find-us__details">
      <p class="find-us__address">
      1 Road Street <br>
      Town <br>
      Country <br>
      PO5T C0D3 <br><br>
      </p>
      <p class="find-us__phone">
      01234 555666<br>
      info@examplewebsite.co.uk<br>
      </p>
    </div>
  </div>

  <footer class="footer">
    <ul class="footer__menu">
      <li class="footer__menu-item"><a href="#" class="footer__menu-link">Privacy Policy</a></li>
      <li class="footer__menu-item"><a href="" class="footer__menu-link">Company Information</a></li>
    </ul>
    <div class="footer__copyright">Copyright 2018</div>
  </footer>

</div>

<script src="js/scripts.js" defer></script>
</body>
</html>
