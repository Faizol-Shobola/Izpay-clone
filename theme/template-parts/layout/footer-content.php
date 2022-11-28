<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Beta_Souk
 */

?>

	<footer class="bg-dark">
        <div class="max-w-screen-xl px-4 pt-16 pb-6 mx-auto sm:px-6 lg:px-8 lg:pt-24">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="flex flex-col gap-4 list-type-none text-left text-base text-white font-medium font-body">
                    <?php if(is_active_sidebar('footer-info')):?>
                    <?php dynamic_sidebar('footer-info');?>
                    <?php endif;?>
                </div>

                
        
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 md:grid-cols-7">
                    <div class="md:col-span-2 flex flex-col gap-4 list-type-none text-left capitalize text-base text-white font-medium font-body">
                        <?php if(is_active_sidebar('footer-1')):?>
                        <?php dynamic_sidebar('footer-1');?>
                        <?php endif;?>
                    </div>
        
                    <div class="md:col-span-2 flex flex-col gap-4 list-type-none text-left capitalize text-base text-white font-medium font-body">
                        <?php if(is_active_sidebar('footer-2')):?>
                        <?php dynamic_sidebar('footer-2');?>
                        <?php endif;?>
                    </div>
        
                    <div class="md:col-span-3 flex flex-col gap-4 list-type-none text-left capitalize text-base text-white font-medium font-body">
                        <?php if(is_active_sidebar('footer-3')):?>
                        <?php dynamic_sidebar('footer-3');?>
                        <?php endif;?>
                    </div>

                </div>
            </div>
        
            <div class="pt-6 mt-12 border-t border-gray/25">
                <div class="text-center sm:flex sm:justify-between sm:text-left">
                    <p class="text-sm text-gray">
                        <span class="block sm:inline">All rights reserved.</span>
            
                        <a
                        class="inline-block text-purple underline transition hover:text-purple"
                        href="/"
                        >
                        Terms & Conditions
                        </a>
            
                        <span>&middot;</span>
            
                        <a
                        class="inline-block text-purple underline transition hover:text-purple"
                        href="/"
                        >
                        Privacy Policy
                        </a>
                    </p>
            
                    <p class="mt-4 text-sm text-gray sm:order-first sm:mt-0">
                        &copy; 2022 Company Name
                    </p>
                </div>
            </div>
        </div>
    </footer>
