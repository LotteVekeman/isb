
    <main class="headerPage">
      <section>
        <header>
          <h1 class="">Lineup</h1>
          <p>Het programma is onderhevig aan (weers)omstandigheden</p>
        </header>
        <form action="index.php?page=lineup" class="days">
          <input type="hidden" name="action" value="filter" />
          <div class="chooseDay">
            <input
              type="radio"
              id="switch_friday"
              name="switch_2"
              value="friday"
              checked
            />
            <label class="fiday" for="switch_friday">vrijdag</label>
            <input
              type="radio"
              id="switch_saturday"
              name="switch_2"
              value="saturday"
            />
            <label for="switch_saturday">zaterdag</label>
            <input
              type="radio"
              id="switch_sunday"
              name="switch_2"
              value="sunday"
            />
            <label for="switch_sunday">zondag</label>
          </div>
          <div class="chooseEvent">
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
                src="assets/img/TheSkyIsTheLimit.jpg" width="300px"
                alt="2 artiesten met vrijwillige uit publiek op podium"
              />
            </a>
          </li>
        </ul>
      </section>
    </main>

