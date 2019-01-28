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
    <header class="header">
      <form role="kies taal" action="index.php" class="language">
          <div role="kies nederlands" aria="nu nederland" class="chooseLanguage">
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
      <nav class="nav" role="navigatie">
        <a href="index.php">
        <img class="logo" src="assets/img/logo/logo.jpg" alt="logo Beveren" height="35px"/>
        </a>
        <ul class="menu">
          <li role="navigatie item" class="menuItem homeNav <?php
                if($currentPage == 'home'){
                  echo 'current';
                }else{
                  echo 'notCurrent';
                }
              ?>">
            <a class="nav-item" href="index.php">
              <p class="hide">Home</p>
            </a>
          </li>
          <li role="navigatie item" class="menuItem lineupNav <?php
                if($currentPage == 'lineup'){
                  echo 'current';
                }else{
                  echo 'notCurrent';
                }
              ?>">
            <a class="nav-item" href="
              <?php if($currentPage == 'lineup'){
                  echo '#';
                }else{
                  echo 'index.php?page=lineup';
                }
              ?>
            ">
              <p class="hide <?php
                if($currentPage == 'lineup'){
                  echo 'current';
                }else{
                  echo 'notCurrent';
                }
              ?>">Lineup</p>
            </a>
          </li>
          <li role="navigatie item" class="menuItem switchNav">
            <a class="nav-item" href="
            <?php if($currentPage == 'fallback'){
                  echo '#';
                }else{
                  echo 'index.php?page=fallback';
                }
              ?>">
              <p class="hide">Raak betrokken</p>
            </a>
          </li>
          <li role="navigatie item" class="menuItem prakNav">
            <a class="nav-item" href=" <?php if($currentPage == 'fallback'){
                  echo '#';
                }else{
                  echo 'index.php?page=fallback';
                }
              ?>">
              <p class="hide">Praktisch</p>
            </a>
          </li>
          <li role="navigatie item" class="menuItem aboutNav">
            <a class="nav-item" href=" <?php if($currentPage == 'fallback'){
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
      <section role="footer" class="summary">
        <h2 class="hidden">Summary site</h2>
        <article class="footer__summary-festival">
          <h3 role="info over festival">Festival</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=lineup">Lineup</a></li>
            <li><a class="footerLink" href="http://beverse-feesten.be/"> Beverse Feesten</a></li>
            <li class="footerLink">Andere activiteiten</li>
          </ul>
        </article>
        <article class="footer__summary-switch">
          <h3 role="raak betrokken bij festival">Raak betrokken</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Word vrijwilliger</a></li>
            <li><a  class="footerLink" href="index.php?page=fallback">Zelf Optreden</a></li>
          </ul>
        </article>
        <article class="footer__summary-about">
          <h3 role="meer info over festival">Over</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Geschiedenis</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Vorige edities</a></li>
          </ul>
        </article>
        <article class="footer__summary-practical">
          <h3 role="praktische info festival">Praktisch</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Slecht weer</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Bereikbaarheid</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Contactgegevens</a></li>
          </ul>
        </article>
        <article class="footer__summary-media">
          <h3 role="meer op social media">Volg ons</h3>
          <ul class="smedia">
            <li>
              <a
                target="_blank"
                href="https://www.facebook.com/straattheaterfestivalbeveren/"
              >
              <picture >
                  <source
                    type="image/webp"
                    media="(min-width: 0px)"
                    srcset="assets/img/logo/facebook.webp 1x"
                  />

                  <source
                    type="image/png"
                    media="(min-width: 0px)"
                    srcset="assets/img/logo/facebook.png 1x"
                  />
                  <img src="assets/img/logo/facebook.png" alt="logo facebook" class="round"/>
                </picture>
              </a>
            </li>
            <li>
              <a target="_blank" href="https://www.instagram.com/"
                >
                <picture >
                  <source
                    type="image/webp"
                    media="(min-width: 0px)"
                    srcset="assets/img/logo/instagram.webp 1x"
                  />

                  <source
                    type="image/png"
                    media="(min-width: 0px)"
                    srcset="assets/img/logo/instagram.png 1x"
                  />
                  <img src="assets/img/logo/instagram.png" alt="logo instagram" class="round"/>
                </picture>
              </a>
            </li>
            <li>
              <a
                target="_blank"
                href="https://www.youtube.com/channel/UCyLydUlLUg_pBIAaWOKwkxQ"
                >
                <picture >
                  <source
                    type="image/webp"
                    media="(min-width: 0px)"
                    srcset="assets/img/logo/youtube.webp 1x"
                  />

                  <source
                    type="image/png"
                    media="(min-width: 0px)"
                    srcset="assets/img/logo/youtube.png 1x"
                  />
                  <img src="assets/img/logo/youtube.png" alt="logo youtube" class="round"/>
                </picture>
            </a>
            </li>
          </ul>
        </article>
      </section>

      <section class="sponsors">
        <h2 class="hidden">Sponsors</h2>
        <a class="dorp" target="_blank" href="http://www.winkeldorp.be/">
        <picture>
          <source
            type="image/webp"
            media="(min-width: 0px)"
            srcset="assets/img/logo/winkeldorp.webp 1x"
          />

          <source
            type="image/jpg"
            media="(min-width: 0px)"
            srcset="assets/img/logo/winkeldorp.jpg 1x"
          />
          <img src="assets/img/logo/winkeldorp.jpg" alt="logo winkeldorp" />
        </picture>

        </a>
        <a class="horeca"
          target="_blank"
          href="https://www.handelsgids.be/sector/beveren/horeca/">
          <picture>
          <source
            type="image/webp"
            media="(min-width: 0px)"
            srcset="assets/img/logo/horeca.webp 1x"
          />

          <source
            type="image/jpg"
            media="(min-width: 0px)"
            srcset="assets/img/logo/horeca.jpg 1x"
          />
          <img src="assets/img/logo/horeca.jpg" alt="logo horeca beveren" />
        </picture>
        </a>
        <a class="eclats"
          target="_blank" href="http://www.aouteneclats.be/">
          <picture>
          <source
            type="image/webp"
            media="(min-width: 0px)"
            srcset="assets/img/logo/scouts.webp 1x"
          />

          <source
            type="image/jpg"
            media="(min-width: 0px)"
            srcset="assets/img/logo/scouts.jpg 1x"
          />
          <img src="assets/img/logo/winkeldorp.jpg" alt="logo scouts Sint-Martinus" />
        </picture>
        </a>
        <a class="warande"
          target="_blank" href="http://www.warandeshopping.be/">
          <picture>
          <source
            type="image/webp"
            media="(min-width: 0px)"
            srcset="assets/img/logo/warande.webp 1x"
          />

          <source
            type="image/jpg"
            media="(min-width: 0px)"
            srcset="assets/img/logo/warande.jpg 1x"
          />
          <img src="assets/img/logo/warande.jpg" alt="logo winkelwarandedorp" />
        </picture>
        </a>
        <a class="bf"
          target="_blank" href="http://beverse-feesten.be/">
          <picture>
          <picture>
          <source
            type="image/webp"
            media="(min-width: 0px)"
            srcset="assets/img/logo/beverseFeesten.webp 1x"
          />

          <source
            type="image/jpg"
            media="(min-width: 0px)"
            srcset="assets/img/logo/beverseFeesten.jpg 1x"
          />
          <img src="assets/img/logo/beverseFeesten.jpg" alt="logo Beverse Feesten" />
        </picture>
          </picture>
        </a>
      </section>
      <section class="copyright">
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
