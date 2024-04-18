<script>
export default {
    data() {
        return {
            OpenNav: false
        }
    },
    methods: {
        OpenNavFunction: function () {
            this.OpenNav = !this.OpenNav;
        },
        CloseNavFunction: function () {
            this.OpenNav = false;
        }
    }
}

</script>
<template>

    <transition name="slide" mode="out-in">
        <div v-show="OpenNav" id="myNav" class="overlay" :class="{ active: OpenNav }">
            <button class="closebtn" v-on:click="CloseNavFunction">X</button>
            <div class="overlay-content">
                <router-link to="/rijbewijs">Rijbewijs</router-link>
                <router-link to="/contact">Contact</router-link>
                <router-link to="/Login">Login</router-link>
            </div>
        </div>
    </transition>

    <div class="headermobile">
        <header class="header header-mobile">
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
                    <router-link to="/Rijschool" class="menu-item no-mega">
                        <p>Rijschool</p>
                    </router-link>
                    <router-link to="/pakketen" class="menu-item no-mega">
                        <p>Pakketen</p>
                    </router-link>
                    <router-link to="/proefles" class="menu-item no-mega proefles">
                        <p>Gratis proefles</p>
                    </router-link>
                    <button v-on:click="OpenNavFunction" class="menu-item no-mega hamburger-img">
                        <img src="../../../../storage/img/hamburger_icon.png" alt="=">
                    </button>
                </div>
            </div>
        </header>
    </div>
</template>

<style scoped>
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

/* Mobile header styling */
/* 768px  576px*/

@media (min-width:992px) {
    .header-mobile {
        display: none;
    }
}

@media (max-width:992px) {

    .header-container {
        flex-direction: row;
        height: unset;
    }

    .nav-bar {
        width: 100%;
    }

    /* megamenu on mobile */
    .dropdown-content {
        margin-top: 0px;
    }

    .dropdown-row {
        width: 100%;
    }

    .menu-item img {
        width: 33px;
    }

    .header-desktop {
        display: none;
    }

    .header-mobile {
        display: block !important;
        background-image: linear-gradient(var(--rood-licht), transparent);
        position: absolute;
        width: 100%;
    }

    .header-container {
        flex-direction: unset;
        flex-wrap: nowrap;
    }

    .nav-bar {
        font-size: 1rem;
    }

    .menu-item.no-mega:hover {
        font-size: 1.1rem;
        transition: 0.2s ease-in-out;
    }

    .logo img {
        object-fit: contain;
        width: 100px;
    }
}

@media (max-width:576px) {
    .mobiele-slider {
        width: 80%;
    }

    .logo img {
        object-fit: contain;
        width: 75px;
    }

    .nav-bar {
        font-size: 0.9rem;
    }

    .menu-item.no-mega:hover {
        font-size: 1rem;
        transition: 0.2s ease-in-out;
    }

}

/* slider styling */

.slide-enter {
    transform: translateX(-300px);
    transition: all .3s ease-out;

}

.slide-enter-active {
    transition: all .3s ease-out;
}

.slide-leave-active {
    transition: all .3s ease-out;
}

.slide-leave-to {
    transform: translateX(-300px);
}

.overlay {
    display: block;
}

.overlay {
    height: 100%;
    position: fixed;
    z-index: 10;
    top: 0;
    left: 0;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.9);
    overflow-x: hidden;
    width: 60%;
}

.overlay-content {
    position: relative;
    top: 10%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover,
.overlay a:focus,
.overlay .closebtn:hover {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
    background: transparent;
    color: #818181;
}


.hamburger-img {
    background: transparent;
}

@media (max-width: 450px) {
    .overlay a {
        font-size: 20px
    }

    .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
    }

    .overlay {
        width: 100%;
    }
.logo img{
    object-fit: contain;
    width: 50px;
}

}
</style>