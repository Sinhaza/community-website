<script setup>
import { onMounted, ref } from "vue";

import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
import JobCard from "@/Components/JobCard.vue";

const jobs = ref([
    { name: 'Janitor', salary: 'Competitive', location: 'The thread', link: 'https://redditinc.com/careers', description: 'We are seeking a reliable and detail-oriented Internet Forum Moderator to oversee discussions, enforce community guidelines, and ensure a positive user experience. Responsibilities include reviewing posts, addressing rule violations, managing spam, and fostering healthy engagement. Strong communication skills, impartial judgment, and familiarity with online communities are essential.', schedule: 'fulltime' },
    { name: 'Schizophrenic', salary: '(you)', location: 'The place you never leave', link: 'https://boards.4chan.org/x/', description: 'We are seeking a 4chan-certified schizophrenic individual to join our team of sane people. Must possess unparalleled skills in connecting unrelated dots, crafting wild theories, and derailing conversations with offbeat genius. A strong familiarity with "the glowies" and deep-seated distrust of mainstream narratives is a plus.', schedule: 'fulltime' },
])

</script>

<template>
    <div class="bg-gray-200 font-sans leading-normal tracking-normal">
        <NavBar></NavBar>
        <div
            class="grid grid-cols-[1fr] gap-1 max-w-[calc(100vw-1rem)] md:max-w-[min(calc(100vw-1rem),80rem)] xl:max-w-[min(calc(100vw-1rem),80rem)] mx-auto">
            <JobCard :jobs=jobs></JobCard>
        </div>


        <footer class="bg-gray-900">
            <Footer></Footer>
        </footer>
    </div>
</template>