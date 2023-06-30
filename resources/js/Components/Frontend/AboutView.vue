<script setup></script>
<template>
<section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
    <div
      class="container mx-auto"
      v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :visible="{
        opacity: 1,
        y: 0,
      }"
    >
      <div class="flex flex-col xl:flex-row gap-24">
        <img
          class="object-cover h-full w-[450px] md:mx-auto lg:mx-0 rounded-2xl"
          src="./imgs/istockphoto-1433931186-612x612.jpg"
          alt="about"
        />
        <div
          class="
            flex flex-col
            items-center
            text-center
            lg:items-start lg:text-left
          "
        >
          <div class="flex flex-col">
            <h2 class="text-3xl lg:text-4xl text-white font-medium lg:font-extrabold mb-3">
              About Me
            </h2>
            <P class="mb-4 text-accent">Freelance Full Stack Web developer</P>
            <hr class="mb-8 opacity-90 dark:opacity-5" />
            <p class="mb-8">
              I'm bulid and desgin and devolop Web sites , I'have experiance 1 year for devolop web sites , 6 month in amit learning to traning how to devolop web sites
               <br />
              <br />
            </p>
          </div>
          <a href="#contact" class="btn btn-md btn-s bg-accent text-light-tail-100">
            Contact me
          </a>
        </div>
      </div>
    </div>
  </section>
</template>
