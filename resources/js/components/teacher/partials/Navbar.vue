<template>
	<div class="top_bar">
        <a class="logo" href="#"><img src="/asset/images/logo.png" alt=""></a>
        <nav class="navbar navbar-light bg-light">
            <div class="top_search_bar">
                <form>
                    <input class="form-control" type="search" placeholder="Search anything here" aria-label="Search">
                    <button class="" type="submit">Search</button>
                </form>
            </div>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Welcome, {{ currentUser.first_name }} {{ currentUser.last_name }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/asset/images/header-icons/profile.png" alt=""></a>
                    <div class="dropdown-menu">
                        <router-link to="/teacher/profile" class="dropdown-item" href="javascript:void(0)"> Profile</router-link>
                        <router-link to="/teacher/help" class="dropdown-item" href="javascript:void(0)"> Help</router-link>
                        <router-link to="/teacher/setting" class="dropdown-item" href="javascript:void(0)"> Setting</router-link>
                        <a class="dropdown-item" @click="logout" href="javascript:void(0)"> Log Out</a>
                    </div>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="/asset/images/header-icons/profile2.png" alt=""></a>
                </li>  
            </ul>  
        </nav>
    </div>
</template>

<script>
    export default {
        name: 'app-header',
        methods: {
        	logout() {
                this.$store.commit('logout');
                this.$router.push('teacher/login');
            }
        },
        computed: {
        	currentUser() {
                return this.$store.getters.currentUser
            }
        }
    }
</script>