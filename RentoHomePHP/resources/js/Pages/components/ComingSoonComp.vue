<template>
    <div class="  container mt-5 mb-5 text-center">
        <img src="img/ComingSoon" alt="Coming Soon">
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import { router } from '@inertiajs/vue3';

export default {
    components: {
        Link
    },
    props: {
        posts: Object
    },
}
</script>

<style scoped>

img {
    width: 500px;
}

.container {
    margin: 100px auto 100px !important ;
}

</style>
