<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Invoicing</h2> 
                    </div>
                    <div class="col-md-8 text-right">
                        <div class="form_select_inner">
                            <span>Invoice for</span>
                            <select class="selcet_inner">
                                <option>Category</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
                            <select class="selcet_inner">
                                <option>Professor</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
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
        <div class="custom_table">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom_table_inner invoice_table">
                        <div class="table-responsive-md">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Course</th>
                                      <th scope="col">Category</th>
                                      <th scope="col">Professor</th>
                                      <th scope="col">Payment Date</th>
                                      <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>50382583</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>Programming</td>
                                        <td>Mario Cardi</td>
                                        <td>March 32, 2018</td>
                                        <td><a href="#"> <img src="/asset/images/student-img/dl.png" alt="">download </a></td>
                                    </tr>
                                    <tr>
                                        <td>50382583</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>Programming</td>
                                        <td>Mario Cardi</td>
                                        <td>March 32, 2018</td>
                                        <td><a href="#"> <img src="/asset/images/student-img/dl.png" alt="">download </a></td>
                                    </tr>
                                    <tr>
                                        <td>50382583</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>Programming</td>
                                        <td>Mario Cardi</td>
                                        <td>March 32, 2018</td>
                                        <td><a href="#"> <img src="/asset/images/student-img/dl.png" alt="">download </a></td>
                                    </tr>
                                    <tr>
                                        <td>50382583</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>Programming</td>
                                        <td>Mario Cardi</td>
                                        <td>March 32, 2018</td>
                                        <td><a href="#"> <img src="/asset/images/student-img/dl.png" alt="">download </a></td>
                                    </tr>
                                    <tr>
                                        <td>50382583</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>Programming</td>
                                        <td>Mario Cardi</td>
                                        <td>March 32, 2018</td>
                                        <td><a href="#"> <img src="/asset/images/student-img/dl.png" alt="">download </a></td>
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