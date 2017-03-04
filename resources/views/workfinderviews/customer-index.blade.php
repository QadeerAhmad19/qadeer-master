@include('workfinderviews.partials.masterheader')
<style type="text/css">
.round-tabs i {
	color: #000 !important;
}
.panel {
	background: white;
	border: 1px solid #dce0e6;
	border-radius: 4px;
	padding: 0.5rem;
	-webkit-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	overflow: hidden;
}
.recommendations__filter-title {
	text-transform: uppercase;
	font-size: 1em;
	line-height: 1em;
	margin: 0;
}
.chrome_48_fix, .recommendations__result-content {
	padding: 20px 0px;
}
/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
	height: 5px;
	border-top: 0;
	background: #c4e17f;
	border-radius: 5px;
	background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>

<!-- Head Libs -->
{{--<script src="vendor/modernizr/modernizr.min.js"></script>--}}
{{--</head>--}}
  <div role="main" class="main">
    <div class="slider-container rev_slider_wrapper" style="height: 600px;">
      <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 800, "gridheight": 600}'>
        <ul>
          <li data-transition="fade"> <img src="img/slides/slide-corporate-6.jpg"  
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
									data-mask_in="x:0px;y:0px;">WELCOME TO WORKER FINDER</div>
            <div class="tp-caption tp-caption-overlay-opacity bottom-label"
									data-x="center"
									data-y="358"
									data-start="2000"
									data-transform_in="y:[100%];opacity:0;s:500;" style="text-align: center;">The #1 Handyman Market Place<br>
              <span>where you can find trusted and qualified handyman with the best rate in the country </span></div>
          </li>
          <li data-transition="fade"> <img src="img/demos/digital-agency/slides/slide-digital-agency-1.jpg"  
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
									data-mask_in="x:0px;y:0px;">WELCOME TO WORKER FINDER</div>
            <div class="tp-caption tp-caption-overlay-opacity bottom-label"
									data-x="center"
									data-y="358"
									data-start="2000"
									data-transform_in="y:[100%];opacity:0;s:500;" style="text-align: center;">The #1 Handyman Market Place<br>
              <span>where you can find trusted and qualified handyman with the best rate in the country </span></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- How it Works section -->
  <section  class="section how-it-works" id="how-it-works">
    <div class="container">
      <div class="row">
        <div class="col-md-12 board">
          <div class="board-inner">
            <ul class="nav nav-tabs" id="myTab">
              <div class="liner"></div>
              <li class="active col-md-4 col-xs-4"> <a href="#home" aria-controls="home" role="tab" data-toggle="tab" title="User Experience"> <span class="round-tabs one"> <i class="icon icon-profile-male">Fill Out Task Details</i> </span> </a></li>
              <li class="col-md-4 col-xs-4" class="active"><a href="#prototyping" aria-controls="prototyping" role="tab" data-toggle="tab" title="Prototyping" @if(isset($prototype)) aria-expanded="true" @endif> <span class="round-tabs three" > <i class="icon icon-layers">View Taskers & Prices</i> </span> </a> </li>
              <li class="col-md-4 col-xs-4"><a href="#uidesign" aria-controls="uidesign" role="tab" data-toggle="tab" title="UI Design"> <span class="round-tabs four"> <i class="icon icon-aperture">Confirm & Book</i> </span> </a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div @if(!isset($prototype)) class="tab-pane fade in active"  @else class="tab-pane fade" @endif id="home">
              <form method="POST" action="{{url('/findtasker')}}">
                <input type="hidden" value="{{csrf_token()}}" name="_token">
              <h3 class="head text-center">Assemble Furniture</h3>
              <div class="container">
                <div class="row" style="margin-top:20px">
                  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    {{--<form role="form">--}}
                      <fieldset>
                        <hr class="colorgraph">
                        <h2>Your Task Location</h2>
                        <div class="form-group">
                          <input type="text" name="location" id="email" class="form-control input-lg" placeholder="Email Address">
                        </div>
                        {{--<div class="row">--}}
                          {{--<div class="col-xs-6 col-sm-6 col-md-6 col-md-offset-3">--}}
                            {{--<input type="submit" class="btn btn-lg btn-success btn-block" value="Continue">--}}
                            {{--<!--<span style="margin-left:10px;" class="glyphicon glyphicon-send"></span>--> --}}
                          {{--</div>--}}
                        {{--</div>--}}
                      </fieldset>
                    {{--</form>--}}
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row" style="margin-top:20px">
                  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    {{--<form role="form">--}}
                      <fieldset>
                        <hr class="colorgraph">
                        <h2>TASK DETAILS</h2>
                        <div class="form-group">
                          <textarea name="skill" class="form-control input-lg"  placeholder="Enter Details"></textarea>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6 col-md-offset-3">
                            <input type="submit" class="btn btn-lg btn-success btn-block " value="Continue">
                          </div>
                        </div>
                      </fieldset>
                    {{--</form>--}}
                  </div>
                </div>
              </div>
              </form>
            </div>
            <div @if(isset($prototype)) class="tab-pane fade in active" @else class="tab-pane fade" @endif   id="prototyping">
              <h3 class="head text-center">Prototyping</h3>
              <div class="container">
                <div class="col-md-12">
                  <div data-pie-id="1206">
                    <div class="build-subheader build-subheader--form">
                      <div class="build-subheader__title"> Assemble Furniture </div>
                      <div class="supplemental_infos"> </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="col-md-4 panel">
                    <div data-pie-id="1330" style="height: auto;"> <span class="recommendations__date-picker-title u-hidden--lg">Date &amp; Time</span> <a class="recommendations__mobile-filter-trigger btn btn-primary js-modal-trigger" href="#"> <span class="js-filter-summary"><strong>Thu,</strong> Feb 23: 11:00pm</span> &nbsp;&nbsp; <i class="ss-icon ss-caret-down-light"></i> </a>
                      <div class="recommendations__filter-items panel panel--spaced js-child-container">
                        <div data-pie-id="1356" class="recommendations__filter">
                          <h4 class="recommendations__filter-title">Sorted By:</h4>
                          <select class="u-capitalize" name="currentSort">
                            <option value="recommended">recommended</option>
                            <option value="priceAsc">price (lowest to highest)</option>
                            <option value="priceDesc">price (highest to lowest)</option>
                            <option value="rating">highest rating</option>
                            <option value="reviews">most reviews</option>
                          </select>
                        </div>
                      </div>
                      <a class="recommendations__mobile-filter-dismiss btn btn-primary js-dismiss" href="#">See Available Taskers</a> </div>
                  </div>
                  <div class="col-md-8">
                    <div data-pie-id="1221">
                      <div class="recommendations__results-list js-list-container">
                        @if(isset($available_users))
                          <?php
                                if(isset($cat)){
                                  $available_users=$available_users->user;
                                }
                          ?>
                          @foreach($available_users as $index=>$value)
                            <form action="/sendtaskrequest" method="post">
                              <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <input type="hidden" value="{{$value->id}}" name="user_id">
                        <div class="recommendations__result recommendations__result--tasker is-enabled" data-user-id="2808902" data-pie-id="2726">
                          <div class="col-md-4 col-xs-12">
                            <div class="chrome_48_fix"> <img class="img-responsive img-circle recommendations__avatar js-link-reviews" src="{{url('https://res.cloudinary.com/taskrabbit-com/image/upload/c_fill,g_faces,h_300,w_300/v1465415232/trtfw5t0vlubzfe0at7i.jpg')}}"> </div>
                            <div class="recommendations__result-actions"> <input type="submit" class="recommendations__hire-btn btn btn-primary js-btn-hire" value="Select &amp; Continue"/> <a class="recommendations__review-link js-link-reviews" href="/viewcustomer/{{$value->id}}"/> Reviews and Profile</div>
                          </div>
                          <div class="col-md-8 col-xs-12">
                            <div class=" js-link-reviews">{{$value->name}}</div>
                            <div class="js-recommendation-item-price">
                              <div data-pie-id="2755">
                                <div class="recommendations__result-price-container">
                                  <div class="recommendations__result-price recommendations__pill"><strong class="js-hourly-rate">${{$value->rate}}</strong><strong>/hr</strong> </div>
                                  <div class="recommendations__recurring-savings"> </div>
                                </div>
                              </div>
                            </div>
                            <ul class="recommendations__result-info">
                              <li class="recommendations__pill--elite"> <i class="ss-medal-star"></i> <span>{{$value->name}}</span> </li>
                              <li class="recommendations__result-info--invoices"> <i class="ss-checkmark"></i> <span>51 Completed Furniture Assembly Tasks</span> </li>
                              <li class="recommendations__result-info--rating"> <i class="ss-like-lined"></i> <span>27 Furniture Assembly Reviews: 100% Positive</span> </li>
                            </ul>
                            <div class="recommendations__blurb-title">How I can help:</div>
                            <div class="recommendations__blurb">
                              <p class="">{{$value->skill}}</p>
                              <h5>I can Work:</h5>
                              <ul>
                                @if($value->morning==1)<li>Available morning time From 8 am to 12 pm</li>@endif
                                @if($value->afternoon==1)<li>Available afternoon time From 12 pm to 4 pm</li>@endif
                                @if($value->evening==1)<li>Available evening time From 4 pm to 8 pm</li>@endif
                              </ul>
                            </div>
                            <div class="recommendations__review media--object">
                              <div class="media--figure"> <img class="img-responsive img-circle avatar-new-72" src="https://res.cloudinary.com/taskrabbit-com/image/upload/c_fill,g_faces,h_108,w_108/v1487859613/pptogzpvwfswuhgid2nh.jpg"> </div>
                              <div class="media--content">
                                {{--<div class="recommendations__review-content"> "Jonathan brought his own tools and performed a very tedious task, with a significant amount of furniture to disassemble, efficiently and clearly had a great deal of experience. &nbsp;I'd strongly recommend him for furniture assembly/disassembly." </div>--}}
                                {{--<div class="u-muted"> ‐ February 22, 2017 </div>--}}
                              </div>
                            </div>
                            <div class="recommendations__result-actions"> <a class="recommendations__hire-btn btn btn-primary js-btn-hire" href="#">Select &amp; Continue</a> <a class="recommendations__review-link js-link-reviews" href="#">Reviews &amp; Profile</a> </div>
                          </div>
                        </div>
                            </form>
                          @endforeach
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="uidesign">
              <h3 class="head text-center">General Handyman (here is task name)</h3>
              <div class="view--build-main col-md-12 view--body confirmation__main-body">
                <div class="container--medium confirmation--main build-container confirmation__build-container">
                  <div class="panel confimationB-container">
                    <div class="js-payment-info">
                      <div class="confirmation--section confirmation__bordered-top" data-pie-id="539">
                        <div class="confirmation--payment-form">
                          <div class="confirmation--payment-cancel-container"> <a class="confirmation--payment-cancel js-cancel-container js-toggle-edit is-hidden" href="#" tabindex="-1">Cancel</a> </div>
                          <div class="row row--guttered">
                            <div class="col-12">
                              <div class="row row--guttered row--thin">
                                <div class="col-12">
                                  <label class="confirmation__section-label">You are charged only after your task is completed.</label>
                                </div>
                                <div class="col-12 col-lg-4 js-error-target" data-key="creditCard.card_number">
                                  <label class="confirmation__field-label" for="creditCard.card_number">Credit Card</label>
                                  <input class="confirmation--form-height" id="creditCard.card_number" name="creditCard.card_number" placeholder="#### #### #### ####" type="text">
                                </div>
                                <div class="col-12 col-lg-3 js-error-target" data-key="creditCard.expiration_month creditCard.expiration_year">
                                  <label class="confirmation__field-label" for="creditCard.expiration_month">Expiration</label>
                                  <div class="row row--thin">
                                    <div class="col-5 month-field">
                                      <select id="creditCard.expiration_month" name="creditCard.expiration_month">
                                        <option disabled="" selected="" style="display:none" value="">MM</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                      </select>
                                    </div>
                                    <div class="col-7">
                                      <select id="creditCard.expiration_year" name="creditCard.expiration_year">
                                        <option disabled="" selected="" style="display:none" value="">YYYY</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-2 js-error-target" data-key="creditCard.cvv">
                                  <label class="confirmation__field-label" for="creditCard.cvv">CVV Code</label>
                                  <input class="confirmation--form-height" id="creditCard.cvv" name="creditCard.cvv" type="text">
                                </div>
                                <div class="col-12 col-lg-3 js-error-target" data-key="creditCard.postal_code">
                                  <label class="confirmation__field-label" for="creditCard.postal_code">Zip Code</label>
                                  <input class="confirmation--form-height" id="creditCard.postal_code" name="creditCard.postal_code" type="text">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="js-contact-info">
                      <div class="confirmation--contact-section" data-pie-id="528">
                        <div class="row row--guttered">
                          <div class="col-12 col-lg-4 js-error-target" data-key="job.phone_number">
                            <label class="confirmationB__field-label" for="job.phone_number">Mobile Phone</label>
                            <input id="job.phone_number" name="job.phone_number" type="text">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="js-job-info col-md-12">
                      <div data-pie-id="568">
                        <div class="confirmation--job-info ">
                          <div class="col-md-12">
                            <div class=" row--thin">
                              <div class="confirmation--section confirmation--section confirmation__bordered-top col-12">
                                <div class=" row-wide-gutter">
                                  <div class="col-12 col-lg-6">
                                    <label class="confirmation__section-label">Date &amp; Time</label>
                                    <div class="confirmation__section-value confirmation--job-info-time">Fri, Feb 24 (Midnight)</div>
                                  </div>
                                  <div class="col-12 col-lg-6">
                                    <div class="confirmation__job-info-invitee media--object js-invitee-row">
                                      <div class="media--figure u-hidden--sm u-hidden--md"> <img class="avatar-new-36 confirmation__invitee-avatar" src="https://d31ebqhycylygn.cloudfront.net/v3/assets/web/build/icons/broadcast-c81aa3e0619c5d2fbc2088b26df105d0.png"> </div>
                                      <div class="media--content">
                                        <label class="label">Tasker</label>
                                        <span class="value">Quick Assign</span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 ">
                                  <label class="">Task Location</label>
                                  <div class="">Washington, District of Columbia</div>
                                </div>
                                <div class="col-md-12 ">
                                  <label class="">Task Description</label>
                                  <div class="container">
                                    <p class="">description paragraph here</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 u-align--center"> <a class="link-secondary js-edit" href="/tasks/a/hire?uuid=c2ca89e6-36d8-4907-b719-eaf244347e52" tabindex="-1"> <i class="ss-icon ss-cog"></i> <span>Modify Task</span> </a> </div>
                    </div>
                    <div class="confirmation--section confirmation--section floating-cta">
                      <div class="js-floating-cta">
                        <div data-pie-id="595" style="height: auto;">
                          <div class="row confirmation--cta-container floating-cta">
                            <div class="col-12 col-lg-4 col--centered">
                              <button class="btn btn-primary confirm-book-btn btn-sm-block js-submit">Confirm &amp; Book</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row confirmation__cta-help">
                    <div class="col-11 col--centered">
                      <p class="muted"> <strong>You are charged only after your task is completed.</strong> Tasks have a one-hour minimum. A <a href="https://support.taskrabbit.com/hc/en-us/articles/204940570" target="_blank">7.5% Trust and Support fee</a> is added to the Tasker’s total rate. </p>
                      <p class="muted">If you cancel your task within 24 hours of the scheduled start time, you may be charged a one-hour cancellation fee at the Tasker's hourly rate. If you selected a recurring cleaning, this is a task with repeat appointments. If you cancel the task (all appointments) or skip any individual appointment within 24 hours of the scheduled start time, you may be charged a one-hour cancellation fee at the Tasker's hourly rate. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /How it work -->

@include('workfinderviews.partials.masterfooter')