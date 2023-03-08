<template>
    <div class="mt-3">
        <h1 class="text-center mb-3">Login</h1>
        <form class="mb-3" @submit.prevent="login">
            <div class="mb-3 w-50">
                <label for="email" class="form-label">Email address:</label>
                <input class="form-control px-2" type="email" v-model="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text px-2 text-primary">We'll never share your email with anyone else.</div>
            </div>
            <br>
            <div class="mb-3 w-50">
                <label class="form-label">Password: </label>
                <input class="form-control px-2" type="password" v-model="password" required>
            </div>
            <button type="submit" class="btn bg-main d-block mt-3 py-2 w-25 text-white">Login</button>
        </form>
    </div>
</template>
  
<script>
import axios from 'axios';

export default {
    data() {
        return {
            email: '',
            password: '',
        }
    },
    methods: {
        login() {
            axios.post('http://localhost:8000/api/login', {
                email: this.email,
                password: this.password
            })
                .then(response => {
                    localStorage.setItem('token', response.data.token);
                    localStorage.setItem('user', JSON.stringify(response.data.user));
                    console.log(response.data.user);
                    this.$router.push('/');
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>
  
<style scoped>
h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

form label {
    display: block;
    margin-bottom: 0.5rem;
}

form input {
    padding: 0.5rem;
    border: 1px solid gray;
    border-radius: 0.25rem;
    font-size: 1rem;
}


</style>
  