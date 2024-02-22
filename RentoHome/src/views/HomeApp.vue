<script setup>
import AdvanListHome from '../components/AdvanListHome.vue';
import Footer from '../components/Footer.vue';
import HotelDescrip from '../components/HotelDescrip.vue';
import HouseOne from '../components/HouseOne.vue';
import PopularFacilities from '../components/PopularFacilities.vue';
</script>


<template>
    <div>
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