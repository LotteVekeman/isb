  <?php
    var_dump($act);
  ?>

  <main>
      <header>
        <a href="index.php?page=lineup">keer terug naar overzicht</a>
        <h1><?php echo $act['name'];?></h1>
        <p>door <?php echo $act['artist'];?></p>
      </header>
      <div>
        <section>
          <h2 class="hidden">headerinfo</h2>
          <p>#<?php echo $act['type'];?></p>
          <dl>
            <dt><img src="assets/img/icon/calendar.svg" alt="" /></dt>
            <dd><?php echo $act['day'];?></dd>

            <dt><img src="assets/img/icon/clock.svg" alt="" /></dt>
            <dd>
            <?php echo $act['time'];?>
            <dd>

            <dt><img src="assets/img/icon/location.svg" alt="" /></dt></dt>
            <dd>
              <a href="<?php $act['link'];?>">
                <?php echo $act['place'];?>
              </a>
            </dd>

            <dt><img src="assets/img/icon/nationality.svg" alt="" /></dt></dt>
            <dd><?php echo $act['country'];?></dd>

            <dt><img src="assets/img/icon/globe.svg"" alt="" /></dt></dt>
            <dd><a href="<?php $act['site'];?>">website</a></dd>
          </dl>
          <p><?php echo $act['intro'];?></p>
        </section>
        <section>
          <h2>Onze Video's</h2>
          <div>
            <a href="<?php $act['videopath'];?>"></a>
            </ul>
          </div>
        </section>

        <section>
          <h2>Onze Foto's</h2>
          <?php if($act['imgpath'] = ""){
            echo "<p>Er zijn geen foto's beschikbaar</p>";
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
      </div>
    </main>

