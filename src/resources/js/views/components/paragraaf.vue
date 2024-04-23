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
            <h2 class="paragraaf-subheader">Ontdek de Vrijheid van Rijden</h2>
            <h2 class="paragraaf-header"></h2>
          </div>
          <div class="paragraaf-tekst-content">
            <p>
              Bij Rijschool Vierkante Wielen begrijpen we dat de weg naar het behalen van je rijbewijs niet altijd
              rechtlijnig is, vooral niet als je te maken hebt met fysieke beperkingen of andere uitdagingen die rijden
              moeilijk maken. Daarom bieden we een unieke benadering van rijlessen die volledig is aangepast aan jouw
              behoeften en mogelijkheden.</p>
            <h2 class="content-subheader">Voor Iedereen, Ongeacht de Uitdaging</h2>
            <p>Of je nu worstelt met mobiliteitsproblemen, fysieke beperkingen, of gewoon wat extra ondersteuning nodig
              hebt, bij Rijschool Vierkante Wielen verwelkomen we iedereen. Onze instructeurs zijn speciaal getraind om
              te werken met diverse uitdagingen, van rolstoelgebruikers tot mensen met autisme of andere cognitieve
              verschillen.</p>
          </div>
          <!-- knop voor paragraaf -->
          <div class="paragraaf-knop knop-container">
            <router-link to="/rijschool" class="knop knop-default" href="#">
              <span class="knop-tekst"> Meer over de rijschool</span>
            </router-link>
          </div>
        </div>
        <div class="paragraaf-afbeelding">
          <img src="../../../../storage/img/afbeelding1.jpg" alt="placeholder">
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