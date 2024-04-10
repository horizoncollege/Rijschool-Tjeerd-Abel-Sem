<template>
  <headerdesktop></headerdesktop>
  <headermobile></headermobile>

  <div class="login-container">
    <div class="login-form">
      <h1>Registreer</h1><br>
      <form @submit.prevent="post_data()">
        <div class="form-group">
          <label for="name">Name</label><br>
          <input type="text" id="name" v-model="posts.name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label><br>
          <input type="text" id="email" v-model="posts.email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label><br>
          <input type="password" id="password" v-model="posts.password" required>
        </div>
        <div class="form-group">
          <label for="password">Confirm password</label><br>
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

import axios from 'axios';

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

export default {
  components: {
    headerdesktop,
    headermobile,
    footerdesktop
  },
  data() {
    return {
      posts: {
        email: "",
        password: "",
        name: "",
        password_confirmation: ""
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

<style>
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-form {
  background-color: #f0f0f0;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

button {
  background-color: red;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 3px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
</style>