<script>
import { Link } from "@inertiajs/vue3";
import { router } from '@inertiajs/vue3';

export default {
    components: {
        Link
    },
    props: {
        posts: Object
    },
}
</script>

<template>
    <nav class="navigator navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex">
            <Link :href="route('HomePage')" class="navbar-brand">
                <img src="../../../../public/img/Logo2.png" alt="Logo" class="logo">
            </Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <Link class="nav-link" :href="route('AboutUs')">About Us</Link>
                    </li>
                    <li class="nav-item me-3">
                        <Link class="nav-link" :href="route('HousesList')">Houses</Link>
                    </li>
                    <li class="nav-item me-3">
                        <Link class="nav-link" :href="route('ApartList')">Apartments</Link>
                    </li>
                    <li class="nav-item me-3" v-if="!$page.props.auth">
                        <Link :href="route('Login')" class="btn btn-outline-light">Login</Link>
                    </li>
                    <li class="nav-item me-3" v-if="$page.props.auth">
                        <Link :href="route('logout')" method="post" class="btn btn-outline-light">Log out</Link>
                    </li>
                    <li class="nav-item" v-if="$page.props.auth">
                        <Link :href="route('Profile')" class="btn btn-outline-light btn-profile">Profile</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style scoped>
.navigator {
    background-color: rgb(16, 25, 38);
    padding: 10px 0;
}

.logo {
    width: 150px;
    margin-left: 50px;
}

.navbar-nav .nav-link {
    position: relative;
    font-weight: 600;
    margin-right: 20px;
    text-decoration: none;
    transition: color 0.4s ease;
    color: rgb(255, 255, 255) !important;
}

.navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    display: block;
    margin-top: 5px;
    background: white;
    transition: width 0.4s ease;
    left: 50%;
    transform: translateX(-50%);
}

.navbar-nav .nav-link:hover::after {
    width: 100%;
}

.btn-outline-light {
    border-color: rgb(255, 255, 255);
    color: rgb(255, 255, 255);
    border: 2px solid white;
}

.btn-outline-light:hover {
    background-color: rgb(255, 255, 255);
    color: rgb(16, 25, 38);
}

.btn-profile {
    margin-left: 20px;
    border: 2px solid white;
}

.nav-item {
    font-weight: 600;
}

@media (max-width: 900px) {
    .navbar-brand {
        margin-left: 20px;
    }

    .navbar-nav {
        text-align: center;
    }

    .navbar-nav .nav-item {
        margin-bottom: 10px;
    }

    .navbar-nav .nav-link {
        margin-right: 0;
    }

    .btn-outline-light {
        margin-left: 0;
    }
}
</style>
