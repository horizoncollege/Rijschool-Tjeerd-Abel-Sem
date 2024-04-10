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
            <h2 class="paragraaf-subheader">subheader</h2>
            <h2 class="paragraaf-header">header</h2>
          </div>
          <div class="paragraaf-tekst-content">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto veniam incidunt modi sit a alias minima.
              Ut expedita sint consectetur corrupti totam, eos fuga reiciendis earum dolore, impedit nihil ab quod illo
              distinctio commodi asperiores. Quidem at aliquid, temporibus sunt explicabo pariatur iure obcaecati,
              dolorem quas incidunt illum, asperiores deserunt. Exercitationem ipsam iure saepe, sunt asperiores ipsum
              provident cum enim, necessitatibus esse maiores excepturi natus pariatur corrupti ex voluptatum.
              Reprehenderit sequi sapiente quia delectus! Aliquid eveniet, numquam quia fuga quasi voluptatum magni
              nostrum vitae impedit cumque tempora qui laboriosam illum iste delectus temporibus? Quos repudiandae
              reiciendis nesciunt obcaecati molestias. Inventore quae error enim quia velit? Fuga asperiores nisi a
              ipsam magni doloribus dolore praesentium, eos nobis quod est, possimus illo facilis aliquam harum
              doloremque architecto at ab rem earum. Atque, eum ex adipisci ea animi recusandae quae iusto dolor
              deserunt, nemo ducimus eos cum! Officiis repellat eum ipsam, facere possimus totam amet quisquam assumenda
              ab harum blanditiis in reprehenderit optio eveniet expedita tempore neque minus eius aut similique
              architecto distinctio iste nam? A cum error alias sint, aperiam reiciendis at nemo est quod corporis ex
              illum. Odit rem voluptas, alias corporis facere facilis impedit saepe. Repellat, odit esse! Neque quod,
              quo fugit animi ipsum quas fuga molestias autem ipsa numquam minima cum illum in eligendi eum voluptatem
              quasi veritatis vero pariatur debitis quis consequuntur dolor? Illo, vel est! Saepe exercitationem
              voluptates amet totam illum dolore a voluptas consequatur, nostrum nesciunt eum delectus, quis vero
              dolorem sint tempore iusto consequuntur velit.</p>
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