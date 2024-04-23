<script>
export default {};
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
        <div class="multicolumn-rij">
          <!-- multicolumn afbeelding -->
          <div class="multicolumn-afbeelding">
            <img
              src="../../../../../storage/img/compact.jpg"
              alt="placeholder"
            />
          </div>
          <!-- multicolumn tekst -->
          <div class="multicolumn-tekst">
            <h2>De Aangepaste Compacte Auto</h2>
            <p>
              Deze auto is speciaal ontworpen en aangepast voor mensen met
              mobiliteitsbeperkingen. Met extra ruimte voor
              rolstoeltoegankelijkheid en handbedieningen voor gas en remmen,
              biedt deze auto een comfortabele en veilige rijervaring voor
              mensen met verschillende fysieke uitdagingen.
            </p>
          </div>
        </div>
        <!-- eind -->
        <div class="multicolumn-rij">
          <!-- multicolumn afbeelding -->
          <div class="multicolumn-afbeelding">
            <img
              src="../../../../../storage/img/elektrisch.jpg"
              alt="placeholder"
            />
          </div>
          <!-- multicolumn tekst -->
          <div class="multicolumn-tekst">
            <h2>De Elektrische Lesauto</h2>
            <p>
              Deze milieuvriendelijke auto is voorzien van geavanceerde
              technologieën en biedt een stille en soepele rijervaring. Met zijn
              elektrische aandrijving en automatische transmissie is deze auto
              ideaal voor leerlingen die zich willen concentreren op het
              ontwikkelen van hun rijvaardigheden zonder afleiding van
              motorlawaai.
            </p>
          </div>
        </div>
        <!-- eind -->
        <div class="multicolumn-rij">
          <!-- multicolumn afbeelding -->
          <div class="multicolumn-afbeelding">
            <img
              src="../../../../../storage/img/crossover.jpg"
              alt="placeholder"
            />
          </div>
          <!-- multicolumn tekst -->
          <div class="multicolumn-tekst">
            <h2>De Hoogte Verstelbare Crossover</h2>
            <p>
              Deze auto is uitgerust met een hoogteverstelbare ophanging,
              waardoor het gemakkelijk is om de zithoogte aan te passen aan de
              behoeften van de bestuurder. Dit maakt het ideaal voor leerlingen
              met mobiliteitsproblemen of mensen die behoefte hebben aan een
              hogere zitpositie voor een beter zicht op de weg.
            </p>
          </div>
        </div>
        <!-- eind -->
        <div class="multicolumn-rij">
          <!-- multicolumn afbeelding -->
          <div class="multicolumn-afbeelding">
            <img src="../../../../../storage/img/sedan.jpg" alt="placeholder" />
          </div>
          <!-- multicolumn tekst -->
          <div class="multicolumn-tekst">
            <h2>De Adaptieve Technologie Sedan</h2>
            <p>
              Deze sedan is voorzien van geavanceerde adaptieve technologieën,
              zoals automatische noodremmen, dodehoekdetectie en
              parkeerassistentie. Deze functies bieden extra veiligheid en
              ondersteuning voor leerlingen tijdens het leerproces en helpen hen
              om zelfverzekerder en zelfstandiger achter het stuur te zitten.
            </p>
          </div>
        </div>
        <!-- eind multicolumn content -->
      </div>
    </div>
  </div>
</template>

<style scoped>
/* multicolumn styling */
.multicolumn-rij {
  min-width: 300px;
  max-width: 300px;
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
  border-radius: 10px;
  height: 180px;
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

@media (max-width: 768px) {
  .multicolumn-blok .multicolumn-rij {
    width: 50%;
    flex: 0 0 50%;
  }
}

@media (min-width: 768px) {
  .multicolumn-blok .multicolumn-rij {
    width: 25%;
    flex: 0 0 25%;
  }
}
</style>