<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Libraries
                <button class="btn btn-primary btn-xs float-right">
                    <router-link to="libraries/add" class="nav-link active" href="#">Create Library</router-link>
                </button>
            </div>
            <div class="card-body">
                <ul>
                    <li v-for="library in libraries" class="bg-success">
                        <router-link :to="'/libraries/'+library.id">
                            {{ library.name }}
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return  {
            libraries: {},
        }
    },
    mounted() {
        this.getLibraries()
    },

    methods: {
        getLibraries () {
            axios.get(`${CP.baseApiUrl}/libraries`)
                .then(response => {
                    this.libraries = response.data.data;
                });
        }
    }
}
</script>

<style scoped>
    ul {
        padding-left: 0;
    }
    ul>li{
        list-style: none;
        display: inline-block;
        padding: 5px;
        margin: 5px;
    }
    ul>li>a {
        text-transform: uppercase;
        padding: 5px;
        color: #fff;
        font-weight: 600;
    }
    ul>li>a:hover {
        text-decoration: none;
    }

    .btn a{
        color: #fff;
    }
</style>