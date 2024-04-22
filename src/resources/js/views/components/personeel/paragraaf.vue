<script>
export default {

}
</script>

<template>

  <div class="content-row">
    <div class="content-blok">
      <!-- paragraaf met afbeelding -->
      <div class="paragraaf afbeelding-ja afbeelding-links">
        <div class="paragraaf-tekst">
          <div class="paragraaf-headers">
            <h2 class="paragraaf-subheader">Eigenaar</h2>
            <h2 class="paragraaf-header">Mischa</h2>
          </div>
          <div class="paragraaf-tekst-content">
            <p>Als de drijvende kracht achter Rijschool Vierkante Wielen, is Mischa een gepassioneerde
              voorvechter van inclusiviteit en toegankelijkheid op de weg. Met een achtergrond in rijonderwijs en een
              diepgaand begrip van de uitdagingen waarmee mensen met fysieke beperkingen worden geconfronteerd, heeft
              Mischa zijn missie gemaakt om een rijopleiding aan te bieden die voor iedereen
              toegankelijk is.</p>
          </div>
          <!-- knop voor paragraaf -->
          <div class="paragraaf-knop knop-container">
            <a class="knop knop-default" href="#">
              <span class="knop-tekst"> Klik op mij!</span>
            </a>
          </div>
        </div>
        <div class="paragraaf-afbeelding">
          <img src="../../../../../storage/img/eigenaar.jpg" alt="placeholder">
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
    flex-wrap: wrap-reverse;
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