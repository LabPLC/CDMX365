
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>¿A donde vienes?</title>

    <!-- Bootstrap core CSS 
    <link href="../css/bootstrap.css" rel="stylesheet" media="all" />-->

        <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/MVP.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div id="content" class="container text-center">




<div class="row">
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.482325", "-99.185752"); ?> alt="Azcapotzalco" class="img-thumbnail" ></img>
  </div>
  <div  class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.487333", "-99.123613"); ?> alt="GAM" class="img-thumbnail" ></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.430658", "-99.208395"); ?> alt="MiguelHidalgo" class="img-thumbnail"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.435674", "-99.145562"); ?> alt="Cuauhtemoc" class="img-thumbnail"></img>
  </div>
</div>
     
<div class="row">
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.435674", "-99.145562"); ?> alt="VenustianoCarranza" class="img-thumbnail"></img>
  </div>
  <div  class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.363142", "-99.287952"); ?> alt="Cuajimalpa" class="img-thumbnail"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.360938", "-99.228681"); ?> alt="AlvaroObregon" class="img-thumbnail"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.379406", "-99.159145"); ?> alt="BenitoJuarez" class="img-thumbnail"></img>
  </div>
</div>

<div class="row">
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.395694", "-99.095921"); ?> alt="Iztacalco" class="img-thumbnail"></img>
  </div>
  <div  class="col-md-3 col-sm-6 photoDeleg" >
    <img <?php renderPhoto("19.314964", "-99.242589"); ?> alt="MagdalenaContreras" class="img-thumbnail"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.343744", "-99.156188"); ?> alt="Coyoacan" class="img-thumbnail"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.342083", "-99.053216"); ?> alt="Iztapalapa" class="img-thumbnail"></img>
  </div>
</div>


<div class="row">
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.279091", "-99.211423"); ?> alt="Tlalpan" class="img-thumbnail"></img>
  </div>
  <div  class="col-md-3 col-sm-6 photoDeleg" >
    <img <?php renderPhoto("19.257231", "-99.102966"); ?> alt="Xochimilco" class="img-thumbnail"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.299023", "-99.043647"); ?> alt="Tlahuac" class="img-thumbnail"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img <?php renderPhoto("19.192389", "-99.023284"); ?> alt="MilpaAlta" class="img-thumbnail"></img>
  </div>
</div>

</div>

<script src="js/jquery-1.10.2.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/funciones.js"></script>

  <script type="text/javascript">

 var images = ['OUT01ari.jpg', 'OUT02adobe.jpg', 'OUT03alife.jpg', 'OUT04chinup.jpg', 'OUT05datenightwinecologne.jpg', 'OUT06officechair.jpg', 'OUT07printer.jpg', 'OUT08whitewall.jpg', 'OUT09umbrella.jpg', 'OUT10converse.jpg', 'OUT11wardrobebar.jpg'];


 $('#background').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});

</script>

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