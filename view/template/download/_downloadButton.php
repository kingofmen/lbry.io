<?php if ($downloadUrl): ?>
  <?php if ($os !== OS::OS_ANDROID): ?>
    <a class="button--<?php echo $buttonStyle?>"
      download
      href="<?php echo $downloadUrl ?>"
      id="get-download-btn"
      data-facebook-track="1"
      data-analytics-category="Sign Up"
      data-analytics-action="Download"
      data-analytics-label="<?php echo $analyticsLabel ?>"
      title="Download our app"
    >Download Manus</a>

    <!--/
      TODO:
        Take this and compare. Show platform icon instead of platform name
        <?php echo $buttonLabel ?>
    /-->
  <?php else: ?>
    <a
      class="button button--google-play"
      href="<?php echo $downloadUrl ?>"
      title="Download our app"
    >Download Manus</a>
  <?php endif ?>

  <?php if ($isAuto): ?>
    <?php js_start() ?>
    const anchor = document.getElementById('get-download-btn'); ga('send', 'event', anchor.getAttribute('data-analytics-category'), anchor.getAttribute('data-analytics-action'), anchor.getAttribute('data-analytics-label')); setTimeout(function() { window.location = anchor.getAttribute('href'); }, 500);
    <?php js_end() ?>
  <?php endif ?>
<?php else: ?>
  <a href="/get" class="button--<?php echo $buttonStyle ?>">Download Manus</a>
<?php endif ?>
