@include('workfinderviews.partials.masterheader')
<div role="main" class="main" style="margin-top: 139px; ">
    <div class="container">
        <div class="row mt-xl">
            <div class="col-md-12 ">
                @if(Auth::guest())
                    <div class="tabs tabs-bottom tabs-center tabs-simple mt-sm mb-xl">
                        <h2 class="mb-none mt-none font-weight-semibold text-light"
                            style="text-align: center;color: #89b837 !important">Finder Workers Categories:</h2>
                        <!--<p class="lead mb-xlg" style="text-align: center;">Pellentesque pellentesque eget tempor tellus. </p>-->
                        <div class="divider divider-primary divider-small divider-small-center mb-xl">
                            <hr>
                        </div>
                        <ul class="nav nav-tabs">
                            @foreach($cat as $index=>$value)
                                <li class="active">
                                    <a href="#tabsNavigationSimpleIcons{{$index+1}}" data-toggle="tab">
											<span class="featured-boxes featured-boxes-style-6 p-none m-none">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
													<span class="box-content p-none m-none">
														<i class="icon-featured icon-bulb icons"></i>
													</span>
												</span>
											</span>
                                        <p class="mb-none pb-none">{{$value->name}}</p>
                                        <p style="font-size:14px !important">{{$value->short_dec}}</p>
                                        <p style="font-size:14px !important">Price : ${{$value->per_hour}}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                @else
                    <h3>{{isset($role)?$role->name:'Guest'}} Submitting Order Page</h3>
                    <form action="/submittaskorder" method="POST"  enctype="multipart/form-data">
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <input type="hidden" value="{{$profile_user->id}}" name="customer_id">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Task Description <span class="required">optional</span></label>
                                    <textarea type="text" name="task_description" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="file">Image</label>
                                    <input type="file" name="task_image" multiple class="form-control" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Task Address <span class="required">*</span></label>
                                    <textarea type="text" name="task_address" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-normal">Available Time Slots<span class="required">*</span></label>
                                    <ul>
                                        @if($profile_user->morning==1)<li>Available morning time From 8 am to 12 pm</li>@endif
                                        @if($profile_user->afternoon==1)<li>Available afternoon time From 12 pm to 4 pm</li>@endif
                                        @if($profile_user->evening==1)<li>Available evening time From 4 pm to 8 pm</li>@endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <button class="btn btn-success">Order</button>
                                </div>
                            </div>
                        </div>
                    </form>
                @endif

            </div>
        </div>

    </div>

    <section class="pb-xl">
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <h2 class="mb-none mt-xl font-weight-semibold">How it works:</h2>
                    <div class="divider divider-primary divider-small divider-small-center mb-xl">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="featured-boxes-full featured-boxes-full-scale clearfix">
        <div class="col-md-4">
            <div class="featured-box-full featured-box-full-primary" style="height: 304px;"><i
                        class="icon-directions icons"></i>
                <h4 class="mt-xl">Select Task Category</h4>
                <p>Select Which job you need to be done.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="featured-box-full featured-box-full-primary" style="height: 304px;"><i
                        class="icon-puzzle icons"></i>
                <h4 class="mt-xl">View Workers and select</h4>
                <p>Choose the worker from the list, you can filter the list by location, price and customer reviews. and
                    select the date and time that fits you.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="featured-box-full featured-box-full-primary" style="height: 304px;"><i
                        class="icon-rocket icons"></i>
                <h4 class="mt-xl">Fill job details and Book</h4>
                <p>Fill the job location and details and you can also send task photos to the worker.</p>
            </div>
        </div>
    </div><!-- <section class="mt-xl mb-none pb-none">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h2 class="mb-none mt-xl font-weight-semibold">Recent Work:</h2>
								<p class="lead mb-xlg">Pellentesque pellentesque eget tempor tellus. </p>
								<div class="divider divider-primary divider-small divider-small-center mb-xl">
									<hr>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="carousel-areas mt-xl mb-none">
									<div class="owl-carousel owl-theme m-none" data-plugin-options='{"autoHeight": true, "items": 1, "margin": 10, "nav": true, "dots": false, "stagePadding": 0}'>
										<div>
											<a href="demo-digital-agency-work-detail.html">
												<img alt="" class="img-responsive" src="img/previews/areas/content-7.png">
											</a>
										</div>
										<div>
											<a href="demo-digital-agency-work-detail.html">
												<img alt="" class="img-responsive" src="img/previews/areas/content-5.png">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
    <section class="section section-tertiary section-front mt-none" style="margin: 1px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <div class="row">
                        <div class="col-md-12 center">
                            <h2 class="mb-none mt-xl font-weight-semibold text-dark"
                                style="color: black !important;font-weight: 700">Become A Worker</h2>
                            <p class="lead mb-xlg" style="color: black;font-weight: 700">The Number One Handyman Market
                                Place </p>
                            <div class="divider divider-primary divider-small divider-small-center mb-xl">
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="testimonial testimonial-style-2 appear-animation"
                                 data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                                <blockquote>
                                    <p style="color: black;">Start Working and Earning money now, Decide what job fit
                                        you with your own schedule. you are just click away.</p>
                                </blockquote>
                                <div class="testimonial-arrow-down"></div>
                                <div class="testimonial-author">
                                    <!-- <img src="img/clients/client-1.jpg" class="img-responsive img-circle" alt=""> -->
                                    <p><a class="btn btn-primary mt-xl mb-sm" href="#">Become A Worker <i
                                                    class="fa fa-angle-right pl-xs"></i></a></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row mt-xl">
            <div class="counters counters-text-dark">
                <div class="col-md-3 col-sm-6">
                    <div class="counter appear-animation" data-appear-animation="fadeInUp"
                         data-appear-animation-delay="300">
                        <i class="fa fa-user"></i>
                        <strong data-to="25000" data-append="+">0</strong>
                        <label>Workers</label>
                        <p class="text-color-primary mb-xl">Ready to go</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter appear-animation" data-appear-animation="fadeInUp"
                         data-appear-animation-delay="600">
                        <i class="fa fa-desktop"></i>
                        <strong data-to="19">0</strong>
                        <label>Customers</label>
                        <p class="text-color-primary mb-xl">Many more to come</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter appear-animation" data-appear-animation="fadeInUp"
                         data-appear-animation-delay="900">
                        <i class="fa fa-ticket"></i>
                        <strong data-to="2500" data-append="+">0</strong>
                        <label>Tasks Completed</label>
                        <p class="text-color-primary mb-xl">Available to you for only 200KR
                            <!-- Satisfaction guaranteed --></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter appear-animation" data-appear-animation="fadeInUp"
                         data-appear-animation-delay="1200">
                        <i class="fa fa-percent"></i>
                        <strong data-to="97" data-append="+">0</strong>
                        <label>Satisfaction</label>
                        <p class="text-color-primary mb-xl">Satisfaction guaranteed</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@include('workfinderviews.partials.masterfooter')