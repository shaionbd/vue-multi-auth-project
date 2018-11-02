<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Community</h2> 
                    </div>
                    <div class="col-md-8 text-right">
                        <div class="form_select_inner">
                            <span>Show me</span>
                            <select class="selcet_inner">
                                <option>Populer</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
                            <select class="selcet_inner">
                                <option>Category</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="hover_box certification_hover clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hover_box_inner active_certification_hover_inner s_community_hover_inner">
                            <div class="certification_left_box">
                                <h2>Community Name</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/communityic-2.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>Created on <span> March 32, 2018</span></p>
                            <button class="btn green_color">+</button> 
                            <button class="btn">explore</button>
                        </div>
                        <div class="hover_box_inner active_certification_hover_inner s_community_hover_inner">
                            <div class="certification_left_box">
                                <h2>Community Name</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/communityic-1.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>Created on <span> March 32, 2018</span></p>
                            <button class="btn green_color">+</button> 
                            <button class="btn">explore</button>
                        </div>
                        <div class="hover_box_inner active_certification_hover_inner s_community_hover_inner">
                            <div class="certification_left_box">
                                <h2>Community Name</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/communityic-1.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>Created on <span> March 32, 2018</span></p>
                            <button class="btn green_color">+</button> 
                            <button class="btn">explore</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner active_certification_hover_inner s_community_hover_inner">
                            <div class="certification_left_box">
                                <h2>Community Name</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/communityic-1.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>Created on <span> March 32, 2018</span></p>
                            <button class="btn green_color">+</button> 
                            <button class="btn">explore</button>
                        </div>
                        <div class="hover_box_inner active_certification_hover_inner s_community_hover_inner">
                            <div class="certification_left_box">
                                <h2>Community Name</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/communityic-1.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>Created on <span> March 32, 2018</span></p>
                            <button class="btn green_color">+</button> 
                            <button class="btn">explore</button>
                        </div>
                        <div class="hover_box_inner active_certification_hover_inner s_community_hover_inner">
                            <div class="certification_left_box">
                                <h2>Community Name</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/communityic-1.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
                            </div>
                            <p>Created on <span> March 32, 2018</span></p>
                            <button class="btn green_color">+</button> 
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