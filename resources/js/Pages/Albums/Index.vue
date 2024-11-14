<template>
    <div>
        <h1>Mes Albums</h1>
        <ul>
            <li v-for="album in albums" :key="album.id">
                <inertia-link :href="`/albums/${album.id}`">{{
                    album.title
                }}</inertia-link>
            </li>
        </ul>
        <inertia-link href="/albums/create">Créer un album</inertia-link>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

// Déclaration des props
const props = defineProps({
    albums: Array,
});
</script>

<style scoped></style>
