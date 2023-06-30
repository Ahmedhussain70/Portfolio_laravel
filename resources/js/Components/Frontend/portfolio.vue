<script setup>
import Projects from "./Projects.vue";
defineProps({
  skills: Object,
  projects: Object,
});
</script>
<template>
  <section
    id="portfolio"
    class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
  >
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
      <div class="flex flex-col items-center text-center">
        <h2 class="text-3xl lg:text-4xl text-white font-medium lg:font-extrabold mt-24 mb-3">My latest work</h2>
        <p class="subtitle mb-5">
          <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga veniam
          labore nisium illum cupiditate reiciendis a numquam -->
          These projects that I worked on before, and these projects are related to skills, so that if you choose a skill, you will select the project related to this skill.
        </p>
      </div>
    </div>
    <Projects :skills="skills" :projects="projects" />
  </section>
</template>