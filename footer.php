<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12 col-lg-10 offset-lg-1">

        <div class="row">

				<footer class="site-footer" id="colophon">

          <div class="hup-logo"></div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>


<script>



  jQuery( document ).ready(function($) {

    handleResize = function() {
      if($('#page').height() <= window.innerHeight) {

        var contentAreaOuterPaddings = 30 + 30;
        var contentAreaInnerPaddings = 50 + 50;

        $('.content-area').height(window.innerHeight - $('#wrapper-navbar').height() - $('#wrapper-footer').height() - contentAreaOuterPaddings - contentAreaInnerPaddings);
      }
    };

    handleResize();

    $( window ).resize(handleResize);


  });
</script>

</body>

</html>

