<script>export default {
    data() {
      return {
        pakket: {}
      };
    },
    mounted() {
      // Get the id from the route parameters
      const pakketId = this.$route.params.id;
  
      // Make an API call to retrieve pakket details by id
      axios.get(`/api/pakket/${pakketId}`)
        .then(({ data }) => {
          this.pakket = data;
        })
        .catch((error) => {
          console.error('Error fetching pakket details:', error);
        });
    }
  };</script>

<template>  <div>
    <h2>Pakket Details</h2>
    <div>
      <h3>{{ pakket.title }}</h3>
      <!-- Display other details of the pakket -->
    </div>
  </div></template>

<style></style>