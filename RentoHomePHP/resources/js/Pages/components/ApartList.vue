<template>
    <div class="main">
        <h2 class="text-center mb-3">Seacrh For Perfect Apartaments</h2>
        <div class="container py-4" style="max-width: 90%;">
            <div class="filter-table">
                <h3>Country</h3>
                <hr>
                <div>
                    <label for="LatviaCheckbox"> <input type="checkbox" id="LatviaCheckbox">Latvia</label>
                </div>
                <div>
                    <label for="DubaiCheckbox"> <input type="checkbox" id="Dubaiheckbox">Dubai</label>
                </div>
                <div>
                    <label for="FranceCheckbox"> <input type="checkbox" id="FranceCheckbox">France</label>
                </div>
                <div>
                    <label for="GermanCheckbox"> <input type="checkbox" id="GermanCheckbox">German</label>
                </div>
                <div>
                    <label for="RussiaCheckbox"> <input type="checkbox" id="RissuaCheckbox">Russia</label>
                </div>
                <hr>
                <h3>Comfortability</h3>
                <div>
                    <label for="PremiumCheckbox"> <input type="checkbox" id="PremiumCheckbox">Premium</label>
                </div>
                <div>
                    <label for="MiddleCheckbox"> <input type="checkbox" id="MiddleCheckbox">Middle</label>
                </div>
                <div>
                    <label for="BudgetCheckbox"> <input type="checkbox" id="BudgetCheckbox">Budget</label>
                </div>
                <hr>
                <h3>Price</h3>
                <div>
                    <label for="100Checkbox"> <input type="checkbox" id="100Checkbox">Under 100$</label>
                </div>
                <div>
                    <label for="100-200Checkbox"> <input type="checkbox" id="100-199Checkbox">100 - 199$</label>
                </div>
                <div>
                    <label for="200-300Checkbox"> <input type="checkbox" id="200-299Checkbox">200 - 299$</label>
                </div>
                <div>
                    <label for="300-400Checkbox"> <input type="checkbox" id="300-399Checkbox">300 - 399$</label>
                </div>
                <div>
                    <label for="400Checkbox"> <input type="checkbox" id="400Checkbox">400+ $</label>
                </div>
                <hr>
                <h3>Square</h3>
                <div>
                    <label for="100m2Checkbox"> <input type="checkbox" id="100m2Checkbox">Under 100 ㎡</label>
                </div>
                <div>
                    <label for="100-125m2Checkbox"> <input type="checkbox" id="100-124m2Checkbox">100 - 124 ㎡</label>
                </div>
                <div>
                    <label for="125-150m2Checkbox"> <input type="checkbox" id="125-149m2Checkbox">125 - 149 ㎡</label>
                </div>
                <div>
                    <label for="150-200m2Checkbox"> <input type="checkbox" id="150-199m2Checkbox">150 - 199 ㎡</label>
                </div>
                <div>
                    <label for="200m2Checkbox"> <input type="checkbox" id="200m2Checkbox">200+ ㎡</label>
                </div>
                <hr>
            </div>
            <div class="row g-5 w-100 ">
                <div class="col-4" v-for="apartament in apartaments" :key="apartament.id">
                    <div class="card">
                        <img :src="apartament.image" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="card-title h5 mb-0">{{ apartament.title }}</p>
                                <p class="text-center mb-0 text">({{ apartament.country }})</p>
                            </div>
                            <p class="card-text">{{ apartament.description }} This Apartament Area: {{ apartament.square }}㎡</p>
                            <h5>{{ apartament.price }} Per Night</h5>
                            <a href="#" class="btn btn-primary">Go On House Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script >

import { Link } from "@inertiajs/vue3";
import { router } from '@inertiajs/vue3';
import axios from "axios";

export default {
  components: {
    Link,
  },
  props: {
    Object,
    apartaments: Array
  }
}

</script>

<style scoped>

.text {
    font-size: 17px;
}

.main {
    margin-bottom: 100px;
}

.card-title{
    font-size: 20px;
}

.container {
    display: flex;
}

.filter-table {
    margin-right: 40px;
    width: 15%;
    background-color: rgb(229, 229, 229);
    padding: 10px 20px ;
    border-radius: 5px;
}

input {
    margin-right: 10px;
}

img {
    max-width: 400px;
    min-width: 280px;
    max-height: 180px;
    min-height: 180px;
}

h5 {
    font-size: 16px;
    font-weight: 600;
}

h4 {
    font-size: 20px;
    font-weight: 600;
}

h3 {
    font-size: 24px;
    font-weight: 600;
}

h2 {
    margin-top: 50px;
    font-weight: 500;
    font-size: 44px;
}

</style>
