
<template>
  <headerdesktop></headerdesktop>
  <headermobile></headermobile>

  <div class="login-container">
    <div class="login-form">
      <h1>Registreer</h1>
      <form @submit.prevent="post_data()">
        <div class="form-group">
          <label for="name">Naam*</label>
          <input type="text" id="name" v-model="posts.name" required>
        </div>
        <div class="form-group">
          <label for="email">E-mail*</label>
          <input type="text" id="email" v-model="posts.email" required>
        </div>
        <div class="form-group">
          <label for="phone">Telefoonnummer*</label>
          <input type="text" id="phone" v-model="posts.phone" required>
        </div>
        <div class="form-group">
          <label for="birthday">Geboortedatum*</label>
          <input type="date" id="birthday" v-model="posts.birthday">
        </div>
        <div class="form-group">
          <label for="address">address*</label>
          <input type="text" id="address" v-model="posts.address" required>
        </div>
        <div class="form-group">
          <label for="second_address">Tweede address</label>
          <input type="text" id="second_address" v-model="posts.second_address" >
        </div>
        <div class="form-group">
          <label for="password">Wachtwoord*</label><br>
          <input type="password" id="password" v-model="posts.password" required>
        </div>
        <div class="form-group">
          <label for="password">Herhaal wachtwoord*</label><br>
          <input type="password" id="password" v-model="posts.password_confirmation" required>
        </div>
        <button type="submit">Registreer</button><br><br>
        <p style='color: red;' id="error-msg-login"></p><br>
      </form>
    </div>
  </div>

  <footerdesktop></footerdesktop>
</template>

<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
import footerdesktop from "./components/footer.vue";
import banner from "./components/inschrijven/banner.vue";


import axios from 'axios';

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

export default {
  components: {
    headerdesktop,
    headermobile,
    footerdesktop,
    banner
  },
  data() {
    return {
      posts: {
        email: "",
        password: "",
        name: "",
        password_confirmation: "",
        phone: "",
        birthday: "",
        address: "",
        second_address: ""
      },
      login_redirect: {
        email: "",
        password: ""
      }
    };
  },
  methods: {
    async post_data() {
      try {
        const response = await axios.post('/api/user/register', this.posts);
        console.log(response.data);
        document.getElementById("error-msg-login").textContent = "";
        document.getElementById("error-msg-login").style.color = "green";
        var label = document.getElementById("error-msg-login");
        label.textContent = "Action `register` has been performed successfully: '" + this.posts.email + "'\n";

        this.login_redirect.email = this.posts.email;
        this.login_redirect.password = this.posts.password;

        label.textContent = "Logging you in...\n";
        axios.post('/api/user/login', this.login_redirect).then(response => {
          setTimeout(() => {
            this.$router.push('/');
          }, 2000);
        })
      } catch (error) {
        console.error(error);
        document.getElementById("error-msg-login").style.color = "red";
        var label = document.getElementById("error-msg-login");
        label.textContent = "Error performing action `register`: '" + error.response.data.message + "'\n";
      }
    },
  }
}

</script>


<style scoped>
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: unset;
}

.login-form {
  background-color: #f0f0f0;
  padding: 30px;
  border-radius: 5px;
  box-shadow: unset;
  width: 500px;
}

.login-form h2 {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="password"] {
  width: 95%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.registreer-knop{
  background-color: var(--rood-licht);
  transition: 0.2s;
  border: 1px var(--background-black) solid;
  border-radius: 0;
}

button:hover {
  background-color: var(--rood-donker);
  transition: 0.2s;
}
</style>