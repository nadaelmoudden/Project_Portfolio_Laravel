<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary py-20">
        <div class="container mx-auto flex flex-col xl:flex-row gap-24">
            <!-- Image Section -->
            <img
                src="images/about.png"
                alt="about"
                class="object-cover h-[400px] w-full md:w-[566px] rounded-2xl shadow-lg transition-transform duration-300 hover:scale-105"
            />

            <!-- Text Section -->
            <div class="flex flex-col items-start lg:text-left">
                <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-2 text-gray-900 dark:text-light-secondary">
                    About Me
                </h2>
                <!-- Horizontal Rule -->
                <hr class="mb-4 border-gray-300 dark:border-gray-600 opacity-90" />
                <p class="mb-2 text-paragraph dark:text-gray-300">
                    I am a passionate web developer with a knack for creating beautiful and functional web applications.
                    With experience in both front-end and back-end technologies, I strive to build intuitive and user-friendly interfaces.
                </p>


                <p class="mb-4 text-paragraph dark:text-gray-300">
                    My journey as a web developer has been filled with learning and growth. I love solving complex problems
                    and translating ideas into reality. Let’s collaborate and create something extraordinary together!
                </p>
            </div>
        </div>

        <!-- Contact Link -->
        <div class="flex justify-center mt-4">
            <a
                href="#contact"
                class="inline-block bg-light-primary text-white rounded-md px-6 py-2 text-sm font-semibold shadow-md hover:bg-indigo-700 transition-colors duration-300">
                Contact Me
            </a>
        </div>
    </section>
</template>
