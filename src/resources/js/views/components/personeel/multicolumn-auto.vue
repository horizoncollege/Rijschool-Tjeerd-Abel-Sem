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
                    <h2>Onze auto's</h2>
                </div>
            </div>
            <!-- multicolumn content -->
            <div class="multicolumn-blok">
                <!-- begin multicolumn content -->
                <div class="verdeling verdeling-1">
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../../storage/img/placeholder.png" alt="placeholder">
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

                    </div>
                    <!-- eind -->
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../../storage/img/placeholder.png" alt="placeholder">
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

                    </div>
                </div>
                <div class="verdeling verdeling-2">
                    <!-- eind -->
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../../storage/img/placeholder.png" alt="placeholder">
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

                    </div>
                    <!-- eind -->
                    <div class="multicolumn-rij">
                        <!-- multicolumn afbeelding -->
                        <div class="multicolumn-afbeelding">
                            <img src="../../../../../storage/img/placeholder.png" alt="placeholder">
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
                    </div>
                    <!-- eind multicolumn content -->
                </div>
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
    margin: 10px;
}

.multicolumn-blok {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: center;
}

.multicolumn-afbeelding img {
    width: 80%;
}

.multicolumn-afbeelding {
    justify-content: center;
    display: flex;
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

.verdeling{

}

.verdeling-1{

}

.verdeling-2{

}

</style>