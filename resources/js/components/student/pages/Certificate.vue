<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Certifications</h2> 
                    </div>
                    <div class="col-md-8 text-right">
                        <div class="form_select_inner">
                            <span>Show me</span>
                            <select class="selcet_inner">
                                <option>Recent</option>
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
        <div class="hover_box certification_hover">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hover_box_inner certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Certification Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img  src="/asset/images/student-img/certiface-ic2.png" alt=""></a>
                            <button class="btn">explore</button>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Certification Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img  src="/asset/images/student-img/certiface-ic2.png" alt=""></a>
                            <button class="btn">explore</button>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Certification Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img  src="/asset/images/student-img/certiface-ic2.png" alt=""></a>
                            <button class="btn">explore</button>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Certification Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img  src="/asset/images/student-img/certiface-ic2.png" alt=""></a>
                            <button class="btn">explore</button>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Certification Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img  src="/asset/images/student-img/certiface-ic2.png" alt=""></a>
                            <button class="btn">explore</button>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hover_box_inner certification_hover_inner">
                            <div class="certification_left_box">
                                <h2>Certification Title</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                            </div>
                            <p>achieved on  <span>March 32, 2018</span></p>
                            <a class="s_c_d_ic" href="#"><img  src="/asset/images/student-img/certiface-ic2.png" alt=""></a>
                            <button class="btn">explore</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="s_c_bottom_certified">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p>There's always time for more skills. What are you waiting for ?</p>
                        <button class="btn">Get Certified</button>
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