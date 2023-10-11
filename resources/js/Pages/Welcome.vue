<script setup>
import FrontendLayout from '@/Layouts/Frontend.vue';
import Hero from '@/Components/Frontend/Hero.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Welcome to Portfolio" />
    <FrontendLayout>
        <!-- Hero primary-->
        <Hero />
        <!-- Promote tail-100 -->
        <Promote />
        <!-- About secondary -->
        <About />
        <!-- Skills tail-100 -->
        <!-- Portfolio primary -->
        <!-- Services secondary-->
        <!-- Contact primary -->
    </FrontendLayout>
</template>

