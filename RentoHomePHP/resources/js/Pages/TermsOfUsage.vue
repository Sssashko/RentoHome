<script>
import Navbar from './components/Navbar.vue';
import Footer from '../Pages/components/Footer.vue';
import TermsOfUsagePageText from '../Pages/components/TermsOfUsagePageText.vue';
import axios from 'axios';

export default {
  components: {
    Navbar,
    TermsOfUsagePageText,
    Footer,
  },
  data() {
    return {
      terms: []
    };
  },
  created() {
    axios
    .get('http://localhost:8000/api/TermsOfUsage')
    .then(response => {
        this.terms = response.data;
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
        <TermsOfUsagePageText :terms="terms"/>
        <Footer/>
    </div>
</template>

<style>

</style>
