<template>
	<div class="right_col">
		<div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Students Manager</h2> 
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
                                          <th scope="col">Student</th>
                                          <th scope="col">Joined on</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Active</th>
                                          <th scope="col">Completed</th>
                                          <th scope="col">Social Media</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-toggle="modal" data-target="#exampleModal" >John Doe</td>
                                            
                                            <td>March 32, 2018</td>
                                            <td>johndoe@yahoo.com</td>
                                            <td>18 courses</td>
                                            <td>18 courses</td>
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
                                            <td>18 courses</td>
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
                                            <td>18 courses</td>
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
                                            <td>18 courses</td>
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
                                            <td>18 courses</td>
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
                                            <td>18 courses</td>
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

        <!-- Modal -->
        <div class="cutom_modal modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Student Details <button class="btn">edit</button></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   <div class="modal-body">
                        <div class="table-responsive-md">
                            <table class="table">
                                <tr>
                                    <td>First Name</td>
                                    <td>Mario</td>
                                    <td>Address</td>
                                    <td>24 Streetname, Rome 40380</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>Rossi</td>
                                    <td>Country</td>
                                    <td>Italy</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>mario@rossi.com</td>
                                    <td>Looking for work ?</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Profile Name</td>
                                    <td>mario1234</td>
                                    <td>Languages</td>
                                    <td>English, Italiano</td>
                                </tr>
                                <tr>
                                    <td>Profile URL</td>
                                    <td>http://jobformazione.it/profile</td>
                                    <td>Facebook</td>
                                    <td>http://facebook.com/username</td>
                                </tr>
                                <tr>
                                    <td>Company</td>
                                    <td>Mario LTD</td>
                                    <td>LinkedIn</td>
                                    <td>http://linkedin.com/profile</td>
                                </tr>
                                <tr>
                                    <td>Billing</td>
                                    <td>PayPal</td>
                                    <td>Website</td>
                                    <td>http://www.rossi.com/</td>
                                </tr>
                                <tr class="tr_border">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                <tr>
                                    <td>Active Courses</td>
                                    <td>8</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Courses Done</td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Teacher Assigned</td>
                                    <td>Mario Cardi</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
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