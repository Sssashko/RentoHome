<template>
    <div class="container">
    <hr class="bottom-line">
      <h2 class="mb-3">Facilities Of This Hotel</h2>
      <p class="mb-3">Review About Facilities ∙ 9.2</p>

      <div class="popular-facilities">
        <div id="header-facilities">Most Popular Facilities</div>
        <ul class="li-list">
          <li class="most-popular-fac"><i class="a fa-solid fa-square-parking"></i> Free Parking</li>
          <li class="most-popular-fac"><i class="a fa-solid fa-wifi"></i> Free Wifi</li>
          <li class="most-popular-fac"><i class="a fa-solid fa-dumbbell"></i> Fitness Center</li>
          <li class="most-popular-fac"><i class="a fa-solid fa-fan"></i> Air Conditioning</li>
          <li class="most-popular-fac"><i class="a fa-solid fa-umbrella-beach"></i> Private Beach Area</li>
          <li class="most-popular-fac"><i class="a fa-solid fa-ban-smoking"></i> Non-Smoking Rooms</li>
          <li class="most-popular-fac"><i class="a fa-solid fa-person-swimming"></i> Outdoor Swimming Pool</li>
        </ul>
      </div>

      <div class="huge-list-facilities">
        <div class="facilitie-field fac-parking">
          <div class="facilitie-header">
            <i class="b fa-solid fa-square-parking"></i> <h2 id="header-parking">Parking</h2>
          </div>
          <div class="parking-text">
            <p>Free public parking is possible at a location nearby (reservation is not needed).</p>
          </div>
        </div>

        <div class="facilitie-field grid-internet">
          <div class="facilitie-header">
            <i class="b fa-solid fa-wifi"></i> <h2>Internet</h2>
          </div>
          <div class="internet-text">
            <p>WiFi is available in the rooms and is free of charge.</p>
          </div>
        </div>

        <div class="facilitie-field living-area">
          <div class="facilitie-header">
            <i class="b fa-solid fa-couch"></i> <h2>Living Area</h2>
          </div>
          <div class="text">
            <ul class="facilitie-list">
              <li><i class="c fa-solid fa-check"></i> Dining Area</li>
              <li><i class="c fa-solid fa-check"></i> Sofa</li>
              <li><i class="c fa-solid fa-check"></i> Desk</li>
            </ul>
          </div>
        </div>

        <div class="facilitie-field grid-row-span-2">
          <div class="facilitie-header">
            <i class="b fa-solid fa-bed"></i> <h2>Bedroom</h2>
          </div>
          <div class="text">
            <ul class="facilitie-list">
              <li><i class="c fa-solid fa-check"></i> Dining Table</li>
              <li><i class="c fa-solid fa-check"></i> Cleaning Product</li>
            </ul>
          </div>
        </div>

        <div class="facilitie-field bathroom">
          <div class="facilitie-header">
            <i class="b fa-solid fa-bath"></i> <h2>Bathroom</h2>
          </div>
          <div class="text">
            <ul class="facilitie-list">
              <li><i class="c fa-solid fa-check"></i> Toilet Paper</li>
              <li><i class="c fa-solid fa-check"></i> Towels</li>
              <li><i class="c fa-solid fa-check"></i> Bath Or Shower</li>
              <li><i class="c fa-solid fa-check"></i> Private Bathroom</li>
              <li><i class="c fa-solid fa-check"></i> Free Toiletries</li>
              <li><i class="c fa-solid fa-check"></i> Hairdryer</li>
            </ul>
          </div>
        </div>

        <div class="facilitie-field grid-kitchen">
          <div class="facilitie-header">
            <i class="b fa-solid fa-kitchen-set"></i> <h2>Kitchen</h2>
          </div>
          <div class="kitchen-text">
            <ul class="facilitie-list">
              <li><i class="c fa-solid fa-check"></i> Dining Table</li>
              <li><i class="c fa-solid fa-check"></i> Cleaning Product</li>
              <li><i class="c fa-solid fa-check"></i> Toaster</li>
              <li><i class="c fa-solid fa-check"></i> Stovetop</li>
              <li><i class="c fa-solid fa-check"></i> Oven</li>
              <li><i class="c fa-solid fa-check"></i> Kitchenware</li>
              <li><i class="c fa-solid fa-check"></i> Electric Kettle</li>
              <li><i class="c fa-solid fa-check"></i> Kitchen</li>
              <li><i class="c fa-solid fa-check"></i> Washing Machine</li>
              <li><i class="c fa-solid fa-check"></i> Microwave</li>
              <li><i class="c fa-solid fa-check"></i> Refrigerator</li>
              <li><i class="c fa-solid fa-check"></i> Kitchenette</li>
            </ul>
          </div>
        </div>

        <div class="facilitie-field grid-media">
          <div class="facilitie-header">
            <i class="b fa-solid fa-tv"></i> <h2>Technology</h2>
          </div>
          <div class="text">
            <ul class="facilitie-list">
              <li><i class="c fa-solid fa-check"></i> Flat Screen TV</li>
              <li><i class="c fa-solid fa-check"></i> Cable Channels</li>
              <li><i class="c fa-solid fa-check"></i> TV</li>
            </ul>
          </div>
        </div>

        <div class="facilitie-field grid-transport">
          <div class="facilitie-header">
            <i class="b fa-solid fa-bus"></i> <h2>Transport</h2>
          </div>
          <div class="text">
            <ul class="facilitie-list">
              <li><i class="c fa-solid fa-check"></i> Shuttle Services</li>
              <li><i class="c fa-solid fa-check"></i> Airport Shuttle</li>
            </ul>
          </div>
        </div>

        <div class="facilitie-field grid-language">
          <div class="facilitie-header">
            <i class="b fa-solid fa-language"></i> <h2>Languages</h2>
          </div>
          <div class="text">
            <ul class="facilitie-list">
              <li><i class="c fa-solid fa-check"></i> English</li>
              <li><i class="c fa-solid fa-check"></i> Russian</li>
              <li><i class="c fa-solid fa-check"></i> Latvian</li>
            </ul>
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
  h2, p {
    margin-bottom: 0px;
  }

  .container {
    width: 100%;
    max-width: 1300px;
    margin: 0 auto 100px auto;
  }

  #header-facilities {
    font-weight: 600;
    font-size: 18px;
    margin-bottom: 10px;
  }

  .popular-facilities {
    margin-bottom: 30px;
  }

  .li-list {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding-left: 0;
  }

  .most-popular-fac {
    margin: 0 10px 10px 0;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
    background-color: #f0f0f0;
  }

  .a {
    color: rgb(242, 177, 11);
    padding-right: 10px;
  }

  .b {
    padding-right: 10px;
    font-size: 20px;
  }

  .huge-list-facilities {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-auto-rows: minmax(100px, auto);
    grid-auto-flow: dense;
    grid-gap: 10px;
  }

  .facilitie-field {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    overflow: hidden;
  }

  .facilitie-header {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }

  .c {
    color: green;
    padding-right: 10px;
  }

  .facilitie-list {
    list-style: none;
    padding-left: 0;
  }

  .parking-text, .internet-text, .kitchen-text {
    text-align: justify;
  }

  .kitchen, .media, .transport, .language {
    margin-bottom: 10px;
  }

  .facilitie-field.grid-kitchen {
  grid-column: span 1 / 2;
}

.facilitie-field.grid-row-span-2,
.facilitie-field.grid-language {
    width: 299px;
}

.bottom-line {
    border: 1px solid black;
    border-radius: 1px;
    margin: 20px 100px 40px 0;
    width: 100%;
    max-width: 830px;
}
  </style>
