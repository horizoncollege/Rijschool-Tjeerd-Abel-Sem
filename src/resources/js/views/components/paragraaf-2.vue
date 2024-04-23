<script>
export default {

}
</script>

<template>
    <div class="content-row">
        <div class="content-blok">
            <!-- paragraaf met afbeelding -->
            <div class="paragraaf afbeelding-ja afbeelding-links">
                <div class="paragraaf-tekst">
                    <div class="paragraaf-headers">
                        <h2 class="paragraaf-subheader">Ervaar Rijden op Jouw Voorwaarden</h2>
                        <h2 class="paragraaf-header">Gratis Proefles</h2>
                    </div>
                    <div class="paragraaf-tekst-content">
                        <p> Bij Rijschool Vierkante Wielen geloven we in het belang van een goede start op jouw reis
                            naar rijbewijsvrijheid. Daarom bieden we een gratis proefles aan, zodat je kunt ervaren hoe
                            onze unieke benadering van rijlessen werkt.</p>
                        <h2 class="content-subheader">Kennis maken</h2>
                        <p>Tijdens de proefles maak je kennis met onze instructeurs en ervaar je eerste hand hoe onze
                            lessen zijn afgestemd op jouw behoeften en mogelijkheden. Of je nu worstelt met fysieke
                            beperkingen, mobiliteitsproblemen, of gewoon wat extra ondersteuning nodig hebt, onze
                            instructeurs zullen er zijn om je te begeleiden op jouw rijavontuur.</p>
                    </div>
                    <!-- knop voor paragraaf -->
                    <div class="paragraaf-knop knop-container">
                        <router-link to="/proefles" class="knop knop-default" href="#">
                            <span class="knop-tekst"> Inschrijven!</span>
                        </router-link>
                    </div>
                </div>
                <div class="paragraaf-afbeelding">
                    <img src="../../../../storage/img/afbeelding2.jpg" alt="placeholder">
                </div>
            </div>
        </div>
    </div>

</template>

<style>
/* paragraaf generic styling */

.paragraaf-header {
    font-size: 3rem;
    line-height: 2.5rem;
    padding-bottom: 5px;
    font-weight: 800;
}

.paragraaf-subheader {
    font-size: 1.5rem;
    line-height: 1rem;
    font-weight: 600;
}

.content-subheader {
    font-size: 1.25rem;
    line-height: 1rem;
    font-weight: 600;
}

/* styling voor paragrafen tekst plus afbeelding */

.afbeelding-rechts {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    gap: 2rem;
}

.afbeelding-links {
    display: flex;
    flex-direction: row-reverse;
    flex-wrap: nowrap;
    gap: 2rem;
}

/* paragraaf afbeelding */
.paragraaf-afbeelding {
  width: 50%;
  justify-content: center;
  display: flex;
  max-height: 350px;
}

.paragraaf-afbeelding img {
  object-fit: contain;
  border-radius: 10px;

}


.paragraaf-tekst {
    width: 50%;
}


@media (max-width:992px) {

    /* styling paragraaf met afbeelding */
    .afbeelding-ja .paragraaf-tekst {
        width: 90%;
        margin: auto;
    }

    .paragraaf-afbeelding {
        width: 100%;
        justify-content: center;
        display: flex;
    }

    .afbeelding-ja {
        display: flex;
        flex-wrap: wrap;
    }

    .afbeelding-ja .paragraaf-tekst {
        width: 90%;
    }

    /* styling paragraaf zonder afbeelding */
    .afbeelding-nee .paragraaf-tekst {
        width: 90%;
        margin: auto;
    }

    /* Styling paragraaf video */
    .paragraaf-video {
        width: 650px;
        margin: auto;
    }

}
</style>