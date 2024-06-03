<template>
    <div class="field-text-image">
        <div class="container-text">
            <h3 class="landing-text one">Unlock</h3>
            <p class="landing-text two">Your Perfect Home</p>
            <p class="landing-text three"> With Us!</p>
        </div>
        <div class="image-field">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../../../public/img/MainHome.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../../public/img/MainHome222.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../../public/img/MainHome333.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
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
    transform: scale(1.03);
}

#home-main:hover {
    opacity: 100%;
}

.field-text-image {
    margin: 200px 0 0 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 85%;
    margin: 3% auto 5% auto;
    animation: fadeInRight 2s ease;
    transition: 0.3s;
}

#carouselExampleSlidesOnly {
    width: 700px;
}

.container-text {
    text-align: center;
    font-size: 48px;
    animation: fadeInUp 2s ease;
}

.landing-text {
    font-size: 48px;
    margin-bottom: 0;
}

.one {
    font-weight: bold;
}

.two {
    font-style: italic
}

.three {
    font-weight: bold;
    font-style: italic;
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

@media screen and (max-width: 768px) {
    .field-text-image {
        flex-direction: column;
        align-items: center;
        margin: 50px 0;
        width: 100%;
    }

    .container-text {
        font-size: 36px;
    }

    #carouselExampleSlidesOnly {
        width: 100%;
    }

    .carousel-item img {
        border-radius: 0;
    }
}
</style>
