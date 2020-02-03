<template>
    <div class="h-100per">
        <layoutHeader />
        <div class="middle-ctn">
            <layoutLeftaside />
            <layoutMaincontent />
        </div>
        <layoutFooter />
        <!-- <layoutRightaside /> -->

        <!-- <div class="control-sidebar-bg"></div> -->
    </div>
</template>

<script>
    import layoutHeader from './components/layouts/HeaderComponent';
    import layoutLeftaside from './components/layouts/LeftasideComponent';
    import layoutMaincontent from './components/layouts/MaincontentComponent';
    import layoutFooter from './components/layouts/FooterComponent';
    // import layoutRightaside from './components/layouts/RightasideComponent';
    export default {
        components: {
            layoutHeader,
            layoutLeftaside,
            layoutMaincontent,
            layoutFooter,
            // layoutRightaside,
        },
    }
</script>
