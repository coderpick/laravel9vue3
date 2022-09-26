<template lang="">
    <div>
        <h1>Laravel 9 & Vue 3 with vite</h1>

        <div>
            <router-link to="/" >Home</router-link> |
            <router-link :to="{ name:'Login'}" >Login</router-link> |
            <router-link to="/register" >Register</router-link>
        </div>
        <router-view></router-view>
    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="">
    
</style>