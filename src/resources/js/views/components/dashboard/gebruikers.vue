<script>
import axios from 'axios';

export default {
  data() {
    return {
      students: [{}],
    };
  },
  mounted() {
    axios
      .get("/api/user/students")
      .then(({ data }) => {
        console.log(data);
        this.students = data;
        console.log(this.students);
      })
      .catch((err) => console.error(err));
  },
  
};
</script>

<template>
  <div class="content-row">
    <div class="content-blok">
      <h1>Studenten</h1>
      <div class="multicolumn-blok">
        <div class="multicolumn-rij" v-for="student in students" :key="student.id">
          <div class="user-details">
            <h2>{{ student.name }}</h2>
            <p><strong>E-mail</strong> {{ student.email }}</p>
            <p><strong>Telefoonnummer</strong> {{ student.phone }}</p>
            <p><strong>Verjaardag</strong> {{ student.birthday }}</p>
            <p><strong>Adres</strong> {{ student.address }}</p>
            <p><strong>2de adres</strong> {{ student.second_address }}</p>

            <!-- <div class="multicolumn-knop knop-container">
            <router-link
              class="knop knop-default"
              :to="{ path: '/pakket-details/' + pakket.id }"
            >
              <span class="knop-tekst">Bekijken</span>
            </router-link>
        </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.multicolumn-rij {
  background: var(--background-grey);
  border-radius: 10px;
}

.user-details {
  text-align: center;
}

.multicolumn-blok {
  gap: 1.5rem;
}
</style>