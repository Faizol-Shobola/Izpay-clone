<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Beta_Souk
 */

?>

	<!-- // NAVIGATION -->
    <header class="bg-dark">
        <div class="px-4 py-5 lg:py-2 w-full mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 flex items-center justify-between">
          	<div class="relative flex items-center justify-between w-full lg:w-32">
				<a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
				<img src="https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2020/12/logo-new@2x.png" class="object-cover object-top w-28 h-auto mx-auto" alt="logo">
				</a>
				<!-- <ul class="items-center text-white hidden space-x-8 lg:flex">
					<li><a href="index.html" aria-label="Home" title="Home" class="link duration-20 hover:text-purple py-5">Home</a></li>
					<li><a href="about-us.html" aria-label="About us" title="About us" class="link duration-20 hover:text-purple py-5">About us</a></li>
					<li><a href="service.html" aria-label="Service" title="Service" class="link duration-20 hover:text-purple py-5">Service</a></li>
					<li class="group inline-block">
						<a href="#" aria-label="Pages" title="Pages" class="link duration-20 hover:text-purple">
							<span class="pr-1 flex-1">pages</span>
							<span>
							<svg
								class="text-white group-hover:text-purple h-4 w-4 transform group-hover:-rotate-180
								transition duration-150 ease-in-out" fill="currentcolor"
								xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 20 20"
							>
								<path
								d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
								/>
							</svg>
							</span>
						</a>
						<div class="bg-dark pt-5 sub-menu transform absolute z-10 scale-0 transition duration-200 ease-in-out group-hover:scale-100 origin-top w-48 -ml-7">
							<ul class="text-white rounded-lg px-7 py-4 w-full shadow shadow-deep-purple">
								<li class="w-full"><a href="team.html" aria-label="Team" title="Team" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">team</a></li>
								<li class="w-full"><a href="pricing.html" aria-label="Pricing Plan" title="Pricing Plan" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">pricing plan</a></li>
								<li class="w-full"><a href="faq.html" aria-label="FAQ" title="FAQ" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">faq</a></li>
								<li class="w-full"><a href="partner.html" aria-label="Partner" title="Partner" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">partner</a></li>
								<li class="w-full"><a href="career.html" aria-label="Career" title="Career" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">career</a></li>
								<li class="w-full"><a href="media.html" aria-label="Media" title="Media" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">media</a></li>
								<li class="w-full"><a href="single-post.html" aria-label="Single Post" title="Single Post" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">single post</a></li>
							</ul>
						</div>
					</li>
					<li class="group inline-block">
						<a href="#" aria-label="Pages" title="Pages" class="link duration-20 hover:text-purple">
							<span class="pr-1 flex-1">contact us</span>
							<span>
							<svg
								class="text-white group-hover:text-purple h-4 w-4 transform group-hover:-rotate-180
								transition duration-150 ease-in-out" fill="currentcolor"
								xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 20 20"
							>
								<path
								d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
								/>
							</svg>
							</span>
						</a>
						<div class="bg-dark pt-5 sub-menu transform absolute z-10 scale-0 transition duration-200 ease-in-out group-hover:scale-100 origin-top w-48 -ml-7">
							<ul class="text-white rounded-lg px-7 py-4 w-full shadow shadow-deep-purple">
								<li class="w-full"><a href="contact-1.html" aria-label="Team" title="Team" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">contact 1</a></li>
								<li class="w-full"><a href="contact-2.html" aria-label="Pricing Plan" title="Pricing Plan" class="link duration-20 hover:text-purple w-full py-2 uppercase tracking-tighter">contact 2</a></li>
							</ul>
						</div>
					</li>
					<li>
						<a
						href="/"
						class="button bg-gradient-to-r from-dark-purple to-purple hover:bg-gradient-to-l focus:shadow-outline focus:outline-none"
						aria-label="Sign up"
						title="Sign up"
						>
						Get Started
						</a>
					</li>
				</ul> -->

				<!--------------------------------------------
				-----------Mobile Navigation-----------------
				--------------------------------------------->

				<div class="lg:hidden">
					<button aria-label="Open Menu" title="Open Menu" class="open_menu p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
						<svg class="w-5 text-purple" viewBox="0 0 24 24">
						<path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
						<path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
						<path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
						</svg>
					</button>
					<!--  Mobile menu -->
					<!-- <nav class="hidden mobile-menu h-full w-full max-w-[350px] fixed overflow-hidden bg-dark top-0 left-0 z-50">
						<div>
							<div class="flex p-5 justify-between">
								<a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
									<img src="https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2020/12/logo-new@2x.png" class="object-cover object-top w-28 h-auto mx-auto" alt="logo">
								</a>
								<button aria-label="Close Menu" title="Close Menu" class="close_menu p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
									<svg class="w-5 text-purple" viewBox="0 0 24 24">
									<path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
									<path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
									<path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
									</svg>
								</button>
							</div>
						</div>
						<ul class="overflow-y-auto h-[700px]">
							<li class="pl-5 p-4 w-full flex"><a href="index.html" class="flex-1 w-full text-white hover:text-purple uppercase">home </a></li>
							<li class="pl-5 p-4 w-full flex"><a href="about-us.html" class="flex-1 w-full text-white hover:text-purple uppercase">about us</a></li>
							<li class="pl-5 p-4 w-full flex"><a href="service.html" class="flex-1 w-full text-white hover:text-purple uppercase">service </a></li>
							<li class="pl-5 p-4 w-full group">
								<a href="#" class="dog w-full text-white hover:text-purple uppercase flex">
									<span class="pr-1 flex-1">pages</span>
									<span class="toggle_sub-menu flex items-center">
									<svg
										class=" text-white group-hover:text-purple h-4 w-4 transform
										transition duration-150 ease-in-out" fill="currentcolor"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 20 20"
									>
										<path
										d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
										/>
									</svg>
									</span>
								</a>
								<ul class="mobile_sub-menu hidden text-white pt-3 w-full">
									<li class="pl-5 p-4 w-full flex"><a href="team.html" class="flex-1 w-full text-white hover:text-purple uppercase">team </a></li>
									<li class="pl-5 p-4 w-full flex"><a href="pricing.html" class="flex-1 w-full text-white hover:text-purple uppercase">pricing plan </a></li>
									<li class="pl-5 p-4 w-full flex"><a href="faq.html" class="flex-1 w-full text-white hover:text-purple uppercase">faq </a></li>
									<li class="pl-5 p-4 w-full flex"><a href="partner.html" class="flex-1 w-full text-white hover:text-purple uppercase">partner </a></li>
									<li class="pl-5 p-4 w-full flex"><a href="career.html" class="flex-1 w-full text-white hover:text-purple uppercase">career </a></li>
									<li class="pl-5 p-4 w-full flex"><a href="media.html" class="flex-1 w-full text-white hover:text-purple uppercase">media </a></li>
									<li class="pl-5 p-4 w-full flex"><a href="single-post.html" class="flex-1 w-full text-white hover:text-purple uppercase">single post </a></li>
								</ul>
								
							</li>
							<li class="pl-5 p-4 w-full group">
								<a href="#" class="w-full text-white hover:text-purple uppercase flex">
									<span class="pr-1 flex-1">contact</span>
									<span class="flex items-center">
									<svg
										class=" toggle_sub-menu text-white group-hover:text-purple h-4 w-4 transform
										transition duration-150 ease-in-out" fill="currentcolor"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 20 20"
									>
										<path
										d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
										/>
									</svg>
									</span>
								</a>
								
								<ul class="mobile_sub-menu hidden pt-3 text-white w-full">
									<li class="pl-5 p-4 inline-table w-full"><a href="contact-1.html" class="inline-table w-full text-white hover:text-purple uppercase">contact us-1 </a></li>
									<li class="pl-5 p-4 inline-table w-full"><a href="contact-2.html" class="inline-table w-full text-white hover:text-purple uppercase">contact us-2 </a></li> 
								</ul>
							</li>
						</ul>
					</nav> -->
				
				</div>
			</div>

			<nav class="h-full w-full max-w-[350px] fixed bg-dark top-0 left-0 z-50 lg:z-0 hidden mobile-menu flex-col lg:h-auto lg:max-w-none lg:static lg:flex lg:flex-row lg:w-full lg:justify-end">
				<div class="flex lg:hidden p-5 justify-between w-full">
					<a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
						<img src="https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2020/12/logo-new@2x.png" class="object-cover object-top w-28 h-auto mx-auto" alt="logo">
					</a>
					<button aria-label="Close Menu" title="Close Menu" class="close_menu p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
						<svg class="w-5 text-purple" viewBox="0 0 24 24">
						<path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
						<path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
						<path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
						</svg>
					</button>
				</div>


			<?php
				$icon = '<span class="toggle_sub-menu">
					<svg
						class="text-white group-hover:text-purple h-4 w-4 transform group-hover:-rotate-180
						transition duration-150 ease-in-out" fill="currentcolor"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
					>
						<path
						d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
						/>
					</svg>
					</span>';
				wp_nav_menu(
					array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'        => "menu main-menu flex flex-col lg:flex-row items-center text-white lg:space-x-8", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
					// 'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
					'after'				=> $icon, // (string) Text after the link markup.
					'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
					)	
				);
			?>
			</nav>
          </div>
        </div>
    </header>
    <!-- // NAVIGATION END -->

	