<script>
import axios from 'axios';

export default {
    data() {
        return {
            logged_in: false,
            user: [],
        }
    },
    mounted() {
        axios.get("/api/user")
            .then(response => {
                response.json().then(data => {
                    this.user = data.data
                    this.logged_in = true;
                    console.log(this.data);
                })

            })
            .catch(error => {
                this.logged_in = false;
            });
    },
    methods: {
        async on_logout() {
            const response = await axios.post('/api/user/logout').then(
                await window.location.reload()
            )
        }
    }
}
</script>

<template>
    <!-- logo -->
    <div class="headerdesktop">
        <header class="header header-desktop">
            <div class="header-container">
                <div class="logo-container">
                    <div class="logo">
                        <router-link to="/">
            <img src="../../../../storage/img/logo.png" alt="">
                        </router-link>
                    </div>
                </div>
                <!-- navigatie -->
                <div class="menu nav-bar">
                    <!-- Normale link -->
                    <router-link to="/rijschool" class="menu-item no-mega">
                        Rijschool
                    </router-link>
                    <router-link to="/pakketen" class="menu-item no-mega">
                        <p>Pakketen</p>
                    </router-link>
                    <router-link to="/rijbewijs" class="menu-item no-mega">
                        <p>Rijbewijs</p>
                    </router-link>
                    <!-- na 3 op mobile in hamburger menu -->
                    <router-link to="/contact" class="menu-item no-mega">
                        <p>Contact</p>
                    </router-link>
                    <router-link to="/proefles" class="menu-item no-mega proefles">
                        <p>Gratis proefles</p>
                    </router-link>
                   
                    <!-- Conditional rendering based on logged_in -->
                    <a v-if="!this.user" href="#" class="menu-item no-mega proefles">
                        <p>Gratis proefles</p>
                    </a>
                    <!-- Conditionally show or hide login.png -->
                    <a v-if="!this.user" href="/login" class="menu-item no-mega">
                        <img src="../../../../storage/img/login.png" class="login" alt="">
                    </a>
                    <a v-if="this.user" href="#" v-on:click="on_logout()" class="menu-item no-mega">
                        <img src="../../../../storage/img/logout.png" class="login" alt="">
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
<<<<<<< HEAD
    background-image: linear-gradient(var(--rood-licht), transparent);
=======
    /* background-image: linear-gradient(var(--rood-licht), transparent); */
    background-color: var(--rood-licht);
    /* position: absolute; */
>>>>>>> 45e166c3665edf96c2d8b8e9f2c4008412809a1a
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




/* base knop styling */

.knop {
    cursor: pointer;
    text-decoration: none;
    padding: 0.75rem 1.6rem 0.75rem 1.6rem;
    width: fit-content;
    display: flex;
    min-width: 10rem;
}

.knop-tekst {
    transition: 0.2s;
    user-select: none;
}

.knop:hover .knop-tekst {
    margin-left: 4px;
    transition: 0.2s;
}

/* banner knop */

.banner-knop {
    width: fit-content;
    margin-right: auto;
    margin-left: auto;
}

@media (max-width: 680px) and (min-width: 576px) {
    .banner-knop .knop {
        padding: 0.75rem 0rem 0.75rem 0.75rem;
    }
}

/* default knop */

.knop-default {
    background-color: var(--rood-licht);
    transition: 0.2s;
    border: 1px var(--background-black) solid;
}

.knop-default .knop-tekst {
    color: var(--text-color-white);
}

.knop-default:hover {
    background-color: var(--rood-donker);
    transition: 0.2s;
}
</style>
