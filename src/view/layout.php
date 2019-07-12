<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISB</title>
    <?php echo $css;?>
    <link rel="icon" href="assets/img/icon.png" />
    <script>
      WebFontConfig = {
        custom: {
          families: ["D-DINCondensed", "D-DINCondensed-Bold"],
          urls: ["assets/fonts/fonts.css"]
        }
      };

      (function(d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src = "js/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
  </head>

  <body>
    <header>
      <form action="index.php" class="language">
          <div class="chooseLanguage">
            <input
              type="radio"
              id="switch_nl"
              name="language"
              value="Nederlands"
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

      <nav class="nav">
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
            <a class="nav__item" href="<?php if($currentPage == 'fallback'){
                  echo '#';
                }else{
                  echo 'index.php?page=fallback';
                }
              ?>
            ">
              <p class="hide">Familie</p>
            </a>
          </li>

          <li class="menu__item switchNav">
            <a class="nav__item" href="<?php if($currentPage == 'fallback'){
                  echo '#';
                }else{
                  echo 'index.php?page=fallback';
                }
              ?>
            ">
              <p class="hide">Raak betrokken</p>
            </a>
          </li>
          <li class="menu__item prakNav">
            <a class="nav__item" href=" <?php if($currentPage == 'fallback'){
                  echo '#';
                }else{
                  echo 'index.php?page=fallback';
                }
              ?>">
              <p class="hide">Praktisch</p>
            </a>
          </li>
          <li class="menu__item aboutNav">
            <a class="nav__item" href="<?php if($currentPage == 'fallback'){
                  echo '#';
                }else{
                  echo 'index.php?page=fallback';
                }
              ?>">
              <p class="hide">Over ons</p>
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <?php echo $content;?>

    <footer>
      <section class="summary">
        <h2 class="hidden">Summary site</h2>
        <article class="footer__summary-festival">
          <h3>Festival</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=lineup">Lineup</a></li>
            <li><a class="footerLink" href="http://beverse-feesten.be/"> Beverse Feesten</a></li>
            <li> <a class="footerLink" href="index.php?page=fallback">Randactiviteiten</a></li>
            <li> <a class="footerLink" href="index.php?page=fallback">Familie</a></li>
          </ul>
        </article>
        <article class="footer__summary-switch">
          <h3>Raak betrokken</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Word vrijwilliger</a></li>
            <li><a  class="footerLink" href="index.php?page=fallback">Zelf Optreden</a></li>
          </ul>
        </article>
        <article class="footer__summary-about">
          <h3>Over</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Geschiedenis</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Vorige edities</a></li>
          </ul>
        </article>
        <article class="footer__summary-practical">
          <h3>Praktisch</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Slecht weer</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Bereikbaarheid</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Contactgegevens</a></li>
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
