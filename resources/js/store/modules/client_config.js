const state = {
    baseApiUrl: 'http://localhost:8080/laravue/public/',
    page_title: 'Home',
    breadcrumb: [
        {
            'name': 'Home',
            'url': 'home'
        },
    ],
    postTypes: [
         
    ],
    isLandingPage: true,
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