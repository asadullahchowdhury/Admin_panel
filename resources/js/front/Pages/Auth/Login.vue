<template>
    <div class="login" style="background-image: url('/images/login_bg.png')">
        <div class="card card-login">
            <div class="avatar-wrapper">
                <div class="avatar">
                    <img src="/images/profile.png" class="img-fluid" alt="avatar">
                </div>
            </div>
            <h3 class="card-title">Login here</h3>
            <div class="card-body">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control shadow-none" placeholder="Enter your email here..">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="email" class="form-control shadow-none" placeholder="Enter your Password here..">
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-check-input me-3">
                    <label for="check"> Remember me</label>
                </div>
                <button type="button" class="btn btn-theme w-100">Login</button>
            </div>
        </div>
    </div>
</template>
<script>

export default {}
</script>
