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
     * param style: v = {postType: ..., data: ...,}
     */
    addPostHeading: (state, v) => {
        Vue.set(state.postHeadings, v.postType, v.data);
    }, 

    /**
     * param style: v = {postId: ..., postContent: ...,}
     */
    addPostContent: (state, v) => {
        Vue.set(state.postHeadings[state.currentPostPage], v.postType, v.data);
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