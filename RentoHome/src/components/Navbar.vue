<script setup >
import { ref } from "vue";

  const count = ref(0)

</script>

<template>
  <nav class="navigator">
            <a href="Landing.html"><img src="../img/Logo2.png" alt="Logo"></a>
            <div class="list">
                <ul class="navigation">
                    <li><a href="AboutUs.html">About Us</a></li>
                    <li class="menu"> <a href="Houses.html">Houses</a> 
                        <ul class="submenu" id="dropdown1">
                            <li> <a href="HtmlFiles/HousePrem.html">Premium</a> </li>
                            <li> <a href="HtmlFiles/HouseMid.html">Middle</a></li>
                            <li> <a href="HtmlFiles/HouseBudget.html">Budget</a></li>
                        </ul> </li>
                    <li class="menu"> <a href="Apart.html">Apartaments</a> 
                        <ul class="submenu" id="dropdown2">
                            <li> <a href="HtmlFiles/ApartPrem.html">Premium</a> </li>
                            <li> <a href="HtmlFiles/ApartMid.html">Middle</a></li>
                            <li> <a href="HtmlFiles/ApartBudget.html">Budget</a></li>
                        </ul></li>                
                    <li> <a class="button-link" href="LoginSystem/index.html"><button class="button-login">Login</button></a> </li>
                    <li> <a class="button-link" href="LoginSystem/index.html"><button class="button-login">Profile</button></a></li>
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
    margin-bottom: 10px;
}
.navigation ul {
    list-style: none;
    display: flex;
    width: 100%;

}
.navigation ul li {
    display: inline-block;
    position: relative;
    width: auto;
}

.navigation .menu{
    position: relative;
}

.navigation .menu .submenu {
    position: absolute;
    top: 33px;
    left: 0;
    width: 150px;
    background-color: rgb(25, 40, 60);
    display: none;
    border-radius: 5px;
    z-index: 1;
}

.navigation .submenu li {
    width: 85%;
    padding: 10px ;
}

.navigation .submenu li a {
    text-decoration: none;
    width: 50%;
}

.navigation .menu:hover .submenu {
    display: block;
}

#dropdown1 {
    margin: 0 0 0 -15px;
}

#dropdown2 {
    margin: 0 0 0 0px ;
    text-align: center;
}

.navigation a {
    display: block;
    position: relative;
    font-size: 16px;
    margin: 0 30px ;
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
    margin-left: -20px;
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
