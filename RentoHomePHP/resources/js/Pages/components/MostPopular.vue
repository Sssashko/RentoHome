<template>
    <div class="container mt-5">
        <!-- Header -->
    <h2 class="text-center mb-5 header">Most Popular Choices</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card 1 -->
        <div class="col">
          <div class="card zoom-on-hover">
            <img src="../../../../public/img/HomeDubai.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Caravelle Resort</h5>
              <p class="card-text">Dubai</p>
              <div class="d-flex justify-content-between">
                <span class="badge bg-primary">10.0</span>
                <span class="text-muted">1087 reviews</span>
              </div>
              <p class="card-text mt-3">Luxurious Dubai home with panoramic city views, modern design, and serene surroundings. Spacious interiors, gourmet kitchen, and infinity pool create an oasis of elegance and tranquility.</p>
              <Link class="link" :href="route('OneHomePage')" >  <a href="#" class="btn btn-primary mt-3">Reserve This Home</a></Link>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col">
          <div class="card zoom-on-hover">
            <img src="../../../../public/img/HomeDubai2.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">The Desert Pearl</h5>
              <p class="card-text">Berlin, German</p>
              <div class="d-flex justify-content-between">
                <span class="badge bg-primary">9.1</span>
                <span class="text-muted">589 reviews</span>
              </div>
              <p class="card-text mt-3">Experience contemporary living in a German eco-friendly home. Efficient design, sustainable technology, and a lush garden harmonize for modern, green living in the heart of Europe.</p>
              <a href="#" class="btn btn-primary mt-3">Reserve This Home</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col">
          <div class="card zoom-on-hover">
            <img src="../../../../public/img/HomeDubai3.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Sunset Haven</h5>
              <p class="card-text">Paris, France</p>
              <div class="d-flex justify-content-between">
                <span class="badge bg-primary">9.5</span>
                <span class="text-muted">897 reviews</span>
              </div>
              <p class="card-text mt-3">Explore a picturesque château in France, complete with gardens and vineyard views, offering a taste of timeless elegance.</p>
              <a href="#" class="btn btn-primary mt-3">Reserve This Home</a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col">
          <div class="card zoom-on-hover">
            <img src="../../../../public/img/HomeGerman.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Sahara Hotel Elite</h5>
              <p class="card-text">Jurmala, Latvia</p>
              <div class="d-flex justify-content-between">
                <span class="badge bg-primary">8.9</span>
                <span class="text-muted">456 reviews</span>
              </div>
              <p class="card-text mt-3">Relax in a cozy Latvian cabin by a tranquil lake, blending rustic charm with modern comforts for a peaceful retreat.</p>
              <a href="#" class="btn btn-primary mt-3">Reserve This Home</a>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col">
          <div class="card zoom-on-hover">
            <img src="../../../../public/img/HomeLatvia.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Hotele Shonshana</h5>
              <p class="card-text">Riga, Latvia</p>
              <div class="d-flex justify-content-between">
                <span class="badge bg-primary">9.6</span>
                <span class="text-muted">1001 reviews</span>
              </div>
              <p class="card-text mt-3">Find solace in a Latvian countryside cottage, surrounded by pristine nature and traditional charm, offering the perfect escape from city life.</p>
              <a href="#" class="btn btn-primary mt-3">Reserve This Home</a>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col">
          <div class="card zoom-on-hover">
            <img src="../../../../public/img/HomeParis.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Queen Of Sheba Ina</h5>
              <p class="card-text">Paris, France</p>
              <div class="d-flex justify-content-between">
                <span class="badge bg-primary">9.9</span>
                <span class="text-muted">734 reviews</span>
              </div>
              <p class="card-text mt-3">Immerse yourself in the heart of Paris with a stylish city apartment, boasting elegant design and easy access to the vibrant French capital.</p>
              <a href="#" class="btn btn-primary mt-3">Reserve This Home</a>
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
      Link
    },
    props: {
      posts: Object
    }
  }
  </script>

  <style scoped>

.header {
    font-size: 44px;
}

  .card {
    height: 100%;
    transition: transform 0.3s ease, opacity 0.3s ease;
    opacity: 0.9; /* Initial opacity */
  }

  .card:hover {
    transform: scale(1.05);
    opacity: 1; /* Hovered opacity */
  }

  img {
    height: 260px;
  }

  .card-title {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
  }

  .card-text {
    color: #35393c;
  }

  .btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}
</style>
