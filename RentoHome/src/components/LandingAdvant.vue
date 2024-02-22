<template>
    <div class="container">
        <h1>Our Services</h1>
        <div class="row">
            <div class="service">
                <i class="fa-solid fa-money-bill"></i>
                <h2>Pricing</h2>
                <p>Reasonable rental rates for great value and location.</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-location-crosshairs"></i>
                <h2>Location</h2>
                <p>Conveniently situated properties in desirable areas for easy access to amenities.</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-building"></i>
                <h2>Quality</h2>
                <p>Exceptional property standards for your comfort.</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-eye"></i>
                <h2>View</h2>
                <p>Stunning vistas for a memorable living experience.</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-envelope"></i>
                <h2>Support</h2>
                <p>Round-the-clock assistance for peace of mind.</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-people-group"></i>
                <h2>Efficient Maintenance</h2>
                <p>Responsive team for timely issue resolution.</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-shield-halved"></i>
                <h2>Security</h2>
                <p>Robust security for resident safety.</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-leaf"></i>
                <h2>Eco-friendly</h2>
                <p>Sustainable features for a greener living environment.</p>
            </div>
        </div>
    </div>
</template>

<script setup >
import { ref } from "vue";

  const count = ref(0)
  
</script>


<style scoped>

.container {
    box-sizing: border-box;
    width: 100%;
    height: 700px;
    padding: 0 0;
    background-color: #fff;
}

.container h1 {
    text-align: center;
    padding-top: 3%;
    margin-bottom: 60px;
    font-weight: 600;
    position: relative;
}
.container h1::after {
    content: '';
    background: #303ef7;
    width: 100px;
    height: 10px;
    border-radius: 10px;
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translate(-50%);
}

.row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 30px;
}

.service {
    text-align: center;
    padding: 25px 10px;
    border-radius: 10px;
    font-size: 14px;
    cursor: pointer;
    background: transparent;
    transition: transform 0.5s, background 0.5s;
}

.service i {
    font-size: 40px;
    margin-bottom: 10px;
    color:  #303ef7;
}

.service h2 {
    font-weight: 600;
    margin-bottom: 8px;
}

.service:hover {
    background: #303ef7;
    color: #fff;
    transform: scale(1.05);
}

.service:hover i {
    color: #fff;
}

</style>