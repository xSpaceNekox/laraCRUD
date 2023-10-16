<script setup>
import Projects from './Projects.vue';
defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <section id="portfolio" class="section bg-light-primary min-h[1400px]">
        <div class="container mx-auto" v-motion-slide-visible-top>
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, odit blanditiis. Illum magnam eaque alias
                    omnis saepe placeat nam. Sapiente nam dolorem ipsum numquam repellendus enim obcaecati. Voluptas,
                    distinctio eligendi.
                </p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects" />
    </section>
</template>
