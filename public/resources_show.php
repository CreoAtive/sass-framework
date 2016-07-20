<?php include('data/files.php'); ?>

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

          <?php include('views/resources_sidebar.php'); ?>

        </div>

        <div class="o-grid__item u-stacking--midground">

          <div class="o-grid u-expand--width u-expand--height">

            <div class="o-grid__item u-overflow--vertical">

              <?php include('views/resources.php'); ?>

            </div>

            <div class="o-grid__item o-grid__item--fixed u-sidebar--large t-paint--metallic t-shadow--outside o-overlay--wrapper">

              <div class="u-expand--height u-overflow--vertical">

                <?php include('views/resources_show.php'); ?>

              </div>

              <div id="show-file" class="o-overlay">

                <div class="o-overlay__frame">

                  <div class="o-overlay__window t-paint--metallic t-shadow--outside">

                    <div class="u-expand--height u-overflow--vertical">

                      <?php include('views/resources_file_show.php'); ?>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </body>

</html>
