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

<div class="u-rythm--vertical">

  <div class="o-row u-gutter">

    <h1>edit</h1>

    <div class="o-float c-tags">

      <?php foreach($tags as $tag): ?>

      <div class="o-float__item c-tags__item c-tag c-tag--<?= $tag['id'] ?>">

        <?= $tag['label'] ?>

        <a class="o-link o-link--neutral o-link--icon c-tag__action" href="#">

          <svg class="o-icon o-icon--tiny">

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

  <div class="t-paint--ice">

    <ul class="o-menubar o-list o-list--inline">

      <li class="o-menubar__item o-list__item"><a href="#" class="o-link o-link--active">Diffuse</a></li>

      <li class="o-menubar__item o-list__item"><a href="#" class="o-link">Bump</a></li>

    </ul>

  </div>

  <div class="">

    <?php

    $files = [
      [
        'id' => 1,
        'filesize' => 512,
        'extension' => [
          'id' => 1,
          'label' => 'jpg',
          'mimetype' => 'image/jpeg'
        ],
        'metadata' => [
          'width' => 1024,
          'height' => 1024
        ]
      ],
      [
        'id' => 2,
        'filesize' => 768,
        'extension' => [
          'id' => 1,
          'label' => 'jpg',
          'mimetype' => 'image/jpeg'
        ],
        'metadata' => [
          'width' => 2048,
          'height' => 2048
        ]
      ],
      [
        'id' => 3,
        'filesize' => 2048,
        'extension' => [
          'id' => 2,
          'label' => 'tif',
          'mimetype' => 'image/tif'
        ],
        'metadata' => [
          'width' => 4096,
          'height' => 4096
        ]
      ],
      [
        'id' => 3,
        'filesize' => 2048,
        'extension' => [
          'id' => 2,
          'label' => 'tif',
          'mimetype' => 'image/tif'
        ],
        'metadata' => [
          'width' => 4096,
          'height' => 4096
        ]
      ]
    ];

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

      <li class="c-resourcelist__item">

        <div class="o-grid o-grid--align-items-center u-rythm--horizontal u-gutter u-spacing">

          <div class="o-grid__item o-grid__item--fixed">

            <div class="o-picture o-picture--tiny o-picture--framed">

              <div class="o-picture__item"></div>

            </div>

          </div>

          <div class="o-grid__item">

            <div class="t-font--emphasis">

              resource.diffuse.<?= $first_file['extension']['label'] ?>

              <?= $first_file['metadata']['width'] ?>x<?= $first_file['metadata']['height'] ?>

            </div>

            <div class="t-font--detail">

              v<?= sprintf('%03d', $first_file_version) ?> <?= $first_file['extension']['mimetype'] ?> <?= $first_file['filesize'] ?>kb

            </div>

          </div>

          <div class="o-grid__item o-grid__item--fixed">

            <ul class="o-list o-list--inline u-rythm--horizontal">

              <li class="o-list__item">

                <a href="#" class="o-link o-link--info" title="Show Versions">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#list" />

                  </svg>

                </a>

              </li>

              <li class="o-list__item">

                <a href="#" class="o-link o-link--info" title="Add Version">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#plus" />

                  </svg>

                </a>

              </li>

              <li class="o-list__item">

                <a href="#" class="o-link o-link--alert" title="Delete File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#bin" />

                  </svg>

                </a>

              </li>

            </ul>

          </div>

        </div>

        <?php if (count($group)): ?>

        <ul class="t-paint--phantom t-shadow--inside u-spacing o-list o-list--nostyle u-rythm--vertical">

          <?php foreach (array_values($group) as $id => $file): ?>

          <li class="u-gutter">

            v<?= sprintf('%03d', count($group) - $id) ?> <?= $file['extension']['mimetype'] ?> <?= $file['metadata']['width'] ?>x<?= $file['metadata']['height'] ?>

          </li>

          <?php endforeach; ?>

        </ul>

        <?php endif; ?>

      </li>

      <?php endforeach; ?>

    </ul>

  </div>

</div>
