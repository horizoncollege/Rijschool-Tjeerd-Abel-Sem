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
                    <h2>Ontmoet het team</h2>
                </div>
            </div>

            <div class="multicolumn-blok team-multicolumn">
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../storage/img/profiel.jpg" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <div class="paragraaf-subheader multicolumn">
                            <h2>Eigenaar</h2>
                        </div>
                        <div class="paragraaf-header multicolumn">
                            <h2>Mischa Joosten</h2>
                        </div>
                    </div>
                </div>
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../storage/img/profiel.jpg" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <div class="paragraaf-subheader multicolumn">
                            <h2>Instructeur</h2>
                        </div>
                        <div class="paragraaf-header multicolumn">
                            <h2>Incineroar</h2>
                        </div>
                    </div>
                </div>
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../storage/img/profiel.jpg" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <div class="paragraaf-subheader multicolumn">
                            <h2>Instructeur</h2>
                        </div>
                        <div class="paragraaf-header multicolumn">
                            <h2>Ash Ketsjup</h2>
                        </div>
                    </div>
                </div>
                <div class="multicolumn-rij">
                    <!-- multicolumn afbeelding -->
                    <div class="multicolumn-afbeelding">
                        <img src="../../../../storage/img/profiel.jpg" alt="placeholder">
                    </div>
                    <!-- multicolumn tekst -->
                    <div class="multicolumn-tekst">
                        <div class="paragraaf-subheader multicolumn">
                            <h2>Instructeur</h2>
                        </div>
                        <div class="paragraaf-header multicolumn">
                            <h2>Barbie</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="paragraaf-knop knop-container">
                <router-link to="/personeel" class="knop knop-default" href="#">
                    <span class="knop-tekst"> Ontmoet iedereen </span>
                </router-link>
            </div>
        </div>
    </div>
</template>

<style>
.team-multicolumn .multicolumn-rij {
    background: var(--background-grey);
    padding: 2rem;
    border-radius: 10px;
}
</style>