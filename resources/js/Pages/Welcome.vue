<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { onMounted } from "vue";
import axios from "axios";

import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
import Password from 'primevue/password';

onMounted(async () => {
    await axios.get("/vrgthread").then((response) => {
        console.log(response.data.thread);
    });
});

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
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

    <div>

    </div>

    <footer class="bg-gray-900">
        <Footer></Footer>
    </footer>
</template>
