<script setup>
import Navbar from './components/Navbar.vue';
import FilterTable from '../Pages/components/FilterTable.vue';
import Footer from '../Pages/components/Footer.vue';
import HousesList from '../Pages/components/HousesList.vue'
</script>

<template>
    <div>
        <Navbar/>
        <FilterTable/>
        <HousesList/>
        <Footer/>
    </div>
</template>

<style scoped>

</style>
