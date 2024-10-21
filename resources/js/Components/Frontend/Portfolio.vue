<script setup>
import Projects from "./Projects.vue";
defineProps({
    skills: Object,
    projects: Object
});
</script>

<template>
    <section id="portfolio" class="section bg-light-secondary dark:bg-dark-secondary min-h-[1400px]">
        <div class="container mx-auto"  v-motion :initial="{opacity: 0, y:100}" :visible="{opacity:1, y:0}" >
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title text-4xl font-bold text-gray-900 dark:text-white mb-4">My Latest Work!</h2>
                <p class="subtitle text-lg text-gray-700 dark:text-gray-300 max-w-xl mb-8">
                    Explore a selection of my recent projects that demonstrate my skills and dedication. Each project showcases my ability to create engaging and functional web applications tailored to user needs.
                </p>
            </div>
        </div>

            <!-- Container for project names -->
            <!-- <div class="flex flex-wrap justify-center mt-10">
                <div class="w-full lg:flex lg:justify-between">
                    <div
                        v-for="project in projects.data"
                        :key="project.id"
                        class="m-2 p-4 border rounded-lg bg-light-primary dark:bg-gray-800 shadow-md flex-1 text-center transition-transform transform hover:scale-105"
                    >
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">{{ project.name }}</h3>
                    </div>
                </div>
            </div> -->


        <Projects :skills="skills" :projects="projects" />
    </section>
</template>
