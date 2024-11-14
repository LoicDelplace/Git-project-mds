<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { reactive } from 'vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import Checkbox from "@/Components/Checkbox.vue";

const form = useForm({
    title: null,
    description: null,
    isPrivate: false,
});

const submit = () => {
    form.post(route('albums.store'));
};
</script>

<template>
    <Head title="New album" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                New Album
            </h2>
        </template>
        <div class="w-full p-20">
            <form class="form mt-3" @submit.prevent="submit">
                <InputLabel value="title" />
                <TextInput v-model="form.title" />
                <InputError :message="form.errors.title" />
                <InputLabel value="description" />
                <TextInput v-model="form.description" />
                <InputError :message="form.errors.title" />
                <div class="flex gap-3">
                    <Checkbox v-model="form.isPrivate"/>
                    <InputLabel value="Privé ?" />
                </div>

                <PrimaryButton>Ajouter</PrimaryButton>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped></style>
