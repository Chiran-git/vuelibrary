<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Library</div>
            <div class="card-body">
                <h4>Name</h4> {{ library.name }}
                <h4>List of books </h4>
                <ul>
                    <li v-for="book in library.books">
                        <router-link :to="'/books/'+book.id">
                            {{ book.name }}
                        </router-link>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                id: this.$route.params.id,
                library: {},
            }
        },
        mounted () {
            this.getLibrary();
        },
        methods: {
            getLibrary () {
                axios.get(`http://localhost/commercepundit/public/api/libraries/${this.id}`)
                    .then(response => {
                        this.library = response.data;
                    });
            }
        }
    }

</script>
