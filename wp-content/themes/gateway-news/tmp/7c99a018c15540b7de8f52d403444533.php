<?php
require_once '/Applications/MAMP/htdocs/gateway-news/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><h2>
  Post Details
</h2>  <?php the_post(); ?>
  <?php echo render_partial("posts/post"); ?>

