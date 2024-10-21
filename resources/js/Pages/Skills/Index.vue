<template>
    <Head title="Skills" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Skills
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link
                        href="/skills/create"
                        class="px-2 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md"
                    >
                        New Skill
                    </Link>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table
                        class="w-full text-sm text-left text-gray-700 bg-white border border-gray-300"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-200"
                        >
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">Image</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="skill in skills.data"
                                :key="skill.id"
                                class="odd:bg-white even:bg-gray-100 border-b border-gray-300"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ skill.id }}
                                </th>
                                <td class="px-6 py-4">{{ skill.name }}</td>
                                <td class="px-6 py-4 rounded-md">
                                    <img
                                        :src="skill.image"
                                        class="w-20 h-20 object-cover rounded-lg"
                                        alt="Skill Image"
                                    />
                                </td>

                                <td class="px-6 py-4">
                                    <Link :href="route('skills.edit', skill.id)" class="font-medium text-blue-500 hover:text=blue-700 mr-2">
                                        Edit
                                    </Link>
                                    <Link :href="route('skills.destroy', skill.id)" class="font-medium text-red-500 hover:text=red-700 mr-2" method="delete" as="button" type="button">
                                        Delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    skills: Object,
});
</script>
