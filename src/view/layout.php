<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/img/favicon.png" />
    <title>ISB</title>
    <?php echo $css;?>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
    WebFont.load({
      google: {
        families: ['Source Sans Pro', 'Helvetica']
      }
    });
  </script>

    <link rel="icon" href="assets/img/icon.png" />
  </head>

  <body>
    <header>
      <form action="index.php" class="language" role="form">
          <div class="chooseLanguage">
            <input
              type="radio"
              id="switch_nl"
              name="language"
              value="Nederlands"
              aria-describedby="current"
              checked
            />
            <label for="switch_nl">NL</label>
            <input
              type="radio"
              id="switch_eng"
              name="language"
              value="English"
            />
            <label for="switch_eng">ENG</label>
          </div>
      </form>

      <nav aria-label="site" class="nav">
        <a href="index.php">
          <img class="logo" src="assets/img/logo/beveren.png" alt="logo Beveren" width="200px"/>
        </a>
        <ul class="menu">
          <li class="menu__item homeNav <?php
                if($currentPage == 'home'){
                  echo 'current';
                }else{
                  echo 'notCurrent';
                }
              ?>">
            <a class="nav__item" href="index.php">
              <p class="hide">Home</p>
            </a>
          </li>

          <li class="menu__item lineupNav <?php if($currentPage == 'lineup'){
                  echo 'current';
                }else{
                  echo 'notCurrent';
                }
              ?>">
            <a class="nav__item" href="<?php if($currentPage == 'lineup'){
                  echo '#';
                }else{
                  echo 'index.php?page=lineup';
                }
              ?>">
              <p class="hide ">Lineup</p>
            </a>
          </li>
          <li class="menu__item famNav">
            <a class="nav__item" href="#">
              <p class="hide">Familie</p>
            </a>
          </li>

          <li class="menu__item switchNav">
            <a class="nav__item" href="#">
              <p class="hide">Raak betrokken</p>
            </a>
          </li>
          <li class="menu__item prakNav">
            <a class="nav__item" href="#">
              <p class="hide">Praktisch</p>
            </a>
          </li>
          <li class="menu__item aboutNav">
            <a class="nav__item" href="#">
              <p class="hide">Over ons</p>
            </a>
          </li>
        </ul>
      </nav>
    </header>


    <main id="main"><?php echo $content;?></main>

    <footer>
      <section class="summary">
        <h2 class="hidden">Summary site</h2>
        <article class="footer__summary-festival">
          <h3>Festival</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=lineup">Lineup</a></li>
            <li><a class="footerLink" href="http://beverse-feesten.be/"> Beverse Feesten</a></li>
            <li> <a class="footerLink" href="#">Randactiviteiten</a></li>
            <li> <a class="footerLink" href="#">Familie</a></li>
          </ul>
        </article>
        <article class="footer__summary-switch">
          <h3>Raak betrokken</h3>
          <ul>
            <li><a class="footerLink" href="#">Word vrijwilliger</a></li>
            <li><a  class="footerLink" href="#">Zelf Optreden</a></li>
          </ul>
        </article>
        <article class="footer__summary-about">
          <h3>Over</h3>
          <ul>
            <li><a class="footerLink" href="#">Geschiedenis</a></li>
            <li><a class="footerLink" href="#">Vorige edities</a></li>
          </ul>
        </article>
        <article class="footer__summary-practical">
          <h3>Praktisch</h3>
          <ul>
            <li><a class="footerLink" href="#">Slecht weer</a></li>
            <li><a class="footerLink" href="#">Bereikbaarheid</a></li>
            <li><a class="footerLink" href="#">Contactgegevens</a></li>
          </ul>
        </article>
        <article class="footer__summary-media">
          <h3>Volg ons</h3>
          <ul class="smedia">
            <li>
              <a
                target="_blank"
                href="https://www.facebook.com/straattheaterfestivalbeveren/"
              >
              <img src="assets/img/logo/facebook.png" alt="logo facebook" class="round"/>
              </a>
            </li>
            <li>
              <a target="_blank" href="https://www.instagram.com/"
                >
                <img src="assets/img/logo/instagram.png" alt="logo instagram" class="round"/>
              </a>
            </li>
            <li>
              <a
                target="_blank"
                href="https://www.youtube.com/channel/UCyLydUlLUg_pBIAaWOKwkxQ"
                >
                <img src="assets/img/logo/youtube.png" alt="logo youtube" class="round"/>
            </a>
            </li>
          </ul>
        </article>
      </section>

      <section class="sponsors">
        <h2 class="hidden">Sponsors</h2>
        <a class="dorp" target="_blank" href="http://www.winkeldorp.be/">
          <img src="assets/img/logo/winkeldorp.jpg" alt="logo winkeldorp" />
        </a>
        <a class="horeca"
          target="_blank"
          href="https://www.handelsgids.be/sector/beveren/horeca/">
          <img src="assets/img/logo/horeca.jpg" alt="logo horeca beveren" />
        </a>

        <a class="gros"
          target="_blank" href="https://www.beveren.be/bestuur/inspraak-en-participatie/adviesraden/gros">
          <img src="assets/img/logo/gros.jpg" alt="logo gros beveren" width="150px"/>
        </a>

        <a class="warande"
          target="_blank" href="http://www.warandeshopping.be/">
          <img src="assets/img/logo/warande.jpg" alt="logo winkelwarandedorp" />
        </a>
        <a class="bf"
          target="_blank" href="http://beverse-feesten.be/">
          <img src="assets/img/logo/beverseFeesten.jpg" alt="logo Beverse Feesten" />
        </a>
      </section>
      <section class="copyright">
        <h2 class="hidden">Copyright</h2>
        <p>
          Internationaal TheaterFestival Beveren | Privacy Policy | Cookie
          Policy | Algemene voorwaarden
        </p>
        <p>@Lotte Vekeman</p>
      </section>
    </footer>
    <?php echo $js;?>
  </body>
</html>
