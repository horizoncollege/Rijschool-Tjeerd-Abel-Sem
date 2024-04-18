<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import banner from "./components/pakketen/banner.vue";


export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        banner
    }
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <banner></banner>

    <footerdesktop></footerdesktop>
</template>

<style>

</style>