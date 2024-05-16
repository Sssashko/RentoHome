<script >
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
  <nav class="navigator">
        <Link :href="route('HomePage')"><img src="../../../../public/img/Logo2.png" alt="Logo"></Link>
            <div class="list">
                <ul class="navigation">
                    <li id="about-us"><Link class="link" :href="route('AboutUs')">About Us</Link></li>
                    <div class="dropdown">
                        <ul class="dropdown-elem"><Link class="link" :href="route('HousesList')">Houses</Link></ul>
                    </div>
                    <div class="dropdown">
                        <ul class="dropdown-elem"><Link class="link" :href="route('ApartList')">Apartaments</Link></ul>
                    </div>
                    <li v-if="!$page.props.auth"> <Link :href="route('Login')" class="link"><button class="button-login">Login</button></Link></li>
                    <div v-if="$page.props.auth">
                        <Link :href="route('logout')" method="post" class="link"><button class="button-login">Log out</button></Link>
                    </div>
                    <li v-if="$page.props.auth"> <Link :href="route('Profile')" class="link"><button class="button-login">Profile</button></Link></li>
                </ul>
            </div>
        </nav>
</template>

<style scoped>
.navigator {
    position: absolute;
    background-color: rgb(16, 25, 38);
    top: 0;
    left: 0;
    width: 100%;
    padding: 5px 0px;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: space-between;
    margin: 0;
}

.navigator img {
    width: 200px;
    margin-left: 100px;
    align-items: center;
    display: flex;
}

.navigation {
    list-style: none;
    text-decoration: none;
    display: flex;
    align-items: center;
    text-align: center;
    margin: 0 50px 10px 0;
}

.dropdown-elem {
    margin-right: 20px;
}

#about-us {
    margin-right: 30px;
}

.navigation .link {
    display: block;
    position: relative;
    font-size: 16px;
    text-decoration: none;
    font-weight: 600;
    margin-top: 15px;
    color: rgb(255, 255, 255);
    text-align: center;
    transition: all 0.25s ease;

}

.navigation ul li .link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -7px;
    width: 100%;
    height: 3px;
    background: white;
    border-radius: 5px;
    transform: scaleX(0);
    transition: transform .5s;
}

.navigation ul li .link:hover::after {
    transform: scaleX(1);
}

.navigator .navigation .button-login {
    width: 100px;
    height: 45px;
    margin-left: 30px;
    background: transparent;
    border: 2px solid rgb(255, 255, 255);
    outline: none;
    cursor: pointer;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
    color: rgb(255, 255, 255) ;
    transition: .5s;
}

.navigator .navigation .button-login:hover {
    background: rgb(255, 255, 255);
    color: black;
}

@media (max-width: 900px){
    .navbar {
        padding: 10px 20px;
    }

    .nav-list {
        position: absolute;
        width: 100%;
        top: 66px;
    }
}

</style>
