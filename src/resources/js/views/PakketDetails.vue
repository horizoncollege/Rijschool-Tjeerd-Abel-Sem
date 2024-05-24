<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import banner from "./components/pakketdetails/banner.vue";
import detailspakket from "./components/pakketdetails/details.vue";


export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        banner,
        detailspakket
    }
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <banner></banner>
   <detailspakket></detailspakket>
    <footerdesktop></footerdesktop>
</template>

<style>

</style>
