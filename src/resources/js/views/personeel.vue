<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import banner from "./components/personeel/banner.vue";
import paragraaf from "./components/personeel/paragraaf.vue";
import multicolumnpersoneel from "./components/personeel/multicolumn-personeel.vue";
import multicolumnauto from "./components/personeel/multicolumn-auto.vue";





export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        banner,
        paragraaf,
        multicolumnpersoneel,
        multicolumnauto
    }
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <banner></banner>
    <paragraaf></paragraaf>
    <multicolumnpersoneel></multicolumnpersoneel>
    <multicolumnauto></multicolumnauto>
    <footerdesktop></footerdesktop>
</template>

<style></style>