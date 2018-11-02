<template>
    <div class="right_col">
        <div class="main_title title_with_button title_with_green_button">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h2>Lesson Page</h2> 
                    </div>
                </div>
            </div>
        </div>
        <div class="create_new_ticket">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hover_box_inner courser_page_hover_inner ">
                            <div class="certification_left_box">
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                                <h2>Front End Basics 101</h2>
                                <h3>Marketing</h3>
                                <h4><span>Lesson 1 </span>Introduction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tellus posuere, posuere dolor ac, sagittis urna. Vivamus vel felis scelerisque quam varius laoreet. Ut ultricies feugiat erat, quis tincidunt nibh. Nunc in turpis in dolor iaculis malesuada. <br> <br>Vestibulum sollicitudin tempor sapien, quis placerat velit consequat vel. Pellentesque nec viverra leo. Mauris et diam ornare nibh finibus interdum. Mauris maximus posuere eleifend. Ut at risus a quam fermentum ornare. Suspendisse facilisis arcu et suscipit sagittis. Phasellus lobortis eros.</p>
                            </div>
                            <button class="btn">edit video link</button> 

                        </div>
                        <a class="s_lesson_hover_inner_edit" href="#">edit section</a>
                    </div>
                    <div class="col-lg-6 s_lesson_table">
                        <div class="custom_table_inner ticket_table ">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#"><img src="/asset/images/teacher-img/d6.png" alt=""> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#"><img src="/asset/images/teacher-img/d6.png" alt=""> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#"><img src="/asset/images/teacher-img/d6.png" alt=""> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#"><img src="/asset/images/teacher-img/d6.png" alt=""> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#"><img src="/asset/images/teacher-img/d6.png" alt=""> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#"><img src="/asset/images/teacher-img/d6.png" alt=""> </a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>  
                        <div class="upload-btn-wrapper">
                              <button class="custom_upload"><img src="/asset/images/teacher-img/d7.png" alt="">Upload a file</button>
                              <input type="file" name="myfile" />
                            </div>
                            <a href="#">remove all</a>                                  
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