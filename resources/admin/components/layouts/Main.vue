<template>
    <div style="width: 100%">
        <template v-if="auth_page">
            <router-view></router-view>
        </template>
        <template v-else>
            <HeaderTop/>
            <UserDiv/>
            <LeftSidebar/>
            <div class="page">
                <PageTop :title="title"/>
                <router-view></router-view>
                <Footer/>
            </div>
        </template>
    </div>
</template>
<script>
    import HeaderTop from "./HeaderTop";
    import UserDiv from "./UserDiv";
    import LeftSidebar from "./LeftSidebar";
    import PageTop from "./PageTop";
    import Footer from "./Footer.vue";
    export default {
        name: "main-app",
        components: {HeaderTop, UserDiv, LeftSidebar, PageTop, Footer },
        data() {
            return {
                title: 'Dashboard',
                auth_page: false,
            }
        },
        methods: {
            renderTitlePage(title) {
                this.title = title;
                $('title').text(APP_NAME + ' - ' + title);
            },
            checkAuthPage(routeName) {
                if(routeName == 'admin.login' || routeName == 'admin.password.forgot' || routeName == '404') this.auth_page = true;
                else this.auth_page = false;
            }
        },
        mounted() {
            this.renderTitlePage(this.$route.meta.title);
            this.checkAuthPage(this.$route.name);
        },
        watch: {
            '$route' (to) {
                this.renderTitlePage(to.meta.title);
                this.checkAuthPage(to.name);
            }
        },
    };
</script>
