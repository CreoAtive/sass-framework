<!DOCTYPE html>
<html>

  <head>

    <title>Sass-Framework</title>

    <link href="/css/app.css" rel="stylesheet" type="text/css" media="screen" />

  </head>

  <body>

    <?php

    $sprites_path = 'svg/sprites.svg';

    if (file_exists($sprites_path)) {
      include($sprites_path);
    }

    ?>

    <div id="mountpoint">

      <div class="o-grid u-expand--width u-expand--height">

        <div class="o-grid__item o-grid__item--fixed u-sidebar--tiny t-paint--dark">

          <?php include('views/navigation.php'); ?>

        </div>

        <div class="o-grid__item o-grid__item--fixed u-sidebar--medium t-paint--dim t-shadow--outside u-stacking--foreground">

          <ul class="o-list o-list--nostyle">

            <li class="o-list__item">

              <a href="#" class="o-link o-link--block o-link--fill u-spacing u-gutter">Me</a>

            </li>

            <li class="o-list__item">

              <a href="#" class="o-link o-link--block o-link--fill u-spacing u-gutter">Password</a>

            </li>

            <li class="o-list__item">

              <a href="#" class="o-link o-link--block o-link--fill u-spacing u-gutter">Invoices</a>

            </li>

            <li class="o-list__item">

              <a href="#" class="o-link o-link--block o-link--fill u-spacing u-gutter">Subscription</a>

            </li>

          </ul>

        </div>

        <div class="o-grid__item u-stacking--midground">

          <div class="o-grid u-expand--width u-expand--height">

            <div class="o-grid__item u-overflow--vertical">

              <div class="u-gutter o-row">

                <ul class="o-list">

                  <li class="o-list__item">

                    <a href="#" class="o-link">Me</a>

                  </li>

                  <li class="o-list__item">

                    <a href="#" class="o-link">Password</a>

                  </li>

                  <li class="o-list__item">

                    <a href="#" class="o-link">Invoices</a>

                  </li>

                  <li class="o-list__item">

                    <a href="#" class="o-link">Subscription</a>

                  </li>

                </ul>

              </div>

            </div>

            <div class="o-grid__item o-grid__item--fixed u-sidebar--large t-paint--metallic t-shadow--outside">

              <div class="u-expand--height u-overflow--vertical">

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </body>

</html>
