var addthis_config = {
	"data_track_addressbar": false,
	"data_track_clickback": false,
	services_overlay:'facebook,twitter,email,print,more'
};

//Get query string params for form pre-populating
function getUrlVars() {
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(var i = 0; i < hashes.length; i++) {
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars;
}

var quantity_iPQMS = getUrlVars()["IPQMS"];
var quantity_iPQMS_Pro = getUrlVars()["iPQMS-Pro"];
var quantity_BDS_Pro = getUrlVars()["BDS-Pro"];
var quantity_BMS_i_com = getUrlVars()["BMS-icom"];
var quantity_IBEX_ULTRA = getUrlVars()["IBEX-ULTRA"];
var quantity_IBEX_PRO = getUrlVars()["IBEX-PRO"];
var quantity_IBEX_1000 = getUrlVars()["IBEX-1000"];
var quantity_IBEX_1000_EX = getUrlVars()["IBEX-1000EX"];
var quantity_IBEX_Evic = getUrlVars()["IBEX-EVIC"];
var quantity_SG_ULTRA_MAX = getUrlVars()["SG-ULTRA-MAX"];
var quantity_SG_ULTRA = getUrlVars()["SG-Ultra"];
var quantity_SG_1000 = getUrlVars()["SG-1000F"];
var quantity_DM_Series = getUrlVars()["DM-Series"];
var quantity_SG_100M = getUrlVars()["SG-100M"];
var quantity_SG_5000_BT = getUrlVars()["SG-5000BT"];
var quantity_SG_ULTRA_MAX_EX_PETROL = getUrlVars()["SG-ULTRA-MAX-EX-PETROL"];
var quantity_IBwatch_Series = getUrlVars()["IBwatch-Series"];

var quantity_AT10_1 = getUrlVars()["AT10.1"];
var quantity_AT30 = getUrlVars()["AT30"];
var quantity_SCR_SCRF = getUrlVars()["SCR/SCRF"];
var quantity_EnerGenius_iQ_Charger = getUrlVars()["EnerGenius-iQ-Charger"];

var quantity_LB_30_208_3_1 = getUrlVars()["LB-30-208-3-1"];
var quantity_LB_60_208_3_5 = getUrlVars()["LB_60_208_3_5"];
var quantity_LB_100_208_3_5 = getUrlVars()["LB_100_208_3_5"];
var quantity_LB_100_MV_12_5 = getUrlVars()["LB_100_MV_12_5"];
var quantity_LB_72_200_3_9_400 = getUrlVars()["LB_72_200_3_9_400"];
var quantity_LB_75_200_3_5_400 = getUrlVars()["LB_75_200_3_5_400"];
var quantity_LB_100_200_3_5_400 = getUrlVars()["LB_100_200_3_5_400"];
var quantity_Custom_AC_Load_Bank = getUrlVars()["Custom_AC_Load_Bank"];

var quantity_LB_series= getUrlVars()["LB-Series"];
var quantity_SLB_Series= getUrlVars()["SLB-Series"];
var quantity_AC_LB_Series = getUrlVars()["AC-LB-Series"];

var quantity_LB_1000 = getUrlVars()["AC-Load-Banks"];
var quantity_ultra_max_plus_kit = getUrlVars()["ULTRA-MAX-PLUS-KIT"];
var quantity_BDL_series = getUrlVars()["BDL-Series"];
var quantity_GFL_1000 = getUrlVars()["GFL-1000"];
var quantity_HGD_2000 = getUrlVars()["HGD-2000"];
var quantity_GD_3000 = getUrlVars()["GD-3000"];
var quantity_HGVS_1000 = getUrlVars()["HGVS-1000"];

var quantity_Exmons = getUrlVars()["Exmons"];
var quantity_Dataview = getUrlVars()["Dataview"];
var quantity_Centroid = getUrlVars()["Centroid"];
var quantity_Wireless = getUrlVars()["Wireless"];

//grab the query string URL parameter and populate the value into the "System Needs" input to help indicate which product the visitor came from
var queryStringParameter = getUrlVars();

if (queryStringParameter == "SLB-Series" || queryStringParameter == "LB-Series" || queryStringParameter == "AC-LB-Series" || queryStringParameter == "SLB-Series" || queryStringParameter == "LB-Series" || queryStringParameter == "AC-LB-Series") {
	var notice = " (Please list your Voltage and Current requirements below.)";
} else if (queryStringParameter == "BTM-Series") {
	var notice = " (Please list the number of jars you want to monitor.)";
} else if (queryStringParameter == "IPQMS") {
	var notice = " (Please provide details for each battery system(s) you are looking to monitor. For example, Qty.(10) 125vdc, 60cell battery systems – each made up of qty.(60) 2v Jars and/or Qty.(5) 48vdc, 24cell battery system made up of qty.(24) 2v Jars…etc.)";
} else if (queryStringParameter == "iPQMS-Pro") {
	var notice = " (Please provide details for each battery system(s) you are looking to monitor. For example, Qty.(10) 480vdc, 240cell battery systems - each made up of qty.(40) 12v Jars…etc.)";
} else if (queryStringParameter == "BDS-Pro") {
	var notice = " (Please provide details for each battery system(s) you are looking to monitor. For example, Qty.(10) 48vdc, 24cell battery systems - each made up of qty.(24) 2v Jars and/or Qty.(5) 125vdc, 60cell battery system made up of qty.(10) 12v Jars…etc.)";
} else if (queryStringParameter == "BMS-icom") {
	var notice = " (Please provide details for each battery system(s) you are looking to monitor. For example, Qty.(10) 48vdc, 24cell battery systems - each made up of qty.(4) 12v Jars…etc.)";
} else {
	var notice = "";
}

if (queryStringParameter != "v") {
	jQuery("#00NC0000005NTDs").val("I am in need of the " + queryStringParameter + "." + notice);
}

jQuery(document).ready(function() {
	
	//Opens any link with class="external" or <a hrefs> ending in .pdf suffix into a new browser window
	jQuery("a[class='external'],a[href$='.pdf'],a[class='external icon-pdf'],a[rel='external']").click(function () {
		window.open(this.href);
		return false;
	});

	//fancybox general modal function
	jQuery(".inline-modal")
		.fancybox({
			helpers : {
				title : null
			}
	});

	//fancybox gallery function
	jQuery(".gallery")
		.attr('rel', 'gallery')
		.fancybox({
			helpers : {
				title : null
			}
	});

	//fancybox for YouTube videos
	jQuery("a.video").click(function() {
		jQuery.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'width'			: 640,
			'height'		: 385,
			'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type'			: 'swf',
			'swf'			: {
			'wmode'			: 'transparent',
			'allowfullscreen'	: 'true'
			}
		});
		return false;
	});

	//general flexslider script - not specific to a particular instance
	if(jQuery(".flexslider").length>0){
		jQuery('.flexslider').flexslider({
			animation: "slide",
		    animationLoop: true
		    //itemWidth: 100,
		    //itemMargin: 40
		});
	}

	//Expand / Collapse functionality
	jQuery(function() {
		jQuery(".expanded").hide();
		jQuery(".trigger").click(function()
			{
				jQuery(this).next(".expanded").slideToggle(600);
				jQuery(this).find(".icon-plus").toggleClass("icon-plus-down");
			});
		});
	});

	//Responsive Tabs
	if(jQuery(".resp-tabs-list").length>0){
		jQuery("#product-information").easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any custom width
			fit: true,   // 100% fits in a container
			closed: false, // Close the panels on start, the options 'accordion' and 'tabs' keep them closed in there respective view types
			activate: function() {}  // Callback function, gets called if tab is switched
		});
	}

	//Click to call script
	(function ($) {
		$.fn.clickToCall = function () {
			var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
			if (isMobile) {				
				return this.each(function() {
					var $this = $(this);
					var $tel = $this.data('tel');
					if ($tel === undefined || $tel === '') {
						$tel = $this.text();
					}
					var $prefix = $tel.charAt(0) == 1 ? '' : '1';
					var $telFormatted = $tel.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
					var $telClass = $this.attr('class');
					$this.replaceWith('<a class="' + $telClass + '" href="tel:+' + $prefix + $telFormatted + '">' + $this.text() + '</a>');
				});
	    	} else {
				return this;
	   		}
		};
	})(jQuery);

	jQuery(function() {
		jQuery('.tel').clickToCall();
	});

	//Open navigation menu when user clicks "Menu" in header on mobile devices
	jQuery("#nav-toggle").on('click tap', function (e) {
		jQuery("#menu-primary").slideToggle();
		e.preventDefault();
	});

	//Re-hides navigation menu on outside click
	jQuery("#main,#footer").on("click tap", function () {
		var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
		if (isMobile) {
			jQuery("#menu-primary").hide();
		} else {
			return this;
		}
	});

	//Call function imageSwap on page load
	jQuery().ready(imageSwap);
	//Call function imageSwap when resizing the browser window
	jQuery(window).resize(imageSwap);

	//Function to swap Home Page Ad Rotator Images when the main navigation disappears
	function imageSwap() {
		if (jQuery("#menu-primary").css("display") == "block" ){
			jQuery("#data-management-solutions img").attr("src", "wp-content/themes/html5-eagleplate/images/data-management-solutions.jpg");
			jQuery("#battery-monitoring-solutions img").attr("src", "wp-content/themes/html5-eagleplate/images/battery-monitoring-solutions.jpg");
			jQuery("#compliance-solutions img").attr("src", "wp-content/themes/html5-eagleplate/images/compliance-solutions.jpg");
		} else {
			jQuery("#data-management-solutions img").attr("src", "wp-content/themes/html5-eagleplate/images/mobile-data-management-solutions.jpg");
			jQuery("#battery-monitoring-solutions img").attr("src", "wp-content/themes/html5-eagleplate/images/mobile-battery-monitoring-solutions.jpg");
			jQuery("#compliance-solutions img").attr("src", "wp-content/themes/html5-eagleplate/images/mobile-compliance-solutions.jpg");
		}
	};

	//Add '*' to required field labels
	jQuery('input').each(function () {
		var req = jQuery(this).attr('required');
		var dataReq = jQuery(this).attr('data-val-required');
		if (dataReq !== undefined || req == "required") {
			var label = jQuery('label[for="' + jQuery(this).attr('id') + '"]');
			var text = label.text();
			if (text.length > 0) {
				label.prepend('&#42;&#32;');
			}
		}
	});
	
	//Populates Request a Quote form product quantities via query string values
	jQuery("#Battery_Monitoring_Systems").attr('checked',quantity_iPQMS);
	jQuery("#Battery_Monitoring_Systems").attr('checked',quantity_iPQMS_Pro);
	jQuery("#Battery_Monitoring_Systems").attr('checked',quantity_BDS_Pro);
	jQuery("#Battery_Monitoring_Systems").attr('checked',quantity_BMS_i_com);
	jQuery("#Battery_Monitoring_Systems").attr('checked',quantity_IBwatch_Series);

	jQuery("#Portable_Battery_Testers").attr('checked',quantity_IBEX_ULTRA);
	jQuery("#Portable_Battery_Testers").attr('checked',quantity_IBEX_PRO);
	jQuery("#Portable_Battery_Testers").attr('checked',quantity_IBEX_1000);
	jQuery("#Portable_Battery_Testers").attr('checked',quantity_IBEX_1000_EX);
	jQuery("#Portable_Battery_Testers").attr('checked',quantity_IBEX_Evic);

	jQuery("#Digital_Hydrometers_Density_Meters").attr('checked',quantity_SG_ULTRA_MAX);
	jQuery("#Digital_Hydrometers_Density_Meters").attr('checked',quantity_SG_ULTRA);
	jQuery("#Digital_Hydrometers_Density_Meters").attr('checked',quantity_SG_1000); //this one doesn't work on product detail - query string is wrong (driven from model number)
	jQuery("#Digital_Hydrometers_Density_Meters").attr('checked',quantity_DM_Series);
	jQuery("#Digital_Hydrometers_Density_Meters").attr('checked',quantity_SG_100M);
	jQuery("#Digital_Hydrometers_Density_Meters").attr('checked',quantity_SG_5000_BT);
	jQuery("#Digital_Hydrometers_Density_Meters").attr('checked',quantity_SG_ULTRA_MAX_EX_PETROL);

	jQuery("#Battery_Chargers").attr('checked',quantity_AT10_1);
	jQuery("#Battery_Chargers").attr('checked',quantity_AT30);
	jQuery("#Battery_Chargers").attr('checked',quantity_SCR_SCRF);
	jQuery("#Battery_Chargers").attr('checked',quantity_EnerGenius_iQ_Charger);

	jQuery("#AC_Load_Banks").attr('checked',quantity_LB_30_208_3_1);
	jQuery("#AC_Load_Banks").attr('checked',quantity_LB_60_208_3_5);
	jQuery("#AC_Load_Banks").attr('checked',quantity_LB_100_208_3_5);
	jQuery("#AC_Load_Banks").attr('checked',quantity_LB_100_MV_12_5);
	jQuery("#AC_Load_Banks").attr('checked',quantity_LB_72_200_3_9_400);
	jQuery("#AC_Load_Banks").attr('checked',quantity_LB_75_200_3_5_400);
	jQuery("#AC_Load_Banks").attr('checked',quantity_LB_100_200_3_5_400);
	jQuery("#AC_Load_Banks").attr('checked',quantity_Custom_AC_Load_Bank);

	jQuery("#DC_Load_Banks").attr('checked',quantity_LB_series);
	jQuery("#DC_Load_Banks").attr('checked',quantity_SLB_Series);
	jQuery("#DC_Load_Banks").attr('checked',quantity_LB_1000);
	jQuery("#AC_Load_Banks").attr('checked',quantity_AC_LB_Series);

	jQuery("#IEEE_NERC_Testing_Kits").attr('checked',quantity_ultra_max_plus_kit);
	jQuery("#Battery_Data_Logging_Kits").attr('checked',quantity_BDL_series);
	jQuery("#Ground_Fault_Location").attr('checked',quantity_GFL_1000);

	jQuery("#Gas_Detection").attr('checked',quantity_HGD_2000);
	jQuery("#Gas_Detection").attr('checked',quantity_GD_3000);
	jQuery("#Gas_Detection").attr('checked',quantity_HGVS_1000);

	jQuery("#Battery_Management_Software").attr('checked',quantity_Exmons);
	jQuery("#Battery_Management_Software").attr('checked',quantity_Dataview);
	jQuery("#Battery_Management_Software").attr('checked',quantity_Centroid);
	jQuery("#Battery_Management_Software").attr('checked',quantity_Wireless);

	//consolidates input values and inserts results into "Description" field for Salesforce.com form processing
	jQuery('#request-quote-form').submit(function() {
		//create a variable called "filledFields" and return all input-value pairs within the "products" fieldsets with the class of "serialize"
		var filledFields = jQuery("#request-quote-form").find(".serialize").serialize();
		//take the "filledFields" variable and remove input-value pairs that are empty
		filledFields = filledFields.replace(/&?[^=&]+=(&|$)/g,'');
		//submit the information to the "description" field of salesforce.com
		jQuery("#description").val(filledFields);
	});