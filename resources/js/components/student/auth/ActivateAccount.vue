<template>
	<section class="admin_access_area">
        <div class="admin_access_inner admin_activate_inner clearfix">
            <div class="admin_activate_logo clearfix">
                <img src="/asset/images/admin-logo.png" alt="">
                <h1>Job Formazione</h1>
                <h2>Your Desired eLearning Platform</h2>
                <p>Via Cioppo S.Vito, Petrone Palace <br> 83029 Solofra (AV) - P.Iva 02951580642</p>
                <span>use plain text version</span>
            </div>

            <div class="activate_content clearfix">
                <h2>Hello {{ first_name }} {{ last_name }},</h2>
                <p>and thank you for your interest and registering to our platform.
                    There’s only one step left to do if you want your account to be up and ready.
                    Confirm your email and activate your account by clicking the button below:</p>
                <a href="javascript:void(0)" @click="activate">Activate</a>
            </div>
            <div class="active_bottom">
                <p>if you have no idea about registering to our platform, <a href="#">just ignore</a>  this message</p>
            </div>
        </div>
    </section>
</template>

<script>
    import {activateAccount} from '../../../helper/auth'
    export default {
        name: 'login',
        data() {
            return {
                form: {
                    id: '',
                    password: ''
                },
                first_name: '',
                last_name: '',
                error: null
            }
        },
        created(){
            axios.get('/api/auth/student/info/'+this.$route.query.id)
            .then((response) => {
                this.first_name = response.data.user.first_name;
                this.last_name = response.data.user.last_name;
                console.log(response.data.user)
            })
            .catch((err) => {
                console.log(err)
            })
        },
        methods: {
            activate: function(){

            	var formData = new FormData();
            	formData.append('id', this.$route.query.id);
            	formData.append('password', this.$route.query.curr_id);
            	
            	console.log(formData);	
                var url = '/api/auth/student/activate';
                activateAccount(url, formData)
                    .then((res) => {
                    	console.log(res);
                        this.$router.push('/student/login');
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