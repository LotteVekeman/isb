   <main>
      <section class="lineup__filter-bg">
        <h1 class="lineup__title">Lineup</h1>
        <form action="index.php?page=lineup" class="lineup__form">
          <input type="hidden" name="page" value="lineup" />
          <input type="hidden" name="action" value="filter" />
          <p class="filter__label">Kies act:</p>
          <div class="chooseEvent">
            <input
              type="radio"
              id="switch_left"
              name="event"
              value="voorstelling"
              <?php
                if($currentEvent == 'voorstelling'){
                  echo 'checked';
                }
              ?>
            />
            <label class="filter__input-per" for="switch_left">Voorstelling</label>
            <input role="keuze straatattractie"
              type="radio"
              id="switch_right"
              name="event"
              value="straatattractie"
              <?php
                if($currentEvent == 'straatattractie'){
                  echo 'checked';
                }
              ?>
            />
            <label class="filter__input-street" for="switch_right">Straatattractie</label>
          </div>
          <p class="filter__label">Kies dag:</p>
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
            <label for="switch_friday">
              <p>vrijdag</p>
            </label>
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
            <label for="switch_saturday"><p>zaterdag</p></label>
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
            <label for="switch_sunday"><p>zondag</p></label>
          </div>
         <input class="btn filter__btn" type="submit" value="filter toepassen"></input>
        </form>
      </section>

      <section class="resultHeader">
        <header>
          <h2 class="filter__results-title"><?php echo count($results);?> Resultaten</h2>
          <a href="./assets/programma.pdf">
              <p>download</p>
              <!-- <img src="./assets/img/icon/download.png" alt="download icoontje"> -->
          </a>
        </header>

        <ul class="filter__result-list">
          <?php foreach($results as $result): ?>

            <li class="item">
              <a href="index.php?page=detail&amp;id=<?php echo $result['id'];?>">
              <article>
                <div class="kijker__act-info">
                  <p class="kijker__act-typeLabel"><?php echo $result['type'];?></p>
                  <div  class="kijker__act-textLabel">
                    <h3 class="kijker__act-textLabel-artist">
                      <?php
                      echo $result['artist'];?>
                      <sup>
                        <?php if($result['artist']!== ''){
                          echo $result['short'];
                        }?>
                      </sup>
                    </h3>
                    <p class="kijker__act-textLabel-place"><?php echo $result['name'] ;?></p>
                    <div class="kijker__act-textLabel-time" >
                    <p class="kijker__act-textLabel-day"><?php echo $result['day'] ;?></p>
                      <p><?php echo $result['time'] ;?></p>
                    </div>
                  </div>
                </div>
                <div class="kijker__act-img">
                  <img class="top"
                      src="./assets/img/isb/<?php echo $result['day'];?>/<?php echo $result['type'];?>/<?php echo $result["imgpath"];?>.jpg" width="300px"
                      alt="Foto van <?php echo $result['artist'];?>"/>
                </div>
              </article>
              </a>
            </li>

          <?php endforeach; ?>
        </ul>
      </section>
    </main>
