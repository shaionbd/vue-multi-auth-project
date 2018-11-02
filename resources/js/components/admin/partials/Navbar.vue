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
                    <a class="nav-link" href="#">Welcome, {{ currentUser.name }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"><img src="/asset/images/header-icons/profile.png" alt=""></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"> Profile</a>
                        <a class="dropdown-item" href="#"> Help</a>
                        <a class="dropdown-item" href="#"> Setting</a>
                        <a class="dropdown-item" @click="logout"> Log Out</a>
                    </div>
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
                this.$router.push('admin/login');
            }
        },
        computed: {
        	currentUser() {
                return this.$store.getters.currentUser
            }
        }
    }
</script>