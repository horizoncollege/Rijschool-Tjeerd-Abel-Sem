<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import paragraaf from "./components/rijbewijs/paragraaf.vue";
import banner from "./components/rijbewijs/banner.vue";

export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        banner,
        paragraaf
    }
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <banner></banner>
    <paragraaf></paragraaf>
    <footerdesktop></footerdesktop>
</template>

<style>

</style>