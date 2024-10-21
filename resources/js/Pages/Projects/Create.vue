<template>
    <Head title="New Project" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                New Project
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form
                    @submit.prevent="submit"
                    class="bg-white p-6 rounded-lg shadow-md"
                >
                    <div class="mb-6">
                        <InputLabel for="skill_id" value="Select Skill" />
                        <select
                            v-model="form.skill_id"
                            id="skill_id"
                            name="skill_id"
                            class="mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500 w-full text-center"
                        >
                            <option value="" disabled>Select a skill</option>
                            <option
                                v-for="skill in skills"
                                :key="skill.id"
                                :value="skill.id"
                            >
                                {{ skill.name }}
                            </option>
                        </select>
                        <InputError :message="form.errors.skill_id" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <InputLabel for="name" value="Name" />
                        <TextInput
                            id="name"
                            type="text"
                            v-model="form.name"
                            autocomplete="name"
                            class="mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500 w-full text-center"
                        />
                        <InputError :message="form.errors.name" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <InputLabel for="project_url" value="URL" />
                        <TextInput
                            id="project_url"
                            type="text"
                            v-model="form.project_url"
                            class="mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500 w-full text-center"
                            autocomplete="projecturl"
                        />
                        <InputError :message="form.errors.project_url" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <InputLabel for="image" value="Skill Image" />
                        <div class="flex items-center">
                            <input
                                id="image"
                                type="file"
                                @change="handleFileUpload"
                                class="hidden"
                            />
                            <label
                                for="image"
                                class="cursor-pointer flex items-center justify-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            >
                                Choose File
                            </label>
                            <span v-if="form.image" class="ml-4 text-gray-600">
                                {{ form.image.name }}
                            </span>
                        </div>
                        <InputError :message="form.errors.image" class="mt-2" />
                    </div>

                    <!-- Center the button -->
                    <div class="flex justify-center mt-6">
                        <PrimaryButton
                            type="submit"
                            class="max-w-xs py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                            Create Project
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

defineProps({
    skills: Array,
});

const form = useForm({
    name: "",
    image: null,
    skill_id: "",
    project_url: "",
});

function handleFileUpload(event) {
    form.image = event.target.files[0];
}

function submit() {
    form.post(route("projects.store"));
}
</script>
