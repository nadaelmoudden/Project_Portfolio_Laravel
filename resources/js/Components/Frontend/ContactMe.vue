<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: "",
    email: "",
    body: "",
});

const submit = () => {
    form.post(route("contact"), {
        preserveScroll: true, // Preserve scroll position after submission
        onSuccess: () => form.reset(), // Reset the form fields upon successful submission
    });
};
</script>

<template>
    <section id="contact" class="section bg-light-tail-500 dark:bg-dark-tail-100 py-12">
        <div class="container mx-auto px-6" v-motion :initial="{opacity: 0, y:100}" :visible="{opacity:1, y:0}">
            <!-- Section title and subtitle -->
            <div class="flex flex-col items-center text-center mb-12">
                <h2
                    class="section-title text-4xl font-bold text-light-primary dark:text-dark-tail-500"
                >
                    Contact Me
                </h2>
                <p
                    class="subtitle text-lg text-black dark:text-dark-tail-200 max-w-lg"
                >
                    Feel free to reach out for any questions, collaboration
                    opportunities, or just to say hello!
                </p>
            </div>

            <!-- Contact info and form -->
            <div class="flex flex-col lg:flex-row lg:gap-x-8 justify-between">
                <!-- Contact Information Section -->
                <div
                    class="flex flex-col items-center space-y-8 mb-12 lg:mb-0 lg:mt-2"
                >
                    <!-- Email Information -->
                    <div class="flex flex-col lg:flex-row gap-x-4 items-center">
                        <div
                            class="rounded-full w-14 h-14 flex items-center justify-center bg-light-primary dark:bg-dark-primary text-accent text-2xl"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"
                                />
                            </svg>
                        </div>
                        <div>
                            <h4
                                class="text-xl font-semibold text-light-primary dark:text-dark-tail-300 mb-1"
                            >
                                Have a question?
                            </h4>
                            <p
                                class="text-black dark:text-dark-tail-200 mb-1"
                            >
                                I'm here to help you.
                            </p>
                            <p class="text-accent font-medium">
                                Email me at:
                                <span class="font-bold"
                                    >elmouddennada33@gmail.com</span
                                >
                            </p>
                        </div>
                    </div>

                    <!-- Location Information -->
                    <div class="flex flex-col lg:flex-row gap-x-4 items-center">
                        <div
                            class="rounded-full w-14 h-14 flex items-center justify-center bg-light-primary dark:bg-dark-primary text-white text-2xl"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h4
                                class="text-xl font-semibold text-light-primary dark:text-dark-tail-300 mb-1"
                            >
                                Current location
                            </h4>
                            <p
                                class="text-black dark:text-dark-tail-200 mb-1"
                            >
                                Morocco, Tangier
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <form
                    @submit.prevent="submit"
                    class="space-y-6 w-full max-w-lg mx-auto lg:mx-0 bg-light-tail-100 dark:bg-dark-tail-200 p-8 rounded-lg shadow-md"
                >
                    <div>
                        <label
                            for="name"
                            class="block text-light-primary dark:text-dark-tail-300 mb-2"
                            >Name</label
                        >
                        <input
                            v-model="form.name"
                            type="text"
                            id="name"
                            class="w-full p-4 rounded-lg bg-light-secondary dark:bg-dark-secondary focus:outline-none focus:ring-2 focus:ring-accent"
                            placeholder="Your Name"
                        />
                        <span
                            v-if="form.errors.name"
                            class="text-sm m-2 text-red-400"
                            >{{ form.errors.name }}</span
                        >
                    </div>
                    <div>
                        <label
                            for="email"
                            class="block text-light-primary dark:text-dark-tail-300 mb-2"
                            >Email</label
                        >
                        <input
                            v-model="form.email"
                            type="email"
                            id="email"
                            class="w-full p-4 rounded-lg bg-light-secondary dark:bg-dark-secondary focus:outline-none focus:ring-2 focus:ring-accent"
                            placeholder="Your Email"
                        />
                        <span
                            v-if="form.errors.email"
                            class="text-sm m-2 text-red-400"
                            >{{ form.errors.email }}</span
                        >
                    </div>
                    <div>
                        <label
                            for="message"
                            class="block text-light-primary dark:text-dark-tail-300 mb-2"
                            >Message</label
                        >
                        <textarea
                            v-model="form.body"
                            id="message"
                            rows="4"
                            class="w-full p-4 rounded-lg bg-light-secondary dark:bg-dark-secondary focus:outline-none focus:ring-2 focus:ring-accent"
                            placeholder="Your Message"
                        ></textarea>
                        <span
                            v-if="form.errors.body"
                            class="text-sm m-2 text-red-400"
                            >{{ form.errors.body }}</span
                        >
                    </div>
                    <button
                        type="submit"
                        class="w-full p-4 bg-light-primary dark:bg-accent text-white rounded-lg hover:bg-light-tail-600 dark:hover:bg-dark-tail-500 transition-all duration-300"
                    >
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
</template>
