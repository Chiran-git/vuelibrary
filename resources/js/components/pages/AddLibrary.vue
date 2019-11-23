<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Create Library</div>
            <div class="card-body">
                <form @submit.prevent="createLibrary">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Library Name:</label>
                                <input type="text" class="form-control" v-model="library.name">
                                <span v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</span>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <button class="btn btn-primary float-right">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                library:{},
                errors: {},
            }
        },
        mounted () {

        },
        methods: {
            createLibrary () {
                axios.post(`${CP.baseApiUrl}/libraries`, this.library)
                    .then(response => {
                        this.post= {};
                        this.$router.push('/libraries');
                    })
                    .catch(error => {
                        if (error.response.status === 422) {
                          this.errors = error.response.data.errors || {};
                        }
                    });
            }
        }
    }

</script>
