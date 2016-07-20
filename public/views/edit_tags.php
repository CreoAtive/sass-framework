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

    <h1>Tags</h1>

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

  </div>

  <div class="u-gutter">

    <form class="o-form">

      <div class="o-form__row o-form__row--collapse o-grid u-expand--width">

        <div class="o-form__field o-grid__item o-grid__item--expand">

          <input type="text" name="tag" value="" placeholder="Tag" />

        </div>

        <div class="o-form__field o-grid__item o-grid__item--fixed">

          <button>Add</button>

        </div>

      </div>

    </form>

  </div>

</div>
