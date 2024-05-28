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
            .then(({ data }) => {
                console.log(data);
                this.user = data;
                console.log(this.user.roles);
            })
            .catch((err) => console.error(err));

        axios
            .get("/api/lesson")
            .then(({ data }) => {
                console.log(data);
                this.lessen = data;
                console.log(this.lessen);
            })
            .catch((err) => console.error(err));
    },
    methods: {
        refreshPage() {
            window.location.reload()
        },

        async add_lesson() {
            const response = axios.post("/api/lesson/store", this.les_data_insert);
        },

        fill_leerling_array() {
            axios.get("/api/user/students").then(response => {
                this.leerlingen = response.data;
            }).catch(error => {
                console.error(error);
            });
        },

        remove_les(id) {
            const response = axios.delete("/lesson/destroy/" + id);
            alert(response);
            // should be enough
        },

        edit_les(id) {
            const response = axios.post("/lesson/update/" + id);
            // more shit coming
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
            <div class="admin_stuff">
                <div class="admin_edit" v-if="user.roles == 'admin'">
                    <h2>Maak een les aan</h2>
                    <br>
                    <datalist id="leerlingen">
                        <option v-for="leerling in leerlingen" :value="leerling.name" v-bind="les_data_insert.leerling">
                        </option>
                    </datalist>
                    <form @submit.prevent="add_lesson()">
                    <label>Leerling: </label><input placeholder="Kies leerling..." autoComplete="on" list="leerlingen"
                        @click="fill_leerling_array();" /><br>
                    <label>Begin tijd: </label><input type="time" id="field_dash" name="start_tijd"
                        v-bind="les_data_insert.start_date"><br>
                    <label>Eind tijd: </label><input type="time" id="field_dash" name="eind_tijd"
                        v-bind="les_data_insert.end_date"><br>
                    <label>Datum: </label><input type="date" id="field_dash" name="datum"
                        v-bind="les_data_insert.day_of_month"><br>
                    <label>Plaats: </label><input type="text" id="field_dash" name="adres"
                        v-bind="les_data_insert.address"><br>
                    <label>Doel: </label><input type="text" id="field_dash" name="doel"
                        v-bind="les_data_insert.goal"><br>
                    <label>Les status: </label><input type="text" id="field_dash" name="les_status"
                        value="niet afgerond" v-bind="les_data_insert.status"><br><br>
                    <button type="submit">Toevoegen</button>
                    </form>
                </div>
                <div class="tabel_weergave">
                    <br><br>
                    <h2>Rooster</h2><br>
                    <table v-if="lessen.length > 0">
                        <thead>
                            <tr>
                                <th>Les ID</th>
                                <th>Begin tijd</th>
                                <th>Eind tijd</th>
                                <th>Datum</th>
                                <th>Instructeur</th>
                                <th>Locatie</th>
                                <th>Doel</th>
                                <th>Afgerond</th>
                                <th>Aanpassen</th>
                                <th>Verwijderen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="les in lessen" :key="les.id">
                                <td>{{ les.id }}</td>&nbsp;
                                <td>{{ les.start_date }}</td>&nbsp;
                                <td>{{ les.end_date }}</td>&nbsp;
                                <td>{{ les.day_of_month }}</td>&nbsp;
                                <td>{{ les.teacher_id }}</td>&nbsp;
                                <td>{{ les.address }}</td>&nbsp;
                                <td>{{ les.goal }}</td>&nbsp;
                                <td>{{ les.status }}</td>&nbsp;
                                <td>
                                    <button style="width: 50px;" @click="edit_les(les.id);">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </td>
                                <td>
                                    <button style="width: 50px;" @click="remove_les(les.id);">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.tabel_weergave {
    width: 500px;
    height: 500px;
    overflow-y: auto;
}

.main {
    padding: 25px;
    width: 700px;
    height: 800px;
}

.main_inner_adm {
    padding: 10px;
}

.tabel_weergave {
    color: black;
    background: black;
    display: block;
    grid-row: auto;
}

.tabel_weergave>table,
td,
tr,
th {
    color: black;
}

table {
    overflow-y: 50%;
    border-collapse: collapse;
    width: 100%;
}

tr,
td {
    border: solid;
    border-width: 1px;
    padding: 20px;
}

.admin_stuff {
    padding: 20px;
    display: flex;
    flex-direction: row;
    margin-left: 50%;
    margin-right: 50%;
}

.admin_edit {
    padding: 10px;
    border: solid;
    border-color: black;
    border-width: 2px;
    border-radius: 4px;
}
</style>
