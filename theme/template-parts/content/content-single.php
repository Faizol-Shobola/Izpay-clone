<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Beta_Souk
 */

?>

<section class="bg-dark -mt-36">
	<div class="h-52"></div>
	<div class="cont py-8 lg:py-10 ">
		<div class="max-w-6xl mx-auto py-8">
			<div class="overflow-hidden transition-shadow rounded-3xl duration-300">
				<img src="<?php the_post_thumbnail_url();?>" class="object-cover w-full h-[300px] md:h-[500px]" alt="" />
				<div class="max-w-4xl mx-auto py-4">
					<div class="flex flex-col gap-y-10 p-6">
						<p class="text-white font-body text-base">
						<?php the_content();?>
						</p>
						
						
						<div class="flex rounded-3xl justify-between">
							<div class="space-y-4">
								<h6 class="font-head text-white text-lg font-medium capitalize">post date</h6>
								<time class="font-body text-purple text-base" datetime="<?php echo get_the_date('l jS F, Y');?>" class=""><?php echo get_the_date('l jS F, Y');?></time>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
