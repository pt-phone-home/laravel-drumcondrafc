@extends('frontmaster')

@section('title')

@endsection

@section('content')
<section class="findus-header">
        <h1>Our Locations</h1>
        <i class="far fa-compass"></i>

    </section>
    <section class="locations">


        <div class="locations-intro">
            <h2>Drumcondra A.F.C Pitch Locations</h2>
            <p>The club uses 4 locations around Drumcondra. You will see these indicated on the map below. Click each of the markers on the map for more information and to get directions to the relevant pitch.
            </p>
            <p>The Senior teams and U18s also use pitches in the Phoenix Park at the ”15 Acres”.
            </p>
        </div>

        <div class="locations-map" id="map">

        </div>



    </section>

    <script>
            function initMap() {

              var clonturk = {
                  info: '<strong>Clonturk Park</strong><br>\
                          157 Richmond Rd, Drumcondra, Dublin<br>\
                              <a href="https://goo.gl/maps/n2oFmVgT92E2" target="_blank">Get Directions</a>',
                  lat: 53.367940,
                  long: -6.251151
              };

              var dominican = {
                  info: '<strong>Dominican College</strong><br>\
                              204 Griffith Ave, Drumcondra, Dublin 9<br>\
                              <a href="https://goo.gl/maps/qYf1cZCVtks" target="_blank">Get Directions</a>',
                  lat: 53.374430,
                  long: -6.249513
              };

            //   var griffith = {
            //       info: '<strong>Griffith Park</strong><br>\r\
            //               27 St Michael\'s Rd, Drumcondra, Dublin 9<br>\
            //                   <a href="https://goo.gl/maps/XzYG8ejjJDU2" target="_blank">Get Directions</a>',
            //       lat: 53.370231,
            //       long: -6.262120
            //   };
            //   var griffith = {
            //       info: '<strong>St. Patrick\'s College</strong><br>\r\
            //               Drumcondra Road Upper, Drumcondra, Dublin 9<br>\
            //                   <a href="https://goo.gl/maps/8DX1xnQWfhqyfNCJ7" target="_blank">Get Directions</a>',
            //       lat: 53.370821,
            //       long: -6.254604
            //   };


              var stClares = {
                  info: '<strong>DCU / St. Clares</strong><br>\r\
                          \
                              <a href="https://goo.gl/maps/LhQi4S3rkKdG6ooSA" target="_blank">Get Directions</a>',
                  lat: 53.381228,
                  long: -6.273147,
              }
              var albert = {
                  info: '<strong>Albert College Park</strong><br>\r\
                          Whitehall Dublin 9<br>\
                              <a href="https://goo.gl/maps/6NxhvE2GxVM2" target="_blank">Get Directions</a>',
                  lat: 53.382877,
                  long: -6.264600
              };



              var locations = [
                [clonturk.info, clonturk.lat, clonturk.long, 0],
                [dominican.info, dominican.lat, dominican.long, 1],
                [stClares.info, stClares.lat, stClares.long, 2],
                [albert.info, albert.lat, albert.long, 2],
              ];

              var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 14,
                  center: new google.maps.LatLng(53.377517, -6.258740),
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              });

              var infowindow = new google.maps.InfoWindow({});

              var marker, i;

              for (i = 0; i < locations.length; i++) {
                  marker = new google.maps.Marker({
                      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                      map: map
                  });

                  google.maps.event.addListener(marker, 'click', (function (marker, i) {
                      return function () {
                          infowindow.setContent(locations[i][0]);
                          infowindow.open(map, marker);
                      }
                  })(marker, i));
              }
          }
            </script>


            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtbJayjrxT9C_mqWSebyR4DxEIi7cRl3g&callback=initMap"
              async defer></script>
@endsection
