
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







    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div id="content" class="container">


<div class="row">
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?lat=19.482325&lng=-99.185752" alt="Azcapotzalco"></img>
  </div>
  <div  class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="GAM" ></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="MiguelHidalgo"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="Cuauhtemoc" ></img>
  </div>
</div>
     
<div class="row">
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="VenustianoCarranza"></img>
  </div>
  <div  class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="Cuajimalpa"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="AlvaroObregon"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="BenitoJuarez"></img>
  </div>
</div>

<div class="row">
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="Iztacalco"></img>
  </div>
  <div  class="col-md-3 col-sm-6 photoDeleg" >
    <img src="get-image.php?id=123&h=200&w=200" alt="MagdalenaContreras"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="Coyoacan"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="Iztapalapa"></img>
  </div>
</div>


<div class="row">
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="Tlalpan"></img>
  </div>
  <div  class="col-md-3 col-sm-6 photoDeleg" >
    <img src="get-image.php?id=123&h=200&w=200" alt="Xochimilco"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="Tlahuac"></img>
  </div>
  <div class="col-md-3 col-sm-6 photoDeleg">
    <img src="get-image.php?id=123&h=200&w=200" alt="MilpaAlta"></img>
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
