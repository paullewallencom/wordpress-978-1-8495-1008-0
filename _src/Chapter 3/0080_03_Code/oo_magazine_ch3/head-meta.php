<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>OpenSource Online Magazine</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php 
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
wp_head(); 

?>

<link href="<?php bloginfo('template_directory'); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />


<style type="text/css" media="screen"> 
   @import url("<?php bloginfo('stylesheet_url'); ?>");
</style>


</head>