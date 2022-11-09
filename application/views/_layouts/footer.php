    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcwMIzkhCDaVIweTdMJGqy_Zl98fDwMDQ&callback=initMap"
    
  type="text/javascript"></script>
    <script>
    function initMap() {
    var mapProp= {
      center:new google.maps.LatLng(<?php echo $datas['latitude']; ?>,<?php echo $datas['longitude']; ?>),
      zoom:16,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    new google.maps.StreetViewPanorama(
      document.getElementById('street-view'),
      {
        position: {lat: <?php echo $datas['latitude']; ?>, lng: <?php echo $datas['longitude']; ?> },
        pov: {heading: 0, pitch: 0},
        zoom: 1
      });
    }
    </script>
    <script>
    $.material.init()
    </script>
  </body>
</html>