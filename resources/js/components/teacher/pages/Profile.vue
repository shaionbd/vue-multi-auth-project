<template>
    <div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Profile</h2> 
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="profile_form_inner">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >First Name</label>
                                    <input type="email" class="form-control" placeholder="EmailMario">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Last Name</label>
                                    <input type="password" class="form-control"  placeholder="Rossi">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >Email</label>
                                    <input type="email" class="form-control" placeholder="mario@mrossi.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control"  placeholder="• • • • • • • •">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >Profile Username</label>
                                    <input type="email" class="form-control" placeholder="MarioLTD">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Profile URL</label>
                                    <input type="password" class="form-control"  placeholder="https://www.mrossi.com/profile">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >Company</label>
                                    <input type="email" class="form-control" placeholder="Mario Limited">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Looking for work ?</label>
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Yes, I do.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >Billing Address</label>
                                    <input type="email" class="form-control" placeholder="42 Randomstreet, Rome 50320">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Country</label>
                                    <input type="password" class="form-control"  placeholder="Italy">
                                </div>
                            </div>
                                                                  
                        </div>
                        <div class="profile_btn">
                              <button type="submit" class="btn">Save Changes</button>
                              <a href="#">Cancel</a>  
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="profile_form_inner profile_right">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label >Languages</label>
                                    <input type="email" class="form-control"  placeholder="Italiano">
                                    <input type="email" class="form-control"  placeholder="English">
                                    <input type="email" class="form-control"  placeholder="Other">
                                </div>
                                <a href="#">+ add new</a>
                            </div>

                            <div class="profile_social">
                                <h2>Social Media</h2>
                                <ul>
                                    <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Change Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i>Add LinkedIn</a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i>Add Website</a></li>
                                </ul>
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