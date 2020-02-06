<template>
    <div class="h-100per">
        <layoutHeader />
        <div class="middle-ctn" :style="{minHeight: minMiddleCtn + 'px'}">
            <layoutLeftaside />
            <layoutMaincontent />
        </div>
        <layoutFooter />
    </div>
</template>

<script>
    import layoutHeader from './components/layouts/HeaderComponent';
    import layoutLeftaside from './components/layouts/LeftasideComponent';
    import layoutMaincontent from './components/layouts/MaincontentComponent';
    import layoutFooter from './components/layouts/FooterComponent';
    export default {
        components: {
            layoutHeader,
            layoutLeftaside,
            layoutMaincontent,
            layoutFooter,
        },
        data: function(){
            return{
                minMiddleCtn: window.innerHeight
            }
        }
    }
</script>
