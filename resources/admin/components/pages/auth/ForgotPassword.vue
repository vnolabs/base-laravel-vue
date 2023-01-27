<template>
    <div class="d-flex flex-column flex">
        <div class="row no-gutters h-100">
            <div class="col-md-12">
                <div id="content-body" style="max-width:500px;margin:0 auto;">
                    <div class="p-3 p-md-5">
                        <div class="card pt-30 pb-20">
                            <div class="card-body">
                                <div class="h3 mb-20 text-center">Forgot password</div>
                                <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Send me new password</button>
                                    <div class="text-right text-muted mt-20">
                                        <router-link :to="{name:'admin.login'}">
                                            Sign in
                                        </router-link>
                                    </div>
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
        name: "ForgotPassword"
    }
</script>

<style scoped>

</style>
