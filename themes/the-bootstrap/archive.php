<?php
/** archive.php
 *
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */

get_header(); ?>

<section id="primary" class="span8">

	<?php tha_content_before(); ?>
	<div id="content" role="main">

  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#epl_map_view">收起/展开地图</a>
        </h4>
      </div>
      <div id="epl_map_view" class="panel-collapse collapse in">
        <div class="panel-body"><?php echo do_shortcode('[advanced_map post_type="' . $_GET["post_type"] . '"]'); ?>
           <!-- <?php echo do_shortcode('[listing_search post_type=property,rental,business style=wide]'); ?>-->
        </div>
      </div>
    </div>
  </div>

		<?php tha_content_top();
		if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
					else :
						_e( 'Blog Archives', 'the-bootstrap' );
					endif; ?>
				</h1>
			</header><!-- .page-header -->

			<?php
			do_action( 'epl_property_loop_start' );
			while ( have_posts() ) {
				the_post();
				//get_template_part( '/partials/content', get_post_format() );
				do_action( 'epl_property_blog' );
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


/* End of file archive.php */
/* Location: ./wp-content/themes/the-bootstrap/archive.php */
