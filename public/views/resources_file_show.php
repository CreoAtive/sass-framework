<?php

$current_file = $files[array_rand($files)];

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

    <h1>Show File</h1>

  </div>

  <div class="u-gutter">

    <div class="o-picture o-picture--responsive-landscape o-picture--framed">

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

  <div class="u-gutter">

    <h2>File</h2>

  </div>

  <div class="o-grid o-grid--align-items-center u-rythm--horizontal u-gutter">

    <div class="o-grid__item">

      <div class="t-text--emphasis">

        <?= $resource_name ?>.diffuse.<?= $current_file['extension']['label'] ?>

      </div>

      <div class="t-text--detail">

        <dl>

          <dt>Version</dt>
          <dd><?= sprintf('%03d', count($files)) ?></dd>

          <dt>Mimetype</dt>
          <dd><?= $current_file['extension']['mimetype'] ?></dd>

          <dt>Filesize</dt>
          <dd><?= $current_file['filesize'] ?>kb</dd>

        </dl>

      </div>

    </div>

    <div class="o-grid__item o-grid__item--fixed">

      <ul class="o-list o-list--inline u-rythm--horizontal">

        <li class="o-list__item">

          <a href="#" class="o-link o-link--info" title="Download File">

            <svg class="o-icon o-icon--small">

              <use xlink:href="#download" />

            </svg>

          </a>

        </li>

        <li class="o-list__item">

          <a href="#edit-file" class="o-link o-link--info" title="Edit File">

            <svg class="o-icon o-icon--small">

              <use xlink:href="#pencil" />

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

  <div class="u-gutter">

    <h2>Older Versions</h2>

  </div>

  <div>

    <?php if (count($files)): ?>

    <ul class="o-list o-list--nostyle t-separator--beveled">

      <?php foreach (array_values(array_slice($files, 0, -1)) as $id => $file): ?>

      <li class="u-gutter u-spacing">

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

            <div class="t-text--detail">

              <dl>

                <dt>Version</dt>
                <dd><?= sprintf('%03d', (count($files) - 1) - $id) ?></dd>

                <dt>Mimetype</dt>
                <dd><?= $file['extension']['mimetype'] ?></dd>

                <dt>Filesize</dt>
                <dd><?= $file['filesize'] ?>kb</dd>

              </dl>

            </div>

          </div>

          <div class="o-grid__item o-grid__item--fixed">

            <ul class="o-list o-list--inline u-rythm--horizontal">

              <li class="o-list__item">

                <a href="#" class="o-link o-link--info" title="Download File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#download" />

                  </svg>

                </a>

              </li>

              <li class="o-list__item">

                <a href="#edit-file" class="o-link o-link--info" title="Edit File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#pencil" />

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

      </li>

      <?php endforeach; ?>

    </ul>

    <?php endif; ?>

  </div>

</div>
