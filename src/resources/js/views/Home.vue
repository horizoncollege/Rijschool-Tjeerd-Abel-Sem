<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import banner from "./components/banner.vue";
import paragraaf from "./components/paragraaf.vue";
import review from "./components/review.vue";
import footer from "./components/review.vue";

export default {
    components: {
        headerdesktop,
        headermobile,
        banner,
        paragraaf,
        review,
        footer
      
    }
}
</script>
<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <banner></banner>
    <paragraaf></paragraaf>
    <pakketen></pakketen>
    <review></review>
    <h1>womp womp <font-awesome-icon :icon="['fas', 'code']" /></h1>
<footer></footer>

</template>

<style>
body{
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
