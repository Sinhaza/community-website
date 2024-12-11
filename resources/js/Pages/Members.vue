<script setup>
import { onMounted, ref } from "vue";

import NavBar from "@/Components/NavBar.vue";


let users = ref([])

onMounted(async () => {
    await getTierlistUsers()
});

async function getTierlistUsers() {
    await axios.get("/tierlistuser").then((response) => (
        users.value = response.data.users
    ));
}

function getTierlistAvatar(img_path) {
    return 'https://vrg-tierlist.misakanet.page/images/' + img_path;
}

</script>

<template>
    <div class="bg-gray-200 font-sans leading-normal tracking-normal">
        <NavBar></NavBar>

        <div v-if="users">
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
                        class="grid lg:grid-cols-[1fr_1fr_1fr_1fr] md:grid-cols-[1fr_1fr_1fr] grid-cols-[1fr] gap-6 max-md:justify-center mt-12">
                        <div v-for="user in users"
                            class="border drop-shadow-md p-6 w-full  mx-auto bg-gray-100 max-w-60 lg:max-w-80 overflow-hidden">
                            <img :src="getTierlistAvatar(user.img_path)" class="w-full rounded-lg h-56 object-cover" />

                            <div class="p-4">
                                <p
                                    class="text-ellipsis overflow-hidden mx-auto mt-3 font-bold text-blue-500 sm:text-lg md:mt-5 md:text-4xl md:max-w-3xl">
                                    {{ user.name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>