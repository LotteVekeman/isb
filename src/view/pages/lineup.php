<main>
      <section>
        <h1>Lineup</h1>
        <form action="index.php?page=lineup" class="lineup__form">
          <input type="hidden" name="page" value="lineup" />
          <input type="hidden" name="action" value="filter" />

          <p class="filter__label">Kies act:</p>
          <div>
            <input type="checkbox" id="switch_left" name="chooseAct[]" value="voorstelling"/>
            <label for="switch_left">Voorstelling</label>
            <input type="checkbox" id="switch_right" name="chooseAct[]" value="straatattractie"/>
            <label for="switch_right">Straatattractie</label>
          </div>

          <p class="filter__label">Kies dag:</p>
          <div class="chooseOption">
            <input type="checkbox" id="switch_friday" name="chooseDay[]" value="1"/>
            <label for="switch_friday"><p>vrijdag</p></label>

            <input type="checkbox" id="switch_saturday" name="chooseDay[]" value="2"/>
            <label for="switch_saturday"><p>zaterdag</p></label>

            <input type="checkbox" id="switch_sunday" name="chooseDay[]" value="3"/>
            <label for="switch_sunday"><p>zondag</p></label>
          </div>

         <input type="submit" value="filter toepassen"></input>
        </form>
      </section>

      <section>
        <header>
          <h2 class="filter__results-title"><?php echo count($results);?> Resultaten</h2>
          <a href="./assets/programma.pdf">
              <!-- <p class="download" >download</p> -->
              <img src="./assets/img/icon/download.png" alt="download icoontje" class="download">
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
