<script>
export default {

}
</script>

<template>
    <div class="content-row">
        <div class="content-blok">
            <div class="multicolumn-heading">
                <div class="paragraaf-subheader multicolumn">
                    <h2></h2>
                </div>
                <div class="paragraaf-header multicolumn">
                    <h2>Onze instructeurs</h2>
                </div>
            </div>

            <!-- multicolumn content -->
            <div class="multicolumn-blok">
                <!-- begin multicolumn content -->
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding/video -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../../storage/img/instructeur1.jpg" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <h2>Rina</h2>
                        <p>Als instructeur bij Rijschool Vierkante Wielen ben ik gemotiveerd door de vreugde die
                            voortkomt uit het empoweren van anderen. Als iemand met een fysieke beperking begrijp ik de
                            uitdagingen van het leren rijden met beperkingen maar al te goed. Door mijn ervaring te
                            delen en anderen te begeleiden, hoop ik hen te helpen hun eigen vrijheid en
                            onafhankelijkheid op de weg te vinden.</p>
                    </div>

                </div>
                <!-- eind -->
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../../storage/img/instructeur2.jpg" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <h2>Piet</h2>
                        <p>Het is mijn passie om anderen te helpen hun potentieel te bereiken, ongeacht de obstakels die
                            ze tegenkomen. Als instructeur bij Rijschool Vierkante Wielen kan ik mijn liefde voor
                            autorijden combineren met mijn verlangen om een verschil te maken in het leven van mensen.
                            Elke dag zie ik mijn studenten groeien en zelfverzekerder worden achter het stuur, en dat
                            geeft me een enorme voldoening.</p>
                    </div>

                </div>
                <!-- eind -->
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../../storage/img/instructeur3.jpg" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <h2>Fred</h2>
                        <p>Voor mij draait het allemaal om het creëren van een inclusieve en ondersteunende omgeving
                            waarin iedereen de kans krijgt om te leren en te groeien. Als instructeur bij Rijschool
                            Vierkante Wielen kan ik mijn vaardigheden en expertise inzetten om mensen met verschillende
                            achtergronden en uitdagingen te helpen slagen. Het is een voorrecht om deel uit te maken van
                            hun reis naar rijbewijsvrijheid en zelfstandigheid.</p>
                    </div>
                </div>
                <!-- eind -->
                <!-- eind multicolumn content -->
            </div>
        </div>
    </div>
</template>

<style scoped>
/* multicolumn styling */
.multicolumn-rij {
    min-width: 320px;
    max-width: 340px;
    width: 25%;
    background: var(--background-grey);
    padding: 5px;
    border-radius: 5px;
}

.multicolumn-blok {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: center;
}

.multicolumn-afbeelding img {
    width: 100%;
    border-radius: 10px;
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