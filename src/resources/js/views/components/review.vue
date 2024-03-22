<script>
export default{
    
}
</script>

<template>
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
                    <img src="images/placeholder.png" alt="placeholder">
                </div>
                <!-- multicolumn tekst -->
                <div class="multicolumn-tekst">
                    <h2>Saul Goodman</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi natus tempora impedit
                        voluptatum ullam nostrum laborum quod ipsa sunt numquam nemo minus aspernatur, fugiat temporibus
                        quis atque excepturi qui corrupti corporis quia eum consequatur!</p>
                </div>
                <!-- multicolumn knop -->
                <div class="multicolumn-knop knop-container">
                    <a class="knop knop-default" href="#">
                        <span class="knop-tekst"> Klik op mij!</span>
                    </a>
                </div>
            </div>
            <div class="multicolumn-rij">
                <!-- multicolumn afbeelding -->
                <div class="multicolumn-afbeelding">
                    <img src="images/placeholder.png" alt="placeholder">
                </div>
                <!-- multicolumn tekst -->
                <div class="multicolumn-tekst">
                    <h2>Gus Fring</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi natus tempora impedit
                        voluptatum ullam nostrum laborum quod ipsa sunt numquam nemo minus aspernatur, fugiat temporibus
                        quis atque excepturi qui corrupti corporis quia eum consequatur!</p>
                </div>
                <!-- multicolumn knop -->
                <div class="multicolumn-knop knop-container">
                    <a class="knop knop-default" href="#">
                        <span class="knop-tekst"> Klik op mij!</span>
                    </a>
                </div>
            </div>
            <div class="multicolumn-rij">
                <!-- multicolumn afbeelding -->
                <div class="multicolumn-afbeelding">
                    <img src="images/placeholder.png" alt="placeholder">
                </div>
                <!-- multicolumn tekst -->
                <div class="multicolumn-tekst">
                    <h2>Walter White</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi natus tempora impedit
                        voluptatum ullam nostrum laborum quod ipsa sunt numquam nemo minus aspernatur, fugiat temporibus
                        quis atque excepturi qui corrupti corporis quia eum consequatur!</p>
                </div>
                <!-- multicolumn knop -->
                <div class="multicolumn-knop knop-container">
                    <a class="knop knop-default" href="#">
                        <span class="knop-tekst"> Klik op mij!</span>
                    </a>
                </div>
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

.multicolumn-tekst{
    text-align: center;
}

.multicolumn-knop{
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