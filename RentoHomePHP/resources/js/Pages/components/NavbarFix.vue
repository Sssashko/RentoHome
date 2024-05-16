<script setup >
import { ref } from "vue";

  const count = ref(0)

</script>

<template>
  <div class="navigator d-none">
            <a href="Landing.html"><img src="../../../../public/img/Logo2.png" alt="Logo"></a>
            <div class="list">
                <ul class="navigation">
                    <li id="about-us"><a href="AboutUs.html">About Us</a></li>
                    <div class="dropdown">
                        <ul class="dropdown-elem"><a href="">Houses</a></ul>
                    </div>
                    <div class="dropdown">
                        <ul class="dropdown-elem"><a href="">Apartaments</a></ul>
                        </div>
                    <li> <a class="button-link" href="LoginSystem/index.html"><button class="button-login">Login</button></a> </li>
                    <li> <a class="button-link" href="LoginSystem/index.html"><button class="button-login">Profile</button></a></li>
                </ul>
            </div>
        </div>
</template>

<style scoped>
.navigator {
    position: static;
    background-color: rgb(16, 25, 38);
    top: 0;
    left: 0;
    width: 100%;
    padding: 5px 0px;
    display: hidden;
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

.navigation a {
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

.navigation ul li a::after {
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

.navigation ul li a:hover::after {
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
