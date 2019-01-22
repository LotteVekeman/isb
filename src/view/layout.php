<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISB</title>
    <link rel="icon" href="assets/img/logo/Beveren.svg" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <form action="index.php">
      <label for="language" class="language__label">NL</label>
          <div id="language">
            <input
              type="radio"
              id="switch_nl"
              name="switch_1"
              value="Nederland"
              checked
            />
            <p>|</p>
            <input
              type="radio"
              id="switch_eng"
              name="switch_1"
              value="English"
            />
            <label for="switch_right">ENG</label>
          </div>
      </form>
      <nav>
        <a href="index.php"
          ><img src="assets/img/logo/Beveren.svg" alt="logo Beveren"
        /></a>
        <ul>
          <li><a href="index.php?page=lineup">Lineup</a></li>
          <li><a href="index.php?page=fallback">Raak betrokken</a></li>
          <li><a href="index.php?page=fallback">Praktisch</a></li>
          <li><a href="index.php?page=fallback">Over Ons</a></li>
        </ul>
      </nav>
    </header>

     <?php echo $content;?>

    <footer>
      <section>
        <h2 class="hidden">Summary site</h2>
        <article>
          <h3>Festival</h3>
          <ul>
            <li><a href="pages/lineup.html">Lineup</a></li>
            <li><a href="http://beverse-feesten.be/"> Beverse Feesten</a></li>
            <li>Andere activiteiten</li>
          </ul>
        </article>
        <article>
          <h3>Raak betrokken</h3>
          <ul>
            <li><a href="pages/fallback.html">Word vrijwilliger</a></li>
            <li><a href="pages/fallback.html">Zelf Optreden</a></li>
          </ul>
        </article>
        <article>
          <h3>Over</h3>
          <ul>
            <li><a href="pages/fallback.html">Geschiedenis</a></li>
            <li><a href="pages/fallback.html">Vorige edities</a></li>
          </ul>
        </article>
        <article>
          <h3>Praktisch</h3>
          <ul>
            <li><a href="pages/fallback.html">Slecht weer</a></li>
            <li><a href="pages/fallback.html">Bereikbaarheid</a></li>
            <li><a href="pages/fallback.html">Contactgegevens</a></li>
          </ul>
        </article>
        <article>
          <h3>Volg ons</h3>
          <ul>
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
      <section>
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
      <section>
        <p>
          Internationaal TheaterFestival Beveren | Privacy Policy | Cookie
          Policy | Algemene voorwaarden
        </p>
        <p>@Lotte Vekeman</p>
      </section>
    </footer>
  </body>
</html>
