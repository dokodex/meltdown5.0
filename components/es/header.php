<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head profile="http://www.w3.org/2005/10/profile">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="es" />

    <title>MELTDOWN | This is now forever</title>
    
    <meta name="description" content="Meltdown, Hardcore-Metal band from the Basque Country" />    
    <meta name="keywords" content="Meltdown, Meltdown Hardcore, Meltdown metal, Meltdown web, Meltdown official, meltdownofficial, Meltdown pagina">
    
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="shortcut icon" href="img/gear.png" />

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '2082909745333730');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2082909745333730&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

  </head>

  <body>
    <div class="header">
      <div class="header__grid">
        <div class="header__title"><a class="header__title__link" <?php echo 'href="index.php?language=' . $language . '"'; ?>><img class="header__img" src="img/meltdown-logos/meltdown-white.png" alt=""></a></div>
        <nav class="header__menu" id="header__mymenu">
          <a class="header__menu__responsive" href="javascript:void(0);" onclick="menuResponsive()"><?php require('imports/svg/menu.svg'); ?></a>
          <a class="header__menu__link header__menu__link--languages active" href="?language=es">ESP</a>
          <a class="header__menu__link header__menu__link--languages active" href="?language=eng">ENG</a>
          <a class="header__menu__link header__menu__link--languages active" href="?language=eus">EUS</a>
          <a class="header__menu__link active" <?php echo 'href="store.php?language=' . $language . '"'; ?>>TIENDA</a>
          <a class="header__menu__link active" <?php echo 'href="videos.php?language=' . $language . '"'; ?>>VIDEOS</a>
          <a class="header__menu__link active" <?php echo 'href="music.php?language=' . $language . '"'; ?>>MUSICA</a>
          <a class="header__menu__link active" <?php echo 'href="shows.php?language=' . $language . '"'; ?>>CONCIERTOS</a>
          <a class="header__menu__link active" <?php echo 'href="about.php?language=' . $language . '"'; ?>>INFO</a>
          <a class="header__menu__link active" <?php echo 'href="contact.php?language=' . $language . '"'; ?>>CONTACTO</a>  
        </nav>
      </div>
    </div>  


    <script>
      function menuResponsive() {
          var x = document.getElementById("header__mymenu");
          if (x.className === "header__menu") {
              x.className += " responsive";
          } else {
              x.className = "header__menu";
          }
      }
    </script>