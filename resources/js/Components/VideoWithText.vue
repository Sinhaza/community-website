<script setup>
import Button from 'primevue/button';
</script>

<template>
    <div class="relative w-full h-auto">
        <video class="w-full z-10" autoplay muted loop>
            <source src="/images/videos/1733366859595179.webm" type="video/mp4">
        </video>
        <div class="absolute w-full h-full top-0 left-0 bg-gray-900 opacity-40 z-20"></div>
        <div class="absolute w-full h-full flex bottom-0 flex-col align-start p-8 top-0 left-0 z-30">
            <div class="md:py-8 md:px-4 my-auto max-h-full sm:py-16 lg:px-6">
                <div class="mx-auto text-clip [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]  text-center">
                    <h1 class="text-white mb-4 md:text-5xl tracking-tight font-extrabold leading-tight text-gray-900">
                        Virtual connections, Real people.</h1>
                    <p class="mb-6 font-light text-white dark:text-gray-400 md:text-lg">
                        Meet people from all around the world with similar interests
                    </p>
                    <a href="https://www.reddit.com/r/VirtualRealityGaming/">
                        <Button label="Join now!" severity="info" />
                    </a>
                </div>
            </div>
        </div>


    </div>
</template>