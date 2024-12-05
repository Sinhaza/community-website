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
        console.log(getRandomPosts(response.data.thread)),


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

const responsiveOptions = ref([
    {
        breakpoint: '1400px',
        numVisible: 2,
        numScroll: 1
    },
    {
        breakpoint: '1199px',
        numVisible: 3,
        numScroll: 1
    },
    {
        breakpoint: '767px',
        numVisible: 2,
        numScroll: 1
    },
    {
        breakpoint: '575px',
        numVisible: 1,
        numScroll: 1
    }
]);

</script>


<style>
:root {
    ::-webkit-scrollbar {
        height: 10px;
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #efefef;
        border-radius: 6px;
    }

    ::-webkit-scrollbar-thumb {
        background: #d5d5d5;
        border-radius: 6px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #c4c4c4;
    }
}
</style>

<template>
    <NavBar></NavBar>

    <div v-if="thread.posts" class="p-2">
        <Testimonials :testimonials="getRandomPosts(thread)" />
    </div>

    <footer class="bg-gray-900">
        <Footer></Footer>
    </footer>
</template>
