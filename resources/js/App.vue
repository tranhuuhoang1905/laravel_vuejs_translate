<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">Laravel Home Example</span>
        </div>
        <NavbarView />
        <br />
        <router-view></router-view>
    </div>
</template>
  
<script>
import NavbarView from './components/view/NavBarView.vue'

export default {
    name: 'Home',
    components: {
        NavbarView
    },
    mounted() {
        console.log('Home mounted.')
    }
}
</script>
  