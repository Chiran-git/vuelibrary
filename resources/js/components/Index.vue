<template>
    <div id="main">
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-info">
                    <div class="card-body">
                        <router-link to="/libraries" class="nav-link active" href="#">Click here to View Libraries</router-link>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                
            </div>
            <div class="col-md-3">
                
            </div>
            <div class="col-md-3">
                
            </div>
        </div>

        <br /><br />
        <div id="content">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                //
            }
        }
    }

</script>

<style scoped>
    .card {
        max-width: 200px;
        height: 100px;
        position: relative;
    }

    .card a {
        color: #fff;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }

</style>
