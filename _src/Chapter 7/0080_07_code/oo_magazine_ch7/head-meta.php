<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>OpenSource Online Magazine</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.css" media="screen" />

<script type="text/javascript">
jQuery(function() {
   jQuery('.post:not(h2) a:has(img)').lightBox(); 
});
</script>

<link href="<?php bloginfo('template_directory'); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />


<style type="text/css" media="screen"> @import url("<?php bloginfo('stylesheet_url'); ?>");</style>


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>




</head>