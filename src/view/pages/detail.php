  <main>
      <div class="detailbg">
        <header>
          <picture>
            <source
              type="image/webp"
              media="(min-width: 1440px)"
              srcset="assets/img/header/headerdetail@1,5.webp 1x"
            />
            <source
              type="image/webp"
              media="(min-width: 1024px)"
              srcset="assets/img/header/headerdetail.webp 1x"
            />
            <source
              type="image/webp"
              media="(min-width: 768px)"
              srcset="assets/img/header/headerdetail@0,75.webp 1x"
            />
            <source
              type="image/webp"
              media="(min-width: 320px)"
              srcset="assets/img/header/headerdetail@0,5.webp 1x"
            />
            <source
              type="image/png"
              media="(min-width: 1440px)"
              srcset="assets/img/header/headerdetail@1,5.png 1x"
            />
            <source
              type="image/png"
              media="(min-width: 1024px)"
              srcset="assets/img/header/headerdetail.png 1x"
            />
            <source
              type="image/png"
              media="(min-width: 768px)"
              srcset="assets/img/header/headerdetail@0,75.png 1x"
            />
            <source
              type="image/png"
              media="(min-width: 320px)"
              srcset="assets/img/header/headerdetail@0,5.png 1x"
            />
            <img src="./assets/img/header/headerdetail.png" alt="abstract beeld met emma en tekst artiest ">
          </picture>

          <a class="back" href="index.php?page=lineup">
            <p>keer terug naar overzicht</p>
          </a>
        </header>

       <section class="act__detail-info">
        <header class="act__detail-name">
          <h1><?php echo $act['name'];?></h1>
          <p class="detail-nameArtist">door <?php echo $act['artist'];?></p>
        </header>
        <img class="act__detail-photo"
            src="./assets/img/isb/<?php echo $act['day'];?>/<?php echo $act['type'];?>/<?php echo $act["imgpath"];?>.jpg"
            alt="Foto van <?php echo $act['artist'];?>"
        />
        <dl class="act__detail-infoList">
          <div class="act__detail-infoList-item">
            <dt class="icon"><img src="assets/img/icon/calendar.png" alt="" /></dt>
            <dd class="act__detail__infoList-text"><?php echo $act['day'];?></dd>
          </div>
          <div class="act__detail-infoList-item">
            <dt class="icon"><img src="assets/img/icon/clock.png" alt="" /></dt>
            <dd class="act__detail__infoList-text">
              <?php echo $act['time'];?>
            <dd>
          </div>
          <div class="act__detail-infoList-item">
            <dt class="icon"><img src="assets/img/icon/location.png" alt="" /></dt>
            <dd>
              <a target="_blank" href="<?php echo $act['link'];?>" class="act__detail__infoList-text">
              <?php echo $act['place'];?>
              </a>
            </dd>
          </div>
          <div class="act__detail-infoList-item">
            <dt class="icon"><img src="assets/img/icon/nationality.png" alt="" /></dt>
            <dd class="act__detail__infoList-text"><?php echo $act['country'];?></dd>
          </div>
          <div class="act__detail-infoList-item">
            <dt class="icon"><img src="assets/img/icon/globe.png" alt="" /></dt>
            <dd><a target="_blank" href="<?php echo $act['site'];?>" class="act__detail__infoList-text">officiële website</a></dd>
          </div>
        </dl>
        <p class="detail__info-intro"><?php echo $act['intro'];?></p>
      </section>
      </div>

      <section class="pageLayout">
          <header class="pageLayout__header">
            <h2>Locatie</h2>
            <p class="pageLayout__intro">Onze voorstellingen bevinden zich plaats op bepaalde plekken in Beveren. De walking acts en installatieacts vind je langs het vaste parcours in de centrumstraten.</p>
          </header>
          <div class="location__content">
            <ol class="location__list">
              <li class="location__item">
               <span>1</span>
                <a target="_blank" href="http://tiny.cc/6jqk9y" class="location__place">
                  Oud Atletiekplein
                </a>
              </li>
              <li class="location__item">
                <span>2</span>
                <a target="_blank" href="https://bit.ly/2TaUds0" class="location__place">
                  Speelplaats KA/BS De Bever
                </a>
              </li>
              <li class="location__item">
                <span>3</span>
                <a target="_blank" href="https://bit.ly/2U3X59W" class="location__place">
                  Donkvijverstraat
                </a>
              </li>
              <li class="location__item">
                <span>4</span>
                <a target="_blank" href="http://tiny.cc/owqk9y" class="location__place">
                  Diederik van Beverenlaan
                </a>
              </li>

              <li class="location__item">
                <span>5</span>
                <a target="_blank" href="http://tiny.cc/9wqk9y" class="location__place">
                 Yzerhand
                </a>
              </li>
              <li class="location__item">
               <span>6</span>
                <a target="_blank" href="http://tiny.cc/qxqk9y" class="location__place">
                  Vrasenestraat
                </a>
              </li>
              <li class="location__item">
                <span>7</span>
                <a target="_blank" href="http://tiny.cc/zyqk9y" class="location__place">
                  Warande
                </a>
              </li>
              <li class="location__item">
                <span>8</span>
                <a target="_blank" href="http://tiny.cc/7yqk9y" class="location__place">
                  Grote Markt
                </a>
              </li>
              <li class="location__item">
                <span>9</span>
                <a target="_blank" href="http://tiny.cc/ozqk9y" class="location__place">
                 N70
                </a>
              </li>
              <li class="location__item">
                <span>10</span>
                <a target="_blank" href="http://tiny.cc/hpqk9y" class="location__place">
                  Podium achter de kerk
                </a>
              </li>
            </ol>
            <picture>
            <source
                  type="image/webp"
                  media="(min-width: 768px)"
                  srcset="assets/img/map/map.webp 1x"
              />
              <source
                  type="image/webp"
                  media="(min-width: 320px)"
                  srcset="assets/img/map/map@0,5.webp 1x"
              />
              <source
                  type="image/png"
                  media="(min-width: 768px)"
                  srcset="assets/img/map/map.png 1x"
              />
              <source
                  type="image/png"
                  media="(min-width: 320px)"
                  srcset="assets/img/map/map@0,5.png 1x"
              />
              <img src="assets/img/map/map.png" alt="kaart met locaties van voorstellingen">
            </picture>

          </div>
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

