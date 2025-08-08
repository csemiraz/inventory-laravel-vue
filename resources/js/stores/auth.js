import { defineStore } from "pinia";
import { ref, computed } from "vue";
import { baseClient, inventoryAxiosClient  } from '@/utils/systemAxios'

export const useAuthStore = defineStore('auth', {
  state: () => ({
    token: localStorage.getItem('token') || 0,
    username: localStorage.getItem('username') || 0,
    errors: [],
    message: [],
  }),
  getters: {
    getToken: (state) => state.token,
    getUserName: (state) => state.username
  },
  actions: {
    setToken(token) {
      this.token = token;
      localStorage.setItem('token', token);
    },
    setUserName(name) {
      this.name = name;
      localStorage.setItem('username', name);
    },

    removeToken() {
      localStorage.removeItem('token');
    },
    removeUserName() {
      localStorage.removeItem('username');
    },

    async login(formData, callback) {
      try {
        const response = await baseClient.get('/sanctum/csrf-cookie');
        const { data, status } = await inventoryAxiosClient.post('/login', formData)
  
        if(data.status === 'success') {
          this.setToken(data.data.token);
          this.setUserName(data.data.name);
          this.message = data.message;
          callback(data.status);
        }
        else {
          this.message = data.message;
          callback(data.status);
        }
  
      } catch (error) {
          if(error.response) {
            this.errors = error.response.data;
            //this.removeToken();
            this.message = error.response.data.message
            callback(error);
          }
      }
    }


  }
})
