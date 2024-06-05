<template>
    <div class="container">
        <hr class="bottom-line">
      <div class="first-text">
        <p>
          Set in Myrtle Beach, 8.3 km from Broadway at the Beach and 8.6 km from Myrtle Beach Boardwalk, Serene Myrtle Beach Condo with Community Pool! offers air conditioning.
          It is located 9.4 km from Myrtle Beach Convention Center and offers a lift. Free WiFi is available throughout the property and Tanger Outlets Myrtle Beach Hwy 501 is 7.7 km away.
        </p>

        <p>
          Located on the ground floor, this spacious apartment comes with 2 bedrooms, a well-equipped kitchen with a dishwasher and an oven, a living room, and a flat-screen TV.
          Towels and bed linen are featured in the apartment. For added privacy, the accommodation features a private entrance.
        </p>

        <p>
          The Market Common is 13 km from the apartment, while Myrtle Beach State Park is 13 km away.
          The nearest airport is Myrtle Beach International Airport, 13 km from Serene Myrtle Beach Condo with Community Pool!
        </p>
      </div>
    </div>
  </template>Text

  <script setup>
  import { ref } from "vue";

  const count = ref(0)
  </script>

  <style scoped>

.bottom-line {
    border: 1px solid black;
    border-radius: 1px;
    margin: 20px 100px 20px 0;
    width: 100%;
    max-width: 1000px;
}

  .container {
    width: 51%;
    max-width: 1300px;
    margin: 0px auto 20px 11.2%;
  }

  p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
  }
  </style>
