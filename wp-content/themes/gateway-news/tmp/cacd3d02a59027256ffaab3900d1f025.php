<?php
require_once '/Applications/MAMP/htdocs/gateway-news/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><!--Charset  --><meta content="text/html;charset=UTF-8" http-equiv="Content-type" /><!--Title  --><title>
  <?php echo wp_title(); ?>

</title><!--Stylesheets  --><!--screen.css is loaded by default with wp_head() function. See config/initializers/default_hooks.php for details  -->  <?php echo stylesheet_link_tag("bootstrap.css"); ?>

  <?php echo stylesheet_link_tag("bootstrap-responsive.css"); ?>

<!--HTML5 Shiv  -->

<!--[if lt IE 9]>
  <?php echo javascript_include_tag("http://html5shiv.googlecode.com/svn/trunk/html5.js"); ?>


<![endif]-->
  <?php wp_head(); ?>
