   <main >
      <section class="pageHeader">
        <header>
          <h1>Lineup</h1>
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
              <?php
                if($currentEvent == 'voorstelling'){
                  echo 'checked';
                }
              ?>
            />
            <label for="switch_left">Voorstelling</label>
            <input
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
            <label for="switch_right">Straatattractie</label>
          </div>
         <input class="btn" type="submit" value="filter"></input>
        </form>
      </section>

      <section>
        <h2>Resultaten:</h2>
        <ul>
          <?php foreach($results as $result): ?>

            <li class="item">
              <a href="index.php?page=detail&amp;id=<?php echo $result['id'];?>">
              <article>
                <div class="infoGradient">
                  <p class="dayLabel"><?php echo $result['time'];?></p>
                  <div class="textLabel">
                    <h3><?php echo $result['artist'];?><sup> <?php echo $result['short'];?> </sup></h3>
                    <p class="textLabel__name"><?php echo $result['name'];?></p>
                  </div>
                </div>

                <div class="gradient">
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
