<script setup>
import { onMounted, ref } from "vue";

import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
import JobCard from "@/Components/JobCard.vue";

const jobs = ref([
    { name: 'Janitor', salary: 'Hotpockets', location: 'The thread', link: 'https://redditinc.com/careers', description: 'We are seeking a reliable and detail-oriented Internet Forum Moderator to oversee discussions, enforce community guidelines, and ensure a positive user experience. Responsibilities include reviewing posts, addressing rule violations, managing spam, and fostering healthy engagement. Strong communication skills, impartial judgment, and familiarity with online communities are essential.', schedule: 'fulltime' },
    { name: 'Schizophrenic', salary: '(you)', location: 'Remote', link: 'https://boards.4chan.org/x/', description: 'We are seeking a 4chan-certified schizophrenic individual to join our team of sane people. Must possess unparalleled skills in connecting unrelated dots, crafting wild theories, and derailing conversations with offbeat genius. A strong familiarity with "the glowies" and deep-seated distrust of mainstream narratives is a plus.', schedule: "Whenever you're awake" },
])

</script>

<template>
    <div class="bg-gray-200 font-sans leading-normal tracking-normal">
        <NavBar></NavBar>

        <div class="py-5">
            <div
                class="max-w-[calc(100vw-1rem)] md:max-w-[min(calc(100vw-1rem),80rem)] xl:max-w-[min(calc(100vw-1rem),80rem)] mx-auto">
                <div class="max-w-2xl mx-auto text-center">
                    <div class="text-center">
                        <h2
                            class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                            Meet our members
                        </h2>
                        <p
                            class="max-w-md mx-auto mt-3 font-bold text-base text-gray-500 sm:text-lg md:mt-5 md:text-4xl md:max-w-3xl">
                            Explore our vast number of members who made this place into what it is today
                        </p>
                    </div>
                </div>

                <div
                    class="grid grid-cols-[1fr] gap-1 max-w-[calc(100vw-1rem)] md:max-w-[min(calc(100vw-1rem),80rem)] xl:max-w-[min(calc(100vw-1rem),80rem)] mx-auto">
                    <JobCard :jobs=jobs></JobCard>
                </div>
            </div>
        </div>

        <footer class="bg-gray-900">
            <Footer></Footer>
        </footer>
    </div>
</template>