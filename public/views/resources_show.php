<?php

$tags = [
  [
    'id' => 1,
    'label' => 'tileable'
  ],
  [
    'id' => 2,
    'label' => 'soil'
  ],
  [
    'id' => 3,
    'label' => 'grass'
  ],
  [
    'id' => 4,
    'label' => 'mud'
  ],
  [
    'id' => 5,
    'label' => 'grunge'
  ],
  [
    'id' => 6,
    'label' => 'dirt'
  ],
  [
    'id' => 7,
    'label' => 'stone'
  ],
  [
    'id' => 8,
    'label' => 'rock'
  ],
  [
    'id' => 9,
    'label' => 'grass'
  ],
  [
    'id' => 10,
    'label' => 'marble'
  ]
];

$resource_name = 'Awesome-Resource-01';

?>

<div class="u-gutter u-spacing">

  <ul class="o-list o-list--inline u-rythm--horizontal t-text--align-right">

    <li class="o-list__item">

      <a href="#" title="Close">

        <svg class="o-icon">

          <use xlink:href="#cross" />

        </svg>

      </a>

    </li>

  </ul>

</div>

<div class="u-rythm--vertical-medium">

  <div class="u-gutter">

    <h1><?= $resource_name ?></h1>

  </div>

  <div class="u-gutter">

    <h2>Tags</h2>

    <div class="o-float c-tags">

      <?php foreach($tags as $tag): ?>

      <div class="o-float__item c-tags__item c-tag c-tag--<?= $tag['id'] ?>">

        <?= $tag['label'] ?>

      </div>

      <?php endforeach; ?>

    </div>

  </div>

  <div class="u-gutter">

    <h2>Files</h2>

  </div>

  <div class="t-paint--ice">

    <ul class="o-menubar o-list o-list--inline">

      <li class="o-menubar__item o-list__item"><a href="#" class="o-link o-link--active">Diffuse</a></li>

      <li class="o-menubar__item o-list__item"><a href="#" class="o-link">Bump</a></li>

    </ul>

  </div>

  <div class="">

    <?php

    $groups = [];

    for ($i = 0; $i < rand(2, 4); $i++) {
      $versions = [];

      for ($t = 0; $t < rand(1, 6); $t++) {
        array_push($versions, $files[array_rand($files)]);
      }

      array_push($groups, $versions);
    }

    ?>

    <ul class="t-separator--beveled o-list o-list--nostyle c-resourcelist">

      <?php foreach (array_values($groups) as $group): ?>

      <?php

      $first_file_version = count($group);
      $first_file = array_shift($group);

      ?>

      <li class="c-resourcelist__item u-gutter u-spacing">

        <div class="o-grid o-grid--align-items-center u-rythm--horizontal">

          <div class="o-grid__item o-grid__item--fixed">

            <div class="o-picture o-picture--tiny o-picture--framed">

              <div class="o-picture__wrapper">

                <div class="o-picture__frame">

                  <div class="o-picture__item">

                    <div class="o-picture__icon">

                      <svg class="o-icon o-icon--medium">

                        <use xlink:href="#image" />

                      </svg>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="o-grid__item">

            <div class="t-text--emphasis">

              <?= $resource_name ?>.diffuse.<?= $first_file['extension']['label'] ?>

            </div>

            <div class="t-text--detail">

              <dl>

                <dt>Version</dt>
                <dd><?= sprintf('%03d', $first_file_version) ?></dd>

                <dt>Mimetype</dt>
                <dd><?= $first_file['extension']['mimetype'] ?></dd>

                <dt>Filesize</dt>
                <dd><?= $first_file['filesize'] ?>kb</dd>

              </dl>

            </div>

          </div>

          <div class="o-grid__item o-grid__item--fixed">

            <ul class="o-list o-list--inline u-rythm--horizontal">

              <li class="o-list__item">

                <a href="#show-file" class="o-link o-link--info" title="Show File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#folder" />

                  </svg>

                </a>

              </li>

              <li class="o-list__item">

                <a href="#" class="o-link o-link--info" title="Download File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#download" />

                  </svg>

                </a>

              </li>

            </ul>

          </div>

        </div>

      </li>

      <?php endforeach; ?>

    </ul>

  </div>

</div>
