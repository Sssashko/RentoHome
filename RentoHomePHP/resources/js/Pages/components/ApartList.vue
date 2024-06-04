<template>
    <div class="main">
        <h2 class="text-center mb-3">Seacrh For Perfect Apartaments</h2>
        <div class="container py-4" style="max-width: 90%;">
            <div class="filter-table">
                <h3>Sort By</h3>
                <div class="sort-dropdown">
                    <select id="sortOptions" @change="sortHouses" v-model="sortBy">
                        <option value="priceAsc">Price (Ascending)</option>
                        <option value="priceDesc">Price (Descending)</option>
                        <option value="nameAsc">Hotel Name (A-Z)</option>
                        <option value="nameDesc">Hotel Name (Z-A)</option>
                        <option value="squareAsc">Square (Ascending)</option>
                        <option value="squareDesc">Square (Descending)</option>
                    </select>
                </div>
                <hr>
                <h3>Country</h3>
                <div>
                    <label for="LatviaCheckbox">
                        <input type="checkbox" id="LatviaCheckbox" value="Latvia" @change="FilterCountry">Latvia
                    </label>
                </div>
                <div>
                    <label for="DubaiCheckbox">
                        <input type="checkbox" id="DubaiCheckbox" value="Dubai" @change="FilterCountry">Dubai
                    </label>
                </div>
                <div>
                    <label for="FranceCheckbox">
                        <input type="checkbox" id="FranceCheckbox" value="France" @change="FilterCountry">France
                    </label>
                </div>
                <div>
                    <label for="GermanCheckbox">
                        <input type="checkbox" id="GermanCheckbox" value="German" @change="FilterCountry">German
                    </label>
                </div>
                <div>
                    <label for="RussiaCheckbox">
                        <input type="checkbox" id="RussiaCheckbox" value="Russia" @change="FilterCountry">Russia
                    </label>
                </div>
                <hr>
                <h3>Comfortability</h3>
                <div>
                    <label for="PremiumCheckbox">
                        <input type="checkbox" id="PremiumCheckbox" value="Premium"
                            @change="FilterComfortability">Premium
                    </label>
                </div>
                <div>
                    <label for="MiddleCheckbox">
                        <input type="checkbox" id="MiddleCheckbox" value="Middle" @change="FilterComfortability">Middle
                    </label>
                </div>
                <div>
                    <label for="BudgetCheckbox">
                        <input type="checkbox" id="BudgetCheckbox" value="Budget" @change="FilterComfortability">Budget
                    </label>
                </div>
                <hr>
                <h3>Price</h3>
                <div>
                    <label for="100Checkbox">
                        <input type="checkbox" id="100Checkbox" @change="FilterPrice" value="100">Under $100
                    </label>
                </div>
                <div>
                    <label for="100-200Checkbox">
                        <input type="checkbox" id="100-199Checkbox" @change="FilterPrice" value="100-199">$100 - $199
                    </label>
                </div>
                <div>
                    <label for="200-300Checkbox">
                        <input type="checkbox" id="200-299Checkbox" @change="FilterPrice" value="200-299">$200 - $299
                    </label>
                </div>
                <div>
                    <label for="300-400Checkbox">
                        <input type="checkbox" id="300-399Checkbox" @change="FilterPrice" value="300-399">$300 - $399
                    </label>
                </div>
                <div>
                    <label for="400Checkbox">
                        <input type="checkbox" id="400Checkbox" @change="FilterPrice" value="400+">$400+
                    </label>
                </div>
                <hr>
                <h3>Square Footage</h3>
                <div>
                    <label for="100m2Checkbox">
                        <input type="checkbox" id="100m2Checkbox" @change="FilterSquare" value="0-99">Under 100 ㎡
                    </label>
                </div>
                <div>
                    <label for="100-125m2Checkbox">
                        <input type="checkbox" id="100-124m2Checkbox" @change="FilterSquare" value="100-124">100 - 124 ㎡
                    </label>
                </div>
                <div>
                    <label for="125-150m2Checkbox">
                        <input type="checkbox" id="125-149m2Checkbox" @change="FilterSquare" value="125-149">125 - 149 ㎡
                    </label>
                </div>
                <div>
                    <label for="150-200m2Checkbox">
                        <input type="checkbox" id="150-199m2Checkbox" @change="FilterSquare" value="150-199">150 - 199 ㎡
                    </label>
                </div>
                <div>
                    <label for="200m2Checkbox">
                        <input type="checkbox" id="200m2Checkbox" @change="FilterSquare" value="200+">200+ ㎡
                    </label>
                </div>
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

.sort-dropdown {
    position: relative;
    width: 100%;
}

.sort-dropdown::after {
    content: "\25BC";
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none;
}

select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    appearance: none;
}

.sort-dropdown select {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    appearance: none;
    background-color: #f7f7f7;
    cursor: pointer;
}

.sort-dropdown select:hover {
    background-color: #e0e0e0;
}

.sort-dropdown select:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.text {
    font-size: 17px;
}

.card-title {
    font-size: 20px;
}

.main {
    margin-bottom: 100px;
}

.container {
    display: flex;
}

.filter-table {
    width: 20%;
    background-color: rgb(229, 229, 229);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-right: 75px;
}

.filter-table h3 {
    margin-bottom: 15px;
}

.filter-table label {
    display: block;
    margin-bottom: 5px;
}

input[type="checkbox"],
input[type="radio"] {
    margin-right: 10px;
}

img {
    max-width: 100%;
    height: 200px;
    object-fit: cover;
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
