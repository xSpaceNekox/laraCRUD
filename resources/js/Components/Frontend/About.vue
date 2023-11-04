<template>
    <section id="about" class="section bg-light-secondary">
        <div class="container mx-auto" v-motion-slide-visible-top>
            <div class="flex flex-col xl:flex-row gap-24">
                <img class="object-cover h-full w-[450px] md:mx-auto lg:mx-0 rounded-xl" src="/Image/About.jpg"
                    alt="about" />
                <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
                    <div class="flex flex-col">
                        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                            About Me
                        </h2>
                        <P class="mb-4 text-light-tail-500 lg:font-semibold">Freelance Fullstack Web Developer</P>
                        <hr class="mb-8 opacity-90" />
                        <p class="mb-8 text-black">
                            Hello, I'm James Anthony C. Vecina, a recent graduate from the University of
                            Mindanao with a Bachelor of Science in Information Technology (BSIT). With a
                            strong passion for web development, I'm currently dedicated to honing my
                            skills in Laravel and VueJS. I'm a hardworking and creative individual who
                            thrives in collaborative environments, consistently bringing innovative
                            solutions to the table. My enthusiasm for learning fuels my drive to
                            continuously improve and explore new horizons in web development.
                            <br />
                            <br />
                            I'm excited about the endless possibilities in this field and am eager to
                            contribute my skills and dedication to meaningful projects. I firmly believe
                            that the power of collaboration can lead to outstanding results, and I'm
                            always open to new opportunities that challenge and inspire. So, let's
                            connect, create, and innovate together to build the web solutions of
                            tomorrow.
                        </p>
                    </div>
                    <a href="#contact"
                        class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-black shadow-sm hover:text-light-tail-500 hover:bg-light-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Get
                        started</a>
                </div>
            </div>
        </div>
    </section>
</template>
