<template>
    <div class="layout">
        <Header/>
        <div class="main-body">
            <Sidenav/>
            <div class="main-content">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import Header from "./include/Header.vue"
import Sidenav from "./include/Sidenav.vue"

export default {
    components: {Header, Sidenav}
}
</script>
