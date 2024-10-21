<script setup>
defineProps({
    skills: Object
})
</script>

<template>
    <section class="bg-light-tail-100 dark:bg-dark-tail-100 py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-black text-center mb-8">My Skills</h2>
            <div class="flex flex-wrap justify-center">
                <div
                    class="flex items-center justify-center transition-transform duration-300 hover:scale-105 m-4"
                    v-for="skill in skills.data" :key="skill.id"
                >
                    <img
                        :src="skill.image"
                        :alt="skill.name"
                        class="h-20 md:h-24 lg:h-28 object-contain shadow-lg rounded-lg transition-transform duration-300 hover:shadow-xl"
                    />
                </div>
            </div>
        </div>
    </section>
</template>
