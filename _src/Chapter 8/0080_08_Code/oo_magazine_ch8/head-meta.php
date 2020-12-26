<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>OpenSource Online Magazine</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flash.js"></script>

<link href="<?php bloginfo('template_directory'); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />


<style type="text/css" media="screen"> 
   @import url("<?php bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.css");
   @import url("<?php bloginfo('stylesheet_url'); ?>");
</style>


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<script type="text/javascript">
jQuery(function() {
   jQuery('.post:not(h2) a:has(img)').lightBox(); 
});
</script>

<script type="text/javascript">
/*jQuery(document).ready(function(){
    jQuery('h2').flash(
        { 
            src: '/wp-content/themes/oo_magazine/flash/jfr-Futura.swf', 
            flashvars: { 
                css: [
                    '* { color: #FFFFFF; }',
                    'a { color: #315a6c; text-decoration: none; }',
                    'a:hover { text-decoration: underline; }'
                ].join(' ')
            }
        },
        { version: 7 },
        function(htmlOptions) {
            htmlOptions.flashvars.txt = this.innerHTML;
            this.innerHTML = '<div>'+this.innerHTML+'</div>';
            var $alt = jQuery(this.firstChild);
            htmlOptions.height = $alt.height();
            htmlOptions.width = $alt.width();
            $alt.addClass('alt');
            jQuery(this)
                .addClass('flash-replaced')
                .prepend(jQuery.fn.flash.transform(htmlOptions));						
        }
    );
});*/
</script>


</head>