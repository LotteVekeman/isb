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

      <section>
        <h2>Onze Video's</h2>
        <div>
          <a href="<?php $act['videopath'];?>"></a>

        </div>
      </section>

      <section>
        <h2>Onze Foto's</h2>
        <?php if($act['imgpath'] !== ''){
          echo "Er zijn geen foto's beschikbaar";
        }else{
            echo '<div>
            <ul>
              <li><img src="" alt=""></li>
              <li><img src="" alt=""></li>
              <li><img src="" alt=""></li>
              <li><img src="" alt=""></li>
            </ul>
          </div>'
          ;};?>
      </section>

      <section>
          <h2>Ook op deze dag</h2>
          <ul>
            <li><a href=""></a>Cie Xav To Yilo</li>
            <li><a href=""></a>Cie Sitting Duck</li>
            <li><a href=""></a>Krijmfresj</li>
          </ul>
      </section>

    </main>

