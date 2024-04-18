<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import paragraaf from "./components/proefles/paragraaf.vue";
import contact from "./components/proefles/contact.vue";
import banner from "./components/proefles/banner.vue";

export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        paragraaf,
        contact,
        banner
    }
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <banner></banner>
    <paragraaf></paragraaf>
    <contact></contact>
    <footerdesktop></footerdesktop>
</template>

<style></style>