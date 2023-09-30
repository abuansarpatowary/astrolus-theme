<nav class="w-full">
    <div class="container m-auto px-6 md:px-12 lg:px-7">
        <div class="flex flex-wrap items-center justify-between py-6 gap-6 md:py-4 md:gap-0 relative">
            <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
            <div class="w-full flex justify-between md:w-max md:px-0">
                    <div class="flex gap-4">
                    <?php 
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                            ?>
                            <span class="text-gray-600 dark:text-white text-2xl">Astrolus</span>
                            <?php
                        }else{
                            ?>
                            <a href="<?php echo site_url(); ?>" class="text-gray-600 dark:text-white text-2xl">Astrolus</a>
                            <?php
                        }
                    ?>

                    </div>
                <div class="flex items-center md:hidden max-h-10">
                    <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative z-40 px-2 py-3 sm:-mr-6">
                        <div id="line"
                            class="m-auto h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                        <div id="line2"
                            class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300">
                        </div>
                    </label>
                </div>
            </div>

            <label role="button" for="toggle_nav" class="fixed w-full z-30 h-full top-0 left-0 bg-gray-700 bg-opacity-40 hidden peer-checked:block md:peer-checked:hidden"></label>

            <div class="flex z-50 flex-col md:flex-row justify-between 
            items-center gap-y-4 p-6 bg-white dark:bg-gray-800 md:w-8/12 
            md:gap-y-4 md:p-0 
            md:bg-transparent lg:w-7/12 fixed top-0 -left-full transition-all duration-500 peer-checked:left-0 max-w-sm h-full 
            md:left-0 md:h-auto w-4/5 md:max-w-none md:relative lg:first-letter:top-0">
                <div class="flex md:hidden w-full pb-5">
                    <a href="#" aria-label="logo">
                        <img src="images/logo.svg" class="w-36 grayscale contrast-200" alt="tailus logo" width="144" height="68">
                    </a>
                </div>
                
                <div class="block w-full h-full md:h-auto">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main',
                        'container' => '',
                        'menu_class' => 'space-y-8 gap-4 tracking-wide font-medium md:flex md:space-y-0',
                    ));
                    ?>
                </div>


                <div class="w-full gap-y-4 md:w-max md:gap-y-0 md:gap-x-4 flex md:flex-row flex-col">
                    <button type="button" title="Start buying" class="group w-full py-3 px-6 text-center transition dark:active:bg-yellow-800 dark:focus:bg-yellow-900 active:bg-yellow-200 focus:bg-yellow-100 sm:w-max">
                        <span class="block text-gray-700 dark:text-gray-300 font-semibold group-focus:text-yellow-700 dark:group-focus:text-yellow-100">
                            Login
                        </span>
                    </button>
                    <button type="button" title="Start buying" class="w-full py-3 px-6 text-center transition dark:bg-gray-700 bg-gray-900 hover:bg-gray-800 active:bg-gray-700 focus:bg-gray-800 md:w-max">
                        <span class="block text-white font-semibold">
                            Shop now
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="mb-12 space-y-2 text-center">
    <a href="<?php echo site_url(); ?>"><h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white"><?php echo bloginfo('name') ?></h2></a> 
    <p class="text-gray-600 dark:text-gray-300 lg:mx-auto lg:w-6/12">
        <?php echo bloginfo('description') ?>
    </p>
</div>