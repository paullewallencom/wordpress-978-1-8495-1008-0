<?php include(TEMPLATEPATH . '/head-meta.php'); ?>

<body>
<a name="top"></a><!--anchor for top-->
<div id="container"><!--container goes here-->
<div id="header">
<h1>OpenSource Online Magazine</h1>
<p><em>Using Open Source for work and play</em></p>
<div id="date"><?php echo date("F Y"); ?></div>
</div><!--//header-->

<!-- Begin #container2 this holds the content and sidebars-->
<div id="container2">

<!-- Begin #container3 keeps the left col and body positioned-->
<div id="container3">
<!-- Begin #content -->
<div id="content">
<h2 class="thisMonth">This Month</h2>
<!--//start content loop-->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div  <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<p class="authorName">by <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?> for <?php the_category(", ") ?></p><?php //the_tags(); ?>
			<div class="entry">
				<?php the_content('<br>Read the rest of this entry &raquo;'); ?>
			</div>

			<div class="comments"> <div class='commentIcon'><?php
			//comments_number(); 
			comments_number('No Comments','<span class="bigNum">1</span> response','<span class="bigNum">%</span> Comments'); ?></div> <? 
			comments_popup_link('Add Your Thoughts', 'Add Your Thoughts', 'Add Your Thoughts'); ?></div>

		</div>
	<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
<!--//end content loop-->

</div><!-- //content -->

<!-- #left sidebar -->
<div id="sidebarLT">

<?php get_sidebar();?>

</div><!--//sidebarLT  -->
</div><!--//container3-->

<!-- #right sidebar -->
<div id="sidebarRT">

<?php include(TEMPLATEPATH . '/sidebar2.php'); ?>

</div><!--//sidebarRT --> 

<div id="pushbottom"> </div><!--//this div will span across the 3 divs above it making sure the footer stays at the bottom of the longest column-->

</div><!--//container2-->

<div id="top_navlist">
<h2>main navigation</h2>
<!--//start page nav list-->
<ul id="navlist">
   <li class="current_page_item"><a href="/">The Zine</a></li>
   <?php wp_list_pages('title_li=' ); ?>
</ul>
<!--//end page nav list-->
</div><!--//top_navlist-->

<?php
//get the footer information from footer.php
get_footer();
?>