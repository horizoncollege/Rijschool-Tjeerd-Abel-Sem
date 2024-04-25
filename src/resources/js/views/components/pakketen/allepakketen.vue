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
      <div class="multicolumn-blok">
        <div
          class="multicolumn-rij"
          v-for="pakket in pakketen"
          :key="pakket.id"
        >
        <div class="pakket-details">
          <h2>{{ pakket.title }}</h2>
          <p><strong>Aantal lessen:</strong> {{ pakket.aantal_lessen }}</p>
          <p><strong>Auto:</strong> {{ pakket.auto }}</p>
          <p><strong>Pakketprijs:</strong> {{ pakket.prijs }}</p>
          <p><strong>Prijs per losse les:</strong> {{ pakket.prijs_los }}</p>
          <div class="multicolumn-knop knop-container">
            <router-link
              class="knop knop-default"
              :to="{ path: '/pakket-details/' + pakket.id }"
            >
              <span class="knop-tekst">Bekijken</span>
            </router-link>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.multicolumn-rij {
  background: var(--background-grey);
  border-radius: 10px;
}

.pakket-details{
    text-align: center;
}

.multicolumn-blok{
    gap: 1.5rem;
}


</style>