<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
  <div class="max-w-screen-xl px-4 pt-16 pb-6 mx-auto sm:px-6 lg:px-8 lg:pt-24">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <div>
        <div class="flex justify-center text-teal-300 sm:justify-start">
          <ApplicationLogo></ApplicationLogo>
          <h1 class="flex tracking-tight ml-2 self-center text-4xl justify-center text-white font-bold">
            /vrg/
          </h1>
        </div>

        <p class="max-w-md mx-auto mt-6 leading-relaxed text-center text-gray-400 sm:max-w-xs sm:mx-0 sm:text-left">
          Virtual games, Real people.
        </p>

        <ul class="flex md:flex-row flex-column justify-center gap-6 mt-8 md:gap-8 sm:justify-start">
          <li>
            <a href="https://x.com/oohaVR" rel="noopener noreferrer" target="_blank"
              class="text-teal-500 transition hover:text-teal-500/75">
              <span class="sr-only">Twitter</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 md:grid-cols-4">
        <div class="text-center sm:text-left">
          <p class="text-lg font-medium text-white">About Us</p>

          <nav class="mt-8">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-white transition hover:text-white/75" href="/history">
                  Community History
                </a>
              </li>

              <li>
                <a class="text-white transition hover:text-white/75" href="/members">
                  Meet the Community
                </a>
              </li>

              <li>
                <a class="text-white transition hover:text-white/75" href="/career">
                  Careers
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="text-center sm:text-left">
          <p class="text-lg font-medium text-white">Our Services</p>

          <nav class="mt-8">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-white transition hover:text-white/75" target="_blank"
                  href="https://vrg.party/worlds.html">
                  VRChat worlds
                </a>
              </li>

              <li>
                <a class="text-white transition hover:text-white/75" href="https://vrg-tierlist.misakanet.page/">
                  Tierlist
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="text-center sm:text-left">
          <p class="text-lg font-medium text-white">Helpful Links</p>

          <nav class="mt-8">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-white transition hover:text-white/75" target="_blank"
                  href="https://www.reddit.com/r/VirtualRealityGaming/">
                  FAQs
                </a>
              </li>

              <li>
                <a class="text-white transition hover:text-white/75" target="_blank" href="https://x.com/virtualkrial">
                  Support
                </a>
              </li>

              <li>
                <a class="flex group justify-center sm:justify-start gap-1.5"
                  href="https://boards.4channel.org/vg/#search/s=vrg" target="_blank">
                  <span class="text-white transition group-hover:text-white/75">
                    Live Chat
                  </span>

                  <span class="relative flex w-2 h-2 -mr-2">
                    <span
                      class="absolute inline-flex w-full h-full bg-teal-400 rounded-full opacity-75 animate-ping"></span>
                    <span class="relative inline-flex w-2 h-2 bg-teal-500 rounded-full"></span>
                  </span>
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="text-center sm:text-left">
          <p class="text-lg font-medium text-white">Contact Us</p>

          <ul class="mt-8 space-y-4 text-sm">
            <li>
              <a class="flex items-center justify-center sm:justify-start gap-1.5 group" href="mailto:ivanadai@vrg.com">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white shrink-0" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>

                <span class="text-white transition group-hover:text-white/75">
                  ivanadai@vrg.com
                </span>
              </a>
            </li>

            <li>
              <a class="flex items-center justify-center sm:justify-start gap-1.5 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white shrink-0" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>

                <span class="text-white transition group-hover:text-white/75">
                  (713) 302-7386
                </span>
              </a>
            </li>

            <li class="flex items-start justify-center gap-1.5 sm:justify-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white shrink-0" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>

              <address class="-mt-0.5 not-italic text-white">
                <a class="text-white transition hover:text-white/75" target="_blank"
                  href="https://vrclist.com/world/10442">
                  Festival Plaza
                </a>
              </address>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="pt-6 mt-12 border-t border-gray-800">
      <div class="text-center  sm:flex sm:justify-between sm:text-left">
        <p class="text-sm space-x-1 text-gray-400">
          <span class="block sm:inline">All rights reserved.</span>

          <a class="inline-block text-teal-500 underline transition hover:text-teal-500/75" href="/">
            Terms & Conditions
          </a>

          <span>&middot;</span>

          <a class="inline-block text-teal-500 underline transition hover:text-teal-500/75" href="/">
            Privacy Policy
          </a>
        </p>

        <p class="mt-4 text-sm text-gray-500 sm:order-first sm:mt-0">
          &copy; 2024 /vrg/
        </p>
      </div>
    </div>
  </div>
</template>