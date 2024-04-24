<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import banner from "./components/banner.vue";
import paragraaf from "./components/paragraaf.vue";
import review from "./components/review.vue";
import footerdesktop from "./components/footer.vue";
import pakketen from "./components/pakketen.vue";
import team from "./components/team.vue"
import paragraaf2 from "./components/paragraaf-2.vue";

export default {
  components: {
    headerdesktop,
    headermobile,
    banner,
    pakketen,
    paragraaf,
    review,
    team,
    footerdesktop,
    paragraaf2
  }
}
</script>
<template>
  <headerdesktop></headerdesktop>
  <headermobile></headermobile>
  <banner></banner>
  <pakketen></pakketen>
  <paragraaf></paragraaf>
  <review></review>
  <team></team>
  <paragraaf2></paragraaf2>
  <footerdesktop></footerdesktop>
</template>

<style>
body {
  margin: 0;
}

.content-row {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.content-blok {
  width: 95%;
  max-width: 1400px;
  margin: auto;
}
</style>
