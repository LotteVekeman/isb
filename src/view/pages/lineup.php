   <main role="overzichtpagina">
      <section class="pageHeader">
        <header class="lineup__header">
          <h1>Lineup</h1>
          <p class="namesIntro ">Het programma is onderhevig aan (weers)omstandigheden</p>
        </header>
        <form role="form" action="index.php?page=lineup" class="days">
          <input type="hidden" name="page" value="lineup" />
          <input type="hidden" name="action" value="filter" />
          <p class="filter__label">Kies een dag:</p>
          <div role="kies dag" aria-current="vrijdag" class="chooseDay">
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
            <label class="filter__input-fri" for="switch_friday">
              <p class="inputHide">vrijdag</p>
            </label>
            <input role="keuze zaterdag"
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
            <label class="filter__input-sat" for="switch_saturday"><p class="inputHide">zaterdag</p></label>
            <input role="keuze zondag"
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
            <label class="filter__input-sun" for="switch_sunday"><p class="inputHide">zondag</p></label>
          </div>
          <p role="kies event" aria-current="voorstelling" class="filter__label">Kies een soort act:</p>
          <div class="chooseEvent">
            <input role="keuze voorstelling"
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
         <input role="button filter" class="filter__btn" type="submit" value="filter"></input>
        </form>
      </section>

      <section role="results"class="resultHeader">
        <h2><?php echo count($results);?> Resultaten</h2>
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
