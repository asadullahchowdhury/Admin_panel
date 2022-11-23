import {createRouter, createWebHistory} from "vue-router";


/*pages*/

import Layout from "../Pages/Layout/Layout.vue"
import Dashboard from "../Pages/Dashboard/Dashboard.vue"
import Brand from "../Pages/Brand/Brand.vue"
import Login from "../Pages/Auth/Login.vue"
import Categories from "../Pages/Categories/Categories.vue";
import Product from "../Pages/Product/Product.vue"
import Setting from "../Pages/Setting/Site_Setting.vue"
import Profile from "../Pages/Profile/Profile.vue"


const routes = [
    {path: '/auth/login', name: 'Login', component: Login,},

    {

        path: '/', name: 'Layout', component: Layout,
        children: [
            {path: '/', name: 'Dashboard', component: Dashboard,},
            {path: '/profile', name: 'Profile', component: Profile,},
            {path: 'brand', name: 'Brand', component: Brand,},
            {path: 'categories', name: 'Categories', component: Categories,},
            {path: 'product', name: 'Product', component: Product,},
            {path: 'setting', name: 'Setting', component: Setting,},

        ]
    }
]


const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
