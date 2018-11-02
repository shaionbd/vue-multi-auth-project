<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Referral Discount</h2> 
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile_form_inner refferel_inner">
                              <div class="form-row">
                                <h2>Get your discount referring our platform to others</h2>
                                <label>Use this link</label>
                                <div class="col-md-9">
                                 
                                  <input type="text" class="form-control" placeholder="https://www.jobformazione.it/referral/39AR2028">
                                  <p><img src="/asset/images/student-img/dl2.png" alt="">Link copied to clipboard</p>
                                </div>
                                <div class="col-md-3">
                                  <button type="submit" class="btn">Copy to Clipboard</button> 
                                </div>
                              </div>
                        </div>
                        <div class="profile_form_inner profile_right refferel_right">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label >or invite them via email</label>
                                    <input type="email" class="form-control"  placeholder="hellomario@mrossi.com">
                                    <input type="email" class="form-control"  placeholder="someone@gmail.com">
                                    <input type="email" class="form-control"  placeholder="johndoe@hello.net">
                                </div>
                                <a href="#">+ add new</a>
                                <button type="submit" class="btn">Send Invitation</button>
                            </div>
                            <!-- <div class="profile_btn">
                                  <button type="submit" class="btn">Copy to Clipboard</button> 
                            </div> -->
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