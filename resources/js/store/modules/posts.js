const state = {
    currentPostPage: '',
    postHeadings: [

    ],
    showPostBtn: false,
    showPostCompose: false,
    image64: {},
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
        state.postHeadings = v;
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