<header class="bg-white">
  <nav class="flex items-center justify-between p-6 mx-auto max-w-[90vw] lg:px-8" aria-label="Global">
    <div class="flex items-center justify-between w-full lg:w-auto max-w-[50%] space-x-6">
      <!-- Logo Area -->
      <div class="logo-area">
        <?php if (has_custom_logo()) : ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="block max-w-[300px]">
            <?php the_custom_logo(); ?>
          </a>
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-semibold text-black">
            <?php bloginfo('name'); ?>
          </a>
        <?php endif; ?>
      </div>

      <!-- Navigation Links -->
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="font-semibold text-gray-900 text-sm/6 hover:text-woolemon">Product</a>
        <a href="#" class="font-semibold text-gray-900 text-sm/6 hover:text-woolemon">Features</a>
        <a href="#" class="font-semibold text-gray-900 text-sm/6 hover:text-woolemon">Marketplace</a>
        <a href="#" class="font-semibold text-gray-900 text-sm/6 hover:text-woolemon">Company</a>
      </div>
    </div>
    <div class="relative w-[45%]">
      <input type="text" class="block w-full py-2 pl-10 pr-4 text-sm text-gray-400 bg-gray-200 border-0 rounded-full focus:ring-0 font-manrope" placeholder="Search for products..." />
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>

      </div>
    </div>
    <ul class="flex space-x-6">
      <li>
        <a href="/" class="hover:text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>

        </a>
      </li>
      <li>
        <a href="/shop" class="hover:text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>
        </a>
      </li>
    </ul>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-50"></div>
    <div class="fixed inset-y-0 right-0 z-50 w-full p-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <!-- Logo Area -->
        <div class="logo-area">
          <?php if (has_custom_logo()) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="block max-w-[300px]">
              <?php the_custom_logo(); ?>
            </a>
          <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-semibold text-black">
              <?php bloginfo('name'); ?>
            </a>
          <?php endif; ?>
        </div>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flow-root mt-6">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="py-6 space-y-2">
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                Product
                <!--
                  Expand/collapse icon, toggle classes based on menu open state.

                  Open: "rotate-180", Closed: ""
                -->
                <svg class="flex-none size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- 'Product' sub-menu, show/hide based on menu state. -->
              <div class="hidden mt-2 space-y-2" id="disclosure-1">
                <a href="#" class="block py-2 pl-6 pr-3 font-semibold text-gray-900 rounded-lg text-sm/7 hover:bg-gray-50">Analytics</a>
                <a href="#" class="block py-2 pl-6 pr-3 font-semibold text-gray-900 rounded-lg text-sm/7 hover:bg-gray-50">Engagement</a>
                <a href="#" class="block py-2 pl-6 pr-3 font-semibold text-gray-900 rounded-lg text-sm/7 hover:bg-gray-50">Security</a>
                <a href="#" class="block py-2 pl-6 pr-3 font-semibold text-gray-900 rounded-lg text-sm/7 hover:bg-gray-50">Integrations</a>
                <a href="#" class="block py-2 pl-6 pr-3 font-semibold text-gray-900 rounded-lg text-sm/7 hover:bg-gray-50">Automations</a>
                <a href="#" class="block py-2 pl-6 pr-3 font-semibold text-gray-900 rounded-lg text-sm/7 hover:bg-gray-50">Watch demo</a>
                <a href="#" class="block py-2 pl-6 pr-3 font-semibold text-gray-900 rounded-lg text-sm/7 hover:bg-gray-50">Contact sales</a>
              </div>
            </div>
            <a href="#" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Features</a>
            <a href="#" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Marketplace</a>
            <a href="#" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Company</a>
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>