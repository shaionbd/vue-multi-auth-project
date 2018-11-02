<template>
	<div class="left_col">
        <ul class="left_nav">
            <li>
                <router-link to="/teacher">
                    <img src="/asset/images/header-icons/left-icon1.png" alt="">
                </router-link>
            </li>
            <li>
                <router-link to="/teacher/certificates">
                    <img src="/asset/images/header-icons/left-icon5.png" alt="">
                </router-link>
            </li>
            <li>
                <router-link to="/teacher/courses">
                    <img src="/asset/images/header-icons/left-icon4.png" alt="">
                </router-link>
            </li>
            <li>
                <router-link to="/teacher/invoice">
                    <img src="/asset/images/header-icons/left-icon5.png" alt="">
                </router-link>
            </li>
            <li>
                <router-link to="/teacher/support">
                    <img src="/asset/images/header-icons/left-icon6.png" alt="">
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'app-sidebar',
        methods: {
        	logout() {
                this.$store.commit('logout');
                this.$router.push('/login');
            }
        },
        computed: {
        	currentUser() {
                return this.$store.getters.currentUser
            }
        }
    }
</script>

<style scoped>
    .router-link-exact-active{
        border-left: 3px solid #f00;
    }
</style>