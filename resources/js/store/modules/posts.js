const state = {
    currentPostPage: '',
    postHeadings: [

    ],
    showPostBtn: false,
    showPostCompose: false,
}

const mutations = {
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