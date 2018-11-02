<template>
	<section class="admin_access_area">
        <div class="admin_access_inner clearfix">
            <div class="admin_acecss_logo">
                <img src="/asset/images/admin-logo.png" alt="">
            </div>

            <div v-if="sent == true" class="admin_acecss_form">
                <h2>Password Reset</h2>
                <p>An Email has been sent to <span class="text-success">{{ form.email }}</span>. Please check your Email.</p>
            </div>
            
            <div v-else-if="sent == false" class="admin_acecss_form">
                <h2>Password Reset</h2>
                <p>Please enter your username or email address. You will receive a link to create a new password via email.</p>
                <form @submit.prevent="sendEmail">
                    <div class="form-group" v-if="authError">
                        <p class="error">   
                            {{ authError }}
                        </p>
                    </div>
                    <div class="form-group">
                        <input type="email" v-model="form.email" class="form-control"  placeholder="Email address">
                    </div>
                    <button type="submit" class="btn">Proceed</button>
                </form>
            </div>
            <!-- <a class="s_t_l" href="#">back to login</a> -->
            <router-link :to="`/admin/login`" class="s_t_l">back to login</router-link>
        </div>
    </section>
</template>

<script>
    import {resetPassword} from '../../../helper/auth'
    export default {
        name: 'forgt-password',
        data() {
            return {
                form: {
                    email: ''
                },
                error: null,
                sent: false
            }
        },
        methods: {
            sendEmail: function(){
                var url = '/api/auth/admin/password/reset';
                resetPassword(url, this.$data.form)
                    .then((res) => {
                        this.sent = true;
                    	console.log(res);
                        
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