<!doctype html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="bg-white dark:bg-gray-800"  <?php body_class(); ?>>

<div class="py-12">
	<div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
		<div class="mb-12 space-y-2 text-center">
			<h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white"><?php echo bloginfo('name') ?></h2>
			<p class="text-gray-600 dark:text-gray-300 lg:mx-auto lg:w-6/12">
                <?php echo bloginfo('description') ?>
			</p>
		</div>

		<div class="lg:w-3/4 xl:w-2/4 lg:mx-auto">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="group relative -mx-4 sm:-mx-8 p-6 sm:p-8 rounded-3xl bg-white dark:bg-transparent border border-transparent hover:border-gray-100 dark:shadow-none dark:hover:border-gray-700 dark:hover:bg-gray-800 shadow-2xl shadow-transparent hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300 hover:z-10"  <?php post_class(); ?>>
				<div class="sm:w-2/6 rounded-3xl overflow-hidden transition-all duration-500 group-hover:rounded-xl">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['class' => 'h-56 sm:h-full w-full object-cover object-top transition duration-500 group-hover:scale-105']); ?>
                    <?php endif; ?>
				</div>

				<div class="sm:p-2 sm:pl-0 sm:w-4/6">
					<span class="mt-4 mb-2 inline-block font-medium text-gray-400 dark:text-gray-500 sm:mt-0"><?php echo get_the_date()?></span>
                    <a href="<?php the_permalink();?>"><?php the_title('<h3 class="text-2xl font-semibold text-gray-800 dark:text-white">', '</h3>'); ?></a>
					<p class="my-6 text-gray-300 dark:text-white">
                        <?php the_excerpt();?>
					</p>
                    <?php astrolus_custom_tag_list(); ?>

				</div>
			</div>
            <?php endwhile; endif; ?>

            <div class="mt-4 text-center text-gray-400 dark:text-white text-xl">
	            <?php the_posts_pagination(array(
		            'mid_size' => 2,
		            'prev_text' => __('« Prev'),
		            'next_text' => __('Next »'),
		            'screen_reader_text' => ' ',
	            )); ?>
            </div>

		</div>
	</div>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>