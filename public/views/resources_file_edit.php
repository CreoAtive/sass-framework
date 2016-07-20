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

    <h1>Edit File</h1>

  </div>

  <div class="u-gutter">

    <h2>Preview</h2>

  </div>

  <div class="">

    <?php include('views/resources_file_edit_preview.php'); ?>

  </div>

  <div class="u-gutter">

    <h2>General</h2>

    <form class="o-form u-rythm--vertical">

      <div class="o-form__row o-form__row--collapse o-grid o-grid--align-items-flex-end">

        <div class="o-form__field o-grid__item">

          <label for="context">Context</label>

          <select name="context_id">

            <option value="1">Diffuse</option>

            <option value="2">Bump</option>

          </select>

        </div>

        <div class="o-form__field o-grid__item--fixed">

          <button>Save</button>

        </div>

      </div>

    </form>

  </div>

</div>
