<script setup>
import Header from '@/Components/Frontend/Header.vue';


</script>

<template>
    <div class="bg-slate-200 ">
        <!-- Header -->
        <Header />
        <main class="min-h-screen">
            <slot />
        </main>
        <!-- Footer -->
    </div>
</template>
