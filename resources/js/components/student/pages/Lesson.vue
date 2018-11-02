<template>
    <div class="right_col">
        <div class="main_title title_with_button title_with_green_button">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h2>Dashboard</h2> 
                    </div>
                    <div class="col-6 col-md-6">
                        <button class="btn" data-toggle="modal" data-target="#exampleModal">Ask Professor



                        </button>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="create_new_ticket">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hover_box_inner courser_page_hover_inner s_lesson_hover_inner">
                            <div class="certification_left_box">
                                <img src="/asset/images/student-img/certiface-ic.png" alt="">
                                <h2>Front End Basics 101</h2>
                                <h3>Marketing</h3>
                                <h4><span>Lesson 1 </span>Introduction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tellus posuere, posuere dolor ac, sagittis urna. Vivamus vel felis scelerisque quam varius laoreet. Ut ultricies feugiat erat, quis tincidunt nibh. Nunc in turpis in dolor iaculis malesuada. <br> <br>Vestibulum sollicitudin tempor sapien, quis placerat velit consequat vel. Pellentesque nec viverra leo. Mauris et diam ornare nibh finibus interdum. Mauris maximus posuere eleifend. Ut at risus a quam fermentum ornare. Suspendisse facilisis arcu et suscipit sagittis. Phasellus lobortis eros.</p>
                            </div>
                            <button class="btn green_color">Get all files</button> 
                            <button class="btn"><img src="/asset/images/student-img/playvideo-icon.png" alt="">Play Video</button> 
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom_table_inner ticket_table s_lesson_table">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#">download <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#">download <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#">download <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#">download <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#">download <span>›</span> </a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="/asset/images/student-img/pdf-icon.png" alt="">FirstFile.pdf</td>
                                            <td><a href="#">download <span>›</span> </a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>                                    
                    </div>
                </div>       
            </div>
        </div>
        <div class="custom_table">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom_table_inner s_lesson_answer_table">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">Asked on</th>
                                          <th scope="col">Question</th>
                                          <th scope="col">Answer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>- unanswered -</td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus fermentum.</td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit acursus et.</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>johndoe@yahoo.com</td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>mark@twain.net</td>   
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>mark@marklander.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <nav aria-label="...">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" tabindex="-1"><img src="/asset/images/select-arrow1.png" alt=""></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#"><img src="/asset/images/select-arrow1.png" alt=""></a>
                            </li>
                          </ul>
                          <span>Page 2 of 5</span>
                        </nav>
                    </div>
                    <div class="col text-right">
                        <nav aria-label="...">
                          <span>Jump to #</span>
                          <input type="text" placeholder="2">
                        </nav>
                    </div>
                </div>
            </div>
        </div> 

        <!-- Modal -->
        <div class="ask_professor_madal modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ask Question</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   <div class="modal-body">
                        <div class="ask_professor_madal_inner">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment" placeholder=""></textarea>
                                <button type="submit" class="btn">submit</button>
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