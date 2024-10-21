<script setup>
import { Head } from "@inertiajs/vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import Portfolio from "@/Components/Frontend/Portfolio.vue";
import Services from "@/Components/Frontend/Services.vue";
import ContactMe from "@/Components/Frontend/ContactMe.vue";

defineProps({
    skills: Object,
    projects: Object
});
</script>

<template>
    <Head title="Portfolio" />
    <FrontendLayout>
        <Hero />
        <Promote />
        <About />
        <Skills :skills="skills" />
        <Portfolio :skills="skills" :projects="projects" />
        <Services />
        <ContactMe />
    </FrontendLayout>
</template>
