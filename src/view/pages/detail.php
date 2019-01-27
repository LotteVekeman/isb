  <main class="act__detail">
      <header class="act__detail-header">
        <a class="back" href="index.php?page=lineup">
          <p class="back-text">keer terug naar overzicht</p>
        </a>

        <div class="act__detail-name">
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


      <section class="act__detail-info">
        <h2 class="hidden">headerinfo</h2>
        <p class="info-type">#<?php echo $act['type'];?></p>
        <dl class="act__detail__infoList">
          <div class="infoList-row detail__info-day">
            <dt class="icon"><img src="assets/img/icon/calendar.png" alt="" /></dt>
            <dd><?php echo $act['day'];?></dd>
          </div>
          <div class="infoList-row detail__info-time">
            <dt class="icon"><img src="assets/img/icon/clock.png" alt="" /></dt>
            <dd>
            <?php echo $act['time'];?>
            <dd>
          </div>
          <div class="infoList-row detail__info-location">
            <dt class="icon"><img src="assets/img/icon/location.png" alt="" /></dt></dt>
            <dd>
              <a target="_blank" href="<?php echo $act['link'];?>">
                <?php echo $act['place'];?>
              </a>
            </dd>
          </div>
          <div class="infoList-row detail__info-country">
            <dt class="icon"><img src="assets/img/icon/nationality.png" alt="" /></dt></dt>
            <dd><?php echo $act['country'];?></dd>
          </div>
          <div class="infoList-row detail__info-site">
            <dt class="icon"><img src="assets/img/icon/globe.png"" alt="" /></dt></dt>
            <dd><a target="_blank" href="<?php echo $act['site'];?>">officiële website</a></dd>
          </div>
        </dl>
        <p class="detail__info-intro"><?php echo $act['intro'];?></p>
      </section>

      <section class="act__detail-others">
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

