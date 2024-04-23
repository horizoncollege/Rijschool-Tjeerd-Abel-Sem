<script>
export default {};
</script>

<template>
  <div class="content-row">
    <div class="content-blok">
      <!-- paragraaf met afbeelding -->
      <div class="paragraaf afbeelding-ja afbeelding-rechts">
        <div class="paragraaf-tekst">
          <div class="paragraaf-headers">
            <h2 class="paragraaf-subheader"></h2>
            <h2 class="paragraaf-header">Proefles</h2>
          </div>
          <div class="paragraaf-tekst-content">
            <p>
              Ervaar de vrijheid van de weg met Rijschool Vierkante Wielen! Bij
              Rijschool Vierkante Wielen geloven we dat rijden niet alleen een
              vaardigheid is, maar een bron van empowerment en vrijheid voor
              iedereen, ongeacht de uitdagingen waarmee ze geconfronteerd
              worden. Daarom bieden we GRATIS proeflessen aan voor mensen met
              een handicap. Onze ervaren instructeurs zijn getraind om
              individuele behoeften te begrijpen en aan te passen, zodat jij je
              comfortabel en zelfverzekerd voelt achter het stuur. Of je nu
              fysieke, visuele of cognitieve uitdagingen hebt, wij zijn er om je
              te helpen jouw rijdoelen te bereiken. Meld je vandaag nog aan voor
              een GRATIS proefles en ontdek de opwinding en onafhankelijkheid
              van autorijden met Rijschool Vierkante Wielen. Neem de eerste stap
              naar jouw rijavontuur!
            </p>
          </div>
          <!-- knop voor paragraaf -->
          <div class="paragraaf-knop knop-container">
            <a class="knop knop-default" href="#">
              <span class="knop-tekst"> Insschrijven</span>
            </a>
          </div>
        </div>
        <div class="paragraaf-afbeelding">
          <img
            src="../../../../../storage/img/proefles.jpg"
            alt="placeholder"
          />
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

@media (max-width: 992px) {
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