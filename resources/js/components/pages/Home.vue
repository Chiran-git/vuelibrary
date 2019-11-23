<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Libraries</div>
            <div class="card-body">
                <ul>
                    <li v-for="library in libraries">
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
            axios.get(`http://localhost/commercepundit/public/api/libraries`)
                .then(response => {
                    this.libraries = response.data.data;
                });
        }
    }
}
</script>