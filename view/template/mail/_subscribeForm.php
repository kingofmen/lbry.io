<?php $error = $error ?? null ?>
<?php $tag = $tag ?? null ?>
<?php $largeInput = $largeInput ?? false ?>

<form id="mail_form" action="/list/subscribe" method="POST" novalidate>
  <?php if ($error): ?>
  <div class="notice notice-error spacer1"><?php echo $error ?></div>
  <?php endif ?>

  <div class="fieldset"> <!--/ native `fieldset` cannot use flexbox in Chromium /-->
    <input type="email" name="email" placeholder="{{email.placeholder}}" required>
    <input type="hidden" name="returnUrl" value="<?php echo $returnUrl ?>"/>

    <?php if ($tag): ?>
    <input type="hidden" name="tag" value="<?php echo $tag ?>"/>
    <?php endif ?>

    <input type="submit" value="<?php echo $submitLabel ?? __('email.subs') ?>" name="subscribe">
  </div>

  <?php if (!($hideDisclaimer ?? false)): ?>
  <small class="meta">{{email.disclaimer}}</small>
  <?php endif ?>

  <?php js_start() ?>
  $("#mail_form").submit(function() {
    fbq('track', 'Lead');
  });
  <?php js_end() ?>
</form>
