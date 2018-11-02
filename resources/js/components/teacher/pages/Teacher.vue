<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Teachers Manager</h2> 
                    </div>
                    <div class="col-md-8 text-right">
                        <div class="form_select_inner">
                            <span>Joined on</span>
                            <select class="selcet_inner">
                                <option>March, 2018</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
                            <select class="selcet_inner">
                                <option>A -- Z</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
                            <select class="selcet_inner">
                                <option>Relevance</option>
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
                        <div class="custom_table_inner table_with_social_icon">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">Professor</th>
                                          <th scope="col">Joined on</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Active</th>
                                          <th scope="col">Students</th>
                                          <th scope="col">Social Media</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>johndoe@yahoo.com</td>
                                            <td>18 courses</td>
                                            <td>180</td>
                                            <td>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>mark@twain.net</td>
                                            <td>18 courses</td>
                                            <td>130</td>
                                            <td>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>mark@marklander.com</td>
                                            <td>18 courses</td>
                                            <td>190</td>
                                            <td>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>johndoe@yahoo.com</td>
                                            <td>18 courses</td>
                                            <td>180</td>
                                            <td>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>mark@twain.net</td>
                                            <td>18 courses</td>
                                            <td>280</td>
                                            <td>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>March 32, 2018</td>
                                            <td>mark@marklander.com</td>
                                            <td>18 courses</td>
                                            <td>280</td>
                                            <td>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </td>
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