<script>
import axios from 'axios';

export default {
  data() {
    return {
      user: [{}],
    };
  },
  mounted() {
    axios
      .get("/api/user")
      .then(({ data }) => {
        console.log(data);
        this.user = data;
        console.log(this.user);
      })
      .catch((err) => console.error(err));
  },
  
};
</script>

<template>
  <div class="content-row">
    <div class="content-blok">
      <h1>users</h1>
      <div class="multicolumn-blok">
        <div class="multicolumn-rij" v-for="user in users" :key="user.id">
          <div class="user-details">
            <h2>{{ user.name }}</h2>
            <!-- <p><strong>E-mail</strong> {{ user.email }}</p>
            <p><strong></strong> {{ user.phone }}</p>
            <p><strong></strong> {{ user.birthday }}</p>
            <p><strong></strong> {{ user.address }}</p> -->
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