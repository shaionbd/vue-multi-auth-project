<template>
	<section class="admin_access_area">
        <div class="admin_access_inner clearfix">
            <div class="admin_acecss_logo">
                <img src="/asset/images/admin-logo.png" alt="">
            </div>
            <div class="admin_acecss_form">
                <h2>Admin Login</h2>
                <form @submit.prevent="authenticate">
                	<div class="form-group" v-if="authError">
                        <p class="error">   
                            {{ authError }}
                        </p>
                    </div>
                    <div class="form-group">
                        <input type="text" v-model="form.email" class="form-control"  placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" v-model="form.password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" v-model="form.remember" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"> Remember me</label>
                    </div>
                    <button type="submit" class="btn">Proceed</button>
                    <router-link :to="`/admin/forgot/password`">Forgot Password ?</router-link>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
    import {login} from '../../../helper/auth'
    export default {
        name: 'login',
        data() {
            return {
                form: {
                    email: '',
                    password: '',
                    remember: '',
                },
                error: null
            }
        },
        methods: {
            authenticate: function(){
                this.$store.dispatch('login');
                var url = '/api/auth/admin/login';
                login(url, this.$data.form)
                    .then((res) => {
                    	console.log(res);
                        this.$store.commit("loginSuccess", res);
                        this.$router.push('/admin');
                    })
                    .catch((error) => {
                        this.$store.commit("loginFailed", {error});
                    })
            }
        },
        computed: {
            authError() {
                return this.$store.getters.authError;
            }
        }

    }
</script>

<style scoped>
    .error {
        text-align: center;
        color: red;
    }
</style>