<script setup >
import { ref } from "vue";

  const count = ref(0)

</script>

<template>
    <div class="container">
        <div class="row">
            <div class="service">
                <i class="fa-solid fa-money-bill"></i>
                <h2>Pricing</h2>
            </div>
            <div class="service">
                <i class="fa-solid fa-location-crosshairs"></i>
                <h2>Location</h2>
            </div>
            <div class="service">
                <i class="fa-solid fa-building"></i>
                <h2>Kitchen</h2>
            </div>
            <div class="service">
                <i class="fa-solid fa-eye"></i>
                <h2>Bath</h2>
            </div>
            <div class="service">
                <i class="fa-solid fa-envelope"></i>
                <h2>125 m2</h2>
            </div>
            <div class="service">
                <i class="fa-solid fa-people-group"></i>
                <h2>Shower</h2>
            </div>
            <div class="service">
                <i class="fa-solid fa-shield-halved"></i>
                <h2>Security</h2>
            </div>
            <div class="service">
                <i class="fa-solid fa-leaf"></i>
                <h2>Eco-friendly</h2>
            </div>
            <div class="service washing-machine">
                <i class="fa-solid fa-leaf"></i>
                <h2>Washing Machine</h2>
            </div>
            <div class="service">
                <i class="fa-solid fa-leaf"></i>
                <h2>Free Parking</h2>
            </div>
        </div>
        <hr id="linija" />
    </div>
</template>

<style scoped>
.container {
    box-sizing: border-box;
    width: 80%;
    height: 200px;
    background-color: #fff;
    margin: 0 auto;
}
.row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 0px));
    grid-gap: 12px;
    justify-content: center;
}

.service {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 10px 10px 10px 0px;
    width: 100x;
    border-radius: 3px;
    font-size: 10px;
    cursor: pointer;
    border: 1px solid rgb(161, 161, 161);
    background: transparent;
    transition: transform 0.5s, background 0.5s;
}

.washing-machine {
    padding: 0;
}

.service i {
    font-size: 20px;
    margin-right: 10px;
}

.service h2 {
    font-weight: 400;
    font-size: 20px;
    margin-bottom: 0px;
}

#linija {
    width: 93%;
    margin: 50px auto 0 ;
    border: solid black 0.5px;
    border-radius: 5px;
}

</style>
