<template>
    <nav class="sidenav">
        <ul class="nav-list">
            <li class="list-item">
                <router-link :to="{name:'Dashboard'}" href="#"><img src="/icons/home.svg" alt=""> <span>Dashboard</span>
                </router-link>
            </li>
            <li class="list-item">
                <router-link :to="{name:'Brand'}" href="#"><img src="/icons/figma.svg" alt=""> <span>Brand</span>
                </router-link>
            </li>
            <li class="list-item">
                <router-link :to="{name:'Categories'}" href="#"><img src="/icons/filter.svg" alt="">
                    <span>Categories</span>
                </router-link>
            </li>
            <li class="list-item">
                <router-link :to="{name:'Product'}" href="#"><img src="/icons/codesandbox.svg"
                                                                  alt=""><span>Products</span>
                </router-link>
            </li>
            <li class="list-item">
                <router-link :to="{name:'Setting'}" href="#"><img src="/icons/sliders.svg" alt="">
                    <span>Site settings</span>
                </router-link>
            </li>
        </ul>
    </nav>
</template>
<script>
</script>
