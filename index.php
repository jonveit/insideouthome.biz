<?php require_once 'header.php'; ?>

<!-- Any Additional Header Tags Place Here -->

<!-- Touch Carousel -->
		<script src="js/jssor.slider.mini.js"></script>
        <link rel="stylesheet" href="css/slider.css">
        
        <script> // Java Script for the Slider
		 	jQuery(document).ready(function ($) {
				
				var _CaptionTransitions = [ 
					{$Duration:900,$Opacity:2}
				];
				
        		var options = {
					$AutoPlay: true,
					$CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions
					},
					
					$NavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    	$Class: $JssorNavigator$,                       //[Required] Class to create navigator instance
                    	$ChanceToShow: 2,     //[Required] 0 Never, 1 Mouse Over, 2 Always
                    	$AutoCenter: 1, 		//[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                		$SpacingX: 12
					},
				
					$DirectionNavigatorOptions: {
                		$Class: $JssorDirectionNavigator$,
                		$ChanceToShow: 1,
						$AutoCenter: 2
            		}
        		};

        		var jssor_slider1 = new $JssorSlider$("slider1_container", options);
				
				
				// Code to Make it Responsive
				function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 898));
                else
                    window.setTimeout(ScaleSlider, 30);
            	}

            	ScaleSlider();
				
				if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            	}
    		});
		</script>

</head>
<body>
	
<?php require_once 'body_header.php'; ?>
	
	<div id="content"> 
		<div id="center_content">
			<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 898px; height: 447px; margin: 0 auto; overflow: hidden; ">
			    		
			<!-- Slides Container -->
    			<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 898px; height: 497px; overflow: hidden;">
        			<div>
                     <img u="image" src="img/slideshow/1.jpg" />
                    	<div u="caption" t="*" class="caption" style="position: absolute; top: 50px; right: 60px; width: 400px; opacity: 0.8">
        					A local and affordable solution for your home redesigning and presenting needs in the Montgomery County and Northwest Philadelphia area.
    					</div>
                  </div> 
        			<div>
                  	<img u="image" src="img/slideshow/2.jpg" />
                    	<span u="caption" t="*" class="caption" style="position: absolute; top: 40px; left: 40px; opacity: 0.7;">
                    		We work closely with professional <br /> carpenters, painters, and other home improvement specialists.
                    	</span>
                  </div>
           		<div>
                		<img u="image" src="img/slideshow/3.jpg" />
                      <div u="caption" t="*" class="caption" style="position: absolute; top: 48px; right: 44px; width: 200px; opacity: 0.9">
                    		Home staging has been shown to help sell your home! <a href="http://www.houzz.com/ideabooks/24496799/w/sid=3/list/Help-for-Selling-Your-Home-Faster------and-Maybe-for-More">See Article</a>
                    	</div>  
              		</div>
                    <div>
                		<img u="image" src="img/slideshow/4.jpg" /> 
                      <div u="caption" t="*" class="caption" style="text-algin: center; position: absolute; top: 29px; left: 30px; width: 240px; opacity: 0.7">
                    		A company with years of experience beautifying spaces.
                    	</div>  
              		</div>
                    <div>
                		<img u="image" src="img/slideshow/5.jpg" />
                      <div u="caption" t="*" class="caption" style="position: absolute; top: 50px; left: 50px; width: 260px; opacity: 0.6">
                    		See more examples in <a href="chestnuthilltwin.html"> Our Work </a> section of the website.
                    	</div>
              		</div>
    			</div>
  
              <div u="navigator" class="nav" style="position: absolute; bottom: 12px;">
            		<!-- navigator item prototype -->
            		<div u="prototype" style="position: absolute; width: 11px; height: 11px; text-align:center; line-height:21px; color:white; font-size:12px;"></div>
        		</div>
	
               <span u="arrowleft" class="dirNavl" style="width: 32px; height: 32px;  left: 8px;"></span>
				 <span u="arrowright" class="dirNavr" style="width: 32px; height: 32px;  right: 8px"></span>

			</div>
                 <!-- Trigger -->
    			<script>jssor_slider1_starter('slider1_container');</script>
			
			
			<div class="container-fluid wrapper-96">
				<div class="row">
						<div class="col-sm-4"> 
							<h3 style="padding-top: 4px"> Contact Us</h3>
							<span class="icon-at-sign icon"> </span>
							<a href="mailto:shantih.brando@gmail.com" class="icon-text">shantih.brando@gmail.com </a>
							<br />
							<span class="icon-telephone icon"> </span>
							<a href="tel:+12158170485" class="icon-text">215 817 0485</a>
						</div>
						
						<div class="col-sm-4"> 
							<h3> Follow Us On <a href="https://www.facebook.com/pages/InsideOut-Home-Solutions/158776834172430" class="icon-social-facebook icon" target="_blank" style="margin-top: 2px"></a>  </h3>
							<h3> Or Share Using <h3> 
							<div style="text-align: center">
								<a href="https://plus.google.com/share?url=http://insideouthome.biz" target="_blank" class="icon-social-google-plus"></a>
								<a href="http://twitter.com/share?url=http://www.insideouthome.biz" target="_blank" class="icon-social-twitter"></a>
								<a href="http://www.facebook.com/sharer/sharer.php?u=http://www.insideouthome.biz" class="icon-social-facebook" target="_blank" ></a>
							</div>
						</div>
						<div class="col-sm-4">
							<br /><br />
							<form action="chestnuthilltwin.php"><button type="submit" class="btn btn-default center-block"> See Our Work! &#8594; </button></form><br />
							<form action="testimony.php"><button type="submit" class="btn btn-default center-block"> See Testimonials! &#8594; </button></form>
						</div>
				</div>
			</div>
			
  		</div>
	</div>
	
<?php require_once 'footer.php'; ?>
	
