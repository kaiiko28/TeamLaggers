<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3>Transportation</h3>
    <form action="">
        <label for="From">From:</label><br>
        <input type="text" id="from" name="from" value="From"><br>
        <label for="To">Last name:</label><br>
        <input type="text" id="to" name="to" value="To"><br><br>
        <input type="submit" value="Go">
      </form>


      <div id="map"></div>
    <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: -25.344, lng: 131.036};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 4, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
        </script>
        <!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
        </script> -->
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap">
        </script>
  </body>
</html>