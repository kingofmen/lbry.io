<?php Response::setMetaDescription(__('description.no-os')) ?>
<?php Response::setMetaTitle(__('global.get')) ?>
<?php Response::addMetaImage(Request::getHostAndProto() . '/img/lbry-ui.png') ?>

<main class="ancillary">
  <section>
    <div class="inner-wrap">
      <?php echo View::render('download/_list', [
        'title' => __('download.select')
      ]) ?>
    </div>
  </section>
</main>
