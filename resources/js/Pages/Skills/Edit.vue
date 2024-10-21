<template>
    <Head title="Edit Skill" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">Edit Skill</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form @submit.prevent="submit" class="bg-white p-6 rounded-lg shadow-md">
                    <div class="mb-6">
                        <InputLabel for="name" value="Skill Name" />
                        <TextInput
                            id="name"
                            type="text"
                            v-model="form.name"
                            class="mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500 w-full text-center"
                        />
                        <InputError :message="$page.props.errors.name" class="mt-2" />
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
                            <label for="image" class="cursor-pointer flex items-center justify-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 text-center">
                                Choose File
                            </label>
                            <span v-if="form.image" class="ml-4 text-gray-600">{{ form.image.name }}</span>
                        </div>
                        <InputError :message="$page.props.errors.image" class="mt-2" />
                    </div>

                    <!-- Center the button -->
                    <div class="flex justify-center">
                        <PrimaryButton type="submit" class="max-w-xs py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-">Update Skill</PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    skill: Object
})

const form = useForm({
    name: props.skill?.name,
    image: null,
});

function handleFileUpload(event) {
    form.image = event.target.files[0];
}

function submit() {
    Inertia.post(`/skills/${props.skill.id}`, {
        _method: 'PUT',
        name: form.name,
        image: form.image
    });
}
</script>
