<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Support</h2> 
                    </div>
                </div>
            </div>
        </div>
        <div class="create_new_ticket">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="create_ticket_inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="create_ticket_title">
                                        <img src="/asset/images/ques-ic.png" alt="">
                                        <span>Create New Ticket</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <div class="form_select_inner">
                                        <span>Department</span>
                                        <select class="selcet_inner">
                                            <option>General</option>
                                            <option>Recent</option>
                                            <option>Recent</option>
                                        </select>
                                    </div>
                                </div>                                            
                            </div>
                            <div class="ticket_contact">
                                <div class="form-group">
                                    <label for="comment">Tell us shortly how can we help you ?</label>
                                    <textarea class="form-control" rows="5" id="comment" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora"></textarea>
                                    <button type="submit" class="btn">Send Ticket</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom_table_inner ticket_table">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Ticket #50382583</td>
                                            <td>March 32, 2018</td>
                                            <td>SOLVED</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket #50382583</td>
                                            <td>March 32, 2018</td>
                                            <td>SOLVED</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket #50382583</td>
                                            <td>March 32, 2018</td>
                                            <td>SOLVED</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket #50382583</td>
                                            <td>March 32, 2018</td>
                                            <td>SOLVED</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket #50382583</td>
                                            <td>March 32, 2018</td>
                                            <td>SOLVED</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket #50382583</td>
                                            <td>March 32, 2018</td>
                                            <td>SOLVED</td>
                                        </tr>
                                    </tbody>
                                </table>
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