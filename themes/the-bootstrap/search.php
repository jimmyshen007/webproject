<?php
/** search.php
 *
 * The template for displaying Search Results pages.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */

get_header(); ?>

<section id="primary" class="span8">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		if ( have_posts() ) : ?>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#epl_map_view">收起/展开地图</a>
        </h4>
      </div>
      <div id="epl_map_view" class="panel-collapse collapse in">
        <div class="panel-body"><?php echo do_shortcode('[advanced_map post_type="' . $_GET["theme_post_type"] . '"]'); ?>
            <!-- <?php echo do_shortcode('[listing_search post_type=property,rental,business style=wide]'); ?> -->
        </div>
      </div>
    </div>
  </div>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'the-bootstrap' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>
	
			<?php
			do_action( 'epl_property_loop_start' );
			global $post;
			while ( have_posts() ) {
				the_post();
				$post_ttype = $post->post_type;
				$allowed_types = array("property", "rental");
				if (in_array($post_ttype, $allowed_types) ):
					do_action('epl_property_blog');
				//else:
				//	get_template_part( '/partials/content', get_post_format() );
				endif;
			}
			do_action( 'epl_property_loop_end' );
			the_bootstrap_content_nav();
		else :
			get_template_part( '/partials/content', 'not-found' );
		endif; 
	
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file search.php */
/* Location: ./wp-content/themes/the-bootstrap/search.php */
