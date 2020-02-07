const state = {
    postHeadings: [

    ]
}

const mutations = {
    addPostHeading: (state, v) => {
        state.page_title = v;
    }, 
} 

export default{
    state,
    mutations,
}