<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import banner from "./components/pakketen/banner.vue";
import paragraaf from "./components/rijbewijs/paragraaf.vue";
import allepakketen from "./components/pakketen/allepakketen.vue"


export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        banner,
        paragraaf,
        allepakketen
    }
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <banner></banner>
    <paragraaf></paragraaf>
<allepakketen></allepakketen>
    <footerdesktop></footerdesktop>
</template>

<style>

</style>