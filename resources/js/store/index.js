import Vue from 'vue'
import Vuex from 'vuex'
import client_config from './modules/client_config'
import posts from './modules/posts'
import search from './modules/search'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    client_config,
    posts,
    search,
  },
})