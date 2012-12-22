<?php get_header(); ?>
<?php get_template_part('includes/breadcrumbs', 'page'); ?>
<?php if ( 'on' == et_get_option('flexible_featured', 'on') && is_home() ) get_template_part( 'includes/featured', 'home' ); ?>
<div id="speaker_slider" class="image_carousel">
	<p>Featuring</p>
	<ul id="foo1">
		<li id="speaker1"><a href="http://www.gmic-sv.com/kevin-chou/"></a><span>Kevin Chou</span><span>CEO, Kabam, Inc.</span></li>
		<li id="speaker2"><a href="http://www.gmic-sv.com/tim-draper/"></a><span>Tim Draper</span><span>Managing Director, DFJ</span></li>
		<li id="speaker3"><a href="http://www.gmic-sv.com/lei-jun-2/"></a><span>Lei Jun</span><span>CEO, Xiaomi</span></li>
		<li id="speaker4"><a href="http://www.gmic-sv.com/aaron-levie/"></a><span>Aaron Levie</span><span>CEO, Box</span></li>
		<li id="speaker5"><a href="http://www.gmic-sv.com/phil-libin/"></a><span>Phil Libin</span><span>CEO, Evernote</span></li>
		<li id="speaker6"><a href="http://www.gmic-sv.com/niccolo-de-masi/"></a><span>Niccolo de Masi</span><span>CEO, Glu Mobile</span></li>
		<li id="speaker7"><a href="http://www.gmic-sv.com/john-riccitiello/"></a><span>John Riccitiello</span><span>CEO, Electronic Arts (EA)</span></li>
		<li id="speaker8"><a href="http://www.gmic-sv.com/mihir-shah/"></a><span>Mihir Shah</span><span>CEO, Tapjoy</span></li>
		<li id="speaker9"><a href="http://www.gmic-sv.com/vaughan-smith/"></a><span>Vaughan Smith</span><span>VP, Facebook</span></li>
		<li id="speaker10"><a href="http://www.gmic-sv.com/tayloe-stansbury/"></a><span>Tayloe Stansbury</span><span>CTO, Intuit</span></li>
		<li id="speaker11"><a href="http://www.gmic-sv.com/yu-yongfu-2/"></a><span>Yu Yongfu</span><span>CEO, UC Web</span></li>
	</ul>
	<div class="clearfix"></div>
</div>

<?php if ( 'on' == et_get_option('flexible_quote','on') ) { ?>
	<div id="quote">
		<h2><?php echo et_get_option('flexible_quote_heading'); ?></h2>
		<p><?php echo esc_html( et_get_option('flexible_quote_text') ); ?></p>
	</div> <!-- end #quote -->
<?php } ?>

<?php if ( 'on' == et_get_option('flexible_display_recentwork_section','on') ) { ?>
	<section id="portfolio" class="clearfix">
		<h1 class="section-title"><?php esc_html_e( 'Design', 'Flexible' ); ?></h1>
		<span class="section-tagline"><?php esc_html_e( 'Recent work', 'Flexible' ); ?></span>
		
		<a href="<?php echo esc_url( et_get_option( 'flexible_more_work_url', '#' ) ); ?>" class="more"><?php esc_html_e( 'More work &raquo;', 'Flexible' ); ?></a>
		
		<?php
			$portfolio_args = array(
				'post_type' => 'project',
				'showposts' => (int) et_get_option('flexible_homepage_numposts_projects'),
				'tax_query' => array(
					array(
						'taxonomy' => 'project_category',
						'field' => 'id',
						'terms' => (array) et_get_option('flexible_homepage_exlcats_projects'),
						'operator' => 'NOT IN'
					)
				)
			);
		
			$categories = get_terms( 'project_category', array( 'exclude' => array( et_get_option('flexible_homepage_exlcats_projects') ) ) );
			if ( $categories ){
				echo '<ul id="et_portfolio_sort_links">';
					echo '<li class="active">' . '<a href="#" data-categories_id="all">' . __( 'All', 'Flexible' ) . '</a>' . '</li>';
					foreach ( $categories as $category ){
						echo '<li>' . '<a href="#" data-categories_id="' . esc_attr( 'project_cat_' . $category->term_taxonomy_id ) . '">' . esc_html( $category->name ) . '</a>' . '</li>';
					}
				echo '</ul>';
			}
		?>
		
		<div id="portfolio-grid" class="clearfix">
		<?php
			$portfolio_query = new WP_Query( apply_filters( 'et_home_portfolio_args', $portfolio_args ) );
			while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();			
				get_template_part( 'includes/entry', 'portfolio' );
			endwhile; 
			wp_reset_postdata(); 
		?>
		</div> <!-- end #portfolio-grid -->
	</section> <!-- end #portfolio -->
<?php } ?>

<?php if ( 'on' == et_get_option('flexible_display_fromblog_section','on') && ( 'false' == et_get_option('flexible_blog_style','false') ) ) { ?>
	<section id="blog" class="clearfix">
		<h1 class="section-title"><a href="http://www.gmic-sv.com/category/recent-news/"><?php esc_html_e( 'Recent News', 'Flexible' ); ?></a></h1>
		<!--<span class="section-tagline"><?php esc_html_e( 'Recent news', 'Flexible' ); ?></span>-->
		
		<a href="<?php echo esc_url( et_get_option( 'flexible_more_posts_url', '#' ) ); ?>" class="more"><?php esc_html_e( 'Read more &raquo;', 'Flexible' ); ?></a>
		
		<div id="blog-grid">
			<?php $i = 0; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php 
					$i++;
					$last_class = ( $i % 3 == 0 ) ? ' last' : '';
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('blog-item' . $last_class); ?>>
					<span class="date"><?php echo get_the_time( 'M' ); ?><strong><?php echo get_the_time( 'd' ); ?></strong></span>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="meta-info"><?php printf( __('Posted on %1$s by %2$s', 'Flexible'), get_the_time( apply_filters( 'et_home_post_date_format', 'M j' ) ), et_get_the_author_posts_link() ); ?></p>
					<p><?php truncate_post(180); ?></p>
				</article> <!-- end .blog-item -->
			<?php endwhile; else : ?>
				<article id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'Flexible' ); ?></h1>
				</article><!-- end #post-0 -->
			<?php endif; ?>
		</div> <!-- end #blog-grid -->
	</section> <!-- end #blog -->
<?php } ?>

	<div id="twitter-ticker" class="image_carousel">        
        <div id="tweet-container"><img id="loading" src="img/loading.gif" width="16" height="11" alt="Loading.." /></div>       
    </div>

<?php if ( 'on' == et_get_option('flexible_blog_style') ) { ?>
	<div id="content-area" class="clearfix">
		<div id="left-area">		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part('includes/entry', 'index'); ?>
			<?php
			endwhile;
				if (function_exists('wp_pagenavi')) { wp_pagenavi(); }
				else { get_template_part('includes/navigation','entry'); }
			else:
				get_template_part('includes/no-results','entry');
			endif; ?>
		</div> 	<!-- end #left-area -->
		<?php get_sidebar(); ?>
	</div> 	<!-- end #content-area -->
<?php } ?>
	
<?php get_footer(); ?>