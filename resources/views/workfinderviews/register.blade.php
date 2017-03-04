@include('workfinderviews.partials.masterheader')
<div role="main" class="main">
    <section class="section section-text-light section-default section-default-scale-8 section-center mt-none">
        <div class="container">

            <div class="row mt-lg">

                <div class="row mt-lg">
                    <div class="col-md-10 col-md-offset-1 center">

                        <div class="divider divider-primary divider-small divider-small-center mb-xl">
                            <hr>
                        </div>

                        <h2 class="mb-none mt-xl font-weight-semibold">Please Register to the Worker Finder</h2>
                        <p class="lead mb-none">By Creating an account with our site, you will be able to move through
                            the checkout process faster, store task address, view and track your orders in your account
                            and more.</p>

                        <div class="divider divider-style-4 divider-primary divider-top-section-custom taller">
                            <i class="fa fa-chevron-down"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form-section register-form">
        <div class="container">
            <h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Create an Account</h1>

            <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                <div class="box-content">
                    <form action="#">

                        <h4 class="heading-primary text-uppercase mb-lg">PERSONAL INFORMATION</h4>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">User Name <span class="required">*</span></label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Mobile<span class="required">*</span></label>
                                    <input type="text" name="mobile_number" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Password <span class="required">*</span></label>
                                    <input type="text" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Confirm Password<span
                                                class="required">*</span></label>
                                    <input type="password" name="cpassword" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="font-weight-normal">Email Address <span
                                                class="required">*</span></label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">City<span class="required">*</span></label>
                                    <select name="location" class="form-control" required>
                                        <option value="">Select Area</option>
                                        <option value="PK">location 1</option>
                                        <option value="PK">location 2</option>
                                        <option value="PK">location 3</option>
                                        <option value="PK">location 4</option>
                                        <option value="PK">location 5</option>
                                        <option value="PK">location 6</option>
                                        <option value="PK">location 7</option>
                                        <option value="PK">location 8</option>
                                        <option value="PK">location 9</option>
                                        <option value="PK">location 10</option>
                                        <option value="PK">location 11</option>
                                        <option value="PK">location 12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Area<span class="required">*</span></label>
                                    <select name="location" class="form-control" required>
                                        <option value="">Select Area</option>
                                        <option value="PK">location 1</option>
                                        <option value="PK">location 2</option>
                                        <option value="PK">location 3</option>
                                        <option value="PK">location 4</option>
                                        <option value="PK">location 5</option>
                                        <option value="PK">location 6</option>
                                        <option value="PK">location 7</option>
                                        <option value="PK">location 8</option>
                                        <option value="PK">location 9</option>
                                        <option value="PK">location 10</option>
                                        <option value="PK">location 11</option>
                                        <option value="PK">location 12</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <p class="required mt-lg mb-none">* Required Fields</p>

                                <div class="form-action clearfix mt-none">
                                    <a href="login.blade.php" class="pull-left"><i class="fa fa-angle-double-left"></i>
                                        Back</a>

                                    <input type="submit" class="btn btn-primary pull-right" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
@include('workfinderviews.partials.masterfooter')