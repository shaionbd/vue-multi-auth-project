<template>
	<section class="admin_access_area">
        <div class="admin_access_inner reg_admin_access_inner clearfix">
            <div class="admin_acecss_logo">
                <p>Already have an account ? <br> 
                	<router-link :to="`/teacher/login`">Login here</router-link>
                </p>
                <img src="/asset/images/admin-logo.png" alt="">
            </div>
            <div class="admin_acecss_form">
                <h2>Teacher Registration</h2>
                <div v-if="sent_activation_code == true">
                	<h4>Congratulations!!!</h4>
                	<p>Your account has created successfully.</p>
                	<p>
                		An activation code has been sent to <span class="text-success">{{ form.email }}</span>. Please check your email.
                	</p>
                </div>

                <form v-if="sent_activation_code == false" @submit.prevent="signup">
                	<div v-if="errors || serverErr" class="wall">
                		<div class="errors" v-if="errors">
	                        <ul>
	                            <li v-for="(fieldsError, fieldName) in errors" :key="fieldName">
	                                {{ fieldsError.join('\n') }}
	                            </li>
	                        </ul>
	                    </div>
	                    <div class="errors" v-if="serverErr">
	                        {{ serverErr }}
						</div>
                	</div>
					
                  	<div class="form-row">
                        <div class="col-12 col-sm-6">
                          <input type="text" class="form-control" v-model="form.email" placeholder="Email Address">
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="text" class="form-control" v-model="form.first_name" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-12 col-sm-6">
                          <input type="text" class="form-control" v-model="form.username" placeholder="Username">
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="text" class="form-control" v-model="form.last_name" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-12 col-sm-6">
                          <input type="password" class="form-control" v-model="form.password" placeholder="Password">
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="text" class="form-control" v-model="form.company" placeholder="Company / Institution">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-12 col-sm-6">
                          <input type="password" class="form-control" v-model="form.password_confirmation" placeholder="Password again :) ">
                        </div>
                        <div class="col-12 col-sm-6">
                        </div>
                      </div>
                      <button type="submit" class="btn">Proceed</button>
                </form>
            </div>
            <router-link :to="`/student/signup`" class="s_t_l">switch to Student registration</router-link>
        </div>
    </section>
</template>

<script>
    import {signup} from '../../../helper/auth'
    import validate from 'validate.js';
    export default {
        name: 'signup',
        data() {
            return {
                form: {
                    first_name: '',
                    last_name: '',
                    username: '',
                    email: '',
                    company: '',
                    password: '',
                    password_confirmation: ''
                },
                sent_activation_code: false,
                errors: null,
                serverErr: null
            }
        },
        methods: {
            signup: function(){
                this.errors = null;
                this.serverErr = null;

                const constraints = this.getConstraints();
                const errors = validate(this.$data.form, constraints);
                
                if(errors) {
                    this.errors = errors;
                    return;
                }

                if(this.form.password_confirmation != this.form.password){
                	this.serverErr = "Password doesn't match";
                	return;
                }
                var url = '/api/auth/teacher/signup';
                signup(url, this.$data.form)
                    .then((res) => {
                    	console.log(res);
                    	this.sent_activation_code = true;
                        //this.$router.push('/student/login');
                    })
                    .catch((error) => {
                        this.serverErr = error;
                    })
            },
            getConstraints() {
                return {
                    first_name: {
                        presence: true,
                        length: {
                            minimum: 3,
                            message: 'Must be at least 3 characters long'
                        }
                    },
                    last_name: {
                        presence: true,
                        length: {
                            minimum: 3,
                            message: 'Must be at least 3 characters long'
                        }
                    },
                    username: {
                        presence: true,
                        length: {
                            minimum: 3,
                            message: 'Must be at least 3 characters long'
                        }
                    },
                    company: {
                        presence: true,
                        length: {
                            minimum: 3,
                            message: 'Must be at least 3 characters long'
                        }
                    },
                    email: {
                        presence: true,
                        email: true
                    },
                    password: {
                        presence: true,
                        length: {
                            minimum: 6,
                            message: 'Must be at least 6 characters long'
                        }
                    }
                };
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
    .errors {
        text-align: center;
        color: red;
    }
</style>