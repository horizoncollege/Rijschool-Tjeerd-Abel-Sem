<script>
export default {

}
</script>

<template>
    <div class="content-row">
        <div class="content-blok">
            <div class="multicolumn-heading">
                <div class="paragraaf-subheader multicolumn">
                    <h2>subheader</h2>
                </div>
                <div class="paragraaf-header multicolumn">
                    <h2>header</h2>
                </div>
            </div>
            <swiper-container class="mySwiper pakketen-slider" loop="false" space-between="100" centered-slides="false"
                autoplay-delay="5000000" autoplay-disable-on-interaction="false">

                <swiper-slide>
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                        </div>
                        <!-- multicolumn tekst -->
                        <div class="multicolumn-tekst">
                            <h2>Pakket 1</h2>
                            <li>Voordeel 1</li>
                            <li>Voordeel 2</li>
                            <li>Voordeel 3</li>
                            <li>Voordeel 4</li>
                            <li>Voordeel 5</li>
                            <p><span class="oudeprijs">oude prijs</span> <span class="nieuweprijs">nieuwe prijs</span>
                            </p>

                        </div>
                        <!-- multicolumn knop -->
                        <div class="multicolumn-knop knop-container">
                            <a class="knop knop-default" href="#">
                                <span class="knop-tekst"> Klik op mij!</span>
                            </a>
                        </div>
                    </div>

                </swiper-slide>
                <swiper-slide>
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                        </div>
                        <!-- multicolumn tekst -->
                        <div class="multicolumn-tekst">
                            <h2>Pakket 1</h2>
                            <li>Voordeel 1</li>
                            <li>Voordeel 2</li>
                            <li>Voordeel 3</li>
                            <li>Voordeel 4</li>
                            <li>Voordeel 5</li>
                            <p><span class="oudeprijs">oude prijs</span> <span class="nieuweprijs">nieuwe prijs</span>
                            </p>
                        </div>
                        <!-- multicolumn knop -->
                        <div class="multicolumn-knop knop-container">
                            <a class="knop knop-default" href="#">
                                <span class="knop-tekst">Meer informatie</span>
                            </a>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                        </div>
                        <!-- multicolumn tekst -->
                        <div class="multicolumn-tekst">
                            <h2>Pakket 1</h2>
                            <li>Voordeel 1</li>
                            <li>Voordeel 2</li>
                            <li>Voordeel 3</li>
                            <li>Voordeel 4</li>
                            <li>Voordeel 5</li>
                            <p><span class="oudeprijs">oude prijs</span> <span class="nieuweprijs">nieuwe prijs</span>
                            </p>

                        </div>
                        <!-- multicolumn knop -->
                        <div class="multicolumn-knop knop-container">
                            <a class="knop knop-default" href="#">
                                <span class="knop-tekst"> Klik op mij!</span>
                            </a>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                        </div>
                        <!-- multicolumn tekst -->
                        <div class="multicolumn-tekst">
                            <h2>Pakket 1</h2>
                            <li>Voordeel 1</li>
                            <li>Voordeel 2</li>
                            <li>Voordeel 3</li>
                            <li>Voordeel 4</li>
                            <li>Voordeel 5</li>
                            <p><span class="oudeprijs">oude prijs</span> <span class="nieuweprijs">nieuwe prijs</span>
                            </p>

                        </div>
                        <!-- multicolumn knop -->
                        <div class="multicolumn-knop knop-container">
                            <a class="knop knop-default" href="#">
                                <span class="knop-tekst"> Klik op mij!</span>
                            </a>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                        </div>
                        <!-- multicolumn tekst -->
                        <div class="multicolumn-tekst">
                            <h2>Pakket 1</h2>
                            <li>Voordeel 1</li>
                            <li>Voordeel 2</li>
                            <li>Voordeel 3</li>
                            <li>Voordeel 4</li>
                            <li>Voordeel 5</li>
                            <p><span class="oudeprijs">oude prijs</span> <span class="nieuweprijs">nieuwe prijs</span>
                            </p>

                        </div>
                        <!-- multicolumn knop -->
                        <div class="multicolumn-knop knop-container">
                            <a class="knop knop-default" href="#">
                                <span class="knop-tekst"> Klik op mij!</span>
                            </a>
                        </div>
                    </div>
                </swiper-slide>
                <div class="swiper-pagination"></div>
            </swiper-container>

        </div>
    </div>
</template>

<style scoped>
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: var(--background-white);
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.pakketen-slider swiper-slide {
    background: var(--background-grey);
    padding: 2rem;
    border-radius: 10px;
    width: unset !important;
}

.pakketen-slider img {
    border-radius: 10px;
}

.multicolumn-rij {
    min-width: unset;
    max-width: unset;
    width: unset;
}

.oudeprijs {
  text-decoration: line-through;
  color: red
}

.nieuweprijs{
    text-decoration: underline;
    font-weight: bold;
    color: green;
}
</style>
