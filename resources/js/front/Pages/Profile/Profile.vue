<template>

    <div class="profile">
        <div class="page-title">Profile</div>
        <!--        <div class="page-sub-title">profile</div>-->
        <div class="page-wrapper">

            <div class="profile-img-wrapper">
                <div class="profile-img"><img src="/images/profile.png" class="img-fluid" alt="profile pic"></div>
            </div>

            <div class="profile-info">
                <div class="profile-name">Admin</div>
                <div class="profile-mail"> admin@gmail.com</div>
            </div>
            <div class="manage-btn">
                <button type="button" class="btn btn-theme" data-bs-toggle="modal" data-bs-target="#edit_profile">
                    Edit Profile
                </button>
                <button type="button" class="btn btn-theme" data-bs-toggle="modal" data-bs-target="#change_pass">
                    Change password
                </button>
            </div>
        </div>


        <!--Edit profile Modal -->
        <div class="modal fade" id="edit_profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control shadow-none" placeholder="Name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control shadow-none" placeholder="Email" id="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-theme px-4">Update</button>
                    </div>
                </div>
            </div>
        </div>


        <!--Change password modal -->
        <div class="modal fade" id="change_pass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Change password</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="current-pass">Current Password</label>
                            <input type="text" class="form-control shadow-none" placeholder="Current password"
                                   id="current-pass">
                        </div>

                        <div class="form-group">
                            <label for="new-pass">New Password</label>
                            <input type="text" class="form-control shadow-none" placeholder="Current password"
                                   id="new-pass">
                        </div>

                        <div class="form-group">
                            <label for="confirm-pass">Confirm Password</label>
                            <input type="text" class="form-control shadow-none" placeholder="Current password"
                                   id="confirm-pass">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-theme px-4">Update</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>

export default {}
</script>
