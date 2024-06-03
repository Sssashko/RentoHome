<template>
    <div class="main-container">
        <div class="container" v-for="term in terms" :key="term.id">
            <h1>{{ term.title }}</h1>
            <p>{{ term.description }}</p>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
  components: {
    Link,
  },
  props: {
    Object,
    terms: Array
  },
}
</script>

<style scoped>


.container {
  width: 80%;
  max-width: 800px;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 0px;
}

.main-container {
    margin-top: 40px;
}

h1 {
  text-align: center;
  color: #333;
}

p {
  line-height: 1.6;
  margin-bottom: 20px;
}

</style>
