<script setup>
import Project from "./Project.vue";
import { ref } from "vue";

// Define props for projects and skills
const props = defineProps({
    projects: Object,
    skills: Object
});

// Initialize a ref for filtered projects and selected skill
const filteredProjects = ref(props.projects.data);
const selectedSkill = ref("all");

// Function to filter projects by project ID
const filterProjects = (id) => {
    if (id === "all") {
        filteredProjects.value = props.projects.data; // Show all projects
        selectedSkill.value = id; // Update selected skill
    } else {
        // Filter projects by matching the project ID
        filteredProjects.value = props.projects.data.filter((project) => {
            return project.id === id;
        });
        selectedSkill.value = id; // Update selected skill
    }
};
</script>

<template>
    <div class="container mx-auto p-6">
        <!-- Navigation with project buttons -->
        <nav class="mb-6 border-b-2 border-light-tail-100 dark:border-dark-navy-100">
            <div class="flex flex-wrap justify-center">
                <!-- Button for 'All' projects -->
                <button
                    @click="filterProjects('all')"
                    :class="{
                        'bg-light-tail-600 text-white shadow-lg dark:bg-dark-navy-700 dark:text-gray-100': selectedSkill === 'all',
                        'bg-light-primary text-white dark:bg-dark-tail-100 dark:text-gray-300': selectedSkill !== 'all'
                    }"
                    class="m-2 p-4 rounded-md transition duration-300 hover:bg-light-tail-400 dark:hover:bg-dark-navy-600 w-full md:w-auto"
                >
                    All
                </button>

                <!-- Buttons for each project name -->
                <div class="flex flex-col w-full md:flex-row md:justify-center">
                    <button
                        @click="filterProjects(project.id)"
                        v-for="project in props.projects.data"
                        :key="project.id"
                        :class="{
                            'bg-light-tail-600 text-white shadow-lg dark:bg-dark-secondary dark:text-gray-100': selectedSkill === project.id,
                            'bg-light-primary text-white dark:bg-dark-tail-500 dark:text-gray-300': selectedSkill !== project.id
                        }"
                        class="m-2 p-4 rounded-md transition duration-300 hover:bg-light-tail-100 dark:hover:bg-dark-secondary w-full md:w-auto"
                    >
                        {{ project.name }}
                    </button>
                </div>
            </div>
        </nav>

        <!-- Display the project images in a grid below -->
        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
            <Project
                v-for="project in filteredProjects"
                :key="project.id"
                :project="project"
            />
        </section>
    </div>
</template>
