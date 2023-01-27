<template>
    <div id="header_top" class="header_top dark">
        <div class="container">
            <div class="hleft">
                <router-link :to="{name:'admin.dashboard'}">
                    <i class="fe fe-command brand-logo"></i>
                </router-link>
                <div class="dropdown">
                    <a href="#" class="nav-link icon">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="#" class="nav-link icon app_inbox">
                        <i class="fa fa-calendar"></i>
                    </a>
                    <a href="#" class="nav-link icon xs-hide">
                        <i class="fa fa-id-card-o"></i>
                    </a>
                    <a href="#" class="nav-link icon xs-hide">
                        <i class="fa fa-comments-o"></i>
                    </a>
                    <a href="#" class="nav-link icon app_file xs-hide">
                        <i class="fa fa-folder-o"></i>
                    </a>
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link user_btn">
                        <img class="avatar" src="/admin/images/user.png" v-tooltip.right="'User Menu'">
                    </a>
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa fa-align-left"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HeaderTop"
    }
</script>

<style scoped>

</style>
