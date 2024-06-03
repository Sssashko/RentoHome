<script>
import Navbar from './components/Navbar.vue';
import FilterTable from '../Pages/components/FilterTable.vue';
import Footer from '../Pages/components/Footer.vue';
import HousesList from '../Pages/components/HousesList.vue';
import NavbarFix from '../Pages/components/NavbarFix.vue';
import axios from 'axios';

export default {
  components: {
    HousesList,
    Navbar,
    FilterTable,
    Footer,
    NavbarFix
  },
  data() {
    return {
      houses: []
    };
  },
  created() {
    axios
    .get('http://localhost:8000/api/HousesList')
    .then(response => {
        this.houses = response.data;
      })
    .catch(error => {
        console.log(error);
    });
  }
};
</script>

<template>
    <div>
        <NavbarFix/>
        <Navbar/>
        <FilterTable/>
        <HousesList :houses="houses"/>
        <Footer/>
    </div>
</template>

<style scoped>

</style>
