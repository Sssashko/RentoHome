<script >
import Navbar from './components/Navbar.vue';
import FilterTable from '../Pages/components/FilterTable.vue';
import Footer from '../Pages/components/Footer.vue';
import ApartList from '../Pages/components/ApartList.vue'
import NavbarFix from './components/NavbarFix.vue';
import axios from 'axios';


export default {
  components: {
    ApartList,
    Navbar,
    FilterTable,
    Footer,
    NavbarFix
  },
  data() {
    return {
      apartaments: []
    };
  },
  created() {
    axios
    .get('http://localhost:8000/api/ApartList')
    .then(response => {
        this.apartaments = response.data;
      })
    .catch(error => {
        console.log(error);
    });
  }
};

</script>

<template>
    <div>
        <Navbar/>
        <FilterTable/>
        <ApartList :apartaments="apartaments"/>
        <Footer/>
    </div>
</template>

<style scoped>

</style>
