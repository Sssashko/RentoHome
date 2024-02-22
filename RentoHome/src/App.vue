<script setup>

import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
import NavbarFix from './components/NavbarFix.vue';
</script>

<template>
  <div>
    <Navbar/>
    <RouterView/>
  </div>

</template>

<style>

* {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
}

body {
  display: block;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

</style>
