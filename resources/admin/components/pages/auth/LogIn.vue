<template>
    <div class="d-flex flex-column flex">
        <div class="row no-gutters h-100">
            <div class="col-md-12">
                <div id="content-body" style="max-width:500px;margin:0 auto;">
                    <div class="p-3 p-md-5">
                        <div class="card pt-20 pb-20">
                            <div class="card-body">
                                <div class="h3 mb-30 text-center">Login</div>
                                <div class="form-group">
                                    <select class="custom-select">
                                        <option>HR Dashboard</option>
                                        <option>Project Dashboard</option>
                                        <option>Job Portal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password
                                        <router-link :to="{name:'admin.password.forgot'}" :class="'float-right small'">
                                            I forgot password
                                        </router-link>
                                    </label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Remember me</span>
                                    </label>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
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
        name: "Login"
    };
</script>
