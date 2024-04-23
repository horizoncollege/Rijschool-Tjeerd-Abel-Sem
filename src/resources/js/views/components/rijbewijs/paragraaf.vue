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
            <h2 class="paragraaf-subheader">Waarom eigenlijk?</h2>
            <h2 class="paragraaf-header">Rijbewijs halen</h2>
          </div>
          <div class="paragraaf-tekst-content">
            <h2 class="content-subheader">Ontdek De Vrijheid van Rijden</h2>
            <p>Het behalen van je rijbewijs is meer dan alleen een juridische vereiste of een symbolische mijlpaal. Het
              is een stap naar onafhankelijkheid, zelfredzaamheid en vrijheid op de weg, ongeacht je persoonlijke
              omstandigheden. Zelfs als je te maken hebt met een handicap, is het halen van je rijbewijs een krachtig
              statement van empowerment en mogelijkheden.</p>
            <p>Voor mensen met een handicap opent het behalen van een rijbewijs een wereld van mogelijkheden. Het stelt
              je in staat om zelfstandig naar je werk te gaan, vrienden te bezoeken, boodschappen te doen, en deel te
              nemen aan activiteiten die voor anderen vanzelfsprekend zijn. Het biedt een gevoel van autonomie en
              controle over je eigen leven, waardoor je niet langer afhankelijk bent van anderen voor vervoer.</p>
          </div>
        </div>
        <div class="paragraaf-afbeelding">
          <img src="../../../../../storage/img/afbeelding4.jpg" alt="placeholder">
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