<script>
export default {
  data() {
    return {
      id: "",
      student: [{}],
    };
  },
  mounted() {
    this.id = this.$route.params.id;
    // Make an API call to retrieve Student details by id
    axios
      .get(`/api/user/show/${this.id}`)
      .then(({ data }) => {
        this.student = data;
      })
      .catch((error) => {
        console.error("Error fetching student details:", error);
      });
  },
};
</script>

<template>
  <div class="content-row">
    <div class="content-blok">
        <table>
        <tr>
          <th>ID</th>
          <th>Naam</th>
          <th>E-mail</th>
          <th>Telefoonnummer</th>
          <th>Verjaardag</th>
          <th>Adres</th>
          <th>2de adres</th>
        </tr>

        <tr>
          <td>{{ student.id }}</td>
          <td>{{ student.name }}</td>
          <td>{{ student.email }}</td>
          <td>{{ student.phone }}</td>
          <td>{{ student.birthday }}</td>
          <td> {{ student.address }}</td>
          <td>{{ student.second_address }}</td>
         
        </tr>
      </table>
    </div>
  </div>
  <div class="spacer">
    <!----spacer---->
  </div>
</template>

<style>
.student {
  width: fit-content;
  margin: auto;
  max-width: 900px;
}
.spacer {
  height: 500px;
}
</style>
