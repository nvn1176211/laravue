const state = {
    currentPostPage: '',
    postHeadings: [

    ]
}

const mutations = {
    addPostHeading: (state, v) => {
        state.postHeadings = v;
    }, 
    setCurrentPostPage: (state, v) => {
        state.currentPostPage = v;
    }, 
} 

export default{
    state,
    mutations,
}