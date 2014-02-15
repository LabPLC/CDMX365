
<!DOCTYPE html>
<html lang="en">
  <head>
  
  <br/>
  <br/>
  <br/>
  
  
  <!-- Grid CSS File (only needed for demo page) -->
  <link rel="stylesheet" href="calendar/css/paragridma.css">

  <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
  <link rel="stylesheet" href="calendar/css/eventCalendar.css">

  <!-- Theme CSS file: it makes eventCalendar nicer -->
  <link rel="stylesheet" href="calendar/css/eventCalendar_theme_responsive.css">
  

    <link rel="stylesheet" href="css/cal-heatmap.css">

    <meta charset="utf-8">
    <title>CDMX365</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
      body {
        font: 10px sans-serif;
        shape-rendering: crispEdges;
      }
    </style>
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">

        <!-- <link href="css/bootstrap-responsive.css" rel="stylesheet"> --> 

    <link href="css/stream.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">CDMX365</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Registrado como: <a href="#" class="navbar-link">Mario</a>
            </p>
            <ul class="nav">
              <li><a href="#">Home</a></li>
              <li><a href="Recintos.php">Recintos CDMX </a></li>
              <li class="active"><a href="stream.htm">Stream</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      

    
<div id="cal-heatmap"></div>

    <div id="eventCalendar"></div>

    </div><!--/.fluid-container-->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/main.js"></script>

    <script src="js/jquery-1.10.2.min.js"></script>

    
  <script src="calendar/js/jquery.eventCalendar.js"></script>
  <script src="calendar/js/jquery.eventCalendar.min.js"></script>
  <script src="calendar/js/jquery.timeago.js"></script>

    

    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="js/cal-heatmap.min.js"></script>
    <!--<script src="js/stream.js"></script>-->



<script type="text/javascript">



</script>




    <script type="text/javascript">
   $(document).ready(function() {

    $.ajax({
    url: 'heatEventos.humanDate.json.php'
}).done(function (data) {

    ///////////////////////////////////////////////////
    // Edit from here    

    
  var calendar = new CalHeatMap();

  calendar.init({
    
    data: data,
    start: new Date(2014, 0),
    domain : "year",
    subDomain : "day",
    range : 1,
    scale: [40, 60, 80, 100],
    itemName: ["evento", "eventos"],
    cellLabel: {
      empty: "No hay eventos para {date}",
      filled: "Llenado {count} {name} el {date}"
    },
    scaleLabel: {
      lower: "Belle journée, il y a eu moins de {min} {name}",
      inner: "Pas mal, entre {down} et {up} {name}",
      upper: "Peut faire mieux, plus de {max} {name}"
    },
    format: {
      date: function(date) {
        return moment(date).format("LL");
      },
      legend: null,
    }
  });

    // End edition    
    ///////////////////////////////////////////////////
});

    
    $("#eventCalendar").eventCalendar({
  eventsjson: 'eventosSec.humanDate.json.php',
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
