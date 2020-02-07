<template>
    <div class="main-content-ctn">
        <div class="heading">
            <h2>
                {{$store.state.client_config.page_title}}
            </h2>
            <div>
                <span v-for="(item, index) in $store.state.client_config.breadcrumb" :key="index">
                    <span
                        v-if="index + 1 != $store.state.client_config.breadcrumb.length"
                        >{{ item.name }} > </span>
                    <span v-else>{{ item.name }}</span>
                </span>
            </div>
        </div>

        <div>
            <div v-if="$store.state.client_config.page_title == 'Post'">
                <div>
                    <button class="btn btn-primary" v-on:click="hiddenPostBtn" v-if="showPostBtn">Post</button>
                </div>

                <PostComposer v-if="showPostCompose"></PostComposer>
            </div>
        </div>
        <!-- /.content -->
    </div>
</template>

<script>
    import PostComposer from '../contents/PostComposeComponent';
    export default {
        name: 'layoutMaincontent',
        components: {
            PostComposer
        },
        data: function () {
            return{
                showPostBtn: true,
                showPostCompose: false,
            }
        },
        methods: {
            composerView: function(){
                window.history.length > 1 ? this.$router.go(-1) : this.$router.push('/');
            },
            hiddenPostBtn: function(){
                this.showPostBtn = false
                this.showPostCompose = true
            }
        },
    }
</script>
