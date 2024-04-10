
<template>
  <headerdesktop></headerdesktop>
  <headermobile></headermobile>

  
  <div class="login-container">
    <div class="login-form">
      <h1>Login</h1><br>
      <form @submit.prevent="post_data()">
        <div class="form-group">
          <label for="email">Email</label><br>
          <input type="text" id="email" v-model="posts.email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label><br>
          <input type="password" id="password" v-model="posts.password" required>
        </div>
        <button type="submit">Login</button><br><br>
        <p style='color: red;' id="error-msg-login"></p><br>
        <a style="font-size: smaller" href="#" v-on:click="on_forgot_password()">wachtwoord vergeten?</a>
        <br><br>
        <a href="/register">Nog geen account? Maak een account aan.</a>
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

export default {
  components: {
    headerdesktop,
    headermobile,
    footerdesktop
  },
  data() {
    return {
      logged_in: false,
            user: [],
      forgot_password_post: {
        email: ""
      },
      posts: {
        email: "",
        password: ""
      }
    };
  },
  mounted() {
    axios.get("/api/user")
      .then(response => {
        response.json().then(data => {
            this.user = data.data
            this.logged_in = true;
            this.$router.push('/');
            console.log(this.data);
        })
        
      })
      .catch(error => {
        this.logged_in = false;
    });
  },
  methods: {
    async post_data() {
      try {
        const response = await axios.post('/api/user/login', this.posts);
        console.log(response.data);
      } catch (error) {
        console.error(error);
        document.getElementById("error-msg-login").style.color = "red";
        var label = document.getElementById("error-msg-login");
        label.textContent = "Error performing action `login`: '" + error + "'\n";
      }
    },

    async on_forgot_password() {
      let mailaddr = prompt("Voer hier uw email adres in");

      this.forgot_password_post.email = mailaddr;

      try {
        const response = await axios.post('/api/user/forgot-password', this.forgot_password_post);
        document.getElementById("error-msg-login").style.color = "green";
        document.getElementById("error-msg-login").textContent = "Wachtwoord reset verzonden!";
      } catch(error) {
        console.error(error);
        document.getElementById("error-msg-login").style.color = "red";
        document.getElementById("error-msg-login").textContent = "Fout bij het verzenden van de wachtwoord reset, probeer het opnieuw.\n\n" + error;
      }
    }
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
