<script setup>
import { Link } from "@inertiajs/inertia-vue3";

// Define props for the Project component
defineProps({
    project: Object,
});
</script>

<template>
    <Link
        v-motion
        :initial="{ opacity: 0, y: 100 }"
        :enter="{ opacity: 1, y: 0 }"
        :href="project.project_url"
        class="group flex flex-col items-center text-center cursor-pointer border border-gray-300 dark:border-gray-700 rounded-lg p-4 transition-transform transform hover:scale-105"
    >
        <!-- Image of the project -->
        <div class="flex-shrink-0 mb-2">
            <img
                :src="project.image"
                :alt="project.name"
                class="rounded-md h-22 w-22 object-cover transition duration-300 group-hover:opacity-80"
            />
        </div>

        <!-- Project name directly below the image -->
        <h3
            class="group-hover:text-light-tail-500 text-lg font-semibold capitalize mb-1"
        >
            {{ project.name }}
        </h3>

        <!-- Skill name below the project name -->
        <span
            v-if="project.skill"
            class="group-hover:text-light-tail-500 capitalize text-accent text-sm"
        >
            {{ project.skill.name }}
        </span>
    </Link>
</template>
