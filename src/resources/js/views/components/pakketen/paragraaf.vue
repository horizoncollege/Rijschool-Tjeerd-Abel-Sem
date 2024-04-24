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
            <h2 class="paragraaf-header">Ontdek Het Perfecte Pakket voor Jouw Rijbehoeften</h2>
          </div>
          <div class="paragraaf-tekst-content">
            <p>Bij Rijschool Vierkante Wielen begrijpen we dat geen twee studenten hetzelfde zijn, en daarom bieden we
              een scala aan pakketten die zijn ontworpen om te voldoen aan verschillende behoeften en budgetten. Of je
              nu op zoek bent naar een uitgebreid lespakket met extra ondersteuning, of liever een meer flexibele optie
              wilt, wij hebben iets voor jou.</p>
            <p>Onze pakketten variëren in duur, intensiteit en inbegrepen diensten, zodat je kunt kiezen wat het beste
              bij jou past. Of je nu op zoek bent naar een basispakket met een standaard aantal lessen, of liever een
              uitgebreider pakket met extra training en begeleiding wilt, we hebben opties voor elk niveau van
              rijervaring en comfort.</p>
            <p>Bekijk onze pakketten op onze website of neem contact met ons op voor meer informatie. Onze vriendelijke
              en deskundige medewerkers staan klaar om je te helpen het perfecte pakket te vinden dat past bij jouw
              unieke behoeften en doelen.</p>
          </div>
          <!-- knop voor paragraaf -->
          <div class="paragraaf-knop knop-container">
            <a class="knop knop-default" href="#">
              <span class="knop-tekst"> Klik op mij!</span>
            </a>
          </div>
        </div>
        <div class="paragraaf-afbeelding">
          <img src="../../../../../storage/img/placeholder.png" alt="placeholder">
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
}

.paragraaf-afbeelding img {
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