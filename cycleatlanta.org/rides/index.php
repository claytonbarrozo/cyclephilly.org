<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cycle Philly: Interactive map</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="http://mytracks.phillyopen.org/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
        <link rel="stylesheet" href="http://mytracks.phillyopen.org/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="chosen/chosen.css">
        
        

        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->


        <div class="cyclePHL_title">
        
       <div id="cycleTitleText">Cycle Philly</div>
        
        <div class="chosenBox">
        <p>Filter Rides:</p>
        
<form id="ca_data_selector" action="#">
    
    <select class="chosen" multiple="true">
		<optgroup label="Ride Purpose:">
        
        <option>Commute</option>
        <option>School</option>
        <option>Work Related</option>
        <option>Exercise</option>
        <option>Social</option>
        <option>Shopping</option>
        <option>Errand</option>
        <option>Other</option>
        
        
        </optgroup>
	
    <optgroup label="Rider Type:">
        
        <option>Strong & Fearless</option>
        <option>Enthused & Confident</option>
        <option>Comfortable but Cautious</option>
        <option>No Way No How</option>
        
        
        </optgroup>
    
    <optgroup label="Gender:">
        
        <option>Female</option>
        <option>Male</option>
        
        
        </optgroup>


    <optgroup label="Age:">
        
        <option>18-24</option>
        <option>25-34</option>
        <option>35-44</option>
        <option>45-54</option>
        <option>55-64</option>
        <option>65+</option>
        
        
        </optgroup>
    
    <optgroup label="Ethnicity">
        
        <option>White</option>
        <option>African American</option>
        <option>Asian</option>
        <option>Native American</option>
        <option>Pacific Islander</option>
        <option>Multi-racial</option>
        <option>Hispanic</option>
        <option>Other</option>
        
        
        </optgroup>
    
    
</select> 


<div style=" clear: both; float: right; margin: -25px 0px 0px -40px;"><ul><li>							
								<input type="submit" value="Update" />
							</li>
						</ul></div>


</form>

</div>

        
        
        
        </div>
        
                

        
            <div id="map"></div>
            
          

        
           
          
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.2.1"></script>
 <script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>

        <script src="js/main.js"></script>
        <script src="/chosen/chosen.jquery.min.js" type="text/javascript"></script>

		
		
		<script>
		
		jQuery(document).ready(function(){
	jQuery(".chosen").chosen();
});
		
		
		 $(".chosen-select").chosen({width: "95%"}); 

		</script>
       
    </body>
</html>
