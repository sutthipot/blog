<template>
    <div class="container">
        <div class="w-100 text-center text-white list-inline mt-5">
            <h3 class="font-weight-bold list-inline-item">Welcome</h3> <h5 class="list-inline-item">Parking place Car</h5>
        </div>
        <div class="w-100 d-flex justify-content-center mt-5 mb-5">
            <div class="card col-10 col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Login</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Administrator Control</h6>
                    <div class="w-100 mt-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="w-100 mt-3">
                        <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <div class="w-100 mt-3">
                        <a href="">
                            <button type="button" class="btn btn-danger w-100">Sign now <i class="fas fa-angle-double-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

</style>