<template>
    <Head title="Albums" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Albums
            </h2>
        </template>
        <div>
            <h1>Mes Albums</h1>
            <ul>
                <li v-for="album in albums" :key="album.id">
                    <Link :href="route('albums.show', album.id)"
                        >{{ album.title }}
                    </Link>
                </li>
            </ul>
            <Link :href="route('albums.create')">Créer un album</Link>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { defineProps } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    albums: Array,
});

console.log(props.albums);
</script>

<style scoped></style>
