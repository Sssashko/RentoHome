<script setup >
import { ref } from "vue";

  const count = ref(0)

</script>

<template>  
    <div class="container">
        <h2>Facilities Of This Hotel</h2>
        <p>Review About Facilities ∙ 9.2</p>
        <div class="popular-faciliteis">
            <div id="header-facilities">Most Popular Facilities</div>
            <li class="li-list">
                <ul class="most-popular-fac"><i class="a fa-solid fa-square-parking" ></i> Free Parking</ul>
                <ul class="most-popular-fac"><i class="a fa-solid fa-wifi" ></i>Free Wifi</ul>
                <ul class="most-popular-fac"><i class="a fa-solid fa-dumbbell"></i> Fitness Center</ul>
                <ul class="most-popular-fac"><i class="a fa-solid fa-fan"></i>Air Conditioning</ul>
                <ul class="most-popular-fac"><i class="a fa-solid fa-umbrella-beach"></i>Private Beach Area</ul>
                <ul class="most-popular-fac"><i class="a fa-solid fa-ban-smoking"></i>Non-Smoking Rooms</ul>
                <ul class="most-popular-fac"><i class="a fa-solid fa-person-swimming"></i>Outdoor Swimming Pool</ul>
            </li>
        </div>
        <div class='huge-list-facilities'>
            <div class="facilitie-field fac-parking">
                <div class="facilitie-header">
                    <i class="b fa-solid fa-square-parking"></i> <h2 id="header-parking">Parking</h2>
                </div>
                <div class="parking-text">
                    <p>Free public parking is possible at a location nearby 
                        (reservation is not needed).</p>
                </div>
            </div>
            <div class="facilitie-field grid-internet" >
                <div class="facilitie-header">
                    <i class="b fa-solid fa-wifi"></i> <h2>Internet</h2>
                </div>
                <div class="internet-text">
                    <p>WiFi is available in the rooms and is free of charge.</p>
                </div>
            </div>
            <div class="facilitie-field grid-row-span-3 grid-kitchen">
                <div class="facilitie-header">
                    <i class="b fa-solid fa-kitchen-set"></i> <h2>Kitchen</h2>
                </div>
                <div class="kitchen-text">
                    <ul class="facilitie-list">
                        <li><i class="c fa-solid fa-check"></i>Dinign Table</li>
                        <li><i class="c fa-solid fa-check"></i>Cleaning Product</li>
                        <li><i class="c fa-solid fa-check"></i>Toaster</li>
                        <li><i class="c fa-solid fa-check"></i>Stovetop</li>
                        <li><i class="c fa-solid fa-check"></i>Oven</li>
                        <li><i class="c fa-solid fa-check"></i>Kitchenware</li>
                        <li><i class="c fa-solid fa-check"></i>Electric Kettle</li>
                        <li><i class="c fa-solid fa-check"></i>Kitchen</li>
                        <li><i class="c fa-solid fa-check"></i>Washing Machine</li>
                        <li><i class="c fa-solid fa-check"></i>Microwave</li>
                        <li><i class="c fa-solid fa-check"></i>Refrigerator</li>
                        <li><i class="c fa-solid fa-check"></i>Kitchennete</li>
                    </ul>
                </div>
            </div>
            <div class="facilitie-field ...........grid-row-span-2" >
                <div class="facilitie-header">
                    <i class="b fa-solid fa-bed"></i> <h2>Bedroom</h2>
                </div>
                <div class="text">
                    <ul class="facilitie-list">
                        <li><i class="c fa-solid fa-check"></i>Dinign Table</li>
                        <li><i class="c fa-solid fa-check"></i>Cleaning Product</li>
                    </ul>
                </div>
            </div>
            <div class="facilitie-field">
                <div class="facilitie-header">
                    <i class="b fa-solid fa-bath"></i> <h2>Bathroom</h2>
                </div>
                <div class="text">
                    <ul class="facilitie-list">
                        <li><i class="c fa-solid fa-check"></i>Toilet Paper</li>
                        <li><i class="c fa-solid fa-check"></i>Towels</li>
                        <li><i class="c fa-solid fa-check"></i>Bath Or Shower</li>
                        <li><i class="c fa-solid fa-check"></i>Private Bathroom</li>
                        <li><i class="c fa-solid fa-check"></i>Free Toiletries</li>
                        <li><i class="c fa-solid fa-check"></i>Hairdryer</li>
                    </ul>
                </div>
            </div>
            <div class="facilitie-field">
                <div class="facilitie-header">
                    <i class="b fa-solid fa-couch"></i> <h2>Living Area</h2>
                </div>
                <div class="text">
                    <ul class="facilitie-list">
                        <li><i class="c fa-solid fa-check"></i>Dining Area</li>
                        <li><i class="c fa-solid fa-check"></i>Sofa</li>
                        <li><i class="c fa-solid fa-check"></i>Desk</li>
                    </ul>
                </div>
            </div>
            <div class="facilitie-field grid-media">
                <div class="facilitie-header">
                    <i class="b fa-solid fa-tv"></i> <h2>Media & Technology</h2>
                </div>
                <div class="text">
                    <ul class="facilitie-list">
                        <li><i class="c fa-solid fa-check"></i>Flat Screen TV</li>
                        <li><i class="c fa-solid fa-check"></i>Cable Channels</li>
                        <li><i class="c fa-solid fa-check"></i>TV</li>
                    </ul>
                </div>
            </div>
            <div class="facilitie-field grid-transport">
                <div class="facilitie-header">
                    <i class="b fa-solid fa-bus"></i> <h2>Transport</h2>
                </div>
                <div class="text">
                    <ul class="facilitie-list">
                        <li><i class="c fa-solid fa-check"></i>Shuttle Services</li>
                        <li><i class="c fa-solid fa-check"></i>Airport Shuttle</li>
                    </ul>
                </div>
            </div>
            <div class="facilitie-field grid-language">
                <div class="facilitie-header">
                    <i class="b fa-solid fa-language"></i> <h2>Languages Spoken</h2>
                </div>
                <div class="text">
                    <ul class="facilitie-list">
                        <li><i class="c fa-solid fa-check"></i>English</li>
                        <li><i class="c fa-solid fa-check"></i>Russian</li>
                        <li><i class="c fa-solid fa-check"></i>Latvian</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
h2 {
    font-size: 18px;
}

p {
    display: flex;
    margin: 10px 0px 25px 0;
    font-size: 16px;
    width: 100%;
    color: rgb(111, 111, 111);
}

#header-facilities {
    font-weight: 600;
    font-size: 18px;
}

.container {
    width: 75%;
    height: 925px;
    margin: 0 auto 100px auto;
}

.li-list {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-top: 10px;
    width: 65%;
    height: 100px;
}

.most-popular-fac {
    margin-left: 5px;
    color: black;
    padding: 16px 16px 16px 0;
    border-radius: 8px;
    margin: 3px;
    cursor: pointer;
}

.a {
    color: rgb(242, 177, 11);
    padding-right: 10px;
}

.b {
    padding-right: 10px;
    font-size: 20px;
}
.c {
    padding-right: 10px;
}

.grid-row-span-2 {
    grid-row: span 2;
}

.grid-row-span-3 {
    grid-row: span 3;
}
.huge-list-facilities {
    margin-top: 50px;
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(3, 350px);
    grid-template-rows: 100px 125px 175px 100px;
}

.grid-internet {
    margin-top: -20px;
    grid-row-start: 2;
}
.grid-kitchen {
    margin-top: -60px;
    grid-row-start: 3;
}

.grid-media {
    grid-column-start: 2;
    grid-row-start: 3;
    margin-top: 10px;
}

.grid-transport {
    margin-top: 140px;
}

.grid-language {
    margin-top: 160px;
    grid-column-start: 2;
    grid-row-start: 3;
    grid-row-end: 4;
}

.facilitie-header {
    display: flex;
    align-items: center;
}

.parking-text {
    margin-top: 10px;
}

.facilitie-list {
    margin: 15px 0 25px 0;
    padding: 0;
    list-style: none;
}

.facilitie-list li {
    margin-top: 10px;
}

</style>