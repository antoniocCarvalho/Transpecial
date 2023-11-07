<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjHfRUwUp2OQnB7ShqD_mpwsCY-pHGpD0&callback=initMap"></script>
</head>
<body onload="initMap()">

   <h1 class="text-center">Roteirização de viagem</h1> 
   <br><br>
   <div class="container">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Local de partida" id="source">
        <br>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Local de destino" id="dest"> <br>
            <button id="btnRota" onclick= "calcRoute()" class="btn btn-primary">Visualizar rota</button> <br> <br>
            <div id="map"></div> <br><br>
    </div> 
    
  
   </div>
</body>

<script>
    let map, directionsService, directionsRenderer
      
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'),{
            center:{lat:-23.5062,lng:-47.4559},
            zoom: 12
        })
        google.maps.event.addListener(map,"click",function(event){
            this.setOptions({scrollwheel: true})
        })

        directionsService = new google.maps.DirectionsService()
        directionsRenderer = new google.maps.DirectionsRenderer()
        directionsRenderer.setMap(map)

    }

    function calcRoute(){
        var source = document.getElementById('source').value
        var dest = document.getElementById('dest').value

        let request = {
            origin:source, 
            destination:dest,
            travelMode: 'DRIVING'
        }

        directionsService.route(request, function(result,status){ //usar if caso coloque um endereço nada a ver
                directionsRenderer.setDirections(result)
            }
        )
    }
 
</script>
</html>