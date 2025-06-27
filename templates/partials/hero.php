<section class="py-12 bg-herogray h-[70vh] overflow-hidden">
  <div class="grid grid-cols-2 mx-auto w-[90vw] gap-10">
    <!-- Left Grid -->
    <div class="flex flex-col px-8  w-[85%] space-y-6 my-auto h-full">
      <h1 class="mb-4 font-bold text-7xl font-integral">find clothes that matches your style</h1>
      <p class="text-sm text-gray-700">Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality and cater to your sense of style.</p>
      <button class="w-40 px-4 py-2 font-light text-white bg-black border-2 rounded-full font-manrope hover:bg-woolemon hover:border-black hover:text-black">Shop Now</button>

      <!-- Inner Grid -->
      <div class="grid grid-cols-3 gap-3 mt-8 divide-indigo-500 gap divide-solid">
        <div class="w-full p-3 bg-white shadow-sm rounded-xl">
          <h3 class="text-4xl font-bold font-manrope">200+</h3>
          <p class="text-sm text-gray-700 font-extralight">International Brands</p>
        </div>

        <div class="w-full p-3 bg-white shadow-sm rounded-xl">
          <h3 class="text-4xl font-bold font-manrope">2000+</h3>
          <p class="text-sm text-gray-700 font-extralight">High-Quality Products</p>
        </div>

        <div class="w-full p-3 bg-white shadow-sm rounded-xl">
          <h3 class="text-4xl font-bold font-manrope">30,000+</h3>
          <p class="text-sm text-gray-700 font-extralight">Happy Customers</p>
        </div>
      </div>
    </div>

    <!-- Right Grid -->
    <div class="flex justify-center">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/media/hero-image.png'); ?>" alt="Hero Image" class="object-cover w-full h-full" />
    </div>
  </div>
</section>

<!-- Partner Logos -->
<section class="bg-black">
  <div class="mx-auto max-w-[90vw] py-4">
    <div class="grid items-center grid-cols-5 space-x-4">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/media/partners/versace.png'); ?>" alt="Versace" />
      <img src="<?php echo esc_url(get_template_directory_uri() . '/media/partners/zara.png'); ?>" alt="Zara" />
      <img src="<?php echo esc_url(get_template_directory_uri() . '/media/partners/gucci.png'); ?>" alt="Gucci" />
      <img src="<?php echo esc_url(get_template_directory_uri() . '/media/partners/prada.png'); ?>" alt="Prada" />
      <img src="<?php echo esc_url(get_template_directory_uri() . '/media/partners/calvin.png'); ?>" alt="Calvin" />
    </div>
  </div>
</section>