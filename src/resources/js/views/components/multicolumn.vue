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
            <swiper-container class="mySwiper" loop="true" space-between="0" centered-slides="true"
                autoplay-delay="5000" autoplay-disable-on-interaction="false">
                <!-- multicolumn content -->
                <div class="multicolumn-blok">
                    <!-- begin multicolumn content -->
                    <swiper-slide>

                        <div class="multicolumn-rij">
                            <!-- multicolumn afbeelding/video -->
                            <div class="multicolumn-afbeelding">
                                <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                            </div>
                            <!-- multicolumn tekst -->
                            <div class="multicolumn-tekst">
                                <h2>Top tekst</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi natus tempora
                                    impedit
                                    voluptatum ullam nostrum laborum quod ipsa sunt numquam nemo minus aspernatur,
                                    fugiat
                                    temporibus
                                    quis atque excepturi qui corrupti corporis quia eum consequatur!</p>
                            </div>
                            <!-- multicolumn knop -->
                            <div class="multicolumn-knop knop-container">
                                <a class="knop knop-default" href="#">
                                    <span class="knop-tekst"> Klik op mij!</span>
                                </a>
                            </div>
                        </div>
                    </swiper-slide>
                    <!-- eind -->
                    <swiper-slide>
                        <div class="multicolumn-rij">
                            <!-- multicolumn afbeelding -->
                            <div class="multicolumn-afbeelding">
                                <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                            </div>
                            <!-- multicolumn tekst -->
                            <div class="multicolumn-tekst">
                                <h2>Top tekst</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi natus tempora
                                    impedit
                                    voluptatum ullam nostrum laborum quod ipsa sunt numquam nemo minus aspernatur,
                                    fugiat
                                    temporibus
                                    quis atque excepturi qui corrupti corporis quia eum consequatur!</p>
                            </div>
                            <!-- multicolumn knop -->
                            <div class="multicolumn-knop knop-container">
                                <a class="knop knop-default" href="#">
                                    <span class="knop-tekst"> Klik op mij!</span>
                                </a>
                            </div>
                        </div>
                    </swiper-slide>
                    <!-- eind -->
                    <swiper-slide>
                        <div class="multicolumn-rij">
                            <!-- multicolumn afbeelding -->
                            <div class="multicolumn-afbeelding">
                                <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                            </div>
                            <!-- multicolumn tekst -->
                            <div class="multicolumn-tekst">
                                <h2>Top tekst</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi natus tempora
                                    impedit
                                    voluptatum ullam nostrum laborum quod ipsa sunt numquam nemo minus aspernatur,
                                    fugiat
                                    temporibus
                                    quis atque excepturi qui corrupti corporis quia eum consequatur!</p>
                            </div>
                            <!-- multicolumn knop -->
                            <div class="multicolumn-knop knop-container">
                                <a class="knop knop-default" href="#">
                                    <span class="knop-tekst"> Klik op mij!</span>
                                </a>
                            </div>
                        </div>
                    </swiper-slide>
                    <!-- eind -->
                    <swiper-slide>
                        <div class="multicolumn-rij">
                            <!-- multicolumn afbeelding -->
                            <div class="multicolumn-afbeelding">
                                <img src="../../../../storage/img/placeholder.png" alt="placeholder">
                            </div>
                            <!-- multicolumn tekst -->
                            <div class="multicolumn-tekst">
                                <h2>Top tekst</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi natus tempora
                                    impedit
                                    voluptatum ullam nostrum laborum quod ipsa sunt numquam nemo minus aspernatur,
                                    fugiat
                                    temporibus
                                    quis atque excepturi qui corrupti corporis quia eum consequatur!</p>
                            </div>
                            <!-- multicolumn knop -->
                            <div class="multicolumn-knop knop-container">
                                <a class="knop knop-default" href="#">
                                    <span class="knop-tekst"> Klik op mij!</span>
                                </a>
                            </div>
                        </div>
                    </swiper-slide>
                    <!-- eind multicolumn content -->
                </div>
            </swiper-container>
        </div>
    </div>
</template>

<style>
/* multicolumn styling */
.multicolumn-rij {
    min-width: 320px;
    max-width: 340px;
    width: 25%;
}

.multicolumn-blok {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: center;
}

.multicolumn-afbeelding img {
    width: 100%;
}

/* multicolumn header  boven de blokken*/
.paragraaf-subheader.multicolumn {
    line-height: 2rem;
}

.paragraaf-header.multicolumn {
    line-height: 3rem;
}

.multicolumn-heading {
    display: flex;
    flex-direction: column;
    text-align: center;
    padding-bottom: 0.5rem;
}
</style>