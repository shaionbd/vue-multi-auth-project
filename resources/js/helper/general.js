export function initialize(store, router) {
    router.beforeEach((to, from, next) => {
        const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
        const currentUser = store.state.currentUser;
    
        if(requiresAuth && !currentUser) {
            if(to.path.startsWith('/admin')){
                next('admin/login');
            }else if(to.path.startsWith('/student')){
                next('student/login');
            }else if(to.path.startsWith('/teacher')){
                next('teacher/login');
            }else{
                next('/');
            }
            
        } else if(to.path.search('/login') > -1 && currentUser) {
            if(currentUser.userType == 'admin'){
                next('/admin');
            }else if(currentUser.userType == 'teacher'){
                next('/teacher');
            }else if(currentUser.userType == 'student'){
                next('/student');
            }else {
                next('/');
            }  
        } else if(currentUser) {
            if(to.path.startsWith('/admin') && currentUser.userType == 'admin'){
                next();
            }else if(to.path.startsWith('/teacher') && currentUser.userType == 'teacher'){
                next();
            }else if(to.path.startsWith('/student') && currentUser.userType == 'student'){
                next();
            }else{
                next('/');
            }
        } else {
            next();
        }
    });
    
    axios.interceptors.response.use(null, (error) => {
        if (error.resposne.status == 401) {
            store.commit('logout');
            router.push('/');
        }

        return Promise.reject(error);
    });

    if (store.getters.currentUser) {
        setAuthorization(store.getters.currentUser.token);
    }
}

export function setAuthorization(token) {
    axios.defaults.headers.common["Authorization"] = `Bearer ${token}`
}