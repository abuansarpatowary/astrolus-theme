<!doctype html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="bg-white dark:bg-gray-800"  <?php body_class(); ?>>


<div class="py-16">
  <div class="xl:container m-auto px-6 text-gray-600 dark:text-gray-200 md:px-12 xl:px-16">
    <div class="dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
      <div class="md:5/12 lg:w-1/2">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', ['loading' => 'lazy']); ?>
        <?php endif; ?>
      </div>
      <div class="md:7/12 lg:w-1/2">
        <?php the_title('<h3 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">', '</h3>'); ?>
        <p class="my-8 text-gray-600 dark:text-gray-300">
          <?php the_content();?>
        </p>
      </div>
    </div>
  </div>
</div>
                                    
<?php wp_footer(); ?>
</body>
</html>