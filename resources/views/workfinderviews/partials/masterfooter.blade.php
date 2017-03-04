<footer class="short" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <a href="demo-digital-agency.html" class="logo">
                    <img alt="Porto Website Template" class="img-responsive" style="min-width: 250px !important;height: 80px;" src="img/demos/digital-agency/logo-digital-agency.png">
                </a>
            </div>
            <div class="col-sm-6 col-sm-offset-4 align-right">
                <h5 class="mb-sm">Worker Finder Terms</h5>
                <div class=""><a href="#">Terms and Condition</a></div>
                <!--<span class="phone font-size-sm"><i class="fa fa-phone text-color-primary"></i> (800) 123-4567</span>-->
            </div>
            <!--<div class="col-sm-2 align-right">
                <h5 class="mb-sm">Los Angeles</h5>
                <span class="phone font-size-sm"><i class="fa fa-phone text-color-primary"></i> (800) 123-4567</span>
            </div>-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr class="solid">
                <div class="row">
                    <div class="col-md-6">
                        <p>© Copyright 2016. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 align-right">
                        <ul class="social-icons pull-right">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <span class="footer-email-custom pull-right"><i class="fa fa-envelope text-color-primary"></i> <a href="mailto:mail@example.com">contact@workerfinder.se</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Vendor -->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>
{{--<script src="{{ur('vendor/jquery.appear/jquery.appear.min.js')}}"></script>--}}
<script src="{{url('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{url('vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
<script src="master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-skin-src="master/less/skin-digital-agency.less"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{url('vendor/vide/vide.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{url('js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{url('js/views/view.contact.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{url('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>		<script src="{{url('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Theme Custom -->

<!-- Theme Initialization Files -->
<script src="{{url('js/theme.init.js')}}"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>
<script>

    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    },{
        latitude: "34.05223",
        longitude: "-118.24368",
        html: "<strong>Los Angeles Office</strong><br>Los Angeles<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }];

    // Map Initial Location
    var initLatitude = 37.09024;
    var initLongitude = -95.71289;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 5
    };

    var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

    // Map Center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    // Create an array of styles.
    var mapColor = "#567522";

    var styles = [{
        stylers: [{
            hue: mapColor
        }]
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [{
            lightness: 0
        }, {
            visibility: "simplified"
        }]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers: [{
            visibility: "off"
        }]
    }];

    var styledMap = new google.maps.StyledMapType(styles, {
        name: 'Styled Map'
    });

    mapRef.mapTypes.set('map_style', styledMap);
    mapRef.setMapTypeId('map_style');

</script>


</body>
</html>