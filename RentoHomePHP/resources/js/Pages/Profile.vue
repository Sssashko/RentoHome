<script>
import Navbar from './components/Navbar.vue';
import Profile from '../Pages/components/Profile.vue';
import Footer from '../Pages/components/Footer.vue';

export default {
    components: {
        Navbar,
        Profile,
        Footer
    },
    props: {
        user: {
            type: Object,
            required: true
        }
    }
}

</script>

<template>
    <div>
        <Navbar/>
        <Profile :user="user" />
        <Footer/>
    </div>
</template>

<style scoped>

</style>
