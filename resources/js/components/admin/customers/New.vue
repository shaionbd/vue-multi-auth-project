<template>
    <div class="login row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center"><b>Create Customers</b></div>
                <div class="card-body">
                    <form @submit.prevent="add">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" v-model="form.name" class="form-control" placeholder="Name">
                        </div>
                       
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" v-model="form.phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Add">
                        </div>
                       <div class="errors" v-if="errors">
                            <ul>
                                <li v-for="(fieldsError, fieldName) in errors" :key="fieldName">
                                    <strong>{{ fieldName }}</strong> {{ fieldsError.join('\n') }}
                                </li>
                            </ul>
                        </div>
                        <div class="errors" v-if="serverErr">
                            {{ serverErr }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import validate from 'validate.js';
    export default {
        name: 'customer-new',
        data() {
            return {
                form: {
                    name: '',
                    phone: ''
                },
                errors: null,
                serverErr: null
            }
        },
        methods: {
            add: function(){
                this.errors = null;
                const constraints = this.getConstraints();
                const errors = validate(this.$data.form, constraints);
                if(errors) {
                    this.errors = errors;
                    return;
                }
                axios.post('/api/customers/new', this.$data.form)
                    .then((response) => {
                        this.$router.push('/customers');
                    });
            },
            getConstraints() {
                return {
                    name: {
                        presence: true,
                        length: {
                            minimum: 3,
                            message: 'Must be at least 3 characters long'
                        }
                    },
                    phone: {
                        presence: true,
                        length: {
                            minimum: 9,
                            message: 'Must be at least 9 characters long'
                        }
                    }
                };
            }
        },
        computed: {
            authError() {
                return this.$store.getters.authError;
            }
        }

    }
</script>

<style scoped>
    .error {
        text-align: center;
        color: red;
    }
</style>