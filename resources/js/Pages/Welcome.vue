<script setup>
import { Head } from "@inertiajs/vue3";
import navbar from "@/Components/Frontend/navbar.vue";
import HomeView from "@/Components/Frontend/HomeView.vue";
import AboutView from "@/Components/Frontend/AboutView.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import portfolio from "@/Components/Frontend/portfolio.vue";
import Services from "@/Components/Frontend/Services.vue";
import ContactMe from "@/Components/Frontend/ContactMe.vue";
import Footer from "../Components/Frontend/Footer.vue";

defineProps({
  skills: Object,
  projects: Object,
});
</script>

<template>
  <Head title="Ahmed Hussain" />
  <!-- <FrontendLayout> -->
    <!-- Hero primary -->
    <navbar />
    <HomeView />
    <!-- About secondary -->
    <AboutView />
    <!-- Skills tail-100 -->
    <Skills :skills="skills" />
    <!-- Portfolio primary -->
    <portfolio :skills="skills" :projects="projects" />
    <Services />
    <ContactMe />
    <Footer />
</template>
