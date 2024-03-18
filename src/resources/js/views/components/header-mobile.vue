<script>


</script>

<template>
    <div class="headermobile">
        <header class="header header-mobile">
            <div class="header-container">
                <div class="logo-container">
                    <div class="logo">
                        <a href="#">
                            <h1>Template</h1>
                        </a>
                    </div>
                </div>
                <!-- slide menu knop -->
                <div class="slide-menu">
                    <a class="slide-menu-button" v-on:click="openMenu">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <!-- navigatie -->
                <div class="menu nav-bar">
                    <!-- Normale link -->
                    <a href="#" class="menu-item no-mega">
                        <p>pagina-1</p>
                    </a>
                    <a href="#" class="menu-item no-mega">
                        <p>pagina-2</p>
                    </a>
                    <a href="#" class="menu-item no-mega">
                        <p>pagina-3</p>
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
        flex-direction: column;
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

}

@media (max-width: 992px) {
    .header-desktop {
        display: none;
    }

    .header-mobile {
        display: block;
        background-color: var(--background-black);
    }

    .header-container {
        flex-direction: unset;
        flex-wrap: wrap;
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

    .mobiele-slider a:hover,
    .mobiele-slider a:focus {
        color: var(--blauw-licht);
    }

    .sluit-knop {
        position: absolute;
        top: 3rem;
        right: 45px;
        font-size: 5rem;
        cursor: pointer;
        color: #f1f1f1;
    }

}


@media (max-width:576px) {
    .mobiele-slider {
        width: 80%;
    }
}
</style>