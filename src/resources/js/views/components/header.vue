<script>

export default {

}
</script>

<template>
    <!-- logo -->
    <div class="headerdesktop">
        <header class="header header-desktop">
            <div class="header-container">
                <div class="logo-container">
                    <div class="logo">
                        <a href="#">
                            <img src="../../../../storage/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- navigatie -->
                <div class="menu nav-bar">
                    <!-- Normale link -->
                    <router-link to="/rijschool" class="menu-item no-mega">
                        Rijschool
                    </router-link>
                    <!-- <a to="/rijschool" class="menu-item no-mega"> -->
                       
                    <!-- </a> -->

                    <a href="#" class="menu-item no-mega">
                        <p>Pakketen</p>
                    </a>

                    <a href="#" class="menu-item no-mega">
                        <p>Rijbewijs</p>
                    </a>
                    <!-- na 3 op mobile in hamburger menu -->
                    <a href="#" class="menu-item no-mega">
                        <p>Contact</p>
                    </a>
                    <a href="#" class="menu-item no-mega proefles">
                        <p>Gratis proefles</p>
                    </a>
                    <a href="#" class="menu-item no-mega">
                        <img src="../../../../storage/img/login.png" class="login" alt="">
                    </a>
                </div>
            </div>
        </header>
    </div>
</template>

<style>
:root {
    --blauw-licht: #0077c0;
    --blauw-donker: #0e103d;
    --rood-licht: #e51b24;
    --rood-donker: #780005;
    --text-color-black: #000;
    --text-color-white: #fff;
    --background-white: #fff;
    --background-black: #060606;
    --background-grey: #f0f0f0;
}

* {
    border: 0;
    margin: 0;
    padding: 0;
    outline: 0;
}

.header {
    position: sticky;
    top: 0;
    z-index: 2;
    user-select: none;
    display: block;
    background-image: linear-gradient(var(--rood-licht), transparent);
    position: absolute;
    width: 100%;
}

.header-container {
    width: 95vw;
    max-width: 1800px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    height: 70px;
}

.nav-bar {
    display: flex;
    justify-content: space-between;
    text-decoration: none;
    font-size: 1.5rem;
    width: 100%;
}

.logo-container {
    display: flex;
    max-width: fit-content;
}

.logo img {
    object-fit: contain;
    width: 100px;
}

.logo a h1 {
    color: var(--blauw-licht) !important;
    font-size: 4rem;
}

.header .menu-item {
    color: var(--text-color-white);
    height: 33px;
}

.menu-item {
    width: auto;
    transition: 0.2s ease-in-out;
    margin: auto;
    font-weight: 800;
}

.menu-item p {
    margin: auto;
    text-wrap: nowrap;
}

.menu-item.no-mega:hover {
    font-size: 1.6rem;
    transition: 0.2s ease-in-out;
}

.menu-text span {
    margin: 0 0 0 auto;
}

.menu-text i {
    margin: 0 auto 0 0;
}

.proefles {
    background: var(--background-black);
    border-radius: 10px;
    width: auto;
    padding: 0 5px 0 5px;
}

.header a {
    display: flex;
    text-decoration: none;
}

/* login img */

.login {
    margin: auto;
    object-fit: contain;
    width: 30px;
}

/* dropdown menu */
/* The dropdown container */
.dropdown {
    float: left;
    overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
    border: none;
    outline: none;
    background-color: inherit;
    font: inherit;
    margin: auto;
    height: 100%;
    font-size: 1.5rem;
    font-weight: 800;
    display: flex;
    flex-wrap: nowrap;
    color: var(--blauw-licht);
    transition: 0.2s ease-in-out;
    cursor: pointer;
}

.dropdown .dropbtn:hover {
    font-size: 1.6rem;
    transition: 0.2s ease-in-out;
}

/* Dropdown Menu laat zien op klik plus maakt de achtergrond donker*/
.dropdown-content {
    display: none;
    position: absolute;
    left: 0;
    z-index: 1;
    margin-top: 20px;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, .6);
    transition: 0.4s ease-in-out;
}

/* 3 columns in het megamenu */
.dropdown-column {
    float: left;
    width: 32%;
    padding: 10px;
    background-color: var(--background-grey);
}

.dropdown-row {
    justify-content: center;
    display: flex;
    width: 95%;
    max-width: 1400px;
    margin: auto;
}

/* de links in het megamenu*/
.dropdown-column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    transition: 0.2s ease-in-out;
}

.dropdown-column a:hover {
    background-color: #ddd;
    transition: 0.2s ease-in-out;
}

/* Clear floats after the columns */
.dropdown-row:after {
    content: "";
    display: table;
    clear: both;
}

/* class die word gegeven om megamenu te laten zien */
.show {
    display: block !important;
}

@media (max-width: 992px) {
    .headerdesktop {
        display: none;
    }
}
</style>
