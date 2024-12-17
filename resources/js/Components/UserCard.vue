<script setup>

const props = defineProps({
    users: Array
})

function getTierlistAvatar(img_path) {
    return 'https://vrg-tierlist.misakanet.page/images/' + img_path;
}
</script>

<template>
    <div v-for="user in users"
        class="border drop-shadow-md p-6 w-full  mx-auto bg-gray-100 max-w-60 lg:max-w-80 overflow-hidden">
        <img :src="getTierlistAvatar(user.img_path)" class="w-full rounded-lg h-56 object-cover" />

        <div class="p-4">
            <p
                class="text-ellipsis overflow-hidden mx-auto mt-3 font-bold text-blue-500 sm:text-lg md:mt-5 md:text-4xl md:max-w-3xl">
                {{ user.name }}</p>
        </div>
    </div>
</template>