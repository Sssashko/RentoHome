<script>
import Navbar from './components/Navbar.vue';
import EditPage from './components/EditPage.vue';
import Footer from '../Pages/components/Footer.vue';

export default {
    components: {
        Navbar,
        EditPage,
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
        <EditPage :user="user" />
        <Footer/>
    </div>
</template>

<style>

</style>
