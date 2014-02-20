
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>¿Porque vienes?</title>

    <!-- Bootstrap core CSS 
    <link href="../css/bootstrap.css" rel="stylesheet" media="all" />-->

        <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/MVP.css" rel="stylesheet">

<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>


    <script src="js/funciones.js" type="text/javascript"></script>

  </head>

  <body>

    <div id="content" class="container text-center">




<div class="row">
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.482325", "-99.185752"); ?> alt="Azcapotzalco" class="photoDeleg" ></img>
  </div>
  <div  class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.487333", "-99.123613"); ?> alt="GAM" class="photoDeleg" ></img>
  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.430658", "-99.208395"); ?> alt="MiguelHidalgo" class="photoDeleg"></img>
  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.435674", "-99.145562"); ?> alt="Cuauhtemoc" class="photoDeleg"></img>
  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.435674", "-99.145562"); ?> alt="VenustianoCarranza" class="photoDeleg"></img>
  </div>
    <div  class="col-md-2  col-sm-3">
    <img <?php renderPhoto("19.363142", "-99.287952"); ?> alt="Cuajimalpa" class="photoDeleg"></img>
  </div>
</div>

<div class="row">
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.360938", "-99.228681"); ?> alt="AlvaroObregon" class="photoDeleg"></img>
  </div>
<div class="col-md-8 col-sm-6 ">
    
  <div>
   <form id="searchform">
      <div>
         ¿Donde estaras? <input type="text" size="30" value="" onkeyup="autocompleta(this.value);"/>
      </div>

     
      <div id="suggestions"></div>
   </form>
  </div>

  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.379406", "-99.159145"); ?> alt="BenitoJuarez" class="photoDeleg"></img>
  </div>
</div>


<div class="row">
  <div class="col-md-2 col-sm-6">
      <img <?php renderPhoto("19.395694", "-99.095921"); ?> alt="Iztacalco" class="photoDeleg"></img>
  </div>
<div class="col-md-8 col-sm-6" id="resContainer">
    
  <div>
         ¿Que fechas? <input type="text" size="30" value="" />


       </br>
<input type="button" >Autobus</input>&nbsp;

<input type="button" >Avion</input>

</br>

<input type="button">Siguiente</input>


      </div>

        

  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.314964", "-99.242589"); ?> alt="MagdalenaContreras" class="photoDeleg"></img>
  </div>
</div>


<div class="row">
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.343744", "-99.156188"); ?> alt="Coyoacan" class="photoDeleg"></img>
  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.342083", "-99.053216"); ?> alt="Iztapalapa" class="photoDeleg"></img>
  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.279091", "-99.211423"); ?> alt="Tlalpan" class="photoDeleg"></img>
  </div>
  <div  class="col-md-2 col-sm-6" >
    <img <?php renderPhoto("19.257231", "-99.102966"); ?> alt="Xochimilco" class="photoDeleg"></img>
  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.299023", "-99.043647"); ?> alt="Tlahuac" class="photoDeleg"></img>
  </div>
  <div class="col-md-2 col-sm-6">
    <img <?php renderPhoto("19.192389", "-99.023284"); ?> alt="MilpaAlta" class="photoDeleg"></img>
  </div>
</div>

</div>

  </body>
</html>

<?php 

function renderPhoto($lat, $lng)
{
  $ch = curl_init();

  $url="http://www.panoramio.com/map/get_panoramas.php?set=public&from=0&to=20&minx=".($lng-.01)."&miny=".($lat-.01)."&maxx=".($lng+.01)."&maxy=".($lat+.01)."&size=medium&mapfilter=true";
  //echo($url);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  //curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $result=curl_exec($ch);
  $JSON=json_decode($result);

  curl_close($ch);
  $URL= $JSON->photos[array_rand($JSON->photos)]->photo_file_url;

  echo('src="'.$URL.'"');

}
?>