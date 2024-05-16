<script setup>
import Navbar from './components/Navbar.vue';
import AdvanListHome from '../Pages/components/AdvanListHome.vue';
import Footer from '../Pages/components/Footer.vue';
import HotelDescrip from '../Pages/components/HotelDescrip.vue';
import HouseOne from '../Pages/components/HouseOne.vue';
import PopularFacilities from '../Pages/components/PopularFacilities.vue';
</script>


<template>
    <div>
        <Navbar/>
        <HouseOne/>
        <AdvanListHome/>
        <HotelDescrip/>
        <PopularFacilities/>
        <MoreFacilitiesUnder/>
        <Footer/>
    </div>
</template>


<style scoped>

html, body {
    overflow-x: hidden;
    padding: 0;
    margin: 0;
}

</style>
