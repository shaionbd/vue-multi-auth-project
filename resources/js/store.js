import {getLocalUser} from './helper/auth'

const user = getLocalUser();

export default {
	state: {
		currentUser: user,
		isLoggedIn: !!user,
		loading: false,
        auth_error: null,
        customers: [],
        dashboardCounter: null
	},
	getters: {
		isLoading(state) {
            return state.loading;
        },
        isLoggedIn(state) {
            return state.isLoggedIn;
        },
        currentUser(state) {
            return state.currentUser;
        },
        authError(state) {
            return state.auth_error;
        },
        customers(state) {
            return state.customers;
        },
        dashboardCounter(state) {
            return state.dashboardCounter;
        }
	},
	mutations: {
		login(state) {
			state.loading = true;
			state.auth_error = false;
		},
		loginSuccess(state, payload) {
			state.auth_error = null;
            state.isLoggedIn = true;
            state.loading = false;
            state.currentUser = Object.assign({}, payload.user, {token: payload.access_token});

            localStorage.setItem("user", JSON.stringify(state.currentUser));
		},
		loginFailed(state, payload) {
            state.loading = false;
            state.auth_error = payload.error;
        },
		logout(state){
			localStorage.removeItem("user");
            state.isLoggedIn = false;
            state.currentUser = null;
		},
		updateCustomers(state, payload) {
            state.customers = payload;
        },
        updateDashboardCounter(state, payload) {
            state.dashboardCounter = payload;
        }
	},
	actions: {
		login(context) {
            context.commit("login");
        },
        getCustomers(context) {
            axios.get('/api/customers')
            .then((response) => {
                context.commit('updateCustomers', response.data.customers);
            })
        },
        getAdminDashboardCounter(context) {
            axios.get('/api/admin/dashboard/counter')
            .then((response) => {
                context.commit('updateDashboardCounter', response.data.counter);
            })
        },
        getStudentDashboardCounter(context) {
            console.log('Counter calling ...');
            axios.get('/api/student/dashboard/counter')
            .then((response) => {
                context.commit('updateDashboardCounter', response.data.counter);
            })
        },
        getTeacherDashboardCounter(context) {
            axios.get('/api/teacher/dashboard/counter')
            .then((response) => {
                context.commit('updateDashboardCounter', response.data.counter);
            })
        }
	}
};