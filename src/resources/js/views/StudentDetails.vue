<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import studentdetails from "./components/dashboard/gebruiker.vue";

export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        studentdetails

    }
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <studentdetails></studentdetails>
    <footerdesktop></footerdesktop>
</template>

<style></style>