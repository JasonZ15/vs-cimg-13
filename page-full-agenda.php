<?php 
/*
Template Name: Full Width Page Agenda
*/
?>
<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'page'); ?>

<div id="content-area" class="fullwidth clearfix">
	<div id="left-area">
	
		<ul id="et_portfolio_sort_links" class="speakers_page"><li>Agenda: </li></li><li><a href="http://www.gmic-sv.com/agenda/">Main Stage</a></li><li><a href="http://www.gmic-sv.com/agenda/appspace">appSpace</a></li><li><a href="http://www.gmic-sv.com/agenda/g-startup">G-Startup</a></li><li><a href="http://www.gmic-sv.com/agenda/global-stage/">Global Stage</a></li></ul>
		<a style="float: right; position: absolute; top: 60px; right: 0;" target="_blank" href="http://www.gmic-sv.com/GMIC_SV_BOOK.pdf" id="previous-speakers" class="action-button"><span class="color"><span class="text">Download the Conference Book for More Details</span></span></a>
		<?php get_template_part('loop', 'page'); ?>
		<?php if ( 'on' == et_get_option('flexible_show_pagescomments') ) comments_template('', true); ?>
	</div> <!-- end #left_area -->
</div> 	<!-- end #content-area -->

<?php get_footer(); ?>