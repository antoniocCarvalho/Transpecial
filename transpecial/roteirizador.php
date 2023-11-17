<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roteirizador</title>
    <link rel="stylesheet" href="css/default.css">
  <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com">
  <script src="js/default.js"></script>
  <link rel="icon" type="image/png" href="images/icon.png" />
  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjHfRUwUp2OQnB7ShqD_mpwsCY-pHGpD0&libraries=places"></script>
</head>
<style>
    #btnRota{
        background-color: green;
        border-color: black;
     
    }

    #btnRota:hover{
        background-color: white;
        color: green;
    }

    #map{
    height: 700px;
    width: 100%;
    border-radius: 30px;
}

    h2{
        font-size: 20px;
        color: red;
    }

  

   
</style>

<body onload="initMap()">
<header>
    <div class="menu">
      <a href="index.php">
        <img src="images/logodes.png" alt="Logo Transpecial">
      </a>
    </div>
  </header>
     
   <h2 class="text-center">ATENÇÃO: É obrigatório preencher os 2 campos!</h2><br>
   <div class="container">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Local de partida" id="source">
        <br>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Local de destino" id="dest"> <br>
            <button id="btnRota" onclick="calcRoute()" class="btn btn-primary">Visualizar rota</button> <br> <br>
            <div id="map"></div> <br><br>
    </div> 
    
   </div>
   
</body>


<script>
    let map, directionsService,directionsRenderer
    
    async function initMap(){
        const { Map } = await google.maps.importLibrary("maps");

        map = new google.maps.Map(document.getElementById('map'),{
            center:{lat:-23.5062,lng:-47.4559},
            zoom: 14
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

        if(source == ""){
            alert("Por favor, insira o nome da rua ou o CEP do local de partida para gerar a rota!")
        }
        else if(dest == ""){
            alert("Por favor, insira o nome da rua ou o CEP do local de embarque para gerar a rota!")
        }

        let request = {
            origin:source, 
            destination:dest,
            travelMode: 'DRIVING'
        }

        directionsService.route(request, function(result,status){
            if(status=="OK"){
                directionsRenderer.setDirections(result)
            }
            else if(status=="NOT_FOUND"){
                alert("Falha ao traçar a rota!" + "\n" + "Digite os endereços novamente.")
            }
        })
    }
 
</script>


</html>