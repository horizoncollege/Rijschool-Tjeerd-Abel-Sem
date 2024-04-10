<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";

export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop
    }
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <footerdesktop></footerdesktop>
</template>

<style>

</style>