<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromediaacademy
 */

get_header();
?>

<!-- // PAGE TITLE  -->
<section class="bg-deep-purple sm:bg-gradient-to-b sm:from-dark sm:to-deep-purple hero-clip md:bg-hero bg-cover bg-left-bottom bg-no-repeat">
    <div class="cont grid py-36">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="font-medium font-head text-6xl uppercase text-purple">
            <span class="text-white"><?php single_post_title(); ?></span>
            </h1>
        </div>
    </div>
</section>
<!-- // PAGE TITLE END-->

<!-- // SECTION 1 -->
<section class="bg-dark -mt-36">
    <div class="h-52"></div>
    <div class="cont py-8 lg:py-10 ">
        <div class="max-w-xl mt-20 mb-6 lg:max-w-2xl">
            <h2 class="max-w-lg mb-6 font-head text-4xl md:text-5xl capitalize font-bold leading-none tracking-tight text-white">
                press release
            </h2>
        </div>
        <div class="grid gap-8 lg:grid-cols-5 py-8">
            <div class="card col-span-3 overflow-hidden transition-shadow duration-300 rounded-2xl shadow-md">
                <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" class="object-cover w-full h-[300px] md:h-[500px]" alt="" />
                <div class="flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">press release</a>
                    <a href="/" aria-label="Category" title="Best Tips and Trick Modern Investment Today" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">Best Tips and Trick Modern Investment Today</a>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
            </div>
            <div class="col-span-2 flex flex-col items-center justify-between gap-4">
                <div class="card flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">press release</a>
                    <a href="/" aria-label="Category" title="Best Tips and Trick Modern Investment Today" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">Best Tips and Trick Modern Investment Today</a>
                    <span class="w-6 h-1 bg-white"></span>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt…
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
                <div class="card flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">press release</a>
                    <a href="/" aria-label="Category" title="Best Tips and Trick Modern Investment Today" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">Best Tips and Trick Modern Investment Today</a>
                    <span class="w-6 h-1 bg-white"></span>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt…
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- // SECTION 1 END -->

<!-- // SECTION 2 -->
<section class="bg-dark">
    <div class="cont py-8 lg:py-10 ">
        <div class="max-w-xl mt-20 mb-6 md:mx-auto md:text-center lg:max-w-2xl">
            <h2 class="max-w-lg mb-6 font-head text-4xl md:text-5xl capitalize font-bold leading-none tracking-tight text-white md:mx-auto">
                article
            </h2>
            <p class="text-sm text-gray font-body font-light md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
            </p>
        </div>
        <div class="grid gap-y-16 gap-x-8 lg:grid-cols-3 py-8">
            <div class="card overflow-hidden transition-shadow duration-300 rounded-2xl shadow-md">
                <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" class="object-cover w-full h-64" alt="" />
                <div class="flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">blog</a>
                    <a href="/" aria-label="Category" title="Best Tips and Trick Modern Investment Today" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">Best Tips and Trick Modern Investment Today</a>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
            </div>
            <div class="card overflow-hidden transition-shadow duration-300 rounded-2xl shadow-md">
                <img src="https://images.pexels.com/photos/447592/pexels-photo-447592.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-64" alt="" />
                <div class="flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">econimic</a>
                    <a href="/" aria-label="Category" title="New Way Platform for Modern Investment" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">New Way Platform for Modern Investment</a>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
            </div>
            <div class="card overflow-hidden transition-shadow duration-300 rounded-2xl shadow-md">
                <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-64" alt="" />
                <div class="flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">promo</a>
                    <a href="/" aria-label="Category" title="Get Free Shipping 10% Off Using Mobile Izpay" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">Get Free Shipping 10% Off Using Mobile Izpay</a>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
            </div>
            <div class="card overflow-hidden transition-shadow duration-300 rounded-2xl shadow-md">
                <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" class="object-cover w-full h-64" alt="" />
                <div class="flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">blog</a>
                    <a href="/" aria-label="Category" title="Best Tips and Trick Modern Investment Today" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">Best Tips and Trick Modern Investment Today</a>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
            </div>
            <div class="card overflow-hidden transition-shadow duration-300 rounded-2xl shadow-md">
                <img src="https://images.pexels.com/photos/447592/pexels-photo-447592.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-64" alt="" />
                <div class="flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-lg hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">econimic</a>
                    <a href="/" aria-label="Category" title="New Way Platform for Modern Investment" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">New Way Platform for Modern Investment</a>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
            </div>
            <div class="card overflow-hidden transition-shadow duration-300 rounded-2xl shadow-md">
                <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-64" alt="" />
                <div class="flex flex-col gap-y-5 p-6">
                    <a href="/" class="transition-colors duration-200 text-gray font-body capitalize text-base hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">promo</a>
                    <a href="/" aria-label="Category" title="Get Free Shipping 10% Off Using Mobile Izpay" class="inline-block text-2xl font-head text-purple font-bold leading-8 transition-colors duration-200 hover:text-deep-purple-accent-700">Get Free Shipping 10% Off Using Mobile Izpay</a>
                    <p class="text-gray font-body text-base">
                        Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                    </p>
                    <a href="/" aria-label="" class="link duration-20 hover:text-purple text-center">
                        <span class="text-purple">read more</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // SECTION 2 END -->

<!-- // CALL-TO-ACTION -->
<?php get_template_part( 'template-parts/content/content', 'cta' ); ?>
<!-- // CALL-TO-ACTION END -->


<?php
get_footer();