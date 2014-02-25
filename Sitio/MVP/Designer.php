
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.css' rel='stylesheet' />

        <!-- Grid CSS File (only needed for demo page) -->
    <link rel="stylesheet" href="css/paragridma.css">

    <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
    <link rel="stylesheet" href="css/eventCalendar.css">

    <!-- Theme CSS file: it makes eventCalendar nicer -->
    <link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.eventCalendar.js"></script>
    <script src="js/jquery.eventCalendar.min.js"></script>
    <script src="js/jquery.timeago.js"></script>
    <title>Arma tu itinirerio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/MVP.css" rel="stylesheet">

    </head>
    
  <body>
        <div class="container-fluid">
            <div class="row-fluid">
            </div>
          <div class="row-fluid">
            <div id="instrucciones" class="col-md-4">
                <span>
                    Instrucciones

                    <div id="Comida" class="card">                            
                        <div id="titComida" class="titulo">
                            COMIDA
                        </div>
                        <div id="lugaresComida" class="lugares">
                            
                        </div>
                    </div>

                    <div id="Comida" class="card"></div>

                    <div id="Museos" class="card"></div>
                </span>          
            </div>
            <div class="col-md-4">
                <div id="map" class="mapItinerario">
                </div>
            </div>    
            <div id="calEvents" class="col-md-4">
                <div id="eventCalendar" class="eventCalendar-wrap" data-current-month="1" data-current-year="2014">
                </div>
            </div>            
          </div>
        </div>

        <div class="row-fluid">

        </div>

        <script>
            var map = L.mapbox.map('map', 'mariojim.hb1imkob')
            .setView([19.363142, -99.287952], 9);
        </script>


      <script type="text/javascript"> 

      $(document).ready(function() { 
                      $("#eventCalendar").eventCalendar({
                  eventsjson: 'AppCode/eventosSec.humanDate.json.php',
                  jsonDateFormat: 'human', 
                  openEventInNewWindow: true,
                  monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
                  dayNames: [ 'Domingo','Lunes','Martes','Miércoles',
                    'Jueves','Viernes','Sabado' ],
                  dayNamesShort: [ 'Dom','Lun','Mar','Mie', 'Jue','Vie','Sab' ],
                  txt_noEvents: "No hay eventos para este periodo",
                  txt_SpecificEvents_prev: "",
                  txt_SpecificEvents_after: "eventos:",
                  txt_next: "siguiente",
                  txt_prev: "anterior",
                  txt_NextEvents: "Próximos eventos:",
                  txt_GoToEventUrl: "Ir al evento", 
                  moveSpeed: 1000,
                  moveOpacity: 1
                    });
                  });
                      
                      
                 </script>


  </body>
</html>
