<?php
/**
 * The template for displaying post archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromediaacademy
 */

?>

<article class="card overflow-hidden transition-shadow duration-300 rounded-2xl shadow-md">
    <?php if(has_post_thumbnail()):?>                           
        <img src="<?php the_post_thumbnail_url();?>" class="object-cover w-full h-64" alt="" />
    <?php endif;?>
    <main class="flex flex-col gap-y-5 p-6">
        <?php 
		$categories = get_the_category();
		foreach($categories as $cat): ?>
            <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling"><?php echo $cat->name;?></a>
        <?php endforeach;?>
        <a href="<?php the_permalink();?>" aria-label="Category" title="Best Tips and Trick Modern Investment Today" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700"><?php the_title();?></a>
        <p class="text-gray font-body text-base">
        <?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink();?>" aria-label="" class="link duration-20 hover:text-purple text-center">
            <span class="text-purple">read more</span>
        </a>
    </main>
</article>