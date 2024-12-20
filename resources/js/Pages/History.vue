<template>
    <div class="bg-gray-200 font-sans leading-normal tracking-normal">
        <NavBar></NavBar>

        <div class="max-w-2xl  py-5 mx-auto text-center">
            <div class="text-center">
                <h2
                    class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                    /vrg/ history
                </h2>

            </div>
        </div>

        <div class="card py-5">
            <Timeline :value="events" align="alternate" class="customized-timeline">
                <template #marker="slotProps">
                    <span class="flex w-8 h-8 items-center justify-center text-white rounded-full z-10 shadow-sm"
                        :style="{ backgroundColor: slotProps.item.color }">
                        <i :class="slotProps.item.icon"></i>
                    </span>
                </template>
                <template #content="slotProps">
                    <Card class="mt-4">
                        <template #title>
                            {{ slotProps.item.title }}
                        </template>
                        <template #subtitle>
                            {{ slotProps.item.date }}
                        </template>
                        <template #content>
                            <div class="flex gap-4">
                                <img v-if="slotProps.item.image" :src="`${slotProps.item.image}`"
                                    :alt="slotProps.item.name" width="100" class="shadow-sm" />
                                <p>
                                    {{ slotProps.item.text }}
                                </p>
                            </div>
                        </template>
                    </Card>
                </template>
            </Timeline>
        </div>
        <footer class="bg-gray-900">
            <Footer></Footer>
        </footer>
    </div>
</template>

<script setup>
import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
import Timeline from 'primevue/timeline';
import Card from 'primevue/card';
import Button from 'primevue/button';

import { ref } from "vue";

const events = ref([
    { title: 'The Creation', date: '1/3/2019', icon: 'pi pi-shopping-cart', color: '#9C27B0', image: 'https://styles.redditmedia.com/t5_cdi3rg/styles/communityIcon_kvmooykiktmd1.png', text: "Since its successful inception in 2018, Tipsy Tuesday has thrived, inspiring Krial to broaden the community's horizons. This expansion introduces a new entity that complements the original, maintaining its essence while branching out to create additional opportunities and events. The goal is to go beyond VRChat and embrace VR gaming as a whole." },
    { title: 'Tipsy-Krystal Schism', date: '11/10/2020 - 10/12/2021 ', icon: 'pi pi-cog', color: '#673AB7', text: "In the grand annals of the /vrg/ Empire, the Schizo Rebellion, led by the enigmatic and chaotic Jelly, marks one of the most volatile chapters in the Empire's storied history. The conflict, a bizarre yet titanic clash of ideology, strategy, and memes against Krial's infinite regime of /vrg/ and Tipsy Tuesday" },
    { title: 'The Twitter Invasion', date: '12/20/2021', icon: 'pi pi-shopping-cart', color: '#FF9800', text: "Once a harmonious sanctuary for virtual reality enthusiasts, the community of /vrg/ thrived on shared passions and camaraderie. But peace was shattered when the chaotic horde of Twitter trannies launched their invasion. Armed with performative opinions, divisive antics, and an unquenchable thirst for clout, they descended upon the forums. Their alien culture rooted in fast-paced, superficial engagements clashed violently with /vrg/'s deep, immersive discussions and longstanding traditions." },
    { title: 'Delivered', date: '16/10/2020 10:00', icon: 'pi pi-check', color: '#607D8B' }
]);

</script>

<style scoped>
@media screen and (max-width: 960px) {
    ::v-deep(.customized-timeline) {
        .p-timeline-event:nth-child(even) {
            flex-direction: row;

            .p-timeline-event-content {
                text-align: left;
            }
        }

        .p-timeline-event-opposite {
            flex: 0;
        }
    }
}

@media screen {
    ::v-deep(.customized-timeline) {
        .p-timeline-event-connector {
            @apply bg-gray-400;
        }
    }
}
</style>
