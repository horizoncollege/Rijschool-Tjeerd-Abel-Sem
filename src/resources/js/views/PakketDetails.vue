<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import banner from "./components/pakketdetails/banner.vue";
import detailspakket from "./components/pakketdetails/details.vue";


export default {
    data() {
        return {
            id: '',
            pakket: [{}]
        };
    },
    mounted() {
        this.id = this.$route.params.id;
        // Make an API call to retrieve pakket details by id
        axios.get(`/api/pakket/show/${this.id}`)
            .then(({data}) => {
                this.pakket = data;
            })
            .catch((error) => {
                console.error('Error fetching pakket details:', error);
            });

    },
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
   
    <!-- <div>
        <h2>{{pakket.title}}</h2>
        <h2>{{pakket.aantal_lessen}}</h2>
        <h2>{{pakket.auto}}</h2>
        <h2>{{pakket.prijs}}</h2>
        <h2>{{pakket.prijs_los}}</h2>
    </div> -->
    <footerdesktop></footerdesktop>
</template>

<style>

</style>
