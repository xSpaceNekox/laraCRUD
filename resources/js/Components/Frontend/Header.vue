<script setup>
import { ref, onMounted } from "vue";
import { Link } from "@inertiajs/vue3";
const showMobileMenu = ref("false");
const scrollBg = ref(false);

const navigations = [
    { name: "Home", href: "#home" },
    { name: "About", href: "#about" },
    { name: "Portfolio", href: "#portfolio" },
    { name: "Services", href: "#services" },
    { name: "Contact", href: "#contact" },
];

const setScrollBg = (value) => {
    scrollBg.value = value;
};
onMounted(() => {
    window.addEventListener("scroll", () => {
        return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
    });
});
</script>

<template>
    <nav class="w-full fixed z-20 border-gray-200 px-2 sm:px-4 py-2.5 rounded"
        :class="{ 'bg-light-primary': scrollBg, 'bg-white': !scrollBg }">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <Link :href="route('login')">
            <a class="flex items-center">
                <img src="/Image/Logo.png" class="h-12 max-w-x mr-4" alt="LOGO" />
                <span class="self-center text-xl font-semibold whitespace-nowrap">James Portfolio</span>
            </a>
            </Link>
            <button @click="showMobileMenu = !showMobileMenu" data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="w-full md:flex md:w-auto" :class="{ hidden: showMobileMenu }" id="navbar-default">
                <ul
                    class="flex flex-col p-3 mt-4 rounded-lg border border-purple-200 md:flex-row md:space-x-8 md:mt-0 md:font-medium md:border-0 md:text-center">
                    <li v-for="(navigation, index) in navigations" :key="index">
                        <a :href="navigation.href" class="block py-2 pl-3 pr-4 hover:text-purple-600 hover:font-extrabold"
                            aria-current="page">{{ navigation.name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
