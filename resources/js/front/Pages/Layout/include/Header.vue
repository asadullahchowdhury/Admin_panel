<template>
    <div class="header">
        <div class="left-header">
            <h3 class="brand">Admin Panel</h3>
            <div class="each-bar">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        <div class="right-header">
            <div class="user-name">admin
                <ul class="user-dropdown">
                    <li>
                        <router-link :to="{name:'Profile'}" href="#">Profile</router-link>
                    </li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>

            <div class="user">
                <img src="/images/profile.png" alt="profile" class="img-fluid">
            </div>
        </div>
    </div>
</template>
<script>

export default {}
</script>
