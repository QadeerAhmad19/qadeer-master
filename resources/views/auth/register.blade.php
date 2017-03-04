@include('workfinderviews.partials.masterheader')
<?php
    $cat=\App\Categories::all();
?>
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
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="/auth/register" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h4 class="heading-primary text-uppercase mb-lg">PERSONAL INFORMATION</h4>
                        <div class="row">
                            <div class="col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="file">Profile Image</label>
                                    <input type="file" name="image" multiple class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group hide-this">
                                    <label class="font-weight-normal">Rate per Hour $<span class="required">*</span></label>
                                    <input type="number" class="form-control" required name="rate"
                                           value="{{ old('rate') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="font-weight-normal">Your Role<span class="required">*</span></label>
                                <select name="role" class="form-control role-class" required>
                                    <option value="">Select Role</option>
                                    <option value="3">Customer</option>
                                    <option value="2">Worker</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">User Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" required name="name"
                                           value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Mobile<span class="required">*</span></label>
                                    <input type="text" name="mobile_number" class="form-control" required
                                           value="{{ old('mobile_number') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Password <span class="required">*</span></label>
                                    <input type="password" class="form-control" required name="password"
                                           value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Confirm Password<span
                                                class="required">*</span></label>
                                    <input type="password" class="form-control" required name="password_confirmation">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="font-weight-normal">Email Address <span
                                                class="required">*</span></label>
                                    <input type="email" name="email" class="form-control" required
                                           value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Date of Birth<span
                                                class="required">*</span></label>
                                    <input class="datepicker form-control" data-date-format="mm/dd/yyyy" name="dob"
                                           value="{{ old('dob') }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">language<span
                                                class="required">*</span></label>
                                    <select name="language" class="form-control" required>
                                        <option value="">Select Language</option>
                                        <option value="Arabic">Arabic</option>
                                        <option value="Swedish">Swedish</option>
                                        <option value="engilish">engilish</option>
                                        <option value="Spanish">Spanish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group hide-this">
                                    <label class="font-weight-normal">Select Category<span
                                                class="required">*</span></label><br>
                                    @foreach($cat as $index=>$value)
                                    <input type="checkbox" name="cat[]" value="{{$value->id}}">  {{$value->name}}<br>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group hide-this">
                                    <label class="font-weight-normal">Select Time Slots<span
                                                class="required">*</span></label>
                                    <br>
                                    <input type="checkbox" name="time[]" value="1"> Available Morning time From 8 am to
                                    12 pm<br>
                                    <input type="checkbox" value="1" name="time[]"> Available afternoon time From 12 pm
                                    to 4 pm<br>
                                    <input type="checkbox" value="1" name="time[]"> Available evening time From 4 pm to
                                    8 pm
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">City<span class="required">*</span></label>
                                    <select name="address" class="form-control" required>
                                        <option value="">Select Area</option>
                                        <option value="PK1">location 1</option>
                                        <option value="PK2">location 2</option>
                                        <option value="PK3">location 3</option>
                                        <option value="PK4">location 4</option>
                                        <option value="PK5">location 5</option>
                                        <option value="PK6">location 6</option>
                                        <option value="PK7">location 7</option>
                                        <option value="PK8">location 8</option>
                                        <option value="PK9">location 9</option>
                                        <option value="PK10">location 10</option>
                                        <option value="PK11">location 11</option>
                                        <option value="PK12">location 12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Area<span class="required">*</span></label>
                                    <select name="area" class="form-control" required>
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
                                <div class="form-group hide-this">
                                    <label class="font-weight-normal">Skills<span class="required">*</span></label>
                                    <textarea name="skill" style="width: 100%;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <p class="required mt-lg mb-none">* Required Fields</p>

                                <div class="form-action clearfix mt-none">
                                    <a href="L-login.blade.php" class="pull-left"><i class="fa fa-angle-double-left"></i>
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