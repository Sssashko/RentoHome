<template>
    <div class="container">
        <div class="first-text">
            <p class="first-text">
                Set in Myrtle Beach, 8.3 km from Broadway at the Beach and 8.6 km from Myrtle Beach Boardwalk, Serene Myrtle Beach Condo with Community Pool! offers air conditioning. 
                It is located 9.4 km from Myrtle Beach Convention Center and offers a lift. Free WiFi is available throughout the property and Tanger Outlets Myrtle Beach Hwy 501 is 7.7 km away.
            </p>

            <p class="second-text">
                Located on the ground floor, this spacious apartment comes with 2 bedrooms, a well-equipped kitchen with a dishwasher and an oven, a living room, and a flat-screen TV. 
                Towels and bed linen are featured in the apartment. For added privacy, the accommodation features a private entrance.
            </p>
        
            <p>
                The Market Common is 13 km from the apartment, while Myrtle Beach State Park is 13 km away. 
                The nearest airport is Myrtle Beach International Airport, 13 km from Serene Myrtle Beach Condo with Community Pool!.
            </p>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

const count = ref(0)

</script>

<style scoped>

.container {
    width: 75%;
    margin: 0 auto 50px auto;
}

p {
    width: 75%;
    font-size: 14px;
    line-height: 22px;
}

.first-text {
    margin-bottom: 20px;
}
.second-text {
    margin-bottom: 20px;
}

</style>