
<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="MBA,Modular MBA,Evening MBA,Masters in Business Administration,Executive Education,Agribusiness,Agribusiness programs,Agribusiness Investing,Agribusiness training in Kenya,MBA Health Care,Masters in Public Policy Management, Coaching">
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>Apply Online - Strathmore University Business School</title>
    <link href="resources/css/app.css" type="text/css" rel="stylesheet">
    <link href="https://sbs.strathmore.edu/wp-content/themes/sbs/fonts/stylesheet.css" rel="stylesheet" type="text/css">    
    <link href="https://sbs.strathmore.edu/wp-content/themes/sbs/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="https://sbs.strathmore.edu/wp-content/themes/sbs/style.css" rel="stylesheet" type="text/css">
    <link href="https://sbs.strathmore.edu/wp-content/themes/sbs/css/slicknav.css" rel="stylesheet" type="text/css">    
    <link href="https://sbs.strathmore.edu/wp-content/themes/sbs/css/responsive.css" rel="stylesheet" type="text/css">       

<script src="https://sbs.strathmore.edu/wp-content/themes/sbs/js/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="https://sbs.strathmore.edu/wp-content/themes/sbs/js/jquery.slicknav.min.js"></script>
<script src="resources/js/app.js" type="text/javscript"></script>
<script src="https://sbs.strathmore.edu/wp-content/themes/sbs/js/jquery.sudoSlider.min.js" type="text/javascript"></script>

<script src="https://sbs.strathmore.edu/wp-content/themes/sbs/js/owl.carousel.min.js" type="text/javascript"></script>

<script src="https://sbs.strathmore.edu/wp-content/themes/sbs/js/main.js" type="text/javascript"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>

<script type="text/javascript" >
    $(document).ready(function(){	
        var sudoSlider = $("#homeslider").sudoSlider({
           continuous: true,
            auto:true,
            pause: 6000,
            prevNext:true,
            prevHtml:'<a href="#" class="prevbtn"><i class="fa fa-chevron-circle-left"></i></a>',
            nextHtml:'<a href="#" class="nextbtn"><i class="fa fa-chevron-circle-right"></i></a>'
        });
        
        var sudoSlider = $("#innerslider").sudoSlider({
           continuous: true,
            auto:true,
            pause: 6000,
            effect: "fade",
            prevNext:false
        }); 
        
  $('ul.tabs').each(function(){
    var $active, $content, $links = $(this).find('a');

    $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
    $active.addClass('active');

    $content = $($active[0].hash);

    $links.not($active).each(function () {
      $(this.hash).hide();
    });

    $(this).on('click', 'a', function(e){

      $active.removeClass('active');
      $content.hide();

      $active = $(this);
      $content = $(this.hash);

      $active.addClass('active');
      $content.show();

      e.preventDefault();
    });
  });   
        
  $("#owl-demo").owlCarousel({
    items : 7,
      autoPlay: true,
      slideSpeed : 200
  });
         

    var searchvisible = 0;            
    $(".search").click(function(e){ 
        //This stops the page scrolling to the top on a # link.
        e.preventDefault();
        
        
        
        
        $(".txtsearch").val("")         ;
        if (searchvisible ===0) {
            //Search is currently hidden. Slide down and show it.
            $(".searchform").stop().animate({"width":"230px"});
            $(".txtsearch").focus(); //Set focus on the search input field.
            searchvisible = 1; //Set search visible flag to visible.
        } else {
            //Search is currently showing. Slide it back up and hide it.
            $(".searchform").stop().animate({"width":"0px"});
            searchvisible = 0;
        }
    });   

    $(".btnsearch").click(function(e){ 
        if($(".txtsearch").val() == "") {
            $(".searchform").stop().animate({"width":"0px"})
            searchvisible = 0;
        e.preventDefault();
        };
 
    });   
        
        
    $('#menu-main-menu').slicknav({
    prependTo:'.navsearch'
    
    }); 
        
    
        
    });
    

    
    
</script>
<script>
$(document).ready(function(){

    var feedback = function(res) {
    $(".snippet_image_div").empty();
    $(".imgur-link").text("");
    if (res.success === true) {
    var get_link = res.data.link.replace(/^http:\/\//i, 'https://');
    var image ='<img alt="Imgur-Upload" class="imgur-upload" src=\"' + get_link + '\"/>' ; $(".snippet_image_div").append(image); $('#snippet_image').val(get_link); $(".imgur-link").text("Imgur image Link - "+get_link);
                
       }
   };
   
   new Imgur({
       clientid: '9a613ef5317ff5c', //You can change this ClientID
       callback: feedback
   });
       
   });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45077005-1', 'auto');
  ga('send', 'pageview');

</script>



<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '357881318088542');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=357881318088542&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script type="text/javascript">
_linkedin_partner_id = "1365756";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1365756&fmt=gif" />
</noscript>

<script type="text/javascript">
_linkedin_data_partner_id = "233034";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=233034&fmt=gif" />
</noscript>

</head>

<body data-rsssl=1>

    <div class="translate">
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    
    <div class="logonavsearch">
        <div class="logo">
			<a href=" https://sbs.strathmore.edu/">
<!-- 			<img src="/images/sbs-logo.png" alt="Strathmore University Business School Logo"/> -->
				<img src="https://sbs.strathmore.edu/wp-content/uploads/2019/06/SUBS-Logo-e1561533401520.png" alt="Strathmore University Business School Logo"/>
			</a>
		</div>

        <!-- Logo for mobile -->
        <div class="mobile">
			<a href=" https://sbs.strathmore.edu/">
<!-- 				<img src="/images/SBS Button50X50.png" alt="Strathmore Universiy Business School Logo"/> -->
				<img src="https://sbs.strathmore.edu/wp-content/uploads/2019/06/SBS-Logo.gif" alt="Strathmore Universiy Business School Logo"/>
			</a>
		</div>
        <!-- ./Logo for mobile -->
        
        <div class="navsearch">
        <div class="nav"><div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li id="menu-item-111" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-111"><a href="https://sbs.strathmore.edu/">Home</a></li>
<li id="menu-item-113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-113"><a href="https://sbs.strathmore.edu/about-sbs/">About Us</a>
<ul class="sub-menu">
	<li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="https://sbs.strathmore.edu/about-sbs/welcome/">Welcome</a></li>
	<li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115"><a href="https://sbs.strathmore.edu/about-sbs/mission-vision/">Mission &#038; Vision</a></li>
	<li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"><a href="https://sbs.strathmore.edu/about-sbs/why-sbs/">Why SBS?</a></li>
	<li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-117"><a href="https://sbs.strathmore.edu/about-sbs/advisory-board/">Advisory Board</a></li>
	<li id="menu-item-2685" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2685"><a href="https://sbs.strathmore.edu/?page_id=2682">Advancement</a></li>
	<li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a href="https://sbs.strathmore.edu/about-sbs/partner-institutions/">Academic and Corporate Partnerships</a></li>
	<li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119"><a href="https://sbs.strathmore.edu/about-sbs/memberships/">Memberships</a></li>
	<li id="menu-item-3081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3081"><a href="https://sbs.strathmore.edu/?page_id=3065">SBS Turns 10!</a></li>
</ul>
</li>
<li id="menu-item-8066" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8066"><a href="https://sbs.strathmore.edu/academic-programs/">Academic Programmes</a>
<ul class="sub-menu">
	<li id="menu-item-13836" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-13836"><a href="https://sbs.strathmore.edu/academic-programs/undergraduate-programmes/">Undergraduate Programmes</a>
	<ul class="sub-menu">
		<li id="menu-item-19198" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19198"><a href="#">Programmes</a>
		<ul class="sub-menu">
			<li id="menu-item-13835" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13835"><a href="https://sbs.strathmore.edu/academic-programs/undergraduate-programmes/bachelor-of-commerce/">Bachelor of Commerce</a></li>
			<li id="menu-item-16222" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16222"><a href="https://sbs.strathmore.edu/academic-programs/undergraduate-programmes/bachelor-of-financial-services/">Bachelor of Financial Services</a></li>
			<li id="menu-item-16170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16170"><a href="https://sbs.strathmore.edu/academic-programs/undergraduate-programmes/bachelor-of-science-in-supply-chain-operations-management/">Bachelor of Science in Supply Chain &#038; Operations Management</a></li>
		</ul>
</li>
		<li id="menu-item-19199" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19199"><a href="#">Administrative Offices</a>
		<ul class="sub-menu">
			<li id="menu-item-19200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19200"><a href="https://sbs.strathmore.edu/academic-programs/undergraduate-programmes/mentoring/">Mentoring</a></li>
			<li id="menu-item-18709" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18709"><a href="https://sbs.strathmore.edu/academic-programs/undergraduate-programmes/international-student-office/">International Student Office</a></li>
		</ul>
</li>
	</ul>
</li>
	<li id="menu-item-6548" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6548"><a href="https://sbs.strathmore.edu/academic-programs/doctoral-programs/">Doctoral Programmes</a>
	<ul class="sub-menu">
		<li id="menu-item-3207" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3207"><a href="https://sbs.strathmore.edu/academic-programs/doctoral-programs/phdbm/">PhD Programme in Business and Management</a></li>
		<li id="menu-item-9721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9721"><a href="https://sbs.strathmore.edu/academic-programs/doctoral-programs/predoctoral-workshop-on-fundamentals-of-research/">Pre-Doctoral Workshop</a></li>
		<li id="menu-item-10816" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10816"><a href="https://sbs.strathmore.edu/?page_id=10811">PhD in Business and Management Research Specialization Workshops</a></li>
	</ul>
</li>
	<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-121"><a href="https://sbs.strathmore.edu/academic-programs/mba-for-executives/">MBA for Executives</a>
	<ul class="sub-menu">
		<li id="menu-item-852" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-852"><a href="https://sbs.strathmore.edu/academic-programs/mba-for-executives/evening-mba/">MBA Evening Programme</a></li>
		<li id="menu-item-15477" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15477"><a href="https://sbs.strathmore.edu/academic-programs/mba-for-executives/mba-modular-programme/">MBA Modular Programme</a></li>
	</ul>
</li>
	<li id="menu-item-12927" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12927"><a href="https://sbs.strathmore.edu/academic-programs/master-of-commerce/">Master of Commerce</a></li>
	<li id="menu-item-4334" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4334"><a href="https://sbs.strathmore.edu/academic-programs/masters-in-public-policy-management-2/">Master of Public Policy and Management</a></li>
	<li id="menu-item-5072" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5072"><a href="https://sbs.strathmore.edu/academic-programs/master-of-science-in-development-finance/">Master of Science in Development Finance</a></li>
	<li id="menu-item-5073" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5073"><a href="https://sbs.strathmore.edu/academic-programs/master-of-management-in-agribusiness/">Master of Management in Agribusiness</a></li>
	<li id="menu-item-149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-149"><a href="https://sbs.strathmore.edu/academic-programs/mba-healthcare-management/">MBA – Healthcare Management</a></li>
</ul>
</li>
<li id="menu-item-8068" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8068"><a href="https://sbs.strathmore.edu/executive-education/">Executive Education</a>
<ul class="sub-menu">
	<li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-122"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/">Executive Talent Development</a>
	<ul class="sub-menu">
		<li id="menu-item-8752" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8752"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/c-suite-level-programs/">C-suite level programmes</a>
		<ul class="sub-menu">
			<li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/c-suite-level-programs/advanced-management-program/">Advanced Management Programme</a></li>
			<li id="menu-item-9864" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9864"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/c-suite-level-programs/global-chief-executive-officer-program-global-ceo/">Global CEO – Africa Programme</a></li>
		</ul>
</li>
		<li id="menu-item-8751" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8751"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/board-governance-programs/">Board Governance programmes</a>
		<ul class="sub-menu">
			<li id="menu-item-129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/board-governance-programs/leading-the-board/">Leading the Board Programme</a></li>
			<li id="menu-item-9927" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9927"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/board-governance-programs/effective-director-masterclass/">The Effective Director Masterclass</a></li>
			<li id="menu-item-130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/board-governance-programs/the-effective-director/">The Effective Director Programme</a></li>
			<li id="menu-item-14488" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14488"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/board-governance-programs/board-readiness-forum/">Board Readiness Forum</a></li>
		</ul>
</li>
		<li id="menu-item-8750" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8750"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/entrepreneurship-programs/">Entrepreneurship programmes</a>
		<ul class="sub-menu">
			<li id="menu-item-12568" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12568"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/entrepreneurship-programs/enterprise-development-programme-edp/">Enterprise Development Programme</a></li>
			<li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/entrepreneurship-programs/family-business-executive-program/">Family Business Executive Programme</a></li>
			<li id="menu-item-8753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8753"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/entrepreneurship-programs/owner-manager-program/">Owner Manager Programme</a></li>
			<li id="menu-item-3194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3194"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/entrepreneurship-programs/private-equity-and-venture-capital/">Private Equity and Venture Capital Programme</a></li>
			<li id="menu-item-770" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-770"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/entrepreneurship-programs/property-developers-toolkit/">Property Developers Toolkit</a></li>
		</ul>
</li>
		<li id="menu-item-8749" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8749"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/senior-management-programs/">Senior Management Programmes</a>
		<ul class="sub-menu">
			<li id="menu-item-132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-132"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/senior-management-programs/developing-leadership-capabilities/">Developing Leadership Capabilities Programme</a></li>
			<li id="menu-item-8754" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8754"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/senior-management-programs/senior-management-leadership-program/">Senior Management Leadership Programme</a></li>
		</ul>
</li>
		<li id="menu-item-8748" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8748"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/middle-level-management-programs/">Middle-Level Management Programmes</a>
		<ul class="sub-menu">
			<li id="menu-item-131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-131"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/middle-level-management-programs/new-managers-leadership-program/">New Managers Leadership Programme</a></li>
			<li id="menu-item-8755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8755"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/middle-level-management-programs/program-for-management-development/">Programme for Management Development</a></li>
		</ul>
</li>
		<li id="menu-item-8747" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8747"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/women-leadership-programs/">Women Leadership Programmes</a>
		<ul class="sub-menu">
			<li id="menu-item-8757" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8757"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/women-leadership-programs/women-directors-leadership-programme/">Women Directors Leadership Programme</a></li>
			<li id="menu-item-136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/women-leadership-programs/women-in-leadership-program/">Women in Leadership Programme</a></li>
		</ul>
</li>
		<li id="menu-item-11699" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11699"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/professional-development-programmes/">Professional Development Programmes</a>
		<ul class="sub-menu">
			<li id="menu-item-11775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11775"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/professional-development-programmes/advanced-monitoring-and-evaluation-programme/">Advanced Monitoring and Evaluation Programme</a></li>
			<li id="menu-item-14841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14841"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/professional-development-programmes/fleet-management-programme/">Fleet Management Programme</a></li>
			<li id="menu-item-12943" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12943"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/professional-development-programmes/finance-for-non-finance-managers-programme/">Finance for Non-Finance Managers Programme</a></li>
			<li id="menu-item-13235" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13235"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/professional-development-programmes/grants-management-programme/">Grants Management Programme</a></li>
			<li id="menu-item-11776" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11776"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/professional-development-programmes/hr-for-non-hr-managers-programme/">HR for Non-HR Managers Programme</a></li>
			<li id="menu-item-11774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11774"><a href="https://sbs.strathmore.edu/?page_id=11744">Personal Financial Management and Investment Decisions Programme</a></li>
			<li id="menu-item-11773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11773"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/professional-development-programmes/planning-monitoring-evaluation-and-accountability-learning-programme/">Planning, Monitoring, Evaluation, Accountability and Learning Programme</a></li>
			<li id="menu-item-10804" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10804"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/predictive-analytics-executive-programme/">Predictive Analytics Executive Programme</a></li>
			<li id="menu-item-11777" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11777"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/professional-development-programmes/project-management-professional-pmp-programme/">Project Management Professional (PMP) Programme</a></li>
		</ul>
</li>
		<li id="menu-item-8090" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8090"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/">Regional Academies</a>
		<ul class="sub-menu">
			<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-153"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/uganda-leadership-development-academy/">Uganda Leadership Development Academy</a>
			<ul class="sub-menu">
				<li id="menu-item-156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-156"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/uganda-leadership-development-academy/management-development-program/">Management Development Program – Uganda</a></li>
				<li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/uganda-leadership-development-academy/senior-management-leadership-development-program/">Senior Management Leadership Development Program – Uganda</a></li>
				<li id="menu-item-7948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7948"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/uganda-leadership-development-academy/women-leadership-program-uganda/">Women in Leadership Program – Uganda</a></li>
			</ul>
</li>
			<li id="menu-item-5392" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5392"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/tanzania-leadership-development-academy/">Tanzania Leadership Development Academy</a>
			<ul class="sub-menu">
				<li id="menu-item-7606" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7606"><a href="https://sbs.strathmore.edu/?page_id=7602">Leadership Development Program – Tanzania</a></li>
				<li id="menu-item-5407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5407"><a href="https://sbs.strathmore.edu/?page_id=5405">Management Development Program (MDP) – Tanzania</a></li>
				<li id="menu-item-7873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7873"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/tanzania-leadership-development-academy/new-managers-leadership-program-tanzania/">New Managers Leadership Program – Tanzania</a></li>
				<li id="menu-item-5452" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5452"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/tanzania-leadership-development-academy/senior-management-leadership-development-program/">Senior Management Leadership  Development Program – Tanzania</a></li>
				<li id="menu-item-7947" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7947"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/tanzania-leadership-development-academy/women-leadership-program-tanzania/">Women in Leadership Program – Tanzania</a></li>
			</ul>
</li>
			<li id="menu-item-5391" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5391"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/rwanda-leadership-development-academy/">Rwanda Leadership Development Academy</a>
			<ul class="sub-menu">
				<li id="menu-item-7607" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7607"><a href="https://sbs.strathmore.edu/?page_id=7596">Leadership Development Program – Rwanda</a></li>
				<li id="menu-item-5393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5393"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/rwanda-leadership-development-academy/management-development-program-mdp/">Management Development Program (MDP) – Rwanda</a></li>
				<li id="menu-item-7874" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7874"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/rwanda-leadership-development-academy/new-managers-leadership-program-rwanda/">New Managers Leadership Program – Rwanda</a></li>
				<li id="menu-item-5396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5396"><a href="https://sbs.strathmore.edu/?page_id=5383">Senior Management Leadership Development Programme – Rwanda</a></li>
				<li id="menu-item-7946" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7946"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/regional-academies/rwanda-leadership-development-academy/women-leadership-program-rwanda/">Women in Leadership Program – Rwanda</a></li>
			</ul>
</li>
		</ul>
</li>
		<li id="menu-item-138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/customised-programs/">Customised Solutions</a></li>
		<li id="menu-item-10596" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10596"><a href="https://sbs.strathmore.edu/executive-education/executive-talent-development/summits/">Summits</a></li>
	</ul>
</li>
	<li id="menu-item-9801" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-9801"><a href="https://sbs.strathmore.edu/executive-education/executive-coaching-2/">Coaching and Executive Mentoring</a>
	<ul class="sub-menu">
		<li id="menu-item-10018" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-10018"><a href="https://sbs.strathmore.edu/executive-education/executive-coaching-2/coach-training/">Coach Training</a>
		<ul class="sub-menu">
			<li id="menu-item-953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953"><a href="https://sbs.strathmore.edu/executive-education/executive-coaching-2/coach-training/executive-coaching-for-managers/">Executive Coaching for Managers Programme</a></li>
		</ul>
</li>
		<li id="menu-item-17520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17520"><a href="https://sbs.strathmore.edu/executive-education/executive-coaching-2/individual-executive-coaching/">Individual Executive Coaching</a></li>
		<li id="menu-item-17519" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17519"><a href="https://sbs.strathmore.edu/executive-education/executive-coaching-2/team-executive-coaching/">Team Executive Coaching</a></li>
	</ul>
</li>
	<li id="menu-item-14680" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14680"><a href="https://sbs.strathmore.edu/executive-education/data-science-executive-programmes/">Data Science Executive Programmes</a></li>
	<li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-139"><a href="https://sbs.strathmore.edu/executive-education/public-policy-programs/">Public Policy Programmes</a>
	<ul class="sub-menu">
		<li id="menu-item-16078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16078"><a href="https://sbs.strathmore.edu/executive-education/public-policy-programs/african-sustainability-executive-programme-asep/">African Sustainability Executive Programme</a></li>
		<li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142"><a href="https://sbs.strathmore.edu/executive-education/public-policy-programs/public-policy-executive-program/">Public Policy Executive Programme</a></li>
		<li id="menu-item-8773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8773"><a href="https://sbs.strathmore.edu/executive-education/public-policy-programs/public-private-partnership-executive-program/">Public Private Partnerships Executive Programme</a></li>
		<li id="menu-item-16065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16065"><a href="https://sbs.strathmore.edu/executive-education/public-policy-programs/shared-value-executiveprogramme/">Shared Value Executive Programme</a></li>
		<li id="menu-item-4919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4919"><a href="https://sbs.strathmore.edu/centers/center-for-sustainability-leadership/values-driven-leadership-in-action/">Values-Driven Leadership In Action</a></li>
	</ul>
</li>
	<li id="menu-item-144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-144"><a href="https://sbs.strathmore.edu/executive-education/healthcare-management-programs/">Healthcare Management Programmes</a>
	<ul class="sub-menu">
		<li id="menu-item-20361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20361"><a href="https://sbs.strathmore.edu/executive-education/healthcare-management-programs/senior-executive-programme-in-global-health-innovation-management/">Senior Executive Programme in Global Health Innovation Management</a></li>
		<li id="menu-item-145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145"><a href="https://sbs.strathmore.edu/executive-education/healthcare-management-programs/leading-high-performance-healthcare-organisations/">Leading High-Performing Healthcare Organisations Programme</a></li>
		<li id="menu-item-148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148"><a href="https://sbs.strathmore.edu/executive-education/healthcare-management-programs/managing-healthcare-businesses/">Managing Healthcare Businesses Programme</a></li>
		<li id="menu-item-8075" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8075"><a href="https://sbs.strathmore.edu/executive-education/healthcare-management-programs/executive-training-programme-hospital-management/">Hospital Management for Health Professionals Programme – (Blended Learning)</a></li>
		<li id="menu-item-16762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16762"><a href="https://sbs.strathmore.edu/executive-education/healthcare-management-programs/behavioral-communication-strategies-for-coronavirus-programme/">Behavioral Communication Strategies for Coronavirus Programme</a></li>
		<li id="menu-item-5003" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5003"><a href="https://sbs.strathmore.edu/executive-education/healthcare-management-programs/pharmaceutical-commodity-supply-chain-management-program-pharmcom/">Pharmaceutical Commodity Supply Chain Management Programme</a></li>
	</ul>
</li>
	<li id="menu-item-150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-150"><a href="https://sbs.strathmore.edu/executive-education/agri-business-management-programs/">Agri Business Management Programmes</a>
	<ul class="sub-menu">
		<li id="menu-item-7739" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7739"><a href="https://sbs.strathmore.edu/executive-education/agri-business-management-programs/dairy-investors-program/">Dairy Investors Programme</a></li>
		<li id="menu-item-3618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3618"><a href="https://sbs.strathmore.edu/executive-education/agri-business-management-programs/exploring-international-markets/">Exploring International Markets Programme</a></li>
		<li id="menu-item-4033" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4033"><a href="https://sbs.strathmore.edu/executive-education/agri-business-management-programs/financing-of-agribusiness-value-chains/">Financing of Agribusiness Value Chains Programme</a></li>
		<li id="menu-item-12279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12279"><a href="https://sbs.strathmore.edu/executive-education/agri-business-management-programs/investing-in-agribusiness-primary-production-programme/">Investing in Agribusiness – Primary Production Programme</a></li>
		<li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152"><a href="https://sbs.strathmore.edu/executive-education/agri-business-management-programs/investing-in-agribusiness-value-addition/">Investing in Agribusiness – Value Addition</a></li>
		<li id="menu-item-4882" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4882"><a href="https://sbs.strathmore.edu/executive-education/agri-business-management-programs/sustainable-investments-in-agriculture/">Sustainable Investments in Agriculture Programme</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-2753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2753"><a href="https://sbs.strathmore.edu/faculty-research/faculty/">Faculty</a></li>
<li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-158"><a href="https://sbs.strathmore.edu/centers/">Centers</a>
<ul class="sub-menu">
	<li id="menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-897"><a href="https://sbs.strathmore.edu/centers/strathmore-institute-for-public-policy-and-governance/">Strathmore Institute for Public Policy and Governance</a></li>
	<li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899"><a href="https://sbs.strathmore.edu/centers/institute-for-healthcare-management/">Institute of Healthcare Management</a></li>
	<li id="menu-item-6079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6079"><a href="https://sbs.strathmore.edu/centers/center-for-business-journalism/">Center for Business Journalism</a>
	<ul class="sub-menu">
		<li id="menu-item-6988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6988"><a href="https://sbs.strathmore.edu/centers/center-for-business-journalism/africa-media-hub/">Africa Media Hub</a></li>
		<li id="menu-item-3203" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3203"><a href="https://www.sbs.strathmore.edu/safaricom_journalism/">Safaricom Business Journalism Fellowship</a></li>
		<li id="menu-item-6989" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6989"><a href="https://sbs.strathmore.edu/centers/center-for-business-journalism/sustainable-development-and-development-planning/">Sustainable Development and Development Planning</a></li>
	</ul>
</li>
	<li id="menu-item-11560" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11560"><a href="https://sbs.strathmore.edu/centers/center-for-entrepreneurship/">Strathmore Enterprise Development Centre</a></li>
	<li id="menu-item-4635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4635"><a href="https://sbs.strathmore.edu/centers/center-for-sustainability-leadership/">Center for Sustainability Leadership</a>
	<ul class="sub-menu">
		<li id="menu-item-11023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11023"><a href="https://sbs.strathmore.edu/?page_id=11007">Behavioral Science Programme</a></li>
		<li id="menu-item-9101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9101"><a href="https://sbs.strathmore.edu/centers/center-for-sustainability-leadership/community-economic-development-executive-program/">Community Economic Development Executive Programme</a></li>
		<li id="menu-item-7160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7160"><a href="https://sbs.strathmore.edu/?page_id=7139">Measuring Social Impact</a></li>
		<li id="menu-item-4630" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4630"><a href="https://sbs.strathmore.edu/?page_id=4626">The Change Agent</a></li>
	</ul>
</li>
	<li id="menu-item-3100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3100"><a href="https://sbs.strathmore.edu/centers/family/programs-for-family-development/">Program for Family Development</a>
	<ul class="sub-menu">
		<li id="menu-item-19383" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19383"><a href="https://sbs.strathmore.edu/centers/family/programs-for-family-development/family-enrichment-2/">Family Enrichment</a></li>
		<li id="menu-item-19382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19382"><a href="https://sbs.strathmore.edu/centers/family/programs-for-family-development/education-in-character-formation/">Education in Character Formation</a></li>
		<li id="menu-item-19381" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19381"><a href="https://sbs.strathmore.edu/centers/family/programs-for-family-development/the-personal-project/">The Personal Project</a></li>
	</ul>
</li>
	<li id="menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900"><a href="https://sbs.strathmore.edu/centers/family/center-for-research-on-organisations-work-and-family/">Center for Research on Organisations, Work and Family</a></li>
</ul>
</li>
<li id="menu-item-162" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-162"><a target="_blank" rel="noopener noreferrer" href="http://www.sbsalumniconnect.com">Alumni</a></li>
<li id="menu-item-5517" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5517"><a href="https://sbs.strathmore.edu/contact-us/contact-details/">Contact</a></li>
<li id="menu-item-18401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18401"><a href="https://sbs.strathmore.edu/online-programmes/">Online Programmes</a></li>
</ul></div></div>
        <div class="search"><i class="fa fa-search"></i></div>
        <div class="searchform">
<form action="https://sbs.strathmore.edu/" role="search" method="get">
        <input type="search" class="txtsearch" placeholder="Search ..." name="s" title="Search for:" value="" />
        <input type="submit" alt="Search" class="btnsearch fa" value="&#xf002;" />
</form>
</div>
        
        </div>
    </div>
<div class="innerbannercontainer">

<div class="innerbannertext">
<h1>Apply Online</h1>
<p></p>
</div>

</div>

<div class="innercontentsection">

<div class="breadcrumbssection">
<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Strathmore University Business School." href="https://sbs.strathmore.edu" class="home">Strathmore University Business School</a></span> &gt; <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Resources." href="https://sbs.strathmore.edu/resources/" class="post post-page">Resources</a></span> &gt; <span typeof="v:Breadcrumb"><span property="v:title">Apply Online</span></span></div>

<div class="middlecontentsection">


                <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_1' ><form method='post' enctype='multipart/form-data'  id='gform_1'  action='/resources/apply-online/'>
                        <div class='gform_heading'>
                            <h3 class='gform_title'>Application Form - Executive Education</h3>
                            <span class='gform_description'></span>
                        </div>
                        <div class='gform_body'><ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'><li id='field_1_26'  class='gfield gsection field_sublabel_below field_description_below gfield_visibility_visible' ><h2 class='gsection_title'>PLEASE COMPLETE IN BLOCK CAPITALS</h2></li><li id='field_1_1'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_1' >Select Programme / Seminar<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_select'><select name='input_1' id='input_1_1' class='medium gfield_select'   aria-required="true" aria-invalid="false"><option value='' selected='selected' class='gf_placeholder'>Select Programme you wish to undertake</option><option value='African Sustainability Executive Programme' >African Sustainability Executive Programme</option><option value='Board Readiness Forum' >Board Readiness Forum</option><option value='Dairy Investors Programme' >Dairy Investors Programme</option><option value='Developing Leadership Capabilities' >Developing Leadership Capabilities</option><option value='Enterprise Development Programme' >Enterprise Development Programme</option><option value='Executive Coaching for Managers Programme' >Executive Coaching for Managers Programme</option><option value='Family Business Executive Programme' >Family Business Executive Programme</option><option value='Finance for Non-Finance Managers Programme' >Finance for Non-Finance Managers Programme</option><option value='Financing of agribusiness value chains' >Financing of agribusiness value chains</option><option value='Global CEO - Africa Programme' >Global CEO - Africa Programme</option><option value='Investing in Agribusiness Primary Production' >Investing in Agribusiness Primary Production</option><option value='Investing in Agribusiness Value Addition' >Investing in Agribusiness Value Addition</option><option value='Hospital Management for Health Professionals Programme - (Blended Learning)' >Hospital Management for Health Professionals Programme - (Blended Learning)</option><option value='Leading High-Performing Healthcare Organizations' >Leading High-Performing Healthcare Organizations</option><option value='Leading the Board Programme' >Leading the Board Programme</option><option value='Managing Healthcare Businesses Programme' >Managing Healthcare Businesses Programme</option><option value='New Managers Leadership Programme' >New Managers Leadership Programme</option><option value='Pharmaceutical Commodity Supply Chain Management Program (PharmCom)' >Pharmaceutical Commodity Supply Chain Management Program (PharmCom)</option><option value='Predictive Analytics Executive Programme' >Predictive Analytics Executive Programme</option><option value='Private Equity and Venture Capital Programme' >Private Equity and Venture Capital Programme</option><option value='Property Developers&#039; Toolkit Programme' >Property Developers&#039; Toolkit Programme</option><option value='Public Policy Executive Programme' >Public Policy Executive Programme</option><option value='Public Private Partnerships Executive Programme' >Public Private Partnerships Executive Programme</option><option value='The Effective Director Programme' >The Effective Director Programme</option><option value='The Effective Director Masterclass Programme' >The Effective Director Masterclass Programme</option><option value='Values-Driven Leadership in Action Programme' >Values-Driven Leadership in Action Programme</option><option value='Women in Leadership Programme' >Women in Leadership Programme</option></select></div></li><li id='field_1_2'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_2' >Official Names<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_2' id='input_1_2' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" /></div></li><li id='field_1_3'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_3' >Preferred name(s) you like to be called:<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_3' id='input_1_3' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" /></div></li><li id='field_1_4'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_4' >Date of Birth:<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_date'>
                            <input name='input_4' id='input_1_4' type='text' value='' class='datepicker medium dmy datepicker_no_icon'    aria-describedby='input_1_4_date_format' />
                            <span id='input_1_4_date_format' class='screen-reader-text'>Date Format: DD slash MM slash YYYY</span>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_1_4' class='gform_hidden' value='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_1_8'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_8' >Domicile Country:<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_select'><select name='input_8' id='input_1_8' class='medium gfield_select'   aria-required="true" aria-invalid="false"><option value='' selected='selected' class='gf_placeholder'>Select the country of residence</option><option value='Afghanistan' >Afghanistan</option><option value='Åland Islands' >Åland Islands</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Andorra' >Andorra</option>
						<option value='Angola' >Angola</option><option value='Anguilla' >Anguilla</option>
						<option value='Antarctica' >Antarctica</option>
						<option value='Antigua and Barbuda' >Antigua and Barbuda</option>
						<option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option>
						<option value='Aruba' >Aruba</option>
						<option value='Australia' >Australia</option>
						<option value='Austria' >Austria</option>
						<option value='Azerbaijan' >Azerbaijan</option>
						<option value='Bahamas' >Bahamas</option>
						<option value='Bahrain' >Bahrain</option>
						<option value='Bangladesh' >Bangladesh</option>
						<option value='Barbados' >Barbados</option>
						<option value='Belarus' >Belarus</option>
						<option value='Belgium' >Belgium</option>
						<option value='Belize' >Belize</option>
						<option value='Benin' >Benin</option>
						<option value='Bermuda' >Bermuda</option>
						<option value='Bhutan' >Bhutan</option>
						<option value='Bolivia' >Bolivia</option>
						<option value='Bonaire, Sint Eustatius and Saba' >Bonaire, Sint Eustatius and Saba</option>
						<option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
						<option value='Botswana' >Botswana</option>
						<option value='Bouvet Island' >Bouvet Island</option>
						<option value='Brazil' >Brazil</option>
						<option value='British Indian Ocean Territory' >British Indian Ocean Territory</option>
						<option value='Brunei Darussalam' >Brunei Darussalam</option>
						<option value='Bulgaria' >Bulgaria</option>
						<option value='Burkina Faso' >Burkina Faso</option>
						<option value='Burundi' >Burundi</option>
						<option value='Cambodia' >Cambodia</option>
						<option value='Cameroon' >Cameroon</option>
						<option value='Canada' >Canada</option>
						<option value='Cape Verde' >Cape Verde</option>
						<option value='Cayman Islands' >Cayman Islands</option>
						<option value='Central African Republic' >Central African Republic</option>
						<option value='Chad' >Chad</option>
						<option value='Chile' >Chile</option>
						<option value='China' >China</option>
						<option value='Christmas Island' >Christmas Island</option>
						<option value='Cocos Islands' >Cocos Islands</option>
						<option value='Colombia' >Colombia</option>
						<option value='Comoros' >Comoros</option>
						<option value='Congo, Democratic Republic of the' > Democratic Republic of Congo</option>
						<option value='Congo, Republic of the' >Congo, Republic of the</option>
						<option value='Cook Islands' >Cook Islands</option>
						<option value='Costa Rica' >Costa Rica</option>
						<option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
						<option value='Croatia' >Croatia</option>
						<option value='Cuba' >Cuba</option>
						<option value='Curaçao' >Curaçao</option>
						<option value='Cyprus' >Cyprus</option>
						<option value='Czech Republic' >Czech Republic</option>
						<option value='Denmark' >Denmark</option>
						<option value='Djibouti' >Djibouti</option>
						<option value='Dominica' >Dominica</option>
						<option value='Dominican Republic' >Dominican Republic</option>
						<option value='Ecuador' >Ecuador</option>
						<option value='Egypt' >Egypt</option>
						<option value='El Salvador' >El Salvador</option>
						<option value='Equatorial Guinea' >Equatorial Guinea</option>
						<option value='Eritrea' >Eritrea</option>
						<option value='Estonia' >Estonia</option>
						<option value='Eswatini (Swaziland)' >Eswatini (Swaziland)</option>
						<option value='Ethiopia' >Ethiopia</option>
						<option value='Falkland Islands' >Falkland Islands</option>
						<option value='Faroe Islands' >Faroe Islands</option>
						<option value='Fiji' >Fiji</option>
						<option value='Finland' >Finland</option>
						<option value='France' >France</option>
						<option value='French Guiana' >French Guiana</option>
						<option value='French Polynesia' >French Polynesia</option>
						<option value='French Southern Territories' >French Southern Territories</option>
						<option value='Gabon' >Gabon</option>
						<option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Gibraltar' >Gibraltar</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guadeloupe' >Guadeloupe</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guernsey' >Guernsey</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Heard and McDonald Islands' >Heard and McDonald Islands</option><option value='Holy See' >Holy See</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Isle of Man' >Isle of Man</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jersey' >Jersey</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Lao People&#039;s Democratic Republic' >Lao People&#039;s Democratic Republic</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Macau' >Macau</option><option value='Macedonia' >Macedonia</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Marshall Islands' >Marshall Islands</option><option value='Martinique' >Martinique</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mayotte' >Mayotte</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montenegro' >Montenegro</option><option value='Montserrat' >Montserrat</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Caledonia' >New Caledonia</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Niue' >Niue</option><option value='Norfolk Island' >Norfolk Island</option><option value='North Korea' >North Korea</option><option value='Northern Mariana Islands' >Northern Mariana Islands</option><option value='Norway' >Norway</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Palestine, State of' >Palestine, State of</option><option value='Panama' >Panama</option><option value='Papua New Guinea' >Papua New Guinea</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Pitcairn' >Pitcairn</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Réunion' >Réunion</option><option value='Romania' >Romania</option><option value='Russia' >Russia</option><option value='Rwanda' >Rwanda</option><option value='Saint Barthélemy' >Saint Barthélemy</option><option value='Saint Helena' >Saint Helena</option><option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option><option value='Saint Lucia' >Saint Lucia</option><option value='Saint Martin' >Saint Martin</option><option value='Saint Pierre and Miquelon' >Saint Pierre and Miquelon</option><option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Sao Tome and Principe' >Sao Tome and Principe</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Serbia' >Serbia</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Sint Maarten' >Sint Maarten</option><option value='Slovakia' >Slovakia</option><option value='Slovenia' >Slovenia</option><option value='Solomon Islands' >Solomon Islands</option><option value='Somalia' >Somalia</option><option value='South Africa' >South Africa</option><option value='South Georgia' >South Georgia</option><option value='South Korea' >South Korea</option><option value='South Sudan' >South Sudan</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Suriname' >Suriname</option><option value='Svalbard and Jan Mayen Islands' >Svalbard and Jan Mayen Islands</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Timor-Leste' >Timor-Leste</option><option value='Togo' >Togo</option><option value='Tokelau' >Tokelau</option><option value='Tonga' >Tonga</option><option value='Trinidad and Tobago' >Trinidad and Tobago</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='Turks and Caicos Islands' >Turks and Caicos Islands</option><option value='Tuvalu' >Tuvalu</option><option value='Uganda' >Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Arab Emirates' >United Arab Emirates</option><option value='United Kingdom' >United Kingdom</option><option value='United States' >United States</option><option value='Uruguay' >Uruguay</option><option value='US Minor Outlying Islands' >US Minor Outlying Islands</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Virgin Islands, British' >Virgin Islands, British</option><option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option><option value='Wallis and Futuna' >Wallis and Futuna</option><option value='Western Sahara' >Western Sahara</option><option value='Yemen' >Yemen</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option></select></div></li><li id='field_1_9'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_9' >Nationality:<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_9' id='input_1_9' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" /></div></li><li id='field_1_30'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_30' >Industry<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_select'><select name='input_30' id='input_1_30' class='medium gfield_select'   aria-required="true" aria-invalid="false"><option value='' selected='selected' class='gf_placeholder'>Select the industry in which you are currently operating</option><option value='Accounting/Finance' >Accounting/Finance</option><option value='Advertising/Public Relations' >Advertising/Public Relations</option><option value='Agriculture' >Agriculture</option><option value='Aerospace/Aviation' >Aerospace/Aviation</option><option value='Arts/Entertainment/Publishing' >Arts/Entertainment/Publishing</option><option value='Automotive' >Automotive</option><option value='Banking/Mortgage' >Banking/Mortgage</option><option value='Business Development' >Business Development</option><option value='Business Opportunity' >Business Opportunity</option><option value='Clerical/Administrative' >Clerical/Administrative</option><option value='Construction/Facilities' >Construction/Facilities</option><option value='Consumer Goods' >Consumer Goods</option><option value='Customer Service' >Customer Service</option><option value='Education/Training' >Education/Training</option><option value='Energy/Utilities' >Energy/Utilities</option><option value='Engineering' >Engineering</option><option value='Government/Military' >Government/Military</option><option value='Green' >Green</option><option value='Healthcare' >Healthcare</option><option value='Hospitality/Travel' >Hospitality/Travel</option><option value='Human Resources' >Human Resources</option><option value='Installation/Maintenance' >Installation/Maintenance</option><option value='Insurance' >Insurance</option><option value='Internet' >Internet</option><option value='Job Search Aids' >Job Search Aids</option><option value='Law Enforcement/Security' >Law Enforcement/Security</option><option value='Legal' >Legal</option><option value='Management/Executive' >Management/Executive</option><option value='Manufacturing/Operations' >Manufacturing/Operations</option><option value='Marketing' >Marketing</option><option value='Non-Profit/Volunteer' >Non-Profit/Volunteer</option><option value='Pharmaceutical/Biotech' >Pharmaceutical/Biotech</option><option value='Professional Services' >Professional Services</option><option value='QA/Quality Control' >QA/Quality Control</option><option value='Real Estate' >Real Estate</option><option value='Restaurant/Food Service' >Restaurant/Food Service</option><option value='Retail' >Retail</option><option value='Sales' >Sales</option><option value='Science/Research' >Science/Research</option><option value='Skilled Labour' >Skilled Labour</option><option value='Technology' >Technology</option><option value='Telecommunications' >Telecommunications</option><option value='Transportation/Logistics' >Transportation/Logistics</option><option value='Other' >Other</option></select></div></li><li id='field_1_6'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_6' >Company or Organisation:<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_6' id='input_1_6' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" /></div></li><li id='field_1_5'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_5' >Designation:<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_5' id='input_1_5' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" /></div></li><li id='field_1_7'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_7' >Time spent in your current designation (Years)<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_number'><input name='input_7' id='input_1_7' type='number' step='any'   value='' class='medium'     aria-required="true" aria-invalid="false" /></div></li><li id='field_1_10'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_10' >Company Telephone numbers:</label><div class='ginput_container ginput_container_text'><input name='input_10' id='input_1_10' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_1_11'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_11' >Personal mobile number:</label><div class='ginput_container ginput_container_text'><input name='input_11' id='input_1_11' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_1_12'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_12' >Official E-mail Address<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_12' id='input_1_12' type='email' value='' class='medium'    aria-required="true" aria-invalid="false" />
                        </div></li><li id='field_1_13'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_13' >Personal E-mail address:<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_13' id='input_1_13' type='email' value='' class='medium'    aria-required="true" aria-invalid="false" />
							

                        </div></li><li id='field_1_14'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_14' >Postal address:</label>
						<div class='ginput_container ginput_container_textarea'><textarea name='input_14' id='input_1_14' class='textarea medium'      aria-invalid="false"   rows='10' cols='50'></textarea></div></li><li id='field_1_15'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_15' >Physical address:</label>
						<div class='ginput_container ginput_container_textarea'>
						<textarea name='input_15' id='input_1_15' class='textarea medium'aria-invalid="false" rows='10' cols='50'></textarea><br><br><br>
						<label class='gfield_label' for='input_1_30' >Upload passport:</label><br><br><br>
						<form id='gform_4' class='frmEnewsletter' action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file"class="imgur-upload" name="fileToUpload" id="fileToUpload"><br><br><br>
                        <input type="submit"class="imgur-upload" value="Upload your passport" name="submit">
                        </form>
						</div></li>
						<li id='field_1_16'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_16' >Total staff reporting to you:</label><div class='ginput_container ginput_container_text'><input name='input_16' id='input_1_16' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_1_17'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_17' >Average annual turnover (KShs):</label><div class='ginput_container ginput_container_text'>
						<input name='input_17' id='input_1_17' type='text' value='' class='medium'aria-invalid="false" /></div></li><li id='field_1_27'  class='gfield gsection field_sublabel_below field_description_below gfield_visibility_visible' ><h2 class='gsection_title'>PERSONAL ASSISTANT/SECRETARY:</h2></li><li id='field_1_19'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_19' >Name:</label><div class='ginput_container ginput_container_text'><input name='input_19' id='input_1_19' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_1_20'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_20' >Email address:</label><div class='ginput_container ginput_container_text'>
						<input name='input_20' id='input_1_20' type='text' value='' class='medium'aria-invalid="false" /></div></li><li id='field_1_21'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_21' >Mobile Number:</label><div class='ginput_container ginput_container_text'>
						<input name='input_21' id='input_1_21' type='text' value='' class='medium' aria-invalid="false" />
						</div></li>
						<li id='field_1_28'  class='gfield gsection field_sublabel_below field_description_below gfield_visibility_visible' ><h2 class='gsection_title'>CANCELLATION POLICY</h2></li>
						<li id='field_1_22'  class='gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible' >
						<p>All cancellations must be made in writing to the Program Manager. Cancellations made less than 14 days to thecommencement of the seminar, are subject to a penalty of 25% of total program fee.</p></li>
						<li id='field_1_24'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label'  ></label>
						<div class='ginput_container ginput_container_radio'>
						<ul class='gfield_radio' id='input_1_24'>
						<li class='gchoice_1_24_0'>
						<input name='input_24' type='radio' value='I agree to the terms of the cancellation policy as detailed above.'  id='choice_1_24_0'    />
						<label for='choice_1_24_0' id='label_1_24_0'>I agree to the terms of the cancellation policy as detailed above.</label></li></ul></div></li><li id='field_1_25'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_25' >Date:<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_date'>
						


                            <input name='input_25' id='input_1_25' type='text' value='' class='datepicker medium dmy datepicker_no_icon'    aria-describedby='input_1_25_date_format' />
                            <span id='input_1_25_date_format' class='screen-reader-text'>Date Format: DD slash MM slash YYYY</span>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_1_25' class='gform_hidden' value='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_1_31'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label'  >Are you responsible for Training and Talent Development in your organisation?<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_radio'><ul class='gfield_radio' id='input_1_31'><li class='gchoice_1_31_0'>
						<input name='input_31' type='radio' value='Yes'  id='choice_1_31_0'    />
						<label for='choice_1_31_0' id='label_1_31_0'>Yes</label></li><li class='gchoice_1_31_1'><input name='input_31' type='radio' value='No'  id='choice_1_31_1'    />
						<label for='choice_1_31_1' id='label_1_31_1'>No</label></li></ul></div></li><li id='field_1_29'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label'  >Would you like to receive our weekly newsletter (At a Glance)?<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_radio'><ul class='gfield_radio' id='input_1_29'><li class='gchoice_1_29_0'>
						<input name='input_29' type='radio' value='Yes'  id='choice_1_29_0'    />
						<label for='choice_1_29_0' id='label_1_29_0'>Yes</label></li><li class='gchoice_1_29_1'>
						<input name='input_29' type='radio' value='No'  id='choice_1_29_1'    />
						<label for='choice_1_29_1' id='label_1_29_1'>No</label></li></ul></div></li>
						<li id='field_1_32'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
						<label class='gfield_label' for='input_1_32' >CAPTCHA</label>
						<div id='input_1_32' class='ginput_container ginput_recaptcha' data-sitekey='6LcVHxwTAAAAAJbH1rlCNYQwW9lqOuu3UESplQNs' data-stoken='URw0w57NLe0Ya-lgmG-qsxRbl-AX2xsce0pIF9nLh6jxmTKQWEi4kKV3Dqp7cHBRt0tPYFjorxKUDYELnFrzAlGQ_8wyc0oG6YYTKT65HYg' data-theme='light' data-tabindex='0'  data-badge=''></div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_1' class='gform_button button' value='Submit'  onclick='if(window["gf_submitting_1"]){return false;}  if( !jQuery("#gform_1")[0].checkValidity || jQuery("#gform_1")[0].checkValidity()){window["gf_submitting_1"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_1"]){return false;} if( !jQuery("#gform_1")[0].checkValidity || jQuery("#gform_1")[0].checkValidity()){window["gf_submitting_1"]=true;}  jQuery("#gform_1").trigger("submit",[true]); }' /> 
            <input type='hidden' class='gform_hidden' name='is_submit_1' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='1' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_1' value='WyJbXSIsImY5NDBiNzM4YWQ1Y2I0ZjkwNDA5NTdjMmI2OWE5MjY4Il0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_1' id='gform_target_page_number_1' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_1' id='gform_source_page_number_1' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div><script type='text/javascript'> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 1) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [1, 1]) } ); </script>

<br/>
<br/>  
 <script type="text/javascript">
 var addthis_config = {"data_track_clickback":true};
 </script> 
 <!-- <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pubid=[YOUR PROFILE ID]"></script> -->
 <script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=wp-03a2a1231594564871185ff10ebec844" async="async"></script>

 <!-- AddThis Button BEGIN -->
 <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
   <span class="addthis_separator">Share This: </span>
  <!--  <a class="addthis_button_tweet"></a>
   <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> -->

   <a class="addthis_button_facebook"></a>
   <a class="addthis_button_twitter"></a>
   <a class="addthis_button_linkedin"></a>
   <a class="addthis_button_email"></a>
   <a class="addthis_button_whatsapp"></a>
   <!-- <a class="addthis_button_youtube"></a> -->
   <!-- <a class="addthis_button_instagram"></a> -->
   
   <!-- <a class="addthis_button_compact"></a> -->
   <!-- <a class="addthis_counter addthis_bubble_style"></a> -->
 </div>
 <!-- AddThis Button END -->


</div>

<div class="rightcontentsection">


         

  </div>

</div>

<div class="enewslettersection">
    <p>Sign up to receive important news and information from Strathmore University Business School</p>
    
                <div class='gf_browser_chrome gform_wrapper frmEnewsletter_wrapper' id='gform_wrapper_4' ><form method='post' enctype='multipart/form-data'  id='gform_4' class='frmEnewsletter' action='/resources/apply-online/'>
                        <div class='gform_body'><ul id='gform_fields_4' class='gform_fields top_label form_sublabel_below description_below'><li id='field_4_1'  class='gfield txtemail gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_4_1' >Email<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_1' id='input_4_1' type='email' value='' class='medium'   placeholder='Enter your email address' aria-required="true" aria-invalid="false" />
                        </div></li><li id='field_4_2'  class='gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_4_2' >Email</label><div class='ginput_container'><input name='input_2' id='input_4_2' type='text' value='' autocomplete='off'/></div><div class='gfield_description' id='gfield_description__2'>This field is for validation purposes and should be left unchanged.</div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_4' class='gform_button button' value='Sign Up'  onclick='if(window["gf_submitting_4"]){return false;}  if( !jQuery("#gform_4")[0].checkValidity || jQuery("#gform_4")[0].checkValidity()){window["gf_submitting_4"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_4"]){return false;} if( !jQuery("#gform_4")[0].checkValidity || jQuery("#gform_4")[0].checkValidity()){window["gf_submitting_4"]=true;}  jQuery("#gform_4").trigger("submit",[true]); }' /> 
            <input type='hidden' class='gform_hidden' name='is_submit_4' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='4' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_4' value='WyJbXSIsImY5NDBiNzM4YWQ1Y2I0ZjkwNDA5NTdjMmI2OWE5MjY4Il0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_4' id='gform_target_page_number_4' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_4' id='gform_source_page_number_4' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div><script type='text/javascript'> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 4) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [4, 1]) } ); </script>
</div>

<div class="footertopsection">
    <div class="footercol5">
        <h3>Global Partners</h3>
          
                <iframe width="500"  marginwidth="0" height="300" marginheight="0" frameBorder="0" scrolling="no" hspace="0" vspace="0" src="https://sbs.strathmore.edu/wp-content/themes/sbs/map/tests/sbs.php"></iframe>
    </div> 

    <div class="footercol1">
        <h3>Twitter Feed</h3>
        <p><a class="twitter-timeline" href="https://twitter.com/SBSKenya?ref_src=twsrc%5Etfw" data-height="300">Tweets by SBSKenya</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
   
    </div>
    <div class="footercol2">
        <h3>Important Links</h3>
        <ul>
<li><a href="https://sbs.strathmore.edu/corporate-identity/">Corporate Brand Resources</a></li>
<li><a href="https://drive.google.com/a/strathmore.edu/file/d/1yXEhZKQr4bV7Jb142KVLA-y-q7Q1egMl/view?usp=sharing">SBS Portfolio</a></li>
<li><a href="https://sbs.strathmore.edu/careers/">Careers</a></li>
<li><a href="http://www.strathmore.edu/en/about-strathmore/policies">Strathmore Policies</a></li>
<li><a href="https://docs.google.com/a/strathmore.edu/forms/d/1yIoXD6cdRsyxae8C12hsCmatFqVcnQyY-0o6TCGqNqs/viewform">Request for Coverage</a></li>
<li><a href="https://sbs.strathmore.edu/resources/sbs-facilities/">Facilities</a></li>
<li><a href="https://sbs.strathmore.edu/centers/mentoring/">Mentoring</a></li>
<li><a href="https://sbs.strathmore.edu/surveys/">Surveys</a></li>
</ul>
    </div>
    <div class="footercol3">
        <h3>Globals</h3>
        <ul>
<li><a href="https://sbs.strathmore.edu/webinar/">Webinars</a></li>
<li><a href="https://sbs.strathmore.edu/media-policy-webinar-series/">Media Policy Webinars</a></li>
<li><a href="https://sbs.strathmore.edu/calendars/">Calendars</a></li>
<li><a href="https://sbs.strathmore.edu/resources/downloads/">Resources</a></li>
<li><a href="https://sbselearning.strathmore.edu/">SBS e-learning</a></li>
<li><a href="https://sbs.strathmore.edu/resources/privacy-policy/">Privacy Policy</a></li>
<li><a href="#">Site Map</a></li>
</ul>
    
    </div>
    <div class="footercol4">
        <h3>Social Media</h3>
        <ul>
<li><a href="https://www.facebook.com/pages/Strathmore-Business-School/152617034801077?fref=ts"><i class="fa fa-facebook"></i> Facebook</a></li>
<li><a href="https://twitter.com/SBSKenya"><i class="fa fa-twitter"></i> Twitter</a></li>
<li><a href="https://www.linkedin.com/school/strathmore-business-school/"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
<li><a href="https://www.youtube.com/user/StrathmoreBusiness"><i class="fa fa-youtube"></i> Youtube</a></li>
<li><a href="https://www.instagram.com/sbskenya/"><i class="fa fa-instagram"></i> Instagram</a></li>
</ul>
        
    </div>            
</div>

<div class="partnerlogossection" id="owl-demo">
       
<div class="partnerlogo"><a href="http://www.aacsb.edu/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2015/03/aacsb.jpg" /></a></div><div class="partnerlogo"><a href="http://www.aabschools.com/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2015/07/aabslogo.jpg" /></a></div><div class="partnerlogo"><a href="http://www.naspaa.org/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2018/01/NASPAA-Logo-Blue.png" /></a></div><div class="partnerlogo"><a href="http://www.aim.edu/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2015/07/aimlogo.jpg" /></a></div><div class="partnerlogo"><a href="http://www.acem.sjtu.edu.cn/en/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2015/07/antailogo.jpg" /></a></div><div class="partnerlogo"><a href="http://www.iese.edu/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2015/07/ieselogo.jpg" /></a></div><div class="partnerlogo"><a href="http://www.lbs.edu.ng/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2015/08/lagoslogo.jpg" /></a></div><div class="partnerlogo"><a href="http://www.gibs.co.za/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2015/08/gordonlogo.jpg" /></a></div><div class="partnerlogo"><a href="http://www.gbsnonline.org/" target="_blank"><img src="https://sbs.strathmore.edu/wp-content/uploads/2015/07/gbsnlogo.jpg" /></a></div>       

</div>

<div class="footerbottomsection">
    <div class="copyright">© 2021. Strathmore University Business School. All Rights Reserved.</div>
    <div class="designed"></div>
</div>


<!--Start of Tawk.to Script (0.4.4)-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{};
var Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/573552e4ea1b02160f848613/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script (0.4.4)-->        <div class="w3eden">
            <div id="wpdm-popup-link" class="modal fade">
                <div class="modal-dialog" style="width: 750px">
                    <div class="modal-content">
                        <div class="modal-header">
                              <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body" id='wpdm-modal-body'>
                            <p class="placeholder">
                                [ Placeholder content for popup link ]
                                <a href="https://www.wpdownloadmanager.com/">WordPress Download Manager - Best Download Management Plugin</a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div>
        <script language="JavaScript">
            <!--
            jQuery(function () {
                jQuery('.wpdm-popup-link').click(function (e) {
                    e.preventDefault();
                    jQuery('#wpdm-popup-link .modal-title').html(jQuery(this).data('title'));
                    jQuery('#wpdm-modal-body').html('<i class="icon"><img align="left" style="margin-top: -1px" src="https://sbs.strathmore.edu/wp-content/plugins/download-manager/assets/images/loading-new.gif" /></i>&nbsp;Please Wait...');
                    jQuery('#wpdm-popup-link').modal('show');
                    jQuery.post(this.href,{mode:'popup'}, function (res) {
                        jQuery('#wpdm-modal-body').html(res);
                    });
                    return false;
                });
            });
            //-->
        </script>
        <style type="text/css">
            #wpdm-modal-body img {
                max-width: 100% !important;
            }
            .placeholder{
                display: none;
            }
        </style>
    <link rel='stylesheet' id='gforms_reset_css-css'  href='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/css/formreset.min.css?ver=2.4.17' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_datepicker_css-css'  href='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/css/datepicker.min.css?ver=2.4.17' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css'  href='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/css/formsmain.min.css?ver=2.4.17' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css'  href='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/css/readyclass.min.css?ver=2.4.17' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css'  href='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/css/browsers.min.css?ver=2.4.17' type='text/css' media='all' />
<script type='text/javascript' src='https://sbs.strathmore.edu/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<script type='text/javascript' src='https://sbs.strathmore.edu/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://sbs.strathmore.edu/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' src='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/js/jquery.json.min.js?ver=2.4.17' id='gform_json-js'></script>
<script type='text/javascript' id='gform_gravityforms-js-extra'>
/* <![CDATA[ */
var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"https:\/\/sbs.strathmore.edu\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"https:\/\/sbs.strathmore.edu\/wp-content\/plugins\/gravityforms\/images\/spinner.gif"};
var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"https:\/\/sbs.strathmore.edu\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"https:\/\/sbs.strathmore.edu\/wp-content\/plugins\/gravityforms\/images\/spinner.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=2.4.17' id='gform_gravityforms-js'></script>
<script type='text/javascript' src='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/js/datepicker.min.js?ver=2.4.17' id='gform_datepicker_init-js'></script>
<script type='text/javascript' src='https://sbs.strathmore.edu/wp-content/plugins/gravityforms/js/placeholders.jquery.min.js?ver=2.4.17' id='gform_placeholder-js'></script>
<script type='text/javascript' src='https://www.google.com/recaptcha/api.js?hl=en&#038;render=explicit&#038;ver=5.5.3' id='gform_recaptcha-js'></script>
		<script type="text/javascript">
			( function( $ ) {
				$( document ).bind( 'gform_post_render', function() {
					var gfRecaptchaPoller = setInterval( function() {
						if( ! window.grecaptcha || ! window.grecaptcha.render ) {
							return;
						}
						renderRecaptcha();
						clearInterval( gfRecaptchaPoller );
					}, 100 );
				} );
			} )( jQuery );
		</script>

		


</body>
</html>