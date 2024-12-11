<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import axios from "axios";

import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
import Testimonials from "@/Components/Testimonials.vue";
import Trailer from "@/Components/VideoWithText.vue";
import Image from 'primevue/image';

let thread = ref([])
let threadImages = ref([])


onMounted(async () => {
    await getVrgThread()
});

async function getVrgThread() {
    await axios.get("/vrgthread").then((response) => (
        thread.value = response.data.thread,
        threadImages.value = getThreadImageLinks(response.data.thread)
    ));
}

function getThreadImageLinks(thread) {
    // Array.from({ length: Math.floor(10) }).map(x => thread.posts[Math.floor(Math.random() * thread.posts.length)]);
    let imageLinks = []
    for (const [key, value] of Object.entries(thread.posts)) {
        if ('tim' in value) {
            imageLinks.push('https://i.4cdn.org/vg/' + value['tim'] + '.png');
        }
    }
    return imageLinks
}

function getRandomPosts(thread) {
    return Array.from({ length: Math.floor(3) }).map(x => thread.posts[Math.floor(Math.random() * thread.posts.length)]);
}
</script>


<style></style>

<template>
    <div class="bg-gray-200 font-sans leading-normal tracking-normal">
        <NavBar></NavBar>

        <Trailer></Trailer>

        <!-- Alone Hero -->
        <div class="w-full bg-gray-100">
            <div
                class="relative flex max-w-[calc(100vw-1rem)] md:max-w-[min(calc(100vw-1rem),80rem)] xl:max-w-[min(calc(100vw-1rem),100rem)] flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6">
                <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
                    <div class="text-left">
                        <h2
                            class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                            All alone on a
                            <span class="font-bold text-blue-500">Friday night?</span>
                        </h2>
                        <p
                            class="max-w-md mx-auto mt-3 font-bold text-base text-gray-500 sm:text-lg md:mt-5 md:text-4xl md:max-w-3xl">
                            Not with us!
                        </p>
                        <p
                            class="max-w-md mx-auto mt-3 text-base text-gray-800 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Re-experience your golden highschool days with us together in VRChat
                        </p>
                        <div class="mt-5 sm:flex md:mt-8">
                            <div class="rounded-md shadow"><a
                                    href="https://discord.com/servers/vrchat-189511567539306508"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                                    Start here!
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
                    <div class="relative w-full p-3 rounded  md:p-8">
                        <div class="rounded-lg bg-white text-black w-full">
                            <img src="/images/group/1733731177738766.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Groups -->
        <div
            class="mx-auto grid py-4 gap-x-6 gap-y-4 md:gap-4 max-w-[calc(100vw-1rem)] md:max-w-[min(calc(100vw-1rem),80rem)] xl:max-w-[min(calc(100vw-1rem),100rem)] relative">
            <div class="grid  gap-4 md:grid-cols-[1fr_1fr_1fr_1fr] md:grid-cols-[1fr]">
                <div class="flex flex-col items-start gap-y-1 rounded-lg p-4">
                    <Image class="mx-auto rounded w-1/2" src="/images/logo/tuesday-pavlov-vrg-logo.png" alt="Image" />
                    <h2 class="mb-4 text-2xl mx-auto tracking-tight font-extrabold text-gray-900 dark:text-white">VR
                        Games</h2>
                    <p class="text-gray-800 mx-auto sm:text-xl dark:text-gray-400">Enjoy various FPS games, hosted in
                        various
                        timezones</p>
                </div>

                <div class="flex flex-col items-start gap-y-1 rounded-lg p-4">
                    <Image class="mx-auto rounded w-1/2" src="/images/logo/Virtual-fishing-club-vrg-logo.png"
                        alt="Image" />
                    <h2 class="mb-4 text-2xl mx-auto tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Elevate your hobbies</h2>
                    <p class="text-gray-800 mx-auto sm:text-xl dark:text-gray-400">Take your hobbies to the virtual
                        reality so you can experience it anytime you want</p>
                </div>

                <div class="flex flex-col items-start gap-y-1 rounded-lg p-4">
                    <Image class="mx-auto rounded w-1/2" src="/images/logo/SEA-Exploration-vrg-logo.png" alt="Image" />
                    <h2 class="mb-4 text-2xl mx-auto tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Explore the VR world</h2>
                    <p class="text-gray-800 mx-auto sm:text-xl dark:text-gray-400">Explore the worlds of VRChat with our
                        South East Asian friends</p>
                </div>

                <div class="flex flex-col items-start gap-y-1 rounded-lg p-4">
                    <Image class="mx-auto rounded w-1/2" src="/images/logo/soccer-vrg-logo.png" alt="Image" />
                    <h2 class="mb-4 text-2xl mx-auto tracking-tight font-extrabold text-gray-900 dark:text-white">Our
                        own soccer team</h2>
                    <p class="text-gray-800 mx-auto sm:text-xl dark:text-gray-400">Watch our very own Pro Evolution
                        Soccer team play against many other communities</p>
                </div>
            </div>
        </div>
        <!-- Groups end -->

        <!-- Tierlist Hero -->
        <div class="w-full bg-gray-100">
            <div
                class="relative flex justify-around max-w-[calc(100vw-1rem)] md:max-w-[min(calc(100vw-1rem),80rem)] xl:max-w-[min(calc(100vw-1rem),100rem)] flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6">

                <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
                    <div class="relative w-full p-3 rounded  md:p-8">
                        <div class="rounded-lg bg-white text-black w-full">
                            <img src="/images/tierlist.png" />
                        </div>
                    </div>
                </div>

                <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
                    <div class="md:text-right text-left">
                        <h2
                            class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                            Explore other apps
                        </h2>
                        <p
                            class="max-w-md mx-auto mt-3 font-bold text-base text-gray-500 sm:text-lg md:mt-5 md:text-4xl md:max-w-3xl">
                            Rank our members
                        </p>
                        <p
                            class="max-w-md mx-auto mt-3 text-base text-gray-800 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Use our very own Tierlist web application made for us, by us!
                        </p>
                        <div class="mt-5 sm:flex md:place-content-end md:mt-8">
                            <div class="rounded-md shadow"><a href="https://vrg-tierlist.misakanet.page/"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                                    Visit the site!
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="thread.posts"
            class="p-2 py-5 mx-auto max-w-[calc(100vw-1rem)] md:max-w-[min(calc(100vw-1rem),80rem)] xl:max-w-[min(calc(100vw-1rem),100rem)]">
            <Testimonials :testimonials="getRandomPosts(thread)" />
        </div>

        <footer class="bg-gray-900">
            <Footer></Footer>
        </footer>
    </div>

</template>
