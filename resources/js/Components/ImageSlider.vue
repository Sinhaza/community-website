<script setup>
import Galleria from 'primevue/galleria';

</script>

<template>
    <div v-if="threadImages" class="card">
        <Galleria :value="threadImages" :numVisible="5" :showThumbnails="true" :showIndicators="false">
            <template #item="slotProps">
                <img crossorigin='anonymous' :src="slotProps.item"
                    :alt="'A picture depicting our virtual reality group'" />
            </template>
        </Galleria>
    </div>
</template>