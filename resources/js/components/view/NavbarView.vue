<template>
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg navbar-light bg-main">
            <div class="collapse navbar-collapse d-flex justify-content-around ">
                <div class="text-center py-4">
                    <span class="text-white">Laravel Vue CRUD Example</span>
                </div>
                <div class="navbar-nav ">
                    <router-link to="/" class="nav-item nav-link p-4 text-white">Home</router-link>
                    <router-link to="/add" class="nav-item nav-link p-4 text-white">Add Post</router-link>
                    <router-link to="/login" class="nav-item nav-link p-4 text-white">Login</router-link>
                    <router-link to="/register" class="nav-item nav-link p-4 text-white">Register</router-link>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {

}
</script>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.bg-main{
    background-color:#091e42f2 ;
}


</style>