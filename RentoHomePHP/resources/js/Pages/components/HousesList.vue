<template>
    <div class="main">
      <NavbarFix/>
      <h2 class="text-center mb-3">Search For Perfect Houses</h2>
      <div class="container py-4" style="max-width: 90%;">
        <div class="filter-table">
          <h3>Country</h3>
          <hr>
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
              <input type="checkbox" id="PremiumCheckbox" value="Premium" @change="FilterComfortability">Premium
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
              <input type="checkbox" id="100Checkbox" @change="FilterPrice" value="100">Under 100$
            </label>
          </div>
          <div>
            <label for="100-200Checkbox">
              <input type="checkbox" id="100-199Checkbox" @change="FilterPrice" value="100-199" >100 - 199$
            </label>
          </div>
          <div>
            <label for="200-300Checkbox">
              <input type="checkbox" id="200-299Checkbox" @change="FilterPrice" value="200-299" >200 - 299$
            </label>
          </div>
          <div>
            <label for="300-400Checkbox">
              <input type="checkbox" id="300-399Checkbox" @change="FilterPrice" value="300-399" >300 - 399$
            </label>
          </div>
          <div>
            <label for="400Checkbox">
              <input type="checkbox" id="400Checkbox" @change="FilterPrice" value="400+" >400+ $
            </label>
          </div>
          <hr>
          <h3>Square</h3>
          <div>
            <label for="100m2Checkbox">
              <input type="checkbox" id="100m2Checkbox" @change="FilterSquare" value="0-99" >Under 100 ㎡
            </label>
          </div>
          <div>
            <label for="100-125m2Checkbox">
              <input type="checkbox" id="100-124m2Checkbox" @change="FilterSquare" value="100-124" >100 - 124 ㎡
            </label>
          </div>
          <div>
            <label for="125-150m2Checkbox">
              <input type="checkbox" id="125-149m2Checkbox" @change="FilterSquare" value="125-149" >125 - 149 ㎡
            </label>
          </div>
          <div>
            <label for="150-200m2Checkbox">
              <input type="checkbox" id="150-199m2Checkbox" @change="FilterSquare" value="150-199" >150 - 199 ㎡
            </label>
          </div>
          <div>
            <label for="200m2Checkbox">
              <input type="checkbox" id="200m2Checkbox" @change="FilterSquare" value="200+" >200+ ㎡
            </label>
          </div>
          <hr>
        </div>
        <div class="row g-5 w-100">
          <div class="col-4" v-for="house in filteredHouses" :key="house.id">
            <div class="card">
              <img :src="house.image" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="card-title h5 mb-0">{{ house.title }}</p>
                  <p class="text-center mb-0 text">({{ house.country }})</p>
                </div>
                <p class="card-text w-100">{{ house.description }} This House Area: {{ house.square }}㎡</p>
                <h5>{{ house.price }} Per Night</h5>
                <Link :href="route('OneHomePage')" class="btn btn-primary">Go On House Page</Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  import { Link } from "@inertiajs/vue3";

  export default {
  components: {
    Link,
  },
  props: {
    houses: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      selectedCountries: [],
      selectedComfortabilities: [],
      selectedPrices: [],
      selectedSquares: [],
    };
  },
  computed: {
    filteredHouses() {
      let filtered = this.houses;

      // Filter by selected countries
      if (this.selectedCountries.length > 0) {
        filtered = filtered.filter((house) =>
          this.selectedCountries.includes(house.country)
        );
      }

      // Filter by selected comfortabilities
      if (this.selectedComfortabilities.length > 0) {
        filtered = filtered.filter((house) =>
          this.selectedComfortabilities.includes(house.comfortability)
        );
      }

      // Filter by selected prices
      if (this.selectedPrices.length > 0) {
        filtered = filtered.filter((house) => {
          const price = parseFloat(house.price);
          return this.selectedPrices.some((range) => {
            if (range === '-100') return price < 100;
            if (range === '100-199') return price >= 100 && price < 199;
            if (range === '200-299') return price >= 200 && price < 299;
            if (range === '300-399') return price >= 300 && price < 399;
            if (range === '400+') return price > 400;
          });
        });
      }
      if (this.selectedSquares.length > 0) {
        filtered = filtered.filter((house) => {
          const square = parseFloat(house.square);
          return this.selectedSquares.some((range) => {
            if (range === '0-99') return square < 100;
            if (range === '100-124') return square >= 100 && square < 125;
            if (range === '125-149') return square >= 125 && square < 150;
            if (range === '150-199') return square >= 150 && square < 200;
            if (range === '200+') return square >= 200;
          });
        });
      }

      return filtered;

    },
  },
  methods: {
    FilterCountry(event) {
      const country = event.target.value;
      if (event.target.checked) {
        this.selectedCountries.push(country);
      } else {
        const index = this.selectedCountries.indexOf(country);
        if (index !== -1) {
          this.selectedCountries.splice(index, 1);
        }
      }
    },
    FilterComfortability(event) {
      const comfortability = event.target.value;
      if (event.target.checked) {
        this.selectedComfortabilities.push(comfortability);
      } else {
        const index = this.selectedComfortabilities.indexOf(comfortability);
        if (index !== -1) {
          this.selectedComfortabilities.splice(index, 1);
        }
      }
    },
    FilterPrice(event) {
      const priceRange = event.target.value;
      if (event.target.checked) {
        this.selectedPrices.push(priceRange);
      } else {
        const index = this.selectedPrices.indexOf(priceRange);
        if (index !== -1) {
          this.selectedPrices.splice(index, 1);
        }
      }
    },
    FilterSquare(event) {
      const squareRange = event.target.value;
      if (event.target.checked) {
        this.selectedSquares.push(squareRange);
      } else {
        const index = this.selectedSquares.indexOf(squareRange);
        if (index !== -1) {
          this.selectedSquares.splice(index, 1);
        }
      }
    },
  },
};

</script>

<style scoped>

.text {
    font-size: 17px;
}

.card-title{
    font-size: 20px;
}

.main {
    margin-bottom: 100px;
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
