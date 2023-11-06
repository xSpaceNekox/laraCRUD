<script setup>
import Projects from "./Projects.vue";
defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <section id="portfolio" class="section bg-light-primary min-h[1400px]">
        <div class="container mx-auto" v-motion-slide-visible-top>
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title text-accent">My latest Projects</h2>
                <p class="subtitle text-accent">
                    Here is my latest projects, which I believe provides a great insight into my skills and capabilities.
                </p>
            </div>
        </div>
        <Projects class="text-accent" :skills="skills" :projects="projects" />
    </section>
</template>
