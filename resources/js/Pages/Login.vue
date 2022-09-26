<template>
    <div>
        <div class="row justify-content-center py-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Login
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-danger" >{{ error}}</p>
                        <form @submit.prevent="login">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" v-model="form.email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" v-model="form.password">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {reactive,ref} from "vue";
import axios from "axios";
export default {
    setup(){

        let form = reactive({
            'email' :'',
            'password' :''
        });

        let error = ref('');

        const login =async() => {
            await axios.post('/api/login', form).then(res =>{
                if (res.data.success === true) {
                    console.log(res.data)
                }else {
                    error.value = res.data.message;
                }
            })
        }
        return {
            form,
            login,
            error
        }
    }
}
</script>
<style>

</style>
