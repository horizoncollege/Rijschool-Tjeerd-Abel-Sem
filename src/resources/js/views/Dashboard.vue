<script>

import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import headerdesktop from "./components/header.vue";
import axios from "axios";

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
            les_data_insert: {
                leerling_id: '',
                start_date: '',
                end_date: '',
                day_of_month: '',
                address: '',
                goal: '',
                status: '',
                leerling: '',
            },
            leerlingen: [],
        };
    },
    mounted() {
        axios
            .get("/api/user")
            .then(({data}) => {
                console.log(data);
                this.user = data;
                console.log(this.user.roles);
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
    methods: {
        async add_lesson() {
            const response = axios.post("/api/lesson/store", this.les_data_insert);
        },

        async fill_leerling_array() {
            const response = axios.get("/api/user/students").then(response => { response.json().then(data => {
                this.leerlingen = data.data
            })
            }).catch(error => {

            });
        },
    },

}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
    <div class="main">
        <div class="main_inner_adm">
            <br><br><br><br>
            <div class="admin_edit">
                <h2>Maak een les aan</h2>
                <br>
                <datalist id="leerlingen">
                    <option v-for="leerling in leerlingen" :value="leerling.name" v-bind="les_data_insert.leerling"></option>
                </datalist>
                <form @submit.prevent="add_lesson()"></form>
                    <label>Leerling: </label><input placeholder="Kies leerling..." autoComplete="on" list="leerlingen" @click="fill_leerling_array()"/><br>
                    <label>Begin tijd: </label><input type="time" id="field_dash" name="start_tijd" v-bind="les_data_insert.start_date"><br>
                    <label>Eind tijd: </label><input type="time" id="field_dash" name="eind_tijd" v-bind="les_data_insert.end_date"><br>
                    <label>Datum: </label><input type="date" id="field_dash" name="datum" v-bind="les_data_insert.day_of_month"><br>
                    <label>Plaats: </label><input type="text" id="field_dash" name="adres" v-bind="les_data_insert.address"><br>
                    <label>Doel: </label><input type="text" id="field_dash" name="doel" v-bind="les_data_insert.goal"><br>
                    <label>Les status: </label><input type="text" id="field_dash" name="les_status" value="niet afgerond" v-bind="les_data_insert.status"><br><br>
                    <button type="submit"></button>
            </div>
            <br><br><h2>Rooster</h2><br>
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
    height: 800px;
}

.main_inner_adm {
    padding: 10px;
}

table, tr,td {
    border: solid;
    border-width: 1px;
    padding: 20px;
}

.admin_edit {
    padding: 10px; border: solid; border-color: black; border-width: 2px; border-radius: 4px;
}
</style>
