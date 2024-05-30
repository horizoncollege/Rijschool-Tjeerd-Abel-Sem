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
      <table>
        <tr>
          <th>ID</th>
          <th>Naam</th>
          <th>E-mail</th>
          <th>Telefoonnummer</th>
          <th>Verjaardag</th>
          <th>Adres</th>
          <th>2de adres</th>
          <th>Manage</th>
        </tr>

        <tr v-for="student in students" :key="student.id">
          <td>{{ student.id }}</td>
          <td>{{ student.name }}</td>
          <td>{{ student.email }}</td>
          <td>{{ student.phone }}</td>
          <td>{{ student.birthday }}</td>
          <td> {{ student.address }}</td>
          <td>{{ student.second_address }}</td>
          <td>
            <div class="multicolumn-knop knop-container">
              <router-link class="knop knop-default" :to="{ path: '/student-details/' + student.id }">
                <span class="knop-tekst">Bekijken</span>
              </router-link>
            </div>
          </td>
        </tr>
      </table>
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

.content-blok {
  height: calc(100vw * 0.20);
  overflow: auto;
}

.multicolumn-blok {
  gap: 1.5rem;
}
</style>