<script setup>

</script>
<style>
.image-size {
    width: 50px;
    /* Adjust this to your preferred width */
    height: 50px;
    /* Adjust this to your preferred height */
}
</style>
<template>
    <section id="home" class="lg:h-[85vh] flex items-center bg-light-primary py-32 lg:py-0 overflow-hidden">
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">Hey, I'm James! :></p>
                    <h1
                        class="text-4xl leading-[44px] md:test-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                        I build & Design <br /> Web Interfaces.
                    </h1>
                    <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing illo ad labore dolor elit.
                    </p>
                    <button
                        class="btn btn-md bg-accent hover:bg-light-secondary md:btn-lg transition-all text-white hover:text-light-tail-500">
                        Work with me :>
                    </button>
                </div>
                <div class="hidden lg:flex flex-1 justify-end items-center h-full mt-8 md:mt-0">
                    <img clas="image-size" src="http://127.0.0.1:8000/Image/Hero.avif" alt="Hero Image" />
                </div>
            </div>
        </div>
    </section>
</template>
