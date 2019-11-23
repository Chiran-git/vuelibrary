<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Create Library</div>
            <div class="card-body">
                <form @submit.prevent="addBook">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Book Name:</label>
                                <input type="text" class="form-control" v-model="book.name">
                                <span v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Book Description:</label>
                                <input type="text" class="form-control" v-model="book.description">
                                <span v-if="errors && errors.description"
                                    class="text-danger">{{ errors.description[0] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Library:</label>
                                <select v-model="book.library" class="form-control">
                                    <option disabled value="">Select a library</option>
                                    <option v-for="library in libraries" v-bind:value="library.id">{{ library.name }}
                                    </option>
                                </select>
                                <span v-if="errors && errors.library" class="text-danger">{{ errors.library[0] }}</span>
                            </div>
                        </div>
                    </div>

                    <br />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <button class="btn btn-primary float-right">Add Book</button>
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
                book: {
                    name: '',
                    description: '',
                    library: ''
                },
                libraries: {},
                errors: {},
            }
        },
        mounted() {
            this.getLibraries()
        },
        methods: {
            getLibraries() {
                axios.get(`${CP.baseApiUrl}/libraries`)
                    .then(response => {
                        this.libraries = response.data.data;
                    });
            },

            addBook() {
                axios.post(`${CP.baseApiUrl}/books`, this.book)
                    .then(response => {
                        this.book = {};
                        this.$router.push('/libraries');
                        this.$toastr.s("SUCCESS", "Book successfully added");
                    })
                    .catch(error => {
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                        this.$toastr.e("Something went wrong");
                    });
            }
        }
    }

</script>
