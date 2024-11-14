<template>
    <Head title="Albums" />

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-800">
                Albums
            </h1>
        </template>
        <div>
            <ul>
                <li v-for="album in albums" :key="album.id" class="p-8">
                    <h2>{{ album.title }}</h2>
                    <p>
                        crée par:
                        <span class="text-purple-700">
                            {{ album.user.name }}
                        </span>
                        le:
                        <span class="text-purple-700">
                            {{ new Date(album.created_at).toDateString() }}
                        </span>

                    </p>
                    <Link
                        :href="route('albums.show', album.id)"
                        class="font-bold text-pink-500 hover:text-purple-700"
                        >voir l'album
                    </Link>
                </li>
            </ul>
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
