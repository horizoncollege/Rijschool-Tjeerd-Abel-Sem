<script>
export default {

}
</script>

<template>
    <swiper-container class="mySwiper" loop="true" space-between="0" centered-slides="true" autoplay-delay="50000"
        autoplay-disable-on-interaction="false">
        <swiper-slide>
            <div class="banner-slide slide-1">
            </div>
            <div class="banner-blok">
                <div class="banner-content banner-content-links">
                    <div class="banner-headers">
                        <h2 class="banner-subheader"></h2>
                        <h2 class="banner-header">Proefles aanvragen?</h2>
                    </div>
                    <div class="banner-tekst-content">
                        <p></p>
                    </div>
                    <!-- knop op banner -->
                    <div class="banner-knop knop-container">
                        <router-link to="/proefles" class="knop knop-default" href="#">
                            <span class="knop-tekst"> Vraag er een aan!</span>
                        </router-link>
                    </div>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="banner-slide slide-2">
            </div>
            <div class="banner-blok">
                <div class=" banner-content banner-content-links">
                    <div class="banner-headers">
                        <h2 class="banner-subheader">Bekijk de pakketen</h2>
                        <h2 class="banner-header"></h2>
                    </div>
                    <div class="banner-tekst-content">
                        <p></p>
                    </div>
                    <div class="banner-knop knop-container">
                        <router-link to="/pakketen" class="knop knop-default" href="#">
                            <span class="knop-tekst"> Bekijk ze!</span>
                        </router-link>
                    </div>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="banner-slide slide-3">
            </div>
            <div class="banner-blok">
                <div class="banner-content banner-content-links">
                    <div class="banner-headers">
                        <h2 class="banner-subheader"></h2>
                        <h2 class="banner-header">Rijbewijs halen</h2>
                    </div>
                    <div class="banner-tekst-content">
                        <p></p>
                    </div>
                    <div class="banner-knop knop-container">
                        <router-link to="/rijbewijs" class="knop knop-default" href="#">
                            <span class="knop-tekst"> Kom meer te weten</span>
                        </router-link>
                    </div>
                </div>
            </div>
        </swiper-slide>
    </swiper-container>
</template>

<style scoped>
.slide-1 {
    background-image: url("../../../../storage/img/rijschool-banner.png");
    background-position-y: 30%;
}

.slide-2 {
    background-image: url("../../../../storage/img/rijschool-banner.png");
}

.slide-3 {
    background-image: url("../../../../storage/img/rijschool-banner.png");
    background-position: 40%;
}

/* paragraaf styling */

.paragraaf-tekst p {
    color: var(--text-color-black);
}

.paragraaf-subheader {
    color: var(--rood-licht);
}

.paragraaf-header {
    color: var(--text-color-black);
}



.banner-slide {
    height: 500px;
    width: 100%;
    background-position-y: center;
    background-position-x: center;
    background-repeat: no-repeat;
    background-size: cover;
}

swiper-container {
    width: 100%;
    height: 100%;
    z-index: 1;
}

swiper-slide {
    text-align: center;
    font-size: 18px;
    background: var(--background-white);
    display: flex;
    justify-content: center;
    align-items: center;
}

swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* banner tekst styling */

.banner-blok {
    height: 100%;
    justify-content: flex-start;
    display: flex;
    width: 95%;
    max-width: 1400px;
    margin: auto;
    position: absolute;
}

.banner-content {
    max-width: 33%;
    height: 100%;
    margin-bottom: auto;
    background: rgba(0, 0, 0, 0.25);

    color: var(--text-color-white);
}

.banner-content-links {
    margin-right: auto;
    margin-left: 0;
}

.banner-content-midden {
    margin-right: auto;
    margin-left: auto;
}

.banner-content-rechts {
    margin-right: 0;
    margin-left: auto;

}

.banner-headers {
    margin-top: 50%;
}

.banner-header {
    font-size: 3rem;
    line-height: 2.5rem;
    padding-bottom: 5px;
    font-weight: 800;
}

.banner-subheader {
    font-size: 1.5rem;
    line-height: 1rem;
    font-weight: 600;
}

.banner-text-content {
    margin-bottom: auto;
}

@media (max-width:576px) {
    /* banner op mobile */

    swiper-slide {
        flex-direction: column;
        background-color: var(--background-black);
    }

    .banner-slide {
        height: 400px;
    }

    .banner-blok {
        position: unset;
        padding-top: 2rem;
        padding-bottom: 2rem;
        color: var(--text-color-white);
    }

    .banner-content {
        margin: auto;
        max-width: 95%;
    }

    .banner-headers {
        margin-top: unset;
    }
}

</style>
