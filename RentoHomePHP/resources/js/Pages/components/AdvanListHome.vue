<template>
  <div class="container">
    <div class="row">
      <div class="service">
        <i class="fa-solid fa-money-bill"></i>
        <h5>Pricing</h5>
      </div>
      <div class="service">
        <i class="fa-solid fa-location-crosshairs"></i>
        <h5>Location</h5>
      </div>
      <div class="service">
        <i class="fa-solid fa-building"></i>
        <h5>Kitchen</h5>
      </div>
      <div class="service">
        <i class="fa-solid fa-eye"></i>
        <h5>View</h5>
      </div>
      <div class="service">
        <i class="fa-solid fa-people-group"></i>
        <h5>Shower</h5>
      </div>
      <div class="service">
        <i class="fa-solid fa-shield-halved"></i>
        <h5>Security</h5>
      </div>
      <div class="service">
        <i class="fa-solid fa-leaf"></i>
        <h5>Eco-friendly</h5>
      </div>
      <div class="service">
        <i class="fa-solid fa-leaf"></i>
        <h5>Free Parking</h5>
      </div>
    </div>
    <hr id="linija" />
  </div>
</template>

<script setup>
import { ref } from "vue";

const count = ref(0);
</script>

<style scoped>
.container {
  box-sizing: border-box;
  width: 53.3%;
  max-width: 1300px;
  margin-top: 20px;
  margin-left: 9%;
}

.row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 12px;
  justify-content: flex-start;
}

.service {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 5px;
  border-radius: 5px;
  font-size: 12px;
  cursor: pointer;
  border: 1px solid #ddd;
  background-color: #fff;
  transition: transform 0.3s, background-color 0.3s;
}

.service:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.service i {
  font-size: 20px;
  margin-bottom: 5px;
}

.service h5 {
  font-weight: 500;
  margin: 0;
}

#linija {
  margin-top: 50px;
  border: 1px solid black;
  border-radius: 1px;
  width: 100%;
  max-width: 1300px;
}
</style>
