const state = {
    baseApiUrl: 'http://localhost:90/laravue/public/',
    page_title: 'Home',
    breadcrumb: [
        {
            'name': 'Home',
            'url': 'home'
        },
    ],
    postTypes: [
         
    ],
    isLandingPage: false,
    pageInfo: {
        isInAllTags: false,
        isTag: true,
    },
}

const mutations = {
    changePageTitle: (state, v) => {
        state.page_title = v;
    }, 
    addBreadcrumb: (state, v) => {
        if(v.clear){
            state.breadcrumb = [
                state.breadcrumb[0]
            ];
        }
        state.breadcrumb.push(v);
    },
} 

export default {
    state,
    mutations,
}