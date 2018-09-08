	
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/jquery.appear/jquery.appear.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/jquery-cookie/jquery-cookie.min.js')); ?>"></script>
		<script src="<?php echo e(asset('master/style-switcher/style.switcher.js')); ?>" id="styleSwitcherScript" data-base-path="" data-skin-src="master/less/skin-medical.less"></script>
		<script src="<?php echo e(asset('vendor/popper/umd/popper.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/common/common.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/jquery.validation/jquery.validation.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/jquery.gmap/jquery.gmap.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/jquery.lazyload/jquery.lazyload.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/isotope/jquery.isotope.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
		<script src="<?php echo e(asset('vendor/vide/vide.min.js')); ?>"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo e(asset('js/theme.js')); ?>"></script>
		
		<script src="<?php echo e(asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')); ?>"></script>		<script src="<?php echo e(asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>

		<script src="<?php echo e(asset('js/views/view.contact.js')); ?>"></script>

		<!-- Demo -->
		<script src="<?php echo e(asset('js/demos/demo-medical.js')); ?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo e(asset('js/theme.init.js')); ?>"></script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/
			var mapMarkers = [{
				address: "SAWABER 6 Building, Kuwait City, Kuwait",
				
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];
	

			// Map Initial Location
			var initLatitude = 29.37720580000001;
			var initLongitude = 47.98468909999997;

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
				
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			var mapRef = $('#googlemaps').data('gMap.reference');

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>








		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-42715764-5', 'auto');
			ga('send', 'pageview');
		</script>
	
	<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script> 