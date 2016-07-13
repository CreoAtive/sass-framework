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

?>

<div class="o-row u-gutter">

  <h1>edit</h1>

  <div class="o-float c-tags">

    <?php foreach($tags as $tag): ?>

    <div class="o-float__item c-tags__item c-tag c-tag--<?= $tag['id'] ?>">

      <?= $tag['label'] ?>

      <a class="o-link o-link--neutral o-link--icon c-tag__remove" href="#">

        <svg class="o-icon o-icon--small">

          <use xlink:href="#cross" />

        </svg>

      </a>

    </div>

    <?php endforeach; ?>

  </div>

  <form class="o-form u-rythm--vertical">

    <div class="o-form__row">

      <div class="o-form__field">

        <label for="label">Label</label>

        <input type="text" name="label" value="" placeholder="Label" />

      </div>

    </div>

    <div class="o-form__row">

      <div class="o-form__field">

        <button>Save</button>

        <a href="#" class="o-link o-link--alert">Cancel</a>

      </div>

    </div>

  </form>

</div>
