<template>
    <div class="main">
        <NavbarFix/>
        <h2 class="text-center mb-3">Seacrh For Perfect Apartaments</h2>
        <div class="container py-4" style="max-width: 90%;">
            <div class="filter-table">
                <h3>Country</h3>
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
                    <label for="100Checkbox"> <input type="checkbox" id="100Checkbox">-100$</label>
                </div>
                <div>
                    <label for="100-200Checkbox"> <input type="checkbox" id="100-200Checkbox">100 - 200$</label>
                </div>
                <div>
                    <label for="200-300Checkbox"> <input type="checkbox" id="200-300Checkbox">200 - 300$</label>
                </div>
                <div>
                    <label for="300-400Checkbox"> <input type="checkbox" id="300-400Checkbox">300 - 400$</label>
                </div>
                <div>
                    <label for="400Checkbox"> <input type="checkbox" id="400Checkbox">400+ $</label>
                </div>
                <hr>
                <h3>Square</h3>
                <div>
                    <label for="100m2Checkbox"> <input type="checkbox" id="100m2Checkbox">-100 m2</label>
                </div>
                <div>
                    <label for="100-125m2Checkbox"> <input type="checkbox" id="100-125m2Checkbox">100 - 125 m2</label>
                </div>
                <div>
                    <label for="125-150m2Checkbox"> <input type="checkbox" id="125-150m2Checkbox">125 - 150 m2</label>
                </div>
                <div>
                    <label for="150-200m2Checkbox"> <input type="checkbox" id="150-200m2Checkbox">150 - 200 m2</label>
                </div>
                <div>
                    <label for="200m2Checkbox"> <input type="checkbox" id="200m2Checkbox">200+ m2</label>
                </div>
                <hr>
            </div>
            <div class="row row-cols-3 g-3 ">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/apart1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Dunes Village</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h5>50$ Per Night</h5>
                            <a href="#" class="btn btn-primary">Go On House Page</a>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/apart2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Grandes Shores</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>150$ Per Night</h5>
                                <a href="#" class="btn btn-primary">Go On House Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/apart3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">The Palace Unit 305</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>225$ Per Night</h5>
                                <a href="#" class="btn btn-primary">Go On House Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/apart4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Grande Cayman Resort</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>1000$ Per Night</h5>
                                <a href="#" class="btn btn-primary">Go On House Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/apart5.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Aqua Beach</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>390$ Per Night</h5>
                                <a href="#" class="btn btn-primary">Go On House Page</a>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</template>

<script setup>
    import NavbarFix from './NavbarFix.vue';
</script>

<style scoped>

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
    margin-top: 120px;
    font-weight: 500;
    font-size: 44px;
}

</style>