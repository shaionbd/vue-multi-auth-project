<template>
    <div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Courses Available</h2> 
                    </div>
                    <div class="col-md-8 text-right">
                        <div class="form_select_inner">
                            <span>Show me</span>
                            <select class="selcet_inner">
                                <option>March, 2018</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
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