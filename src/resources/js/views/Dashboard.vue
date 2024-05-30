<script>

import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import headerdesktop from "./components/header.vue";
import userinfo from "./components/dashboard/gebruikers.vue"
import rooster from "./components/dashboard/rooster.vue"
import axios from "axios";

export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop,
        userinfo,
        rooster
    },
    data() {
        return {
            user: [],
            lesson: [],
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
            .catch((err) => {
                console.error(err);
                window.location.href = "/login";
                alert("Gebruiker niet ingelogd")
            });

        axios
            .get("/api/lesson")
            .then(({ data }) => {
                console.log(data);
                this.lesson = data;
                console.log(this.lesson);
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
    <userinfo></userinfo>
    <rooster></rooster>
    <footerdesktop></footerdesktop>
</template>

<style>
.tabel_weergave {
    display: block;
    width: calc(100vw * 0.85);
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
    flex-direction: column;
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
