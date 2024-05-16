<template>
  <div class="container">
    <div class="left">
      <div class="search-box">
        <div class="search-box-out">
          <div class="search-box-in">
            <div id="search-header"> Search</div>
            <div id="search-field">
              <div id="before-search-field">Destination/property name:</div>
              <div class="search-field-field">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input  type="text" placeholder="Type...">
              </div>
            </div>
            <div class="people-amount">
              <div id="before-people-amount-field">People and room amount:</div>
              <button id="people-amount-btn">2 adults · 0 children · 1 room  <i class="fa-solid fa-arrow-down"></i></button>
            </div>
            <div id="punkt1">Random thing</div>
            <div id="punkt2">Random thing</div>
            <div id="search-button"><button>Search</button></div>
          </div>
        </div>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20042.17598962926!2d55.28346211558793!3d25.22329633952631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2z0JTRg9Cx0LDQuSAtINCe0LHRitC10LTQuNC90LXQvdC90YvQtSDQkNGA0LDQsdGB0LrQuNC1INCt0LzQuNGA0LDRgtGL!5e0!3m2!1sru!2slv!4v1707396604039!5m2!1sru!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="right">
      <div class="upper-description">
        <span class="field-stars-and-eco-upp">
          <span id="stars-upper">⭐⭐⭐⭐⭐
            <i class="fa-regular fa-flag" style="color: #000000;"></i>
          </span>
          <span id="airport-shuttle">Airport Shuttle </span>
          <span id="eco-friendly"><i class="fa-solid fa-leaf"></i>
            Eco Friendly</span>
        </span>
        <div id="hotel-name">Caravelle Resort</div>
        <p class="geo"><i class="fa-solid fa-location-dot" style="color: #1d51aa;"></i> Ogres iela 2 - <span id="geo-excel">Excellent Geolocation</span></p>
      </div>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../../../public/img/HomeDubai111.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../../../public/img/HomeDubai222.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../../../public/img/HomeDubai333.webp" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
    <div class="middle-description">
    </div>
  </div>
</template>

<script setup >
import { ref } from "vue";

  const count = ref(0)



</script>

<style scoped>



.carousel-item {
  width: 100%;
}

.map {
  display: flex;
  justify-content: flex-end;
  margin: 20px -25px;
  padding-right:0;
  width: 100%;

}

iframe {
  display: flex;
  width: 65%;
  height: 100%;
  border-radius: 4px;
}

.child {
  min-width: 150px;
  height: 100px;
  margin: 1px 10px;
  cursor: pointer;
  border: 1px solid black;
  overflow: hidden;
}
.child::-webkit-scrollbar {
  -webkit-appearance: none;
}
.child-img {
  width: 100%;
  height: 100%;
}
.icon {
  font-size: 20px;
  outline: none;
  border: none;
  cursor: pointer;
}
.icon:hover {
  color: blue;
}
.container {
  display: flex;
  width: 100%;
  justify-content: center;
  margin: 125px 0px 25px 30px;
}

.right  {
  width: 50%;
}

.left {
  width: 33%;
}
.upper-description {
  margin-bottom: 20px;
}

#stars-upper {
  margin-right: 30px;
  background-color: rgb(231, 231, 34);
  border: 1px solid rgb(126, 126, 0);
  border-radius: 2px;
  padding: 3px;
  font-size: 12px;
}

#airport-shuttle {
  margin-right: 30px;
  background-color: rgb(223, 223, 223);
  border: 1px solid rgb(135, 135, 135);
  border-radius: 5px;
  padding: 5px;
  font-size: 12px;
}

#eco-friendly {
  background-color: rgb(100, 240, 100);
  padding: 3px;
  border: 1px solid rgb(16, 112, 16);
  border-radius: 5px;
  font-size: 12px;
}

#hotel-name {
margin-top: 20px;
margin-bottom: 15px;
font-weight: 800;
font-size: 24px;
}

.geo {
  cursor: pointer;
  width: 280px;
}

#geo-excel {
  color: rgb(33, 110, 225);
  transition: 0.2s;
}

#geo-excel:hover {
  text-decoration: underline;
}
.search-box {
  display: flex;
  justify-content: flex-end;
  margin-right: 25px;
}

.search-box-out {
  display: flex;
  justify-content: center;
  background-color: rgb(242, 177, 11);
  width: 75%;
  height: 65%;
  border: 1px solid rgb(239, 175, 13);
  border-radius: 3px;
}

.search-box-in {
  padding: 10px;
}

#search-field {
  margin: 0 0 10px 0px ;
}

#before-search-field {
  font-size: 13px;
}

.search-field-field {
  background-color: white;
  font-size: 16px;
  height: 30px;
  display: flex;
  align-items: center;
  margin-top: 2px;
  padding: 5px 10px;
  border-radius: 2px;
}

input {
  background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	outline: inherit;
  margin-left: 10px;
}

button {
	background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
}

#search-header {
  margin-bottom: 10px;
  font-weight: 600;
  font-size: 24px;
}

#before-people-amount-field {
  font-size: 13px;
}

.people-amount button {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 40px;
  background-color: white;
  color: rgb(66, 66, 66);
  font-size: 15px;
  width: 100%;
  margin-bottom: 20px;
  padding: 5px 10px ;
  border-radius: 3px;
}

#punkt1 {
  font-size: 13px;
  margin-bottom: 8px;
}

#punkt2 {
  font-size: 13px;
}

#search-button {
  display: flex;
  justify-content: center;
  height: 40px;
  background-color: rgb(0, 119, 255);
  margin: 20px 0;
  color: white;
  cursor: pointer;
  transition: 0.5s;
}

#search-button:hover {
  background-color: rgb(0, 52, 112);
}

</style>
