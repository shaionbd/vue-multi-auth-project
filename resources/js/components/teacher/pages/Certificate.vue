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
        <div class="custom_table teacher_certification_table">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom_table_inner invoice_table">
                        <div class="table-responsive-md">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Student</th>
                                      <th scope="col">Course</th>
                                      <th scope="col">Started</th>
                                      <th scope="col">Completed</th>
                                      <th scope="col">Auto</th>
                                      <th scope="col">Release</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>March 32, 2018</td>
                                        <td>March 32, 2018</td>
                                        <td><img src="/asset/images/teacher-img/star1.png" alt=""></td>
                                        <td><a href="#"> <img src="/asset/images/teacher-img/d4.png" alt="">Send Certificate </a></td>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>March 32, 2018</td>
                                        <td>March 32, 2018</td>
                                        <td><img src="/asset/images/teacher-img/star1.png" alt=""></td>
                                        <td><a href="#"> <img src="/asset/images/teacher-img/d4.png" alt="">Send Certificate </a></td>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>March 32, 2018</td>
                                        <td>March 32, 2018</td>
                                        <td><img src="/asset/images/teacher-img/star.png" alt=""></td>
                                        <td>Auto</td>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>March 32, 2018</td>
                                        <td>March 32, 2018</td>
                                        <td><img src="/asset/images/teacher-img/star1.png" alt=""></td>
                                        <td><a href="#"> <img src="/asset/images/teacher-img/d4.png" alt="">Send Certificate </a></td>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>March 32, 2018</td>
                                        <td>March 32, 2018</td>
                                        <td><img src="/asset/images/teacher-img/star.png" alt=""></td>
                                        <td>Auto</td>
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