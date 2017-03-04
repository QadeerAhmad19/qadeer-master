@include('workfinderviews.partials.masterheader')
<div role="main" class="main">
    <div class="slider-container rev_slider_wrapper" style="height: 600px;">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider
             data-plugin-options='{"delay": 9000, "gridwidth": 800, "gridheight": 600}'>
            <ul>
                <li data-transition="fade">

                    <img src="img/slides/slide-corporate-6.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-kenburns="on"
                         data-duration="9000"
                         data-ease="Linear.easeNone"
                         data-scalestart="115"
                         data-scaleend="100"
                         data-rotatestart="0"
                         data-rotateend="0"
                         data-offsetstart="0 -200"
                         data-offsetend="0 200"
                         data-bgparallax="0"
                         class="rev-slidebg">

                    <div class="tp-caption tp-caption-overlay tp-caption-overlay-primary main-label"
                         data-x="center"
                         data-y="265"
                         data-start="1000"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;">WELCOME TO WORKER FINDER
                    </div>

                    <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                         data-x="center"
                         data-y="358"
                         data-start="2000"
                         data-transform_in="y:[100%];opacity:0;s:500;" style="text-align: center;">The #1 Handyman
                        Market Place<br>
                        <span>where you can find trusted and qualified handyman with the best rate in the country </span>
                    </div>

                </li>
                <li data-transition="fade">
                    <img src="img/demos/digital-agency/slides/slide-digital-agency-1.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-kenburns="on"
                         data-duration="9000"
                         data-ease="Linear.easeNone"
                         data-scalestart="115"
                         data-scaleend="100"
                         data-rotatestart="0"
                         data-rotateend="0"
                         data-offsetstart="0 400px"
                         data-offsetend="0 -400px"
                         data-bgparallax="0"
                         class="rev-slidebg">

                    <div class="tp-caption tp-caption-overlay tp-caption-overlay-primary main-label"
                         data-x="center"
                         data-y="265"
                         data-start="1000"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;">WELCOME TO WORKER FINDER
                    </div>

                    <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                         data-x="center"
                         data-y="358"
                         data-start="2000"
                         data-transform_in="y:[100%];opacity:0;s:500;" style="text-align: center;">The #1 Handyman
                        Market Place<br>
                        <span>where you can find trusted and qualified handyman with the best rate in the country </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
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
                            <a href="/#tabsNavigationSimpleIcons{{$index+1}}" data-toggle="tab">
											<span class="featured-boxes featured-boxes-style-6 p-none m-none">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
													<span class="box-content p-none m-none">
														<i class="icon-featured icon-bulb icons"></i>
													</span>
												</span>
											</span>
                                <p class="mb-none pb-none"><a href="/showcatusers/{{$value->id}}">{{$value->name}}</a></p>
                                <p style="font-size:14px !important;;margin: 20px !important;">{{$value->short_dec}}</p>
                                <p style="font-size:14px !important">Price : ${{$value->per_hour}}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @else
                 <h3>{{Auth::User()->name}} Your Tasks Table</h3>
                        @if(isset($my_tasks))
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Task Description</th>
                            <th>Task Address</th>
                            <th>Time Slot</th>
                            <th>Created At</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($my_tasks as $cat=>$value)
                            @if($value->status==1)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{\App\User::find($value->users_id)->name}}</td>
                                <td>{{$value->description}}</td>
                                <td>{{$value->task_address}}</td>
                                <td>{{$value->time_slot}}</td>
                                <td>{{\Carbon\Carbon::parse($value->created_at)->format('M D Y')}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-lg" onclick="javascript:location.href='/canceltask/{{$value->id}}';">Cancel</button>
                                </td>
                            </tr>
                            @elseif($value->status===0)
                               <h3>ID#{{$value->id}} Tasks is Cancel</h3>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                            @else
                            <h3>No Tasks </h3>
                            @endif

                @endif

            </div>
        </div>

    </div>
    <!--<section class="section section-default section-default-scale-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <h2 class="mb-none mt-none font-weight-semibold text-light">How it works:</h2>
                    <!--<p class="lead mb-xlg">Pellentesque pellentesque eget tempor tellus. </p>
                    <div class="divider divider-primary divider-small divider-small-center mb-xl">
                        <hr>
                    </div>
                    <p class="mb-none text-light">First you need to select Task Category, then list of workers will appear and you need to select the worker you want to hire, you can filter the list by location, language and rating.
After that you need to fill task details, attach photo if needed, select the date and time that fit you from worker calendar, then confirm and pay.
Now, Worker will come to your task location to complete the task, Confirm Task completion after worker visit by giving him task completion code.
</p>


                </div>
            </div>
        </div>
    </section>-->
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