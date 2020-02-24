const state = {
    isInPostHeading: '',
    currentPostPage: '',
    currentPostDetailId: '',
    posts: {},
    showPostBtn: false,
    showPostCompose: false,
}

const mutations = {
    /**
     * param style: v = primitive value
     */
    changeCurrentPostDetailId: (state, v) => {
        state.currentPostDetailId = v;
    }, 

    /**
     * param style: v = {postType: ..., data: ...,}
     */
    addPostHeading: (state, v) => {
        Vue.set(state.posts, v.postType, v.data);
    }, 

    /**
     * param style: v = {postId: ..., postContent: ...,}
     */
    addPostContent: (state, v) => {
        Vue.set(state.posts[state.currentPostPage][v.postId], 'postContent', v.postContent);
    }, 
    setCurrentPostPage: (state, v) => {
        state.currentPostPage = v;
        state.isInPostHeading = v;
    }, 
    isInCurrentPostPage: (state, v) => {
        state.isInPostHeading = v;
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