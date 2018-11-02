<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Course Page</h2> 
                    </div>
                </div>
            </div>
        </div>
        <div class="create_new_ticket">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hover_box_inner courser_page_hover_inner">
                            <img src="/asset/images/student-img/author.png" alt="" class="s_author">
                            <div class="certification_left_box">
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                                <h2>Certification Title</h2>
                                <h3>Marketing</h3>
                                <h4>What is this course about ?</h4>
                                <p>Sed et justo vulputate, fringilla sem sedamund commodo nisicut Suspendisse neque mauris et justo vulputate ectum amet.</p>
                                <h4>What will you achieve ?</h4>
                                <ul>
                                    <li>Praesent mi massa, mollis vitae tellus pulvinar</li>
                                    <li>Consequat faucibus leo. In pellentesque duiac </li>
                                    <li>Nunc posuere, quis aliquet augue mattis</li>
                                    <li>Molestie vitae elit quis commodo</li>
                                </ul>
                            </div>
                            <p>Prof. Dr. Mario Cardi</p>
                            <button class="btn">continue</button> 
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom_table_inner ticket_table s_course_table">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Lesson 1</td>
                                            <td>Introduction</td>
                                            <td>70 min</td>
                                            <td><a href="#">explore <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td>Lesson 1</td>
                                            <td>Front End Basics</td>
                                            <td>70 min</td>
                                            <td><a href="#">explore <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td>Lesson 1</td>
                                            <td>Introduction</td>
                                            <td>70 min</td>
                                            <td><a href="#">explore <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td>Lesson 1</td>
                                            <td>Front End Basics</td>
                                            <td>70 min</td>
                                            <td><a href="#">explore <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td>Lesson 1</td>
                                            <td>Introduction</td>
                                            <td>70 min</td>
                                            <td><a href="#">explore <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td>Lesson 1</td>
                                            <td>Front End Basics</td>
                                            <td>70 min</td>
                                            <td><a href="#">explore <span>›</span> </a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
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