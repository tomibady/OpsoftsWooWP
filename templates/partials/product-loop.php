<section class="grid grid-cols-1 gap-6 p-6 mx-auto sm:grid-cols-2 md:grid-cols-3 max-w-[90vw] bg-gray-100 my-10">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php 
      global $product;
      $product = wc_get_product( get_the_ID() );
      if ( ! $product ) continue;
    ?>
    <div class="relative overflow-hidden transition bg-white border rounded-lg shadow hover:shadow-md group">
      
      <!-- Sale Badge -->
      <?php if ( $product->is_on_sale() ) : ?>
        <span class="absolute px-2 py-1 text-xs font-bold text-white bg-red-500 rounded top-2 left-2">Sale</span>
      <?php endif; ?>

      <!-- Product Image -->
      <a href="<?php the_permalink(); ?>" class="block">
        <?php if ( has_post_thumbnail() ) : ?>
          <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-105" />
        <?php else: ?>
          <div class="flex items-center justify-center w-full h-48 text-sm text-gray-400 bg-gray-100">No Image</div>
        <?php endif; ?>
      </a>

      <!-- Product Content -->
      <div class="p-4">
        <h2 class="text-lg font-semibold text-gray-900"><?php the_title(); ?></h2>

        <!-- Product Rating -->
        <div class="flex items-center mt-1 space-x-1 text-sm text-yellow-400">
          <?php 
            $average = $product->get_average_rating();
            echo wc_get_rating_html( $average );
          ?>
        </div>

        <p class="mt-1 font-bold text-indigo-600"><?php echo $product->get_price_html(); ?></p>
        <p class="mt-1 text-sm text-gray-500"><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>

        <!-- Buttons -->
        <div class="flex flex-wrap items-center justify-between gap-2 mt-4">
          <a href="<?php the_permalink(); ?>" class="text-sm text-indigo-600 hover:underline">View Product</a>

          <!-- Add to Cart -->
          <?php woocommerce_template_loop_add_to_cart(); ?>
        </div>

        <!-- Quick View & Wishlist -->
        <div class="flex items-center justify-between mt-2 text-xs text-gray-500">
          <!-- Vue Hook for Quick View -->
          <button @click="$emit('quick-view', <?php echo get_the_ID(); ?>)" class="transition hover:text-indigo-600">Quick View</button>

          <!-- Wishlist Plugin Hook -->
          <?php if ( shortcode_exists('yith_wcwl_add_to_wishlist') ) : ?>
            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist product_id="' . get_the_ID() . '"]'); ?>
          <?php elseif ( function_exists('ti_wishlists_add_button') ) : ?>
            <?php echo ti_wishlists_add_button(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile; else : ?>
    <div class="py-10 text-center text-gray-500 col-span-full">
      <p>No products were found.</p>
    </div>
  <?php endif; ?>
</section>
