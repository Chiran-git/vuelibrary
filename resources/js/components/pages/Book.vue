<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Book Info</div>
            <div class="card-body">
                <h4>Name:</h4>{{ book.name }}

                <h4>Description:</h4> 
                <p>{{ book.description }}</p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                id: this.$route.params.id,
                book: {},
            }
        },
        mounted () {
            this.getBook();
        },
        methods: {
           getBook () {
                axios.get(`${CP.baseApiUrl}/books/${this.id}`)
                    .then(response => {
                        this.book = response.data;
                    });
            }
        }
    }

</script>
