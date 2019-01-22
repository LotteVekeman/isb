
    <main>
      <section>
        <header>
          <h1 class="">Lineup</h1>
          <p>Het programma is onderhevig aan (weers)omstandigheden</p>
        </header>
        <form action="index.php?page=lineup" class="filter__form">
          <input type="hidden" name="action" value="filter" />
          <label for="day" class="filter__label"> </label>
          <div id="event">
            <input
              type="radio"
              id="switch_2_left"
              name="switch_2"
              value="friday"
              checked
            />
            <label for="switch_2_left">vrijdag</label>
            <input
              type="radio"
              id="switch_2_center"
              name="switch_2"
              value="saturday"
            />
            <label for="switch_2_center">zaterdag</label>
            <input
              type="radio"
              id="switch_2_right"
              name="switch_2"
              value="sunday"
            />
            <label for="switch_2_right">zondag</label>
            <!-- <button type="button">
              <span class="hidden">vrijdag 24 aug 2018</span>
            </button>
            <button type="button">
              <span class="hidden">zaterdag 25 aug 2018</span>
            </button>
            <button type="button">
              <span class="hidden">zondag 26 aug 2018</span>
              <img src="assets/img/days/zondag.png" alt="" />
            </button> -->
          </div>
          <label for="event" class="filter__label"></label>
          <div id="event">
            <input
              type="radio"
              id="switch_left"
              name="switch_3"
              value="voorstelling"
              checked
            />
            <label for="switch_left">Voorstelling</label>
            <input
              type="radio"
              id="switch_right"
              name="switch_3"
              value="straatattractie"
            />
            <label for="switch_right">Straatattractie</label>
          </div>
        </form>
      </section>

      <section>
        <h2>Resultaten:</h2>
        <ul>
          <li>
            <a href="index.php?page=lineup-detail">
              <div>
                <p>18:00 & 21:15</p>
                <h3>The Flying Dutchmen <sup>NL</sup></h3>
                <p>The Sky Is The Limit</p>
              </div>
              <div class="gradientAndForm"></div>
              <img
                src=""
                alt="2 artiesten met vrijwillige uit publiek op podium"
              />
            </a>
          </li>
        </ul>
      </section>
    </main>

