<template>
    <div>
        <h3 class="text-center">All Posts</h3><br />

        <span> hoang test role: {{ roles[0].name }}</span>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{ post.id }}</td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.description }}</td>
                    <td>{{ post.created_at }}</td>
                    <td>{{ post.updated_at }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{ name: 'edit', params: { id: post.id } }" class="btn btn-primary">Edit
                            </router-link>
                            <button class="btn btn-danger" @click="deletePost(post.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
import { exit } from 'process';

export default {
    data() {
        return {
            posts: [],
            roles: []
        }
    },
    created() {
        //console.log(this.axios.get('http://localhost:8000/api/posts'));
        // exit();
        const userJson = localStorage.getItem('user');
        const user = JSON.parse(userJson);
        this.roles = user.roles;
        this.axios
            .get('http://localhost:8000/api/posts', {
                headers: {
                    Authorization: 'Bearer ' + localStorage.getItem('token')
                }
            })
            .then(response => {
                this.posts = response.data;
            });
    },
    methods: {
        deletePost(id) {
            this.axios.delete(`http://localhost:8000/api/post/delete/${id}`, {
                headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                    Authorization: 'Bearer ' + localStorage.getItem('token')
                }
            })
                .then(response => {
                    let i = this.posts.map(item => item.id).indexOf(id); // find index of your object
                    this.posts.splice(i, 1)
                });
        }
    }
}
</script>