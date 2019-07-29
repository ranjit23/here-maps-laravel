<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <title>Search for a Location based on an Address</title>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="../template.css" />
    <script type="text/javascript" src='../test-credentials.js'></script>    
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/geo.css') }}" />

  </head>
  <body id="geocode">
    <div class="page-header">
        <h1>Search for a Location based on an Address</h1>
        <p>Request a location using a free-form text input and display it on the map.</p>
    </div>
    <p>This example makes a geocoding request and retrieves the latitude, longitude and 
      complete address details of <b>200 S Mathilda Ave, Sunnyvale, CA</b> based on a free-form 
      text input. A clickable marker is placed on the location found.</p>
    <div id="map"></div>
    <div id="panel"></div>
    <h3>Code</h3>
    <p>Access to the geocoding service is obtained from the <code>H.service.Platform</code>
       by calling <code>getGeocodingService()</code>. The <code>geocode()</code> method is used 
       to find a location by passing in the relevant <code>searchtext</code> parameter as defined in 
       <a href="http://developer.here.com/rest-apis/documentation/geocoder/topics/resource-search.html" target="_blank">Geocoder API</a>. 
       The styling and display of the response is under the control of the developer.</p>
    <script type="text/javascript" src="{{ URL::asset('js/geo.js') }}"></script>
  </body>
</html>
