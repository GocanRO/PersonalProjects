<?php
if($page['idp'] == 1){ ?>
    <div id="googleMap" style="width:35%;height:400px;left:20.3%;"></div>

    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(46.7556194,23.5381915),
                zoom:17,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA88FsF132AKKRySvkuln-AvXH_CQI74Lc&callback=myMap"></script>
<?php
}
?>
