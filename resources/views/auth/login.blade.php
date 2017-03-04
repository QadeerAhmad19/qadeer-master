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

									<h2 class="mb-none mt-xl font-weight-semibold">Please Login to the Worker Finder</h2>
									<div class="divider divider-style-4 divider-primary divider-top-section-custom taller">
										<i class="fa fa-chevron-down"></i>
									</div>

								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="form-section">
				<div class="container">
					<h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Login </h1>

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

								<div class="row">
									<form  method="POST" action="/auth/login">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="col-sm-6">

										<div class="form-content">
											<p>If you have an account with us, please log in.</p>
											<div class="form-group">
												<label class="font-weight-normal">Email Address <span class="required">*</span></label>
												<input type="email" class="form-control" required name="email" value="{{ old('email') }}">
											</div>

											<div class="form-group">
												<label class="font-weight-normal">Password <span class="required">*</span></label>
												<input type="password" class="form-control" required name="password">
											</div>

											<p class="required">* Required Fields</p>
										</div>

										<div class="form-action clearfix">
											<a href="#" class="pull-left">Forgot Your Password?</a>

											<input type="submit" class="btn btn-primary pull-right" value="Submit">
										</div>

									</div>
									</form>
									{{--<div class="col-sm-6">--}}
										{{--<div class="form-content">--}}
											{{--<h3 class="heading-text-color font-weight-normal">Registered Customers</h3>--}}
											{{--<p>If you have an account with us, please log in.</p>--}}
											{{--<div class="form-group">--}}
												{{--<label class="font-weight-normal">Email Address <span class="required">*</span></label>--}}
												{{--<input type="email" class="form-control" required>--}}
											{{--</div>--}}

											{{--<div class="form-group">--}}
												{{--<label class="font-weight-normal">Password <span class="required">*</span></label>--}}
												{{--<input type="password" class="form-control" required>--}}
											{{--</div>--}}

											{{--<p class="required">* Required Fields</p>--}}
										{{--</div>--}}

										{{--<div class="form-action clearfix">--}}
											{{--<a href="#" class="pull-left">Forgot Your Password?</a>--}}

											{{--<input type="submit" class="btn btn-primary pull-right" value="Submit">--}}
										{{--</div>--}}
									{{--</div>--}}
								</div>

						</div>
					</div>
				</div>
			</section>

			</div>
@include('workfinderviews.partials.masterfooter')