<script setup>
defineProps({
    testimonials: Array
})
let remaining = 0
let positiveStars = 0

function getDate(unixTimestamp) {
    return new Date(unixTimestamp * 1000);
}

function getRandomAvatar() {
    return 'https://readymadeui.com/team-' + Math.floor(Math.random() * 5 + 1) + '.webp';
}

function getRandomStarAmount() {
    positiveStars = Math.floor(Math.random() * 4 + 1)
    remaining = 5 - positiveStars
    return positiveStars
}
</script>

<template>
    <div class="mt-4 font-[sans-serif] max-w-6xl max-md:max-w-md mx-auto">

        <div class="mb-12 text-center">
            <h2 class="font-bold break-normal text-2xl md:text-4xl">Hear what our community has to say</h2>
        </div>

        <div class="grid md:grid-cols-[1fr_1fr_1fr] md:grid-cols-[1fr] gap-8">
            <div v-for="testimonial in testimonials"
                class="p-6 rounded-lg mx-auto bg-gray-100 relative max-w-60 lg:max-w-80 max-h-96">
                <div class="flex flex-wrap items-center gap-4">
                    <div>
                        <h4 class="text-gray-800 text-sm whitespace-nowrap font-bold">{{ testimonial.name }}</h4>
                        <p class="mt-0.5 text-xs text-gray-600">{{ getDate(testimonial.time) }}</p>
                    </div>
                </div>

                <div class="flex space-x-1 mt-4">
                    <svg v-for="index in getRandomStarAmount()" class="w-4 fill-[#facc15]" viewBox="0 0 14 13"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                    </svg>
                    <svg v-for="index in remaining" class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                    </svg>
                </div>

                <div class="mt-6 text-clip overflow-auto">
                    <p class="text-gray-800 line-clamp-4  text-sm leading-relaxed"> <span class=" overflow-hidden "
                            v-html="testimonial.com"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>