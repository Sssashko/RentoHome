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
                    <li class="nav-item dropdown me-3">
                        <Link class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Houses
                        </Link>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <Link class="dropdown-item" :href="route('HousesList')">View All</Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <Link class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Apartments
                        </Link>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <Link class="dropdown-item" :href="route('ApartList')">View All</Link>
                            </li>
                        </ul>
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
    color: rgb(255, 255, 255) !important;
    font-weight: 600;
    transition: color 0.3s ease;
    margin-right: 20px;
}

.navbar-nav .nav-link:hover {
    color: #007bff !important;
    text-decoration: underline;
}

.dropdown-menu {
    background-color: rgb(16, 25, 38);
}

.dropdown-item {
    color: rgb(255, 255, 255) !important;
    transition: background-color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #007bff;
    color: white !important;
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
    margin-right: 40px;
    border: 10px solid white;
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
        /* Reset margin-right for small screens */
    }

    .btn-outline-light {
        margin-left: 0;
        /* Reset margin-left for small screens */
    }
}
</style>
