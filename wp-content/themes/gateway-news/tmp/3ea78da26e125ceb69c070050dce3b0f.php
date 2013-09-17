<?php
require_once '/Applications/MAMP/htdocs/gateway-news/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><!DOCTYPE html>
<html>
<head>
  <?php echo render_partial("layouts/head"); ?>

</head><body>
<div class="row-fluid">
<header class="site-header">
  <?php echo render_partial("layouts/header"); ?>

</header><section class="site-content">
  <?php echo yield(); ?>

</section><footer class="site-footer">
  <?php echo render_partial("layouts/footer"); ?>

</footer></div>  <?php wp_footer(); ?>
</body></html>