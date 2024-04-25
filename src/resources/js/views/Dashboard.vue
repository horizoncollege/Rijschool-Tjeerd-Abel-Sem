<script>

import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import headerdesktop from "./components/header.vue";

export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
    },
    data() {
        return {
            user: [],
            lessen: [],
        };
    },
    mounted() {
        axios
            .get("/api/user")
            .then(({data}) => {
                console.log(data);
                this.user = data;
                console.log(this.user);
            })
            .catch((err) => console.error(err));

        axios
            .get("/api/lesson")
            .then(({data}) => {
                console.log(data);
                this.lesson = data;
                console.log(this.lesson);
            })
            .catch((err) => console.error(err));
    },
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>

    <footerdesktop></footerdesktop>
</template>

<style scoped>

</style>
