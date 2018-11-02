<template>
	<div class="right_col">
        <div class="main_title title_with_button">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h2>Dashboard</h2> 
                    </div>
                    <div class="col-6 col-md-6">
                        <button class="btn">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="count_all">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="count_all_inner">
                            <span class="counter_img"><img src="/asset/images/student-img/d2.png" alt=""></span>
                            <span class="counter">{{ counter.active_courses }}</span>
                            <span class="counter_name">Active Courses</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="count_all_inner">
                            <span class="counter_img"><img src="/asset/images//student-img/d1.png" alt=""></span>
                            <span class="counter">{{ counter.saved_courses }}</span>
                            <span class="counter_name">Saved Courses</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="count_all_inner">
                            <span class="counter_img"><img src="/asset/images//student-img/d3.png" alt=""></span>
                            <span class="counter">{{ counter.complete_courses }}</span>
                            <span class="counter_name">Completed Courses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub_title title_with_filer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Explore Courses</h2> 
                    </div>
                </div>
            </div>
        </div>
        <div class="common_filter_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#">All</a> 
                        <a href="#" class="active">Active</a> 
                        <a href="#">Saved</a> 
                        <a href="#">Completed</a> 
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="form_select_inner">
                            <span>Filter by</span>
                            <input type="text" placeholder="Keywords">
                            <select class="selcet_inner">
                                <option>Recent</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hover_box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="hover_box_inner">
                            <div class="hover_badge">
                                <img src="/asset/images/student-img/hover_badge.png" alt="badge" >    
                            </div>
                            <h2>Course Title</h2>
                            <h3>Marketing</h3>
                            <div class="progress_cont">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only"></span> </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, umt consectetur adipiscing elit.</p>
                            <button class="btn">continue</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hover_box_inner">
                            <div class="hover_badge">
                                <img src="/asset/images/student-img/hover_badge.png" alt="badge" >    
                            </div>
                            <h2>Course Title</h2>
                            <h3>Marketing</h3>
                            <div class="progress_cont">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only"></span> </div>
                                </div>
                            </div>
                            <p>Lesson: Summary 101</p>
                            <button class="btn">continue</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hover_box_inner">
                            <div class="hover_badge">
                                <img src="/asset/images/student-img/hover_badge.png" alt="badge" >    
                            </div>
                            <h2>Course Title</h2>
                            <h3>Marketing</h3>
                            <div class="progress_cont">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only"></span> </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, umt consectetur adipiscing elit.</p>
                            <button class="btn">continue</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hover_box_inner">
                            <div class="hover_badge">
                                <img src="/asset/images/student-img/hover_badge.png" alt="badge" >    
                            </div>
                            <h2>Course Title</h2>
                            <h3>Marketing</h3>
                            <div class="progress_cont">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">94% Complete (success)</span> </div>
                                </div>
                            </div>
                            <p>Lesson: Summary 101</p>
                            <button class="btn">continue</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hover_box_inner">
                            <div class="hover_badge">
                                <img src="/asset/images/student-img/hover_badge.png" alt="badge" >    
                            </div>
                            <h2>Course Title</h2>
                            <h3>Marketing</h3>
                            <div class="progress_cont">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">94% Complete (success)</span> </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, umt consectetur adipiscing elit.</p>
                            <button class="btn">continue</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hover_box_inner">
                            <div class="hover_badge">
                                <img src="/asset/images/student-img/hover_badge.png" alt="badge" >    
                            </div>
                            <h2>Course Title</h2>
                            <h3>Marketing</h3>
                            <div class="progress_cont">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">94% Complete (success)</span> </div>
                                </div>
                            </div>
                            <p>Lesson: Summary 101</p>
                            <button class="btn">continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</template>

<script>
    export default {
        name: 'dashboard',
        mounted() {
            if (! this.counter) {
                this.$store.dispatch('getStudentDashboardCounter');
            }
            
            // this.$store.dispatch('getCustomers');
            
        },
        computed: {
            counter() {
                console.log(this.$store.getters.dashboardCounter);
                return this.$store.getters.dashboardCounter;
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