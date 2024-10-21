<script setup>
import { ref, onMounted, onUnmounted } from "vue";

const showMobileMenu = ref(false);
const scrollBg = ref(false);

const navigation = [
    { name: "Home", href: "#home" },
    { name: "About", href: "#about" },
    { name: "Portfolio", href: "#portfolio" },
    { name: "Certificates", href: "#certificates" },
    { name: "Contact", href: "#contact" },
];

const setScrollBg = () => {
    scrollBg.value = window.scrollY > 50;
};

onMounted(() => {
    window.addEventListener("scroll", setScrollBg);
});

onUnmounted(() => {
    window.removeEventListener("scroll", setScrollBg);
});
</script>

<template>
    <nav
        :class="[
            'fixed top-0 left-0 w-full z-50 transition-colors ease-in-out duration-300 shadow-lg',
            scrollBg ? 'bg-light-secondary dark:bg-dark-primary' : 'bg-white dark:bg-dark-secondary'
        ]"
    >
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img
                    src="/images/logo.png"
                    alt="Logo"
                    class="h-16 w-auto rounded-lg shadow-lg"
                />
            </a>
            <button
                @click="showMobileMenu = !showMobileMenu"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default"
                aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                </svg>
            </button>
            <div
                :class="['w-full md:block md:w-auto', showMobileMenu ? '' : 'hidden']"
                id="navbar-default"
            >
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-light-tail-500 dark:border-dark-navy-100 rounded-lg bg-light-secondary md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-dark-secondary md:dark:bg-transparent dark:border-gray-700"
                >
                    <li v-for="(navItem, index) in navigation" :key="index">
                        <a
                            :href="navItem.href"
                            class="block py-2 px-3 text-white bg-light-tail-500 dark:bg-dark-navy-100 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page"
                        >
                            {{ navItem.name }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
