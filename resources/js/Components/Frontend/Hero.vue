<script setup></script>

<style scoped>
@font-face {
    font-family: "Malvie";
    src: url("/fonts/Malvie.otf") format("opentype");
    /* Define other font formats and variations if needed */
}

.font-custom {
    font-family: "Malvie", sans-serif;
}
</style>

<template>
    <section id="home" class="lg:h-[80vh] flex items-center bg-light-primary py-32 lg:py-0 overflow-hidden">
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-10">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[30px]">Hey, I'm James! 👋</p>
                    <h1
                        class="font-custom text-4xl text-accent leading-[45px] md:test-5xl md:leading-tight lg:text-7xl lg:leading-[1.0] md:tracking-[7px]">
                        I BUILD & DESIGN <br />
                        WEB INTERFACES.
                    </h1>
                    <p class="pt-4 md:pt-6 md:pb-10 max-w-[480px] text-lg text-accent text-center lg:text-left">
                        I'm passionate about creating exceptional web experiences that combine form
                        and function. With a keen eye for detail and a creative mindset, I design and
                        develop web interfaces that captivate and engage users.
                    </p>
                    <div class="pt-2 pb-2">
                        <a href="#contact"
                            class="rounded-md bg-accent px-3.5 py-2.5 text-sm font-semibold text-light-black shadow-sm hover:bg-light-tail-100 hover:text-light-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Contact
                            Me</a>
                    </div>
                    <div class="pt-4">
                        <h5
                            class="text-lg text-accent flex justify-center lg:justify-start items-center text-color-black mb-2">
                            Follow me on
                        </h5>
                        <div class="flex items-center mb-6">
                            <a class="w-12 h-12 rounded-full flex items-center justify-center hover:bg-purple-200 hover:border-purple-200 mr-3 sm:mr-4"
                                href="https://www.facebook.com/Spaceneko2">
                                <img src="/Image/FbIcon.png" alt="FbIcon" />
                            </a>
                            <a class="w-12 h-12 rounded-full flex items-center justify-center hover:bg-purple-200 hover:border-purple-200 mr-3 sm:mr-4"
                                href="https://www.linkedin.com/in/james-anthony-vecina-a08a99287/">
                                <img src="/Image/LinkedIcon.png" alt="linkedIcon" />
                            </a>
                            <a class="w-12 h-12 rounded-full flex items-center justify-center hover:bg-purple-200 hover:border-purple-200 mr-3 sm:mr-4"
                                href="https://github.com/xSpaceNekox">
                                <img src="/Image/GitIcon.png" alt="GitIcon" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:flex flex-1 justify-end items-center">
                    <img class="rounded-lg" src="/Image/Hero.jpg" alt="Hero Image" width="550" />
                </div>
            </div>
        </div>
    </section>
</template>
