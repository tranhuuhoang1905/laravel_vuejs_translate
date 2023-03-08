<template>
    <div class="mt-3">
        <h1 class="text-center mb-3">Sign Up</h1>
        <form class="mb-3" @submit.prevent="registerUser">
            <div class="mb-3 w-50">
                <label for="name" class="form-label">Name:</label>
                <input class="form-control" type="text" v-model="name" required>
            </div>
            <div class="mb-3 w-50">
                <label for="email" class="form-label">Email:</label>
                <input class="form-control" type="email" v-model="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 w-50">
                <label for="password" class="form-label">Password:</label>
                <input class="form-control" type="password" name="password" v-model="password" required>
            </div>
            <div class="mb-3 w-50">
                <label for="repassword" class="form-label">Re-enter Password:</label>
                <input class="form-control" type="repassword" name="repassword" v-model="repassword" required>
            </div>
            <!-- <div class="mb-3"> -->
                <button type="submit" class="btn bg-main d-block mt-3 py-2 w-25 text-white">Register</button>
            <!-- </div> -->
        </form>
    </div>
</template>
  
<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            email: '',
            password: '',
            repassword: ''
        }
    },
    methods: {
        registerUser() {
            axios.post('http://localhost:8000/api/register', {
                name: this.name,
                email: this.email,
                password: this.password,
                repassword: this.repassword
            })
                .then(response => {
                    console.log(response.data.user);
                    this.$router.push('/login');
                })
                .catch(error => {
                    console.log(error.response.data.errors);
                });
        }
    }
}
</script>
  