<?php
  if ( is_plugin_active( 'gravityforms/gravityforms.php' ) && $options = get_option('lr_theme_general_options') ):
    $form = $options['newsletter_gform'];
?>
<div class="newsletterRow">
  <div id="newsletterFormWrapper" class="container">
    <?php echo do_shortcode('[gravityform id="'.$form.'" title="true" description="true" ajax="true"]');?>
  </div>
</div>
<?php endif; ?>