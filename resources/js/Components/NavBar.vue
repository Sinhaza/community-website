<script setup>
import { onMounted } from 'vue'
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

onMounted(() => {
  var h = document.documentElement,
    b = document.body,
    st = "scrollTop",
    sh = "scrollHeight",
    progress = document.querySelector("#progress"),
    scroll;
  var scrollpos = window.scrollY;
  var header = document.getElementById("header");

  document.addEventListener("scroll", function () {
    /*Refresh scroll % width*/
    scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
    progress.style.setProperty("--scroll", scroll + "%");

    /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;

    if (scrollpos > 100) {
      header.classList.remove("hidden");
      header.classList.remove("fadeOutUp");
      header.classList.add("slideInDown");
    } else {
      header.classList.remove("slideInDown");
      header.classList.add("fadeOutUp");
      header.classList.add("hidden");
    }
  });
})
</script>

<style>
.smooth {
  transition: box-shadow 0.3s ease-in-out;
}

::selection {
  background-color: aliceblue
}

:root {
  ::-webkit-scrollbar {
    height: 10px;
    width: 10px;
  }

  ::-webkit-scrollbar-track {
    background: #efefef;
    border-radius: 6px
  }

  ::-webkit-scrollbar-thumb {
    background: #d5d5d5;
    border-radius: 6px
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #c4c4c4
  }
}

/*scroll to top*/
.scroll-top {
  position: fixed;
  z-index: 50;
  padding: 0;
  right: 30px;
  bottom: 100px;
  opacity: 0;
  visibility: hidden;
  transform: translateY(15px);
  height: 46px;
  width: 46px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  transition: all .4s ease;
  border: none;
  box-shadow: inset 0 0 0 2px #ccc;
  color: #ccc;
  background-color: #fff;
}

.scroll-top.is-active {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.scroll-top .icon-tabler-arrow-up {
  position: absolute;
  stroke-width: 2px;
  stroke: #333;
}

.scroll-top svg path {
  fill: none;
}

.scroll-top svg.progress-circle path {
  stroke: #333;
  stroke-width: 4;
  transition: all .4s ease;
}

.scroll-top:hover {
  color: var(--ghost-accent-color);
}

.scroll-top:hover .progress-circle path,
.scroll-top:hover .icon-tabler-arrow-up {
  stroke: var(--ghost-accent-color);
}
</style>

<template>
  <div class='flex shadow-lg py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center justify-between gap-4 w-full'>
      <a href="/"
        class="lg:absolute mx-auto md:mx-0 md:mx-left max-lg:left-10 lg:top-2/4 lg:left-2/4 lg:-translate-x-1/2 lg:-translate-y-1/2">
        <ApplicationLogo></ApplicationLogo>
      </a>

      <div
        class='max-lg:hidden lg:!block max-lg:w-full max-lg:fixed max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
        <ul
          class='lg:flex lg:gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
          <li class='max-lg:border-b max-lg:py-3 px-3'>

          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a
              class="inline-block no-underline text-black hover:text-gray-200 text-center"
              href="https://vrg-tierlist.misakanet.page/" target="_blank">
              <h1 class="hidden self-center  md:flex tracking-tight text-4xl justify-center  mx-auto font-bold">
                Tierlist
              </h1>
            </a>
          </li>
        </ul>
      </div>

      <div class='flex items-center mx-auto md:mx-0 ml-auto space-x-6'>
        <a class="inline-block no-underline text-black hover:text-gray-200 text-center" href="/members">
          <h1 class="self-center text-2xl  md:flex tracking-tight md:text-4xl justify-center  mx-auto font-bold">
            Members
          </h1>
        </a>
        <a class="inline-block no-underline text-black hover:text-gray-200 text-center" href="/career">
          <h1 class="self-center  text-2xl  md:flex tracking-tight md:text-4xl justify-center  mx-auto font-bold">
            Career
          </h1>
        </a>
      </div>
    </div>
  </div>

  <div id="header" class="bg-gray-900 fixed w-full z-50 top-0 hidden animated" style="opacity: .95;">
    <div class="bg-white">
      <div class="flex flex-wrap items-center content-center">
        <div class="flex w-1/3 justify-start content-center">
          <a class="inline-block text-white no-underline hover:text-white hover:underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4"
            href="#">
            <img class="text-black" src="/images/logo/vrgbadge2.png" />
          </a>
        </div>


        <div class="flex w-1/3 justify-center content-center">

          <a
            class="inline-block text-white no-underline hover:text-white hover:underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4">
            <h1 class="flex mx-auto tracking-tight self-center text-2xl justify-center text-black font-extrabold">
              /vrg/
            </h1>
          </a>

        </div>

        <div class="flex w-1/3 justify-end content-center">
          <a
            class="inline-block text-white no-underline hover:text-white hover:underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4">
            <svg version="1.1" id="Clover" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"
              enable-background="new 0 0 512 512" xml:space="preserve">
              <path fill="none" stroke="#006600" stroke-width="37.5776" stroke-miterlimit="10"
                d="M93.7 98.6c0-25.8 83.8-61.1 123.7 85.3 0 0-127.8 24.9-145.4-3.7s46-44.8 46-55S93.7 124.4 93.7 98.6z" />
              <path fill="none" stroke="#A4CF88" stroke-width="14.0916" stroke-miterlimit="10"
                d="M93.7 98.6c0-25.8 83.8-61.1 123.7 85.3 0 0-127.8 24.9-145.4-3.7s46-44.8 46-55S93.7 124.4 93.7 98.6z" />
              <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="143.1424" y1="192" x2="143.1424"
                y2="77.7196">
                <stop offset="0" stop-color="#298122" />
                <stop offset="0.2857" stop-color="#016701" />
                <stop offset="0.2858" stop-color="#44942E" />
                <stop offset="1" stop-color="#85BF5A" />
              </linearGradient>
              <path fill="url(#SVGID_1_)"
                d="M93.7 98.6c0-25.8 83.8-61.1 123.7 85.3 0 0-127.8 24.9-145.4-3.7s46-44.8 46-55S93.7 124.4 93.7 98.6z" />
              <path fill="none" stroke="#006600" stroke-width="37.5776" stroke-miterlimit="10"
                d="M405.4 85.9c25.8 0 61.1 83.8-85.3 123.7 0 0-24.9-127.8 3.7-145.4 28.6-17.6 44.8 46 55 46S379.5 85.9 405.4 85.9z" />
              <path fill="none" stroke="#A4CF88" stroke-width="14.0916" stroke-miterlimit="10"
                d="M405.4 85.9c25.8 0 61.1 83.8-85.3 123.7 0 0-24.9-127.8 3.7-145.4 28.6-17.6 44.8 46 55 46S379.5 85.9 405.4 85.9z" />
              <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="369.3906" y1="192" x2="369.3906"
                y2="77.7196">
                <stop offset="0" stop-color="#298122" />
                <stop offset="0.2857" stop-color="#016701" />
                <stop offset="0.2858" stop-color="#44942E" />
                <stop offset="1" stop-color="#85BF5A" />
              </linearGradient>
              <path fill="url(#SVGID_2_)"
                d="M405.4 85.9c25.8 0 61.1 83.8-85.3 123.7 0 0-24.9-127.8 3.7-145.4 28.6-17.6 44.8 46 55 46S379.5 85.9 405.4 85.9z" />
              <path fill="none" stroke="#006600" stroke-width="37.5776" stroke-miterlimit="10"
                d="M414 414.4c-1.6 25.8-87.3 55.9-118.3-92.7 0 0 129.1-17.1 144.9 12.5 15.9 29.6-48.6 42-49.2 52.1C390.8 396.6 415.5 388.7 414 414.4z" />
              <path fill="none" stroke="#A4CF88" stroke-width="14.0916" stroke-miterlimit="10"
                d="M414 414.4c-1.6 25.8-87.3 55.9-118.3-92.7 0 0 129.1-17.1 144.9 12.5 15.9 29.6-48.6 42-49.2 52.1C390.8 396.6 415.5 388.7 414 414.4z" />
              <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="369.3906" y1="413" x2="369.3906"
                y2="316.9167">
                <stop offset="0" stop-color="#298122" />
                <stop offset="0.2857" stop-color="#016701" />
                <stop offset="0.2858" stop-color="#44942E" />
                <stop offset="1" stop-color="#85BF5A" />
              </linearGradient>
              <path fill="url(#SVGID_3_)"
                d="M414 414.4c-1.6 25.8-87.3 55.9-118.3-92.7 0 0 129.1-17.1 144.9 12.5 15.9 29.6-48.6 42-49.2 52.1C390.8 396.6 415.5 388.7 414 414.4z" />
              <path fill="none" stroke="#006600" stroke-width="37.5776" stroke-miterlimit="10"
                d="M124.6 433.8c-25.7 2.8-69.7-76.7 71.6-132.1 0 0 38.4 124.4 11.9 145s-49.5-40.9-59.6-39.8S150.3 431.1 124.6 433.8z" />
              <path fill="none" stroke="#A4CF88" stroke-width="14.0916" stroke-miterlimit="10"
                d="M124.6 433.8c-25.7 2.8-69.7-76.7 71.6-132.1 0 0 38.4 124.4 11.9 145s-49.5-40.9-59.6-39.8S150.3 431.1 124.6 433.8z" />
              <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="157.3587" y1="413" x2="157.3587"
                y2="316.9167">
                <stop offset="0" stop-color="#298122" />
                <stop offset="0.2857" stop-color="#016701" />
                <stop offset="0.2858" stop-color="#44942E" />
                <stop offset="1" stop-color="#85BF5A" />
              </linearGradient>
              <path fill="url(#SVGID_4_)"
                d="M124.6 433.8c-25.7 2.8-69.7-76.7 71.6-132.1 0 0 38.4 124.4 11.9 145s-49.5-40.9-59.6-39.8S150.3 431.1 124.6 433.8z" />
            </svg>

          </a>
        </div>
      </div>

    </div>
    <!-- Progress bar -->
    <div id="progress" class="h-1 bg-white shadow"
      style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
  </div>
</template>