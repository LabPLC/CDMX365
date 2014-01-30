<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>Recintos CDMX</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <style>
      #map_canvas {
        width: 500px;
        height: 400px;
      }
    </style>



    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

 <form id="frmRecintos" name="frmRecintos" method="GET" action="Recintos.php">



        <input type="hidden" id="location" name="location"/>

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
              <li><a href="index.htm">Home</a></li>
              <li class="active"><a href="Recintos.php">Recintos CDMX </a></li>
              <li><a href="stream.htm">Stream</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>



    <div class="container theme-showcase">
        <div class="page-header">
        <h1>Recintos</h1>
      </div>

    <div class="bs-example">
      
      <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Recintos <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">WTC</a></li>
          <li><a href="#">Palacio de los deportes</a></li>
          <li><a href="#">Foro Sol</a></li>
          <li class="divider"></li>
          <li><a href="#">Faro de oriente</a></li>
          <li><a href="#">Casa de cultura Lindavista</a></li>
          <li class="divider"></li>
          <li><a href="#">Plaza Quirino Mendoza</a></li>
          <li><a href="#">Explanada Delegacion Benito Juarez</a></li>
        </ul>
      </div>

    </div>

      <div class="page-header">
        <h1>Asi se ve la zona</h1>
      </div>

    <?php 
      require_once("4sq/src/FoursquareAPI.class.php");
      // Set your client key and secret
      $client_key = "";
      $client_secret = "";
      // Load the Foursquare API library

      if($client_key=="" or $client_secret=="")
      {
            echo 'Load client key and client secret from <a href="https://developer.foursquare.com/">foursquare</a>';
            exit;
      }

      $foursquare = new FoursquareAPI($client_key,$client_secret);
      $location = array_key_exists("location",$_GET) ? $_GET['location'] : "Ciudad de Mexico, Mexico";
    ?>


<?php 


  // Generate a latitude/longitude pair using Google Maps API
  list($lat,$lng) = $foursquare->GeoLocate($location);
  // Prepare parameters
  $params = array("ll"=>"$lat,$lng", "radius"=>"100", "intent"=>"browse");
  // Perform a request to a public resource
  //$response = $foursquare->GetPublic("venues/search",$params);
  $response = $foursquare->GetPublic("venues/search",$params);

  $venues = json_decode($response);
  

?>

<?php


$ch = curl_init();

$url="http://www.panoramio.com/map/get_panoramas.php?set=public&from=0&to=20&minx=".($lng-.005)."&miny=".($lat-.005)."&maxx=".($lng+.005)."&maxy=".($lat+.005)."&size=medium&mapfilter=true";
echo($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result=curl_exec($ch);
$fotos=json_decode($result);

curl_close($ch);

?>




    <?php foreach($fotos->photos as $foto): ?>
      <div class="foto">
        <?php 
          

            echo ('<image class="img-thumbnail" src="'.$foto->photo_file_url.'" alt="A generic"/>');
          
        ?>
      
      </div>
      
    <?php endforeach; ?>


      <?php echo "Conteo - ".count($venues->response->venues)." - "; foreach($venues->response->venues as $venue): ?>
      <div class="venue">
        <?php 
          

          if(isset($venue->categories['0']))
          {
            echo '<image class="icon" src="'.$venue->categories['0']->icon->prefix.'88.png"/>';
          }
          else
            echo '<image class="icon" src="https://foursquare.com/img/categories/building/default_88.png"/>';
          echo '<a href="https://foursquare.com/v/'.$venue->id.'" target="_blank"/><b>';
          echo $venue->name;
          echo "</b></a><br/>";
          
          
            
          if(isset($venue->categories['0']))
          {
            if(property_exists($venue->categories['0'],"name"))
            {
              echo ' <i> '.$venue->categories['0']->name.'</i><br/>';

                switch ($venue->categories['0']->name) {
                case 'Arte':
                    echo "i es igual a 0";
                    break;
                case 'Aquarium':
                    echo "i es igual a 1";
                    break;
                case 'Aquarium':
                    echo "i es igual a 2";
                    break;
              }

              $curr=0;
              foreach($venue->categories as $categoria):
                $curr=$curr+1;

                echo($curr." - ".$venue->name." --- ".$categoria->name."<br/>");

              endforeach;

            }
          }


          
          if(property_exists($venue->hereNow,"count"))
          {
              echo ''.$venue->hereNow->count ." people currently here <br/> ";
          }

                    echo '<b><i>History</i></b> :'.$venue->stats->usersCount." visitors , ".$venue->stats->checkinsCount." visits ";
          
        ?>
      
      </div>
      
    <?php endforeach; ?>

    <div class="page-header">
        <h1>Tu recorrido armado</h1>
      </div>

      <div>
        <br/>
        Puedes comer en: 
        <br/>
        Puedes visitar:
        <br/>
        Puedes aprender en:
        <br/>
        Puedes ver:
        <br/>
        Random:
        <br/>
        <br/>
      </div>      

       <div id="map_canvas"></div>

      </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>


<script src="js/jquery-1.10.2.min.js"></script>

<script src="js/jquery-1.10.2.js"></script>

<script src="js/bootstrap-dropdown.js"></script>

    <script type="text/javascript">

    $(document).ready(function () {
            $(document).on('click', '.dropdown-menu li a', function () {
                $('#location').val($(this).text());
                $('#frmRecintos').submit();
            });
        });

</script>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(19.4276077, -99.138208),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

  </form>
  </body>
</html>
