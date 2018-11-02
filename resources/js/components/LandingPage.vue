<template>
    <div style="margin-top: 13%" class="box row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <b>
                        <router-link :to="'/admin/login'" class="nav-link" href="javascript:void(0)">Admin Login</router-link>
                    </b>
                </div>
                <div class="card-header text-center">
                    <b>
                        <router-link :to="'/student/login'" class="nav-link" href="javascript:void(0)">Student Login</router-link>
                    </b>
                </div>
                <div class="card-header text-center">
                    <b>
                        <router-link :to="'/teacher/login'" class="nav-link" href="javascript:void(0)">Teacher Login</router-link>
                    </b>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'landing-page',
        data() {
            return {
                
            }
        },
        methods: {
        },
        computed: {
           
        }

    }
</script>
    .box{
        margin: 13% auto !important;
    }
<style scoped>
    
</style>