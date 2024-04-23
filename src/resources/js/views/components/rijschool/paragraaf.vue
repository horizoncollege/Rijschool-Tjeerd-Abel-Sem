<script>
export default {

}
</script>

<template>

  <div class="content-row">
    <div class="content-blok">
      <!-- paragraaf met afbeelding -->
      <div class="paragraaf afbeelding-ja afbeelding-rechts">
        <div class="paragraaf-tekst">
          <div class="paragraaf-headers">
            <h2 class="paragraaf-subheader"></h2>
            <h2 class="paragraaf-header"></h2>
          </div>
          <div class="paragraaf-tekst-content">
            <h2 class="content-subheader">Maatwerk Lessen</h2>
            <p>Bij ons draait alles om maatwerk. We geloven dat iedereen het recht heeft om de vrijheid van rijden te
              ervaren, ongeacht de obstakels die ze tegenkomen. Onze lessen worden volledig aangepast aan jouw tempo,
              behoeften en comfortniveau. Of je nu meer tijd nodig hebt om bepaalde manoeuvres onder de knie te krijgen
              of specifieke aanpassingen aan het voertuig nodig hebt, we staan klaar om je te ondersteunen op jouw reis
              naar het behalen van je rijbewijs.</p>
            <h2 class="content-subheader">Empathische Instructeurs</h2>
            <p>Onze instructeurs bij Rijschool Vierkante Wielen zijn niet alleen gekwalificeerde professionals, maar ze
              hebben ook een diepgaand begrip en empathie voor de uitdagingen waarmee je te maken hebt. Ze zullen niet
              alleen je rijvaardigheden ontwikkelen, maar ook een ondersteunende en stimulerende omgeving creëren waarin
              je kunt gedijen.</p>
          </div>
        </div>
        <div class="paragraaf-afbeelding">
          <img src="../../../../../storage/img/afbeelding3.jpg" alt="placeholder">
        </div>
      </div>
    </div>
  </div>

</template>

<style scoped>
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
  border-radius: 10px;
  object-fit: contain;
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