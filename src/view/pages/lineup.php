    <main class="headerPage">
      <section>
        <header>
          <h1 class="">Lineup</h1>
          <p>Het programma is onderhevig aan (weers)omstandigheden</p>
        </header>
        <form action="index.php?page=lineup" class="days">
          <input type="hidden" name="page" value="lineup" />
          <input type="hidden" name="action" value="filter" />
          <div class="chooseDay">
            <input
              type="radio"
              id="switch_friday"
              name="day"
              value="1"
              <?php
                if($currentDay == 1){
                  echo 'checked';
                }
              ?>
            />
            <label class="fiday" for="switch_friday">vrijdag</label>
            <input
              type="radio"
              id="switch_saturday"
              name="day"
              value="2"
              <?php
                if($currentDay == 2){
                  echo 'checked';
                }
              ?>
            />
            <label for="switch_saturday">zaterdag</label>
            <input
              type="radio"
              id="switch_sunday"
              name="day"
              value="3"
              <?php
                if($currentDay == 3){
                  echo 'checked';
                }
              ?>
            />
            <label for="switch_sunday">zondag</label>
          </div>
          <div class="chooseEvent">
            <input
              type="radio"
              id="switch_left"
              name="event"
              value="voorstelling"
              checked
            />
            <label for="switch_left">Voorstelling</label>
            <input
              type="radio"
              id="switch_right"
              name="event"
              value="straatattractie"
            />
            <label for="switch_right">Straatattractie</label>
          </div>
         <input type="submit" value="filter"></input>
        </form>
      </section>

      <section>
        <h2>Resultaten:</h2>
        <ul>
          <?php foreach($results as $result): ?>
            <li class="result">
              <a href="index.php?page=lineup-detail&amp;id=<?php echo $result['result']['id'];?>">
                <div>
                  <p>
                    <?php echo $result["time"];?>
                  </p>
                  <h3>
                    <?php echo $result["artist"];?>

                    <sup><?php echo $result["short"];?></sup>
                  </h3>
                  <p>
                  <?php echo $result["name"];?>
                  </p>
                </div>
                <div class="gradientAndForm"></div>
                <img
                  src="assets/img/<?php echo $result["name"];?>.jpg" width="300px"
                  alt="Fotot van <?php echo $result["artist"];?>"
                />
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    </main>

