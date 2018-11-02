<template>
	<div class="right_col">
        <div class="main_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Community</h2> 
                    </div>
                    <div class="col-md-8 text-right">
                        <div class="form_select_inner">
                            <span>Show me</span>
                            <select class="selcet_inner">
                                <option>Unanswered</option>
                                <option>Recent</option>
                                <option>Recent</option>
                            </select>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="create_new_ticket">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="create_ticket_inner community_ticket_inner">
                            <p>Created on <span> March 32, 2018</span></p>
                            <div class="community_title">
                                <h2>Community Name</h2>
                                <h3>Marketing</h3>
                                <img src="/asset/images/student-img/communityic-2.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus laoreet purus, eu vestibulum dui tempor id. Ut ferment um ante a fringilla egestas. Proin posuere ipsum vel lobortis.</p>
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
                        <div class="custom_table_inner ticket_table community_table community_accordion">
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     Lorem ipsum dolor sit amet ? <span>Answered</span>
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="card-body">
                                    <h3>Mario Cardi on March 32, 2018 said</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin lectus id justo fermentum, at efficitur ante gravida.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Lorem ipsum dolor sit amet ? <span>Answered</span>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                   <h3>Mario Cardi on March 32, 2018 said</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin lectus id justo fermentum, at efficitur ante gravida.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Lorem ipsum dolor sit amet ? <span>Answered</span>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                  <div class="card-body">
                                    <h3>Mario Cardi on March 32, 2018 said</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin lectus id justo fermentum, at efficitur ante gravida.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>  
                        <div class="pagination_area">
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