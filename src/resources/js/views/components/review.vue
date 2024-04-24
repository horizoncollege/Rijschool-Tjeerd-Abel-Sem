<script>
export default {

}
</script>

<template>
    <div class="content-row">
        <div class="content-blok">
            <div class="multicolumn-blok">
                <div class="multicolumn-rij">
                    <div class="multicolumn-tekst">
                        <h1 class="paragraaf-header">
                            20 jaar ervaring
                        </h1>
                    </div>
                </div>
                <div class="multicolumn-rij">
                    <div class="multicolumn-tekst">
                        <h1 class="paragraaf-header">
                            250 geslaagden vorig jaar
                        </h1>
                    </div>
                </div>
                <div class="multicolumn-rij">
                    <div class="multicolumn-tekst">
                        <h1 class="paragraaf-header">
                            2500 Reviews
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-row">
        <div class="content-blok">
            <!-- multicolumn content -->
            <div class="multicolumn-heading">
                <div class="paragraaf-subheader multicolumn">
                    <h2>Reviews van geslaagden</h2>
                </div>
                <div class="paragraaf-header multicolumn">
                    <h2></h2>
                </div>
            </div>
            <div class="multicolumn-blok">
                <!-- begin multicolumn content -->
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../storage/img/sterren.png" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <h2>Kimi</h2>
                        <p>Fantastische ervaring! De instructeurs bij Rijschool Vierkante Wielen zijn ongelooflijk
                            geduldig en begripvol. Ik had moeite om mijn zelfvertrouwen achter het stuur op te bouwen
                            vanwege mijn fysieke beperking, maar ze hebben me echt geholpen om mijn angst te overwinnen.
                            Dankzij hen heb ik nu mijn rijbewijs en voel ik me vol vertrouwen op de weg!</p>
                    </div>
                    <!-- multicolumn knop -->
                    <!-- <div class="multicolumn-knop knop-container">
                        <a class="knop knop-default" href="#">
                            <span class="knop-tekst"> Klik op mij!</span>
                        </a>
                    </div> -->
                </div>
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../storage/img/sterren.png" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <h2>Niek</h2>
                        <p>Uitstekende service! Ik ben zo dankbaar voor de flexibiliteit en aanpassingen die Rijschool
                            Vierkante Wielen bood tijdens mijn rijlessen. Als rolstoelgebruiker had ik me zorgen gemaakt
                            over hoe ik achter het stuur zou kunnen zitten, maar ze hebben alles perfect geregeld. Hun
                            toewijding aan inclusiviteit is bewonderenswaardig en maakte mijn rijervaring echt geweldig.
                        </p>
                    </div>
                    <!-- multicolumn knop -->
                    <!-- <div class="multicolumn-knop knop-container">
                        <a class="knop knop-default" href="#">
                            <span class="knop-tekst"> Klik op mij!</span>
                        </a>
                    </div> -->
                </div>
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../storage/img/sterren.png" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <h2>Storm</h2>
                        <p>Geweldige rijschool! De instructeurs zijn niet alleen professioneel, maar ook buitengewoon
                            ondersteunend. Ik had moeite met bepaalde aspecten van het autorijden vanwege mijn autisme,
                            maar ze namen de tijd om mijn behoeften te begrijpen en pasten de lessen daarop aan. Ik raad
                            Rijschool Vierkante Wielen ten zeerste aan aan iedereen die wat extra hulp en begrip nodig
                            heeft tijdens hun rijopleiding.</p>
                    </div>
                    <!-- multicolumn knop -->
                    <!-- <div class="multicolumn-knop knop-container">
                        <a class="knop knop-default" href="#">
                            <span class="knop-tekst"> Klik op mij!</span>
                        </a>
                    </div> -->
                </div>
                <!-- eind multicolumn content -->
            </div>
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
    justify-content: space-evenly;
}

.multicolumn-afbeelding img {
    width: 100%;
}

.multicolumn-tekst {
    text-align: center;
}

.multicolumn-knop {
    width: fit-content;
    margin: auto;
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