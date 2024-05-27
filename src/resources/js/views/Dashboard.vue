<script>

import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import headerdesktop from "./components/header.vue";
import rooster from "./components/dashboard/rooster.vue";
import gebruikers from "./components/dashboard/gebruikers.vue";

export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        rooster,
        gebruikers
    },
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <gebruikers></gebruikers>
    <rooster></rooster>
    <footerdesktop></footerdesktop>
</template>

<style scoped>

</style>
