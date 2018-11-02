<template>
	<div class="right_col">
		<div class="main_title">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-6">
	                    <h2>Dashboard</h2> 
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="count_all">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-lg-4">
	                    <div class="count_all_inner">
	                        <span class="counter_img"><img src="/asset/images/d-ic1.png" alt=""></span>
	                        <span class="counter">1000</span>
	                        <span class="counter_name">Students</span>
	                    </div>
	                </div>
	                <div class="col-lg-4">
	                    <div class="count_all_inner">
	                        <span class="counter_img"><img src="/asset/images/d-ic2.png" alt=""></span>
	                        <span class="counter">28</span>
	                        <span class="counter_name">Teachers</span>
	                    </div>
	                </div>
	                <div class="col-lg-4">
	                    <div class="count_all_inner">
	                        <span class="counter_img"><img src="/asset/images/d-ic3.png" alt=""></span>
	                        <span class="counter">227</span>
	                        <span class="counter_name">Total Courses</span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="form_select">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12 text-right">
	                    <div class="form_select_inner">
	                        <span>Show me</span>
	                        <select class="selcet_inner">
	                            <option>Courses</option>
	                            <option>Recent</option>
	                            <option>Recent</option>
	                        </select>
	                        <select class="selcet_inner">
	                            <option>Programming</option>
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
	                    <div class="custom_table_inner">
	                    <div class="table-responsive-md">
	                        <table class="table">
	                            <thead>
	                                <tr>
	                                  <th scope="col">Course</th>
	                                  <th scope="col">Category</th>
	                                  <th scope="col">Professor</th>
	                                  <th scope="col">Added on</th>
	                                  <th scope="col">Attenders</th>
	                                  <th scope="col"></th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Lorem ipsum dolor sit amet</td>
	                                    <td>Programming</td>
	                                    <td>John Doe</td>
	                                    <td>March 32, 2018</td>
	                                    <td>18 students</td>
	                                    <td><a href="#">explore <span>›</span> </a></td>
	                                </tr>
	                                <tr>
	                                    <td>Lorem ipsum dolor sit amet</td>
	                                    <td>Programming</td>
	                                    <td>John Doe</td>
	                                    <td>March 32, 2018</td>
	                                    <td>18 students</td>
	                                    <td><a href="#">explore <span>›</span> </a></td>
	                                </tr>
	                                <tr>
	                                    <td>Lorem ipsum dolor sit amet</td>
	                                    <td>Programming</td>
	                                    <td>John Doe</td>
	                                    <td>March 32, 2018</td>
	                                    <td>18 students</td>
	                                    <td><a href="#">explore <span>›</span> </a></td>
	                                </tr>
	                                <tr>
	                                    <td>Lorem ipsum dolor sit amet</td>
	                                    <td>Programming</td>
	                                    <td>John Doe</td>
	                                    <td>March 32, 2018</td>
	                                    <td>18 students</td>
	                                    <td><a href="#">explore <span>›</span> </a></td>
	                                </tr>
	                                <tr>
	                                    <td>Lorem ipsum dolor sit amet</td>
	                                    <td>Programming</td>
	                                    <td>John Doe</td>
	                                    <td>March 32, 2018</td>
	                                    <td>18 students</td>
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