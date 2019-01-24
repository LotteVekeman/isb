<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISB</title>
    <?php echo $css;?>
    <link rel="icon" href="assets/img/logo/Beveren.svg" />
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
      <form action="index.php" class="language">
          <div class="chooseLanguage">
            <input
              type="radio"
              id="switch_nl"
              name="switch_1"
              value="Nederlands"
              checked
            />
            <label for="switch_nl">NL</label>
            <input
              type="radio"
              id="switch_eng"
              name="switch_1"
              value="English"
            />
            <label for="switch_eng">ENG</label>
          </div>
      </form>
      <nav class="nav">
        <a href="index.php">
        <img src="assets/img/logo/Beveren.svg" alt="logo Beveren" height="25px"/>
        </a>
        <ul class="menu">
          <li class="nav-list">
            <a class="nav-item" href="index.php?page=lineup">Lineup</a>
          </li>
          <li class="nav-list">
            <a class="nav-item" href="index.php?page=fallback">Raak betrokken</a>
          </li>
          <li class="nav-list">
            <a class="nav-item" href="index.php?page=fallback">Praktisch</a>
          </li>
          <li class="nav-list">
            <a class="nav-item" href="index.php?page=fallback">Over Ons</a>
          </li>
        </ul>
      </nav>
    </header>

     <?php echo $content;?>

    <footer>
      <section class="summary">
        <h2 class="hidden">Summary site</h2>
        <article>
          <h3>Festival</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=lineup">Lineup</a></li>
            <li><a class="footerLink" href="http://beverse-feesten.be/"> Beverse Feesten</a></li>
            <li class="footerLink">Andere activiteiten</li>
          </ul>
        </article>
        <article>
          <h3>Raak betrokken</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Word vrijwilliger</a></li>
            <li><a  class="footerLink" href="index.php?page=fallback">Zelf Optreden</a></li>
          </ul>
        </article>
        <article>
          <h3>Over</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Geschiedenis</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Vorige edities</a></li>
          </ul>
        </article>
        <article>
          <h3>Praktisch</h3>
          <ul>
            <li><a class="footerLink" href="index.php?page=fallback">Slecht weer</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Bereikbaarheid</a></li>
            <li><a class="footerLink" href="index.php?page=fallback">Contactgegevens</a></li>
          </ul>
        </article>
        <article>
          <h3>Volg ons</h3>
          <ul class="smedia">
            <li>
              <a
                target="_blank"
                href="https://www.facebook.com/straattheaterfestivalbeveren/"
              >
                <img src="assets/img/logo/facebook.svg" alt=""
              /></a>
            </li>
            <li>
              <a target="_blank" href="https://www.instagram.com/"
                ><img src="assets/img/logo/instagram.svg" alt=""
              /></a>
            </li>
            <li>
              <a
                target="_blank"
                href="https://www.youtube.com/channel/UCyLydUlLUg_pBIAaWOKwkxQ"
                ><img src="assets/img/logo/youtube.svg" alt=""
              /></a>
            </li>
          </ul>
        </article>
      </section>
      <section class="sponsors">
        <h2 class="hidden">Sponsors</h2>
        <a target="_blank" href="http://www.winkeldorp.be/">
          <img src="assets/img/logo/winkeldorp.svg" alt="" />
        </a>
        <a
          target="_blank"
          href="https://www.handelsgids.be/sector/beveren/horeca/"
        >
          <img src="assets/img/logo/horeca.svg" alt=""
        /></a>
        <a target="_blank" href="http://www.aouteneclats.be/">
          <img src="assets/img/logo/scouts.svg" alt="" />
        </a>
        <a target="_blank" href="http://www.warandeshopping.be/">
          <img src="assets/img/logo/warande.svg" alt="" />
        </a>
        <a target="_blank" href="http://beverse-feesten.be/">
          <img class="logo" src="assets/img/logo/beverseFeesten.svg" alt="" />
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
