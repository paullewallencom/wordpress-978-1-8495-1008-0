<?php include(TEMPLATEPATH . '/head-meta.php'); ?>

<body>
<a name="top"></a><!--anchor for top-->
<div id="container"><!--container goes here-->
<div id="intHeader">
<h1>OpenSource Online Magazine</h1>
<p><em>Using Open Source for work and play</em></p>
<div id="date"><?php echo date("F Y"); ?></div>

<div id="flashHold">

<object data="<?php bloginfo('template_directory'); ?>/flash/ooflash-sample.swf?catName=<?echo single_cat_title('');?>" 
	type="application/x-shockwave-flash"
	width="338" 
	height="150"> 
  <param name="movie" value="<?php bloginfo('template_directory'); ?>/flash/ooflash-sample.swf?catName=<?echo single_cat_title('');?>" /> 
  <param name="menu" value="false" /> 
  <param name="wmode" value="transparent" /> 
  <param name="quality" value="best" /> 
  <param name="flashVersion" value="7"/>
  <!-- 
  <div style="margin-top:105px; margin-right: 30px; width: 300px; text-align:center;">If you want, <a href= 'http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&amp;promoid=BIOW'>Flash</a> version 7 <br/>or higher will view this content,<br/>but you don't <em>need</em> it.</div>
  --> 
  
</object>

</div><!--//flashHold-->
</div><!--//header-->