<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    skills: Object,
});

const form = useForm({
    search: '',
});

const searchItem = async () => {
    await form.get(route('skills.index', { search: form.search }));
};


</script>

<template>
    <Head title="Skills Index" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Skills</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-start">
                    <Link :href="route('skills.create')"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">New Skill</Link>
                </div>

                <div class="flex mt-3 justify-between items-center">

                    <div class="flex-grow">
                        <TextInput id="search" type="text" class="block w-full" v-model="form.search"
                            :placeholder="searchInput ? 'Search: ' + searchInput : 'Search'" />
                    </div>
                    <button type="button" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md ml-2"
                        @click="searchItem">
                        Search
                    </button>

                </div>

                <div class="mt-2">
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr v-for="skill in skills" :key="skill.id" class="bg-white border-b">
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="skill in skills.data" :key="skill.id" class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ skill.id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ skill.name }}
                                </td>
                                <td class="px-6 py-4">
                                    <img :src="skill.image" class="w-12 h-12 rounded-full" />
                                </td>
                                <td class="px-6 py-4">
                                    <Link :href="route('skills.edit', skill.id)"
                                        class="font-medium text-blue-500 hover:text-blue-700 mr-2">Edit</Link>
                                    <Link :href="route('skills.destroy', skill.id)" method="delete" as="button"
                                        type="button" class="font-medium text-red-500 hover:text-red-700 mr-2">Delete</Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

