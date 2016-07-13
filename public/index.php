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

        <div class="o-grid__item o-grid__item--fixed u-sidebar--medium t-paint--dim t-shadow--outside">

          <?php include('views/resources_sidebar.php'); ?>

        </div>

        <div class="o-grid__item">

          <div class="o-grid u-expand--width u-expand--height">

            <div class="o-grid__item u-overflow--vertical">

              <?php include('views/resources.php'); ?>

            </div>

            <div class="o-grid__item o-grid__item--fixed u-sidebar--large t-paint--ice t-shadow--outside u-overflow--vertical">

              <?php include('views/resources_edit.php'); ?>

            </div>

          </div>

        </div>

      </div>

    </div>

  </body>

</html>
