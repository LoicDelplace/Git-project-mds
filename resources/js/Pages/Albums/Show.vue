<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    album: Array,
});
</script>

<template>
    <Head :title="album.title" />

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                {{ album.title }}
            </h1>
        </template>
        <div>
            {{ album.description }}
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
