  <main role="detailpg" class="act__detail">
      <header class="act__detail-header">
        <a role="link naar overzicht" class="back" href="index.php?page=lineup">
          <p class="back-text">keer terug naar overzicht</p>
        </a>

        <div role="header detail" class="act__detail-name">
          <h1 class="detail-nameTitle"><?php echo $act['name'];?></h1>
          <p class="detail-nameArtist">door <?php echo $act['artist'];?></p>
        </div>

        <div class="gradient3">
          <img class="top act__detail-photo"
            src="./assets/img/isb/<?php echo $act['day'];?>/<?php echo $act['type'];?>/<?php echo $act["imgpath"];?>.jpg"
            alt="Foto van <?php echo $act['artist'];?>"
          />
        </div>
      </header>


      <section role="meer info over event" class="act__detail-info">
        <h2 class="hidden">headerinfo</h2>
        <p class="info-type">#<?php echo $act['type'];?></p>
        <img class="act__detail-photo2" width="300px"
            src="./assets/img/isb/<?php echo $act['day'];?>/<?php echo $act['type'];?>/<?php echo $act["imgpath"];?>.jpg"
            alt="Foto van <?php echo $act['artist'];?>"
        />
        <dl role="list van gegevens" class="act__detail__infoList" role="">
          <div class="infoList-row detail__info-day">
            <dt class="icon"><img src="assets/img/icon/calendar.png" alt="" /></dt>
            <dd role="dag van event"><?php echo $act['day'];?></dd>
          </div>
          <div class="infoList-row detail__info-time">
            <dt class="icon"><img src="assets/img/icon/clock.png" alt="" /></dt>
            <dd role="tijd(en) van event">
            <?php echo $act['time'];?>
            <dd>
          </div>
          <div class="infoList-row detail__info-location">
            <dt class="icon"><img src="assets/img/icon/location.png" alt="" /></dt></dt>
            <dd role="plaats van event">
              <a target="_blank" href="<?php echo $act['link'];?>">
                <?php echo $act['place'];?>
              </a>
            </dd>
          </div>
          <div class="infoList-row detail__info-country">
            <dt class="icon"><img src="assets/img/icon/nationality.png" alt="" /></dt></dt>
            <dd role="nationaliteit van de acteurs"><?php echo $act['country'];?></dd>
          </div>
          <div class="infoList-row detail__info-site">
            <dt class="icon"><img src="assets/img/icon/globe.png"" alt="" /></dt></dt>
            <dd role="website van vereniging"><a target="_blank" href="<?php echo $act['site'];?>">officiële website</a></dd>
          </div>
        </dl>
        <p role="meer info over event " class="detail__info-intro"><?php echo $act['intro'];?></p>
      </section>

      <section role="suggesties voor andere" class="act__detail-others">
          <h2>Moet je gezien hebben</h2>
          <ul>
            <li class="item">
              <a class="kijkerLink' href="index.php?page=detail&amp;id=<?php echo $other['id'];?>">
              <article>
                <div class="infoGradient">
                  <p class="dayLabel"><?php echo $other['time'];?></p>
                  <div class="textLabel">
                    <h3>
                      <?php
                      echo $other['artist'];?>
                      <sup>
                        <?php if($other['artist']!== ''){
                          echo $other['short'];
                        }?>
                      </sup>
                    </h3>
                    <p class="textLabel__name"><?php echo $other['name'];?></p>
                  </div>
                </div>

                <div class="gradient">
                  <img class="top"
                      src="./assets/img/isb/<?php echo $other['day'];?>/<?php echo $other['type'];?>/<?php echo $other["imgpath"];?>.jpg" width="300px"
                      alt="Foto van <?php echo $other['artist'];?>"/>
                </div>
              </article>
              </a>
            </li>
          </ul>
      </section>

    </main>

