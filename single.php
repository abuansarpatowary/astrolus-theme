<!doctype html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="bg-white dark:bg-gray-800"  <?php body_class(); ?>>


<div class="py-16">
  <?php get_header(); ?>
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
  <div class="flex justify-center">
  <!-- Previous Button -->
  <?php
  $previous_post = get_previous_post();
  if (!empty($previous_post)) {
  ?>
    <a href="<?php echo get_permalink($previous_post->ID); ?>" class="flex items-center justify-center px-4 h-10 mr-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
      <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
      </svg>
      Previous
    </a>
  <?php
  }
  ?>

    <!-- Next Button -->
    <?php
    $next_post = get_next_post();
    if (!empty($next_post)) {
    ?>
      <a href="<?php echo get_permalink($next_post->ID); ?>" class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Next
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
      </a>
    <?php
    }
    ?>
  </div>

</div>

<?php get_footer(); ?>
                                    
<?php wp_footer(); ?>
</body>
</html>