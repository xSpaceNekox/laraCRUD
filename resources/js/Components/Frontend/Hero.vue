<script setup></script>
<template>
    <section id="home" class="lg:h-[80vh] flex items-center bg-light-primary py-32 lg:py-0 overflow-hidden">
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-10">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">Hey, I'm James! 👋</p>
                    <h1
                        class="text-4xl leading-[44px] md:test-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                        I build & Design <br />
                        Web Interfaces.
                    </h1>
                    <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing illo ad labore dolor elit.
                    </p>
                    <button class="btn btn-md bg-accent md:btn-lg transition-all text-white">
                        Work with me
                    </button>
                    <div class="pt-12">
                        <h5 class="text-lg flex justify-center lg:justify-start items-center text-color-black mb-2">
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
