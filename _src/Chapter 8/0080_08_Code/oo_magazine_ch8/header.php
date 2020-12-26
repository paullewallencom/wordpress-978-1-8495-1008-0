<?php include(TEMPLATEPATH . '/head-meta.php'); ?>

<body>
<a name="top"></a><!--anchor for top-->
<div id="container"><!--container goes here-->
<div id="intHeader">
<h1>OpenSource Online Magazine</h1>
<p><em>Using Open Source for work and play</em></p>
<div id="date"><?php echo date("F Y"); ?></div>

<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#flashHold').flash(
        { 
          src: '<?php  bloginfo('template_directory');?>/flash/ooflash-sample.swf',
          width: 338,
          height: 150,
          flashvars: { catName: '<?echo single_cat_title('');?>' }
        },
        { version: 8 }
    );
});
</script>

<div id="flashHold">

</div><!--//flashHold-->
</div><!--//header-->

