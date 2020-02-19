const state = {
    currentPostPage: '',
    postHeadings: {},
    showPostBtn: false,
    showPostCompose: false,
    image64: {},
    test123: {1: [1,23,3], 2: [1,2,3]},
}

const mutations = {
    /**
     * param style: v = {postPage: ..., headingId: ..., img64: ...,}
     */
    addPostHeadingImg64: (state, v) => {
        if( state.image64[v.postPage] ){
            state.image64[v.postPage][v.headingId] = v.img64;
        }else{
            state.image64[v.postPage] = {};
            state.image64[v.postPage][v.headingId] = v.img64;
        }
    }, 
    
    addPostHeading: (state, v) => {
        Vue.set(state.postHeadings, v.postType, v.data);
    }, 

    updatePostHeading: (state, v) => {
       state.postHeadings = v;
    }, 
    setCurrentPostPage: (state, v) => {
        state.currentPostPage = v;
    }, 
    setPostBtnVisibility: (state, v) => {
        state.showPostBtn = v;
    }, 
    setPostComposeVisibility: (state, v) => {
        state.showPostCompose = v;
    },
} 

export default{
    state,
    mutations,
}