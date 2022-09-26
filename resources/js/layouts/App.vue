<template lang="">
    <div>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
                <a class="navbar-brand" href="#">
                    Laravel 9 & Vue 3 Auth
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <router-link to="/"   class="nav-link active">Home</router-link>
                    </li>
                     <li class="nav-item">
                    <router-link to="/dashboard"   class="nav-link">Dashboard</router-link>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <router-link class="nav-link" :to="{ name:'Login'}" >Login</router-link></li>
                    <li class="nav-item"> <router-link class="nav-link" to="/register" >Register</router-link></li>
                </ul>

                </div>
            </div>
        </nav>

      <div class="container">
        <router-view></router-view>
      </div>
    </div>
</template>
<script>
export default {

}
</script>
<style lang="">

</style>
