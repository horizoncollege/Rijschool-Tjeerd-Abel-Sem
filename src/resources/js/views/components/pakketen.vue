<script>
export default {
  data() {
    return {
      pakketen: [{}],
    };
  },
  mounted() {
    axios
      .get("/api/pakket")
      .then(({ data }) => {
        console.log(data);
        this.pakketen = data;
        console.log(this.pakketen);
      })
      .catch((err) => console.error(err));
  },
};
</script>

<template>
  <div class="content-row">
    <div class="content-blok">
      <div class="multicolumn-heading">
        <div class="paragraaf-subheader multicolumn">
          <h2></h2>
        </div>
        <div class="paragraaf-header multicolumn">
          <h2>Bekijk onze pakketen</h2>
        </div>
      </div>
      <swiper-container
        class="mySwiper pakketen-slider"
        loop="false"
        space-between="100"
        centered-slides="false"
        autoplay-delay="5000000"
        autoplay-disable-on-interaction="false"
      >
        <swiper-slide v-for="pakket in pakketen" :key="pakket.id">
          <div class="multicolumn-rij">
            <!-- multicolumn afbeelding -->
            <div class="multicolumn-afbeelding">
              <!-- <img
                src="../../../../storage/img/{{ pakket.auto }}.jpg"
                alt="placeholder"
              /> -->
            </div>
            <!-- multicolumn tekst -->
            <div class="multicolumn-tekst">
              <h2>{{ pakket.title }}</h2>
              <li>Aantal lessen {{ pakket.aantal_lessen }}</li>
              <li>De losse prijs</li>
              <li>
                <span class="oudeprijs">{{ pakket.prijs_los }}</span>
              </li>
              <li>De pakket prijs</li>
              <li>
                <span class="nieuweprijs">{{ pakket.prijs }}</span>
              </li>
              <!-- <p>
                <span class="oudeprijs">{{ pakket.prijs_los }}</span>
                <span class="nieuweprijs">{{ pakket.prijs }}</span>
              </p> -->
            </div>
            <!-- multicolumn knop -->
            <div class="multicolumn-knop knop-container">
              <router-link class="knop knop-default" :to="{path: '/pakket-details/' + pakket.id}">
                <span class="knop-tekst">Bekijken</span>
              </router-link>
            </div>
          </div>
        </swiper-slide>
        <div class="swiper-pagination"></div>
      </swiper-container>
    </div>
  </div>
</template>

<style scoped>
.swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: var(--background-white);
  display: flex;
  justify-content: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.pakketen-slider swiper-slide {
  background: var(--background-grey);
  padding: 2rem;
  border-radius: 10px;
  width: unset !important;
}

.pakketen-slider img {
  border-radius: 10px;
}

.multicolumn-rij {
  min-width: unset;
  max-width: unset;
  width: unset;
}

.oudeprijs {
  text-decoration: line-through;
  color: red;
}

.nieuweprijs {
  text-decoration: underline;
  font-weight: bold;
  color: green;
}
</style>
