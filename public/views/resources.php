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

    <form class="o-form">

      <div class="o-form__row o-form__row--collapse o-grid">

        <div class="o-form__field o-grid__item o-grid__item--expand">

          <input type="text" name="foo" placeholder="Search..." />

          <div class="o-form__suggestions">

            <ul class="o-list o-list--nostyle u-gutter u-spacing">

              <li class="o-list__item"><a href="#">tag</a></li>

            </ul>

          </div>

        </div>

        <div class="o-form__field o-grid__item o-grid__item--fixed">

          <button>Search</button>

        </div>

      </div>

    </form>

  </div>

</div>

<div class="o-row">

  <div class="o-float">

    <?php for($i = 0; $i < 24; $i++): ?>

      <?php

      $resource = $resources[array_rand($resources)];

      $ar = $resource['width'] / $resource['height'];
      $height = 128 * 1.5;
      $width = $height;

      ?>

      <div class="o-float__item u-gutter--tiny u-spacing--tiny" style="width:25%;">

        <div class="o-picture o-picture--responsive-square o-picture--background">

          <div class="o-picture__wrapper">

            <div class="o-picture__frame">

              <div class="o-picture__item">

                <div class="o-picture__icon">

                  <svg class="o-icon o-icon--medium">

                    <use xlink:href="#image" />

                  </svg>

                </div>

                <div class="o-picture__image" style="background-image: url(<?= $resource['url'] ?>)">

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    <?php endfor; ?>

  </div>

</div>
