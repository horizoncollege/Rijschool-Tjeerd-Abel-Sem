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
    <div class="main">
        <div class="main_inner_adm">
            <table>
                <tr>
                    <th>Les ID</th>&nbsp;
                    <th>Begin tijd</th>&nbsp;
                    <th>Eind tijd</th>&nbsp;
                    <th>Datum</th>&nbsp;
                    <th>Instructeur</th>&nbsp;
                    <th>Locatie</th>&nbsp;
                    <th>Doel</th>&nbsp;
                    <th>Afgerond</th>&nbsp;
                </tr>
                <tr v-for="les in lessons" :key="les.id">
                    <td>{{les.id}}</td>&nbsp;
                    <td>{{les.start_date}}</td>&nbsp;
                    <td>{{les.end_date}}</td>&nbsp;
                    <td>{{les.day_of_month}}</td>&nbsp;
                    <td>{{les.instructor_id}}</td>&nbsp;
                    <td>{{les.address}}</td>&nbsp;
                    <td>{{les.goal}}</td>&nbsp;
                    <td>{{les.status}}</td>&nbsp;
                </tr>
            </table>
        </div>
    </div>
    <footerdesktop></footerdesktop>
</template>

<style scoped>
.main {
    padding: 25px;
    width: 700px;
    height: 600px;
}

.main_inner_adm {
    padding: 10px;
}

table, tr,td {
    border: solid;
    border-width: 1px;
    padding: 20px;
}
</style>
