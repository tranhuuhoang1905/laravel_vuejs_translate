<template>
    <navbar-view/>
    <div class="container">
        <br />
        <router-view></router-view>
    </div>
</template>
 
<script>
import NavbarView from './components/view/NavbarView.vue';
export default {
  components: { NavbarView },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
<style>
*{
    margin: 0 auto;
    box-sizing: border-box;
}
form button {
    margin: 0 auto;
}
</style>