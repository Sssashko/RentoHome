<template>
    <div class="field-text-image">
        <div class="container-text">
            <h3 class="landing-text one">Unlock</h3>
            <p class="landing-text two">Your Perfect Home</p>
            <p class="landing-text three"> With Us!</p>
         </div>
    <div class="image-field">
        <img id="home-main" src="../img/MainHome.jpg" alt="">
    </div>
    </div>
</template>

<script setup >
import { ref } from "vue";

  const count = ref(0)
</script>

<style scoped>
#home-main {
    position: relative;
    display: flex;
    border-radius: 50px;
    width: 700px;
    height: 480px;
    opacity: 85%;
    transition: 0.3s;
}

#home-main:hover {
    opacity: 100%;
}

.field-text-image {
    margin: 200px 100px 0 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 85%;
    margin: 12% auto;
    animation: fadeInRight 2s ease;
    transition: 0.3s;
}

.field-text-image:hover {
    transform: scale(1.05);
}

.container-text {
    text-align: center;
    font-size: 48px;
    animation: fadeInUp 2s ease;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
@keyframes fadeInRight {
    0% {
        opacity: 0;
        transform: translateX(50px);
    }
    100% {
        opacity: 1;
        transform: translateX(0px);
    }
}
</style>