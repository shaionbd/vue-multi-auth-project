<template>
    <div class="main_container">
       <app-navbar></app-navbar>
       <app-sidebar></app-sidebar>
       <div>
           <router-view></router-view>
       </div>
    </div>
</template>

<script>
    import Navbar from './partials/Navbar.vue'
    import Sidebar from './partials/Sidebar.vue'
    export default {
        name: 'admin-main',
        components: {
            'app-navbar': Navbar,
            'app-sidebar': Sidebar
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>