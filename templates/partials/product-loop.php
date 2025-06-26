<section class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="border rounded-lg p-4">
      <h2 class="text-xl font-semibold"><?php the_title(); ?></h2>
      <div class="text-gray-600"><?php the_excerpt(); ?></div>
    </div>
  <?php endwhile; endif; ?>
</section>