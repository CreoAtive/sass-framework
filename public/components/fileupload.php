<div class="c-fileupload">

  <div class="c-dragndrop">

    <p>Drop files here</p>

  </div>

  <div class="o-list c-filequeue t-separator--beveled">

    <?php for($i = 0; $i < rand(3, 6); $i++): ?>

    <?php

    $rand_size = rand(64, 2048);
    $rand_loaded = rand(0, $rand_size);

    $progress = $rand_loaded / $rand_size * 100;

    ?>

    <div class="o-list__item c-filequeue__item u-gutter">

      <div class="o-grid o-grid--align-items-center">

        <div class="o-grid__item o-grid__item--expand">

          <div class="c-filequeue__detail t-text--emphasis">Filename01.jpg</div>

          <div class="c-filequeue__detail t-text--detail"><?= $rand_loaded ?>kb / <?= $rand_size ?>kb</div>

        </div>

        <div class="o-grid__item o-grid__item--shrink">

          <a class="o-link o-link--alert" href="#">

            <svg class="o-icon o-icon--small">

              <use xlink:href="#cross" />

            </svg>

          </a>

        </div>

      </div>

      <div class="c-progressbar">

        <div class="c-progressbar__bar" style="width:<?= $progress;?>%;"></div>

      </div>

    </div>

    <?php endfor; ?>

  </div>

</div>
