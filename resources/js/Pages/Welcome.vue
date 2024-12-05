<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import axios from "axios";

import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
import Testimonials from "@/Components/Testimonials.vue";

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

        <div v-if="thread.posts" class="p-2">
            <Testimonials :testimonials="getRandomPosts(thread)" />
        </div>

        <footer class="bg-gray-900">
            <Footer></Footer>
        </footer>
    </div>

</template>
