
      <section class="lineup__filter-bg">
        <h1 class="lineup__title">Lineup</h1>
        <form action="index.php?page=lineup" class="lineup__form" role="filter">
          <input type="hidden" name="page" value="lineup" />
          <input type="hidden" name="action" value="filter" />

          <p class="filter__label">Kies act:</p>
          <div class="chooseOption">
            <input type="radio" id="switch_left" name="chooseAct" value="voorstelling"<?php if ($act == 'voorstelling' ) echo ' checked'; ?>/>
            <label class="filter_input filter__input-type" for="switch_left">Voorstelling</label>

            <input type="radio" id="switch_right" name="chooseAct" value="straatattractie" <?php if ($act == 'straatattractie' ) echo ' checked'; ?>/>
            <label class="filter_input filter__input-type" for="switch_right">Straatattractie</label>

             <input type="radio" id="switch_all" name= "chooseAct" value="" <?php if ($act == '' ) echo ' checked'; ?>/>
            <label class="filter_input filter__input-type" for="switch_all" aria-describedby="current" >Alle acts</label>
          </div>

          <p class="filter__label">Kies dag:</p>
          <div class="chooseOption">
            <input type="radio" id="switch_friday" name="chooseDay" value="vrijdag"<?php if ($day == 'vrijdag' ) echo ' checked'; ?>/>
            <label class="filter_input filter__input-day" for="switch_friday"><p>vrijdag</p></label>

            <input type="radio" id="switch_saturday" name="chooseDay" value="zaterdag"<?php if ($day == 'zaterdag' ) echo ' checked'; ?>/>
            <label class="filter_input filter__input-day" for="switch_saturday"><p>zaterdag</p></label>

            <input type="radio" id="switch_sunday" name="chooseDay" value="zondag"<?php if ($day == 'zondag' ) echo ' checked'; ?>/>
            <label class="filter_input filter__input-day" for="switch_sunday"><p>zondag</p></label>

            <input type="radio" id="switch_all1" name="chooseDay" value="" <?php if ($day == '' ) echo ' checked'; ?>/>
            <label class="filter_input filter__input-day" for="switch_all1" aria-describedby="current" ><p>Alle dagen</p></label>
          </div>
         <input class="btn filter__btn" type="submit" value="filter toepassen"></input>
        </form>
      </section>

      <section class="resultHeader">
        <header class="filter__results-header">
          <h2 class="filter__results-title"><?php echo count($results);?> Resultaten</h2>
          <a href="./assets/programma.pdf">
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
