<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contact Viktor Erdos Chess</title>

  <!-- CSS STYLESHEET -->
  <link rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- NAV BAR -->

  <header class="header">

    <a class="header__name" href="index.html">Viktor Erdos</a>


    <div class="header__menu-icon">
      <div class="header__menu-icon__middle">

      </div>
    </div>

    <nav class="header-navbar">
      <ul>
        <li class="header-navbar__title"><a href="aboutme.html">About me</a></li>
        <li class="header-navbar__title"><a href="analysis.html">Analysis</a></li>
        <li class="header-navbar__title navbar-hover"><a href="coaching.html">Coaching <span
              class="dropdown-header">v</span></a>
          <ul class=sub-navbar>
            <li><a href="">Videos</a></li>
            <li><a href="">Books</a></li>
          </ul>

        </li>
        <li class="header-navbar__title"><a href="tournaments.html">Tournaments</a></li>
        <li class="header-navbar__title"><a href="contact.php">Contact</a></li>

        <li class="header-navbar__title"><a class="no-decoration" href="login.html"> <img class="header-navbar__image"
              src="assets\images\pawn-white.png" alt="Viktor Erdos chess login">
          </a></li>

      </ul>
    </nav>

  </header>


  <div class="contact-page">

    <div class="wrapper">

      <div class="contact">
        <div class="contact__title">
          <h1>Get in touch</h1>
          <ul>
            <li><a class="contact__social-icons" href="https://www.facebook.com/viktor.erdos.16"> <i
                  class="fa fa-facebook"></i> </a> </li>
            <li><a class="contact__social-icons" href="https://dashboard.twitch.tv/u/magicmaster17/home"> <i
                  class="fa fa-twitch"></i> </a> </li>
            <li><a class="contact__social-icons" href="https://www.instagram.com/magicmaster1987/"> <i
                  class="fa fa-instagram"></i> </a> </li>

          </ul>

        </div>
        <div class="contact-form-container">

            <form class="contact-form" action="contact-form.php" method="post">
              <div class="contact-form__field col x-50">
                <input id="name" type="text" name="name" class="contact-form__field--input-text js-input" placeholder="Full name">
              </div>

              <div class="contact-form__field col x-50">
                <input id="email" type="text" name="mail" class="contact-form__field--input-text js-input" placeholder="Your email">
              </div>

              <div class="contact-form__field col x-100" >
                <textarea id="message" name="message" class="contact-form__field--input-text js-input" placeholder="Message"></textarea>
              </div>

              <div class="contact-form__field col x-100 align-center">
                <button class="btn btn__submit" type="submit" name="submit">Submit</button>
              </div>

            </form>

        </div>
      </div>
    </div>
  </div>

  <!--Include footer.html with jQuery -->

  <footer class="footer"></footer>

  <script>
    $(".footer").load("footer.html", function (data) {
      // this will execute after load is fired.
    });

    var data = $.ajax({
      type: "GET",
      url: "footer.html",
      async: false
    }).responseText;
    // this code waits for the above ajax request.

    $('.footer').html(data)
  </script>

</body>

</html>