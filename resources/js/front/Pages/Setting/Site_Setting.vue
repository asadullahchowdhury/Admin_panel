<template>

    <div class="site-setting">
        <div class="page-title">Site settings</div>
        <div class="page-wrapper">
            <div class="section-title">Site settings</div>

            <div class="site-setting-content">

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control shadow-none" placeholder="Phone Number" id="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control shadow-none" placeholder="Email Address" id="email">
                        </div>
                    </div>
                </div>

                <div class="content-title">Address</div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="street_address">Street address</label>
                            <input type="text" class="form-control shadow-none" placeholder="Phone Number"
                                   id="street_address">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control shadow-none" placeholder="Email Address" id="email">
                        </div>
                    </div>
                </div>

                <h3 class="content-title">Social Media Links</h3>

                <div class="row mb-4">
                    <!--Facebook-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control shadow-none" placeholder="Facebook" id="facebook">
                        </div>
                    </div>

                    <!--Instagram-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ig">Instagram</label>
                            <input type="text" class="form-control shadow-none" placeholder="Instagram" id="ig">
                        </div>
                    </div>

                    <!--twitter-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control shadow-none" placeholder="Twitter" id="twitter">
                        </div>
                    </div>

                    <!--Youtube-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input type="text" class="form-control shadow-none" placeholder="Youtube" id="Youtube">
                        </div>
                    </div>
                </div>


                <h3 class="content-title">Google Map Setting</h3>

                <div class="form-group">
                    <input type="text" class="form-control shadow-none" placeholder="Google map">
                </div>
            </div>

            <div class="w-100 text-end mt-5">
                <button type="button" class="btn btn-theme px-4">
                    <img src="/icons/check.svg" alt="save check" style="width: 16px; margin-right: 10px">
                    Save Changes
                </button>
            </div>
        </div>
    </div>

</template>
<script>

export default {}
</script>
