<script>
import { ref } from "vue";

  const count = ref(0)
</script>

<template>
     <div class="most-popular">
        <h2 id="header-popular">Most Popular Choices</h2>
        <div class="grid-container">
            <div class="grid-house"> 
                <a href="#"><img src="../img/HomeDubai.jpg" alt=""></a>
                <div class="all-home-text">
                    <a href="#">First Home</a>
                    <p id="geolocation">Dubai</p>
                    <div class="text-reviews">
                        <span id="review-grade">10.0</span> <span id="review-count">  ·	  1087 reviews</span>
                    </div>
                    <div class="text-description">
                        <p>Luxurious Dubai home with panoramic city views, modern design, and serene surroundings. 
                        Spacious interiors, gourmet kitchen, and infinity pool create an oasis of elegance and tranquility.    
                        </p>
                    </div>
                    <div class="reserve-btn">
                        <a href="#"><button>Reserve This Home</button></a>
                    </div>
                </div>
            </div> 
            <div class="grid-house"> 
                <a href="#"><img src="../img/HomeDubai2.jpg" alt=""></a>
                <div class="all-home-text">
                    <a href="#">Second Home</a>
                    <p id="geolocation">Berlin, German</p>
                    <div class="text-reviews">
                        <span id="review-grade">9.1</span> <span id="review-count">  ·	  589 reviews</span>
                    </div>
                    <div class="text-description">
                        <p>Experience contemporary living in a German eco-friendly home. 
                            Efficient design, sustainable technology, and a lush garden harmonize for modern, 
                            green living in the heart of Europe.
                        </p>
                    </div>
                    <div class="reserve-btn">
                        <a href="#"><button>Reserve This Home</button></a>
                    </div>
                </div>
            </div>
            <div class="grid-house"> 
                <a href="#"><img src="../img/HomeDubai3.jpg" alt=""></a>
                <div class="all-home-text">
                    <a href="#">Third Home</a>
                    <p id="geolocation">Paris, France</p>
                    <div class="text-reviews">
                        <span id="review-grade">9.5</span> <span id="review-count">  ·	  897 reviews</span>
                    </div>
                    <div class="text-description">
                        <p>Explore a picturesque château in France, complete with gardens and vineyard views, 
                        offering a taste of timeless elegance.   
                        </p>
                    </div>
                    <div class="reserve-btn">
                        <a href="#"><button>Reserve This Home</button></a>
                    </div>
                </div>
            </div> 
            <div class="grid-house"> 
                <a href="#"><img src="../img/HomeGerman.jpg" alt=""></a>
                <div class="all-home-text">
                    <a href="#">Fourth Home</a>
                    <p id="geolocation">Jurmala, Latvia</p>
                    <div class="text-reviews">
                        <span id="review-grade">8.9</span> <span id="review-count">  ·	  456 reviews</span>
                    </div>
                    <div class="text-description">
                        <p>Relax in a cozy Latvian cabin by a tranquil lake, 
                        blending rustic charm with modern comforts for a peaceful retreat.
                        </p>
                    </div>
                    <div class="reserve-btn">
                        <a href="#"><button>Reserve This Home</button></a>
                    </div>
                </div>
            </div>
            <div class="grid-house"> 
                <a href="#"><img src="../img/HomeLatvia.jpg" alt=""></a>
                <div class="all-home-text">
                    <a href="#">Fifth Home</a>
                    <p id="geolocation">Riga, Latvia</p>
                    <div class="text-reviews">
                        <span id="review-grade">9.6</span> <span id="review-count">  ·	  1001 reviews</span>
                    </div>
                    <div class="text-description">
                        <p> Find solace in a Latvian countryside cottage, surrounded by pristine 
                        nature and traditional charm, offering the perfect escape from city life.
                        </p>
                    </div>
                    <div class="reserve-btn">
                        <a href="#"><button>Reserve This Home</button></a>
                    </div>
                </div>
            </div>
            <div class="grid-house"> 
                <a href="#"><img src="../img/HomeParis.jpg" alt=""></a>
                <div class="all-home-text">
                    <a href="#">Sixth Home</a>
                    <p id="geolocation">Paris, France</p>
                    <div class="text-reviews">
                        <span id="review-grade">9.9</span> <span id="review-count">  ·	  734 reviews</span>
                    </div>
                    <div class="text-description">
                        <p>Immerse yourself in the heart of Paris with a stylish city apartment, 
                        boasting elegant design and easy access to the vibrant French capital.
                        </p>
                    </div>
                    <div class="reserve-btn">
                        <a href="#"><button>Reserve This Home</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<style scoped>
.container-text {
    text-align: center;
    font-size: 48px;
}

#header-popular {
    font-size: 64px;
    justify-content: center;
    display: flex;
    margin: 0 0 50px 0;
    padding-top: 40px;
}

.most-popular {
    background-color: rgb(247, 247, 247);
    display: block;
    border-radius: 20px;
    margin: 0 20px;
}

.grid-container {
    display: grid;
    grid-template-columns: auto auto auto ;
    padding: 10px;
    text-align: center;
    justify-items: center;
}

.grid-house {
    border: 1px solid rgba(0, 0, 0, 0.8);
    background-color: white;
    border-radius: 20px;
    padding: 20px;
    margin-top: 20px;
    font-size: 30px;
    text-align: center;
    cursor: pointer;
    width: 75%;
    opacity: 87.5%;
    max-width: 400px;
    transition: 0.3s;
}

.grid-house:hover {
    transform: scale(1.03);
    opacity: 100%;
}

.grid-house img {
    display: block;
    width: 100%;
    height: 200px;
    opacity: 100%;
}

.all-home-text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 5px;
    margin: 10px 0;
}

.grid-house a{
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
    color: black;
    transition: 0.3s;
}

.grid-house a:hover {
    color: rgb(109, 96, 52);
}

#geolocation {
    font-size: 18px;
    color: rgb(83, 82, 82);
}

.text-reviews {
    margin-top: 25px;
}

#review-grade {
    background-color: #4189c8;
    font-size: 20px;
    color: white;
    padding: 4px;
    border-radius: 5px;
}

#review-count {
    font-size: 18px;
    color: rgb(83, 82, 82);
}

.text-description p {
    margin-top: 35px;
    font-size: 16px;
    display: flex;
    flex-wrap: nowrap;
    max-width: 500px;
} 


.reserve-btn {
    margin-top: 20px;
    width: 100%;
    color: (97, 160, 178);
}


.reserve-btn button {
    font-size: 20px;
    width: 100%;
    height: 100%;
    border: none;
    border: 1px solid rgb(97, 160, 178);
    border-radius: 5px;
    padding: 5px 0;
    cursor: pointer;
    transition: 0.4s;
}

.reserve-btn button:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(102, 131, 174);
}

</style>