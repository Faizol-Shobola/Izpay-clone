<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Beta_Souk
 */

get_header();
?>
<?php
	if (have_posts()) : while (have_posts()) : the_post();
?>
	<!-- // PAGE TITLE  -->
    <section class="bg-deep-purple sm:bg-gradient-to-b sm:from-dark sm:to-deep-purple hero-clip md:bg-hero bg-cover bg-left-bottom bg-no-repeat">
        <div class="cont grid py-36">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="font-medium font-head text-5xl capitalize text-purple">
                <span class="leading-8 text-white"><?php the_title();?></span>
                </h1>
            </div>
        </div>
    </section>
    <!-- // PAGE TITLE END-->

	<?php
			
		get_template_part( 'template-parts/content/content', 'single' );
	?>

<?php
	endwhile; endif;
	wp_reset_query();
?>

<!-- // CALL-TO-ACTION -->
<?php get_template_part( 'template-parts/content/content', 'cta' ); ?>
<!-- // CALL-TO-ACTION END -->

<?php
get_footer();
