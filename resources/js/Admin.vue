<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">Laravel Admin Example</span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">

                    <router-link :to="{ name: 'languages' }" class="nav-item nav-link">Languages</router-link>
                    <router-link :to="{ name: 'add-language' }" class="nav-item nav-link">Add Language</router-link>
                    <!-- <router-link to="/login" class="nav-item nav-link" target="_self">Login</router-link> -->
                    <a href="/login" class="nav-item nav-link">Login</a>
                    <a href="/register" class="nav-item nav-link">Register</a>
                    <a href="/" class="nav-item nav-link">Page home</a>
                </div>
            </div>
        </nav>
        <br />
        <router-view></router-view>
    </div>
</template>
 
<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>