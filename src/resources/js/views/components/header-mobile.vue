<script>
export default {

}
</script>

<template>
    <div class="headermobile">
        <header class="header header-mobile">
            <div class="header-container">
                <div class="    -container">
                    <div class="logo">
                        <a href="#">
                            <img src="../../../../storage/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- navigatie -->
                <div class="menu nav-bar">
                    <!-- Normale link -->
                    <a href="#" class="menu-item no-mega">
                        <p>Rijschool</p>
                    </a>
                    <a href="#" class="menu-item no-mega">
                        <p>Pakketen</p>
                    </a>
                    <a href="#" class="menu-item no-mega proefles">
                        <p>Gratis proefles</p>
                    </a>
                    <a href="#" class="menu-item no-mega">
                        <img src="../../../../storage/img/hamburger_icon.png" alt="=">
                    </a>
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

/* slider menu styling */
.header-mobile,
.mobiele-slider {
    display: none;
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
    .menu-item img{
        width: 33px;
    }

    .header-desktop {
        display: none;
    }

    .header-mobile {
        display: block;
        background-image: linear-gradient(var(--rood-licht), transparent);
        position: absolute;
        width: 100%;
    }

    .header-container {
        flex-direction: unset;
        flex-wrap: nowrap;
    }

    /* slider menu */
    .slide-menu i {
        font-size: 2.5rem;
    }

    .slide-menu {
        margin-top: auto;
        margin-bottom: auto;
    }

    .slide-menu-button {
        background-color: transparent;
        color: var(--blauw-licht);
    }

    .dropdown:hover {
        cursor: pointer;
    }

    .mobiele-slider {
        position: fixed;
        z-index: 2;
        top: 0;
        left: 0;
        width: 0;
        height: 100vh;
        display: block;
        background: rgba(0, 0, 0, 0.5);
        transition: 0.3s;
        overflow-x: hidden;
        width: 60%;
        max-width: 450px;
    }

    .slider-content {
        z-index: 4;
        position: relative;
        top: 15%;
        width: v-bind(sliderWidth);
        text-align: center;
    }

    .slider-content a {
        padding: 8px;
        text-decoration: none;
        font-size: 3rem;
        color: #f1f1f1;
        display: block;
        transition: 0.3s;
    }

    .sluit-knop {
        position: absolute;
        top: 3rem;
        right: 45px;
        font-size: 5rem;
        cursor: pointer;
        color: var(--background-white);
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
</style>