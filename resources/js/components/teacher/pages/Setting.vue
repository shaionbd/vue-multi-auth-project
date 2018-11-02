<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Account Settings</h2> 
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_area profile_account_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile_form_inner">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label >Notify me when</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox" checked>
                                          <span class="slider round"></span>
                                        </label>
                                        <p>New courses are added</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Payment is confirmed</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox" checked>
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Something bad happens</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox" >
                                        <label class="switch">
                                          <input type="checkbox" checked>
                                          <span class="slider round"></span>
                                        </label>
                                        <p>New attachments are available</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Some wants to get in touch</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Others</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox" >
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Exam results are public</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox" checked>
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Exams are coming soon</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label >Show everyone</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox" >
                                        <label class="switch">
                                          <input type="checkbox" >
                                          <span class="slider round"></span>
                                        </label>
                                        <p>When I’m online</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox" checked>
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Certifications / Skills achieved</p>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                        </label>
                                        <p>My Profile</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="custom_chekbox">
                                        <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                        </label>
                                        <p>Other stuff</p>
                                    </div>
                                </div>
                            </div>
                                                                  
                        </div>
                        <div class="profile_btn">
                              <button type="submit" class="btn">Save Changes</button>
                              <a href="#">Cancel</a>  
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