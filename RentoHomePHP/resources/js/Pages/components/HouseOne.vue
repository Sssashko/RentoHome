<template>
    <div class="container">
        <div class="left">
            <!-- Main Large Image -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 550px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/HomeDubai.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/HomeDubai2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/HomeDubai3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/HomeDubai333.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/HomeDubai222.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Map -->
            <div class="map">
                <iframe id="map-iframe"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20042.17598962926!2d55.28346211558793!3d25.22329633952631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2z0JTRg9Cx0LDQuSAtINCe0LHRitC10LTQuNC90LXQvdC90YvQtSDQkNGA0LDQsdGB0LrQuNC1INCt0LzQuNGA0LDRgtGL!5e0!3m2!1sru!2slv!4v1707396604039!5m2!1sru!2slv"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <hr class="bottom-line">
            </div>
        </div>
        <div class="right">
            <!-- Upper Description with Hotel Details -->
            <div class="upper-description">
                <div class="upper-description bg-light p-4 rounded">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="hotel-details">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                            </div>
                        </div>
                    </div>
                    <div class="hotel-name font-weight-bold mt-3">{{ hotelName }}</div>
                    <div class="row mt-3">
                        <div class="col">
                            <p class="geo mb-0">
                                <i class="fa-solid fa-location-dot"></i> {{ address }} -
                                <a href="https://maps.app.goo.gl/AzZ7K9ejGMaTozaCA"
                                    class="geo-link text-primary">Excellent Geolocation</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Details Section -->
            <div class="booking-details bg-light p-4 rounded" :class="{ 'rotate-down': isScrollingDown }"
                style="position: sticky; top: 0; z-index: 100;">
                <div class="row mb-3">
                    <div class="col">
                        <strong>Price:</strong> ${{ pricePerNight }} per night
                    </div>
                    <div class="col">
                        <strong>Stay Duration:</strong> {{ stayDuration }} nights
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <strong>Check-in:</strong>
                        <input type="date" v-model="checkInDate" class="form-control">
                    </div>
                    <div class="col">
                        <strong>Check-out:</strong>
                        <input type="date" v-model="checkOutDate" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <strong>People:</strong>
                        <input type="number" v-model="numberOfAdults" min="1" class="form-control"> Adults
                        <input type="number" v-model="numberOfChildren" min="0" class="form-control"> Children
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <Link class="link btn btn-primary btn-block" :href="route('ComingSoon')">Book Now</Link>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <strong>Total Price:</strong> ${{ totalPrice }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { Link } from "@inertiajs/vue3";

export default {

    components: {
        Link
    },
    props: {
        hotelName: String,
        address: String,
        mapCoordinates: Object,
        Object
    },
    data() {
        return {
            pricePerNight: 100,
            checkInDate: '',
            checkOutDate: '',
            address: 'Ogres iela 3',
            hotelName: 'Caravelle Resort'
        }
    },

    computed: {
        stayDuration() {
            if (!this.checkInDate || !this.checkOutDate) return 0;

            const startDate = new Date(this.checkInDate);
            const endDate = new Date(this.checkOutDate);
            const timeDiff = Math.abs(endDate.getTime() - startDate.getTime());
            return Math.ceil(timeDiff / (1000 * 3600 * 24));
        },
        totalPrice() {
            return this.pricePerNight * this.stayDuration;
        }
    }
}

const isScrollingDown = ref(false);

const handleScroll = () => {
    const lastScrollY = window.scrollY;
    window.requestAnimationFrame(() => {
        isScrollingDown.value = lastScrollY > -100;
    });
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onBeforeUnmount(() => {
    window.removeEventListener("scroll", handleScroll);
});

const numberOfAdults = ref(1);
const numberOfChildren = ref(0);

</script>

<style scoped>
.bottom-line {
    margin-top: 50px;
    border: 1px solid black;
    border-radius: 1px;
    margin: 20px auto 0;
    width: 100%;
    max-width: 1000px;
}

.container {
    margin-top: 40px;
    display: flex;
    justify-content: space-between;
}

.left {
    width: 65%;
}

.right {
    top: 0;
}

.main-image img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

img {
    border-radius: 5px
}

.map iframe {
    width: 100%;
    height: 300px;
    margin-top: 15px;
    border-radius: 5px;
}

.right {
    width: 30%;
}

.upper-description {
    margin-bottom: 20px;
}

.field-stars-and-eco-upp {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.booking-details {
    background-color: #f8f8f8;
    padding: 20px;
    border-radius: 5px;
}

.stars {
    margin-right: 5px;
}

.feature {
    margin-right: 10px;
}

.hotel-name {
    font-size: 20px;
}

.geo-link:hover {
    text-decoration: underline;
}

.geo-link {
    cursor: pointer;
}

.price,
.stay-duration,
.check-in-out,
.total-price {
    margin-top: 10px;
}

.rotate-down {
    animation: rotateDown 0.5s forwards;
}

@keyframes rotateDown {
    from {
        transform: rotateX(0deg);
    }

    to {
        transform: rotateX(90deg);
    }
}

.booking-details {
    transition: transform 0.5s;
}
</style>
