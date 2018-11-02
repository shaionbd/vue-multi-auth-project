<template>
	<div class="right_col">
        <div class="main_title title_with_button t_active_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h2>Active Courses</h2> 
                    </div>
                    <div class="col-6 col-md-6">
                        <button class="btn">New Course</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hover_box certification_hover clearfix teacher_active_hover">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hover_box_inner active_certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Course Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img src="/asset/images/teacher-img/cross.png" alt=""></a>
                            <button class="btn">explore</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner active_certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Course Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img src="/asset/images/teacher-img/cross.png" alt=""></a>
                            <button class="btn">explore</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner active_certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Course Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img src="/asset/images/teacher-img/cross.png" alt=""></a>
                            <button class="btn">explore</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner active_certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Course Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img src="/asset/images/teacher-img/cross.png" alt=""></a>
                            <button class="btn">explore</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
	
</template>

<script>
    export default {
        name: 'list',
        mounted() {
            if (this.customers.length) {
                return;
            }
            
            this.$store.dispatch('getCustomers');
        },
        computed: {
            customers() {
                return this.$store.getters.customers;
            }
        }
    }
</script>

<style scoped>
.btn-wrapper {
    text-align: right;
    margin-bottom: 20px;
}
</style>