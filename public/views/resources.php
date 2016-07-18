<?php

$resources = [
  [
    'url' => '/img/grass01.jpg',
    'width' => 1024,
    'height' => 1024
  ],
  [
    'url' => '/img/grass02.jpg',
    'width' => 1024,
    'height' => 1024
  ],
  [
    'url' => '/img/grass03.jpg',
    'width' => 1024,
    'height' => 1024
  ],
  [
    'url' => '/img/grass04.jpg',
    'width' => 1024,
    'height' => 1024
  ],
  [
    'url' => '/img/grass05.jpg',
    'width' => 2048,
    'height' => 1024
  ]
];

?>

<div class="t-paint--metallic">

  <div class="o-row u-gutter u-spacing">

    <input class="u-expand--width" type="text" name="foo" placeholder="Search..." />

  </div>

</div>

<div class="o-row">

  <div class="o-float o-cards">

    <?php for($i = 0; $i < 24; $i++): ?>

      <div class="o-float__item o-cards__item">

        <div class="o-card">

          <div class="o-picture">

            <?php

            $resource = $resources[array_rand($resources)];

            ?>

            <img src="<?php echo $resource['url']; ?>" width="<?php echo $resource['width']; ?>px" height="<?php $resource['height']; ?>px" />

          </div>

        </div>

      </div>

    <?php endfor; ?>

  </div>

</div>
