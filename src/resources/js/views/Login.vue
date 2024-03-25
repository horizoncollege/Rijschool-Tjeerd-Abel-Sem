<script>
import axios from 'axios'

export default {
  data() {
    return {
      posts: {
        email: "",
        password: ""
      }
    }
  },
  methods: {
    async post_data() {
      this.posts = await axios.post('/api/user/login', this.posts)
    }
  }
}
</script>

<template>
    <div style="display: flex;justify-content: center;flex-direction: row;align-items: center;" class="center-div container">
        <div class="container">
            <div class="main_inner">
                <div class="modal">
                    <div class="form">
                        <form @submit.prevent="post_data()">
                            <input type="text" v-model="posts.email"><br>
                            <input type="text" v-model="posts.password"><br><br>
                            <button type="submit">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.center-div {
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
}

.main_inner {}

.main_inner.modal {}

.main_inner.modal.form {}
</style>
