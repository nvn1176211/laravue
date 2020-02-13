const state = {
    searchObject: [
        {
            heading: 'PHP',
            url: 'php',
            postType: 2,
        },
        {
            heading: 'Laravel',
            url: 'laravel',
            postType: 3,
        },
        {
            heading: 'CI',
            url: 'ci',
            postType: 4,
        },
        {
            heading: 'Front End',
            url: 'front_end',
            postType: 1,
        },
        {
            heading: 'Vue',
            url: 'vue',
            postType: 5,
        },
    ],
    searchResult: '',
}

const mutations = {
    changeSearchResult: (state, v) => {
        state.searchResult = v;
    }
} 

export default{
    state,
    mutations,
}