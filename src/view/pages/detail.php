  <main class="act__detail">
      <header class="act__detail-header">
        <img src="./assets/img/headerdetail.png" alt="abstract beeld met emma en tekst artiest ">
        <a class="back" href="index.php?page=lineup">
          <p class="back-text">keer terug naar overzicht</p>
        </a>
      </header>


      <section class="act__detail-info">
        <header class="act__detail-name">
          <h1 class="detail-nameTitle"><?php echo $act['name'];?></h1>
          <p class="detail-nameArtist">door <?php echo $act['artist'];?></p>
        </header>
        <img class="act__detail-photo2"
            src="./assets/img/isb/<?php echo $act['day'];?>/<?php echo $act['type'];?>/<?php echo $act["imgpath"];?>.jpg"
            alt="Foto van <?php echo $act['artist'];?>"
        />
        <dl>
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
            <dt class="icon"><img src="assets/img/icon/location.png" alt="" /></dt>
            <dd>
              <a target="_blank" href="<?php echo $act['link'];?>">
              <?php echo $act['place'];?>
              </a>
            </dd>
          </div>
          <div class="infoList-row detail__info-country">
            <dt class="icon"><img src="assets/img/icon/nationality.png" alt="" /></dt>
            <dd><?php echo $act['country'];?></dd>
          </div>
          <div class="infoList-row detail__info-site">
            <dt class="icon"><img src="assets/img/icon/globe.png" alt="" /></dt>
            <dd><a target="_blank" href="<?php echo $act['site'];?>">officiële website</a></dd>
          </div>
        </dl>
        <p class="detail__info-intro"><?php echo $act['intro'];?></p>
      </section>

     <section> 
          <header>
            <h2>Locatie</h2>
            <p>Onze voorstellingen bevinden zich plaats op bepaalde plekken in Beveren. De walking acts en installatieacts vind je langs het vaste parcours in de centrumstraten</p>
          </header>
          <ol>
            <li><a target="_blank" href="http://tiny.cc/6jqk9y">Oud Atletiekplein</a></li>
            <li><a target="_blank" href="https://bit.ly/2TaUds0">Speelplaats KA/BS De Bever</a></li>
            <li><a target="_blank" href="https://bit.ly/2U3X59W">Donkvijverstraat</a></li>
            <li><a target="_blank" href="http://tiny.cc/owqk9y">Diederik van Beverenlaan</a></li>
            <li><a target="_blank" href="http://tiny.cc/9wqk9y">Yzerhand</a></li>
            <li><a target="_blank" href="http://tiny.cc/qxqk9y">Vrasenestraat</a></li>
            <li><a target="_blank" href="http://tiny.cc/zyqk9y">Warande</a></li>
            <li><a target="_blank" href="http://tiny.cc/7yqk9y">Grote Markt</a></li>
            <li><a target="_blank" href="http://tiny.cc/ozqk9y">N70</a></li>
            <li><a target="_blank" href="http://tiny.cc/hpqk9y">Podium achter de kerk</a></li>
          </ol>
          <img src="./assets/img/map.png" alt="kaart met locaties van voorstellingen" height="300px">
      </section>

      <section class="act__detail-others">
          <h2>Op dezelfde dag</h2>
          <ul>
            <li class="item">
              <a class="kijkerLink" href="index.php?page=detail&amp;id=<?php echo $other['id'];?>">
              <article>
                <div class="infoGradient">
                  <p class="dayLabel"><?php echo $other['time'];?></p>
                  <div class="textLabel">x
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
                      src="./assets/img/isb/<?php echo $other['day'];?>/<?php echo $other['type'];?>/<?php echo $other["imgpath"];?>.jpg"
                      alt="Foto van <?php echo $other['artist'];?>"/>
                </div>
              </article>
              </a>
            </li>
          </ul>
      </section>

    </main>

