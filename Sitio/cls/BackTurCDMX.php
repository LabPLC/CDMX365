namespace BackTurCDMX;

class DB
{
	function __construct() {
        echo 'hi!';
    }

	usr
	
	function QueryValue()
	{}

	function QueryRows()
	{}
}

class Log()
{
	function Write()
	{

	}
	

}

class MigraInicial
{

	function testInsert(){

	$objConnMy=$GLOBALS["connMy"];

	
	$objConnPost=$GLOBALS["connPost"];

	$strQueryEventos= "SELECT eventoid, fecha, fecha_fin, horario, evento,'test' as  des, des_en, des_fr, des_po, web, email, clas, subclas, imagen, id_pat, d0, d1, d2, d3, d4, d5, d6, usuario, imagen01, tipo_imagen01, nombre_imagen01, informacion, evento_congreso, vobo, rank, nivel, staturs, repeticion, autorizo, imagen-02, imagen-03, estrellas  from eventos order by eventoid ASC limit 2000";
	
	$gsent = $objConnMy->prepare($strQueryEventos);
	echo($gsent->execute());

	/* Obtener todas las filas restantes del conjunto de resultados */

	$resultado = $gsent->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($resultado);

	$arrFetch=$resultado;


  	foreach ($arrFetch as $row)
	{
		$eventoid_int=$row["eventoid"]; 
	  	$fecha_date=$row["fecha"];
  		$fecha_fin_date=$row["fecha_fin"];
  		$horario_varchar=$row["horario"];
  		$evento_text=$row["evento"];
  		$des_longblob=$row["des"];
  		$des_en_longblob=$row["des_en"];
  		$des_fr_longblob=$row["des_fr"];
  		$des_po_longblob=$row["des_po"];
  		$web_varchar=$row["web"];
  		$email_varchar=$row["email"];
  		$clas_int=$row["clas"];
  		$subclas_varchar=$row["subclas"];
  		$imagen_varchar=$row["imagen"];
  		$id_pat_int=$row["id_pat"];
  		$d0_varchar=$row["d0"];
		$d1_varchar=$row["d1"];
		$d2_varchar=$row["d2"];
		$d3_varchar=$row["d3"];
		$d4_varchar=$row["d4"];
		$d5_varchar=$row["d5"];
		$d6_varchar=$row["d6"];
		$usuario_varchar=$row["usuario"];
		$imagen01_mediumblob=$row["imagen01"];
		$tipo_imagen01_varchar=$row["tipo_imagen01"];
		$nombre_imagen01_varchar=$row["nombre_imagen01"];
		$informacion_longblob=$row["informacion"];
		$evento_congreso_char=$row["evento_congreso"];
		$vobo_char=$row["vobo"];
		$rank_int=$row["rank"];
		$nivel_int=$row["nivel"];
		$staturs_int=$row["staturs"];
		$repeticion_int=$row["repeticion"];
		$autorizo_varchar=$row["autorizo"];
		$imagen_02_mediumblob=$row["imagen-02"];
		$imagen_03_mediumblob=$row["imagen-03"];
		$estrellas_int=$row["estrellas"];

	
		$objStateInsert=$objConnPost->prepare('INSERT INTO sectur.eventos (eventoid, fecha, fecha_fin, horario, evento, des, des_en, des_fr, des_po, web, email, clas, subclas, imagen, id_pat, d0, d1, d2, d3, d4, d5, d6, usuario, imagen01, tipo_imagen01, nombre_imagen01, informacion, evento_congreso, vobo, rank, nivel, staturs, repeticion, autorizo, imagen_02, imagen_03, estrellas) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

		$objStateInsert->bindParam(1, $eventoid_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(2, $fecha_date, PDO::PARAM_STR);
		$objStateInsert->bindParam(3, $fecha_fin_date, PDO::PARAM_STR);
		$objStateInsert->bindParam(4, $horario_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(5, $evento_text, PDO::PARAM_STR);
		$objStateInsert->bindParam(6, $des_longblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(7, $des_en_longblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(8, $des_fr_longblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(9, $des_po_longblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(10, $web_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(11, $email_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(12, $clas_int, PDO::PARAM_STR);
		$objStateInsert->bindParam(13, $subclas_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(14, $imagen_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(15, $id_pat_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(16, $d0_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(17, $d1_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(18, $d2_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(19, $d3_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(20, $d4_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(21, $d5_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(22, $d6_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(23, $usuario_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(24, $imagen01_mediumblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(25, $tipo_imagen01_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(26, $nombre_imagen01_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(27, $informacion_longblob, PDO::PARAM_STR);
		$objStateInsert->bindParam(28, $evento_congreso_char, PDO::PARAM_STR);
		$objStateInsert->bindParam(29, $vobo_char, PDO::PARAM_STR);
		$objStateInsert->bindParam(30, $rank_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(31, $nivel_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(32, $staturs_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(33, $repeticion_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(34, $autorizo_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(35, $imagen_02_mediumblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(36, $imagen_03_mediumblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(37, $estrellas_int, PDO::PARAM_INT);

	

		
		if ($objStateInsert->execute()) {
		    echo("PASO ".$eventoid_int."<BR/>");
		} else {
    		// Query failed.
    			$errorcode = $objStateInsert->errorInfo();

			print_r($errorcode);
echo("<BR/>");
		}

	}
	

	
}

	$objDB = new DB("usr", "pwd", "host");

	$strQueryCount = "SELECT COUNT(eventoid) from eventos";
	$strQueryEventos= "SELECT * from eventos order by ASC limit 50";

	$strQueryBlocks = "SELECT * FROM eventos limit 50";

	intCount=DB.QueryValue($strQueryCount);

	$arrFetch=DB.QueryRows($strQueryEventos);

	foreach ($arrFetch as $row)
	{
		$eventoid_int=$row["eventoid"]; 
	  	$fecha_date=$row["fecha"];
  		$fecha_fin_date=$row["fecha_fin"];
  		$horario_varchar=$row["horario"];
  		$evento_text=$row["evento"];
  		$des_longblob=$row["des"];
  		$des_en_longblob=$row["des_en"];
  		$des_fr_longblob=$row["des_fr"];
  		$des_po_longblob=$row["des_po"];
  		$web_varchar=$row["web_varchar"];
  		$email_varchar=$row["email"];
  		$clas_int=$row["clas"];
  		$subclas_varchar=$row["subclas"];
  		$imagen_varchar=$row["imagen"];
  		$id_pat_int=$row["id_pat"];
  		$d0_varchar=$row["d0"];
		$d1_varchar=$row["d1"];
		$d2_varchar=$row["d2"];
		$d3_varchar=$row["d3"];
		$d4_varchar=$row["d4"];
		$d5_varchar=$row["d5"];
		$d6_varchar=$row["d6"];
		$usuario_varchar=$row["usuario"];
		$imagen01_mediumblob=$row["imagen01"];
		$tipo_imagen01_varchar=$row["tipo_imagen01"];
		$nombre_imagen01_varchar=$row["nombre_imagen01"];
		$informacion_longblob=$row["informacion"];
		$evento_congreso_char=$row["evento_congreso"];
		$vobo_char=$row["vobo"];
		$rank_int=$row["rank"];
		$nivel_int=$row["nivel"];
		$staturs_int=$row["staturs"];
		$repeticion_int=$row["repeticion"];
		$autorizo_varchar=$row["autorizo"];
		$imagen_02_mediumblob=$row["imagen-02"];
		$imagen_03_mediumblob=$row["imagen-03"];,
		$estrellas_int=$row["estrellas"];

		$sStateInsert="INSERT INTO eventos (eventoid, fecha, fecha_fin, horario, evento, des, des_en, des_fr, des_po, web, email, clas, subclas, imagen, id_pat, d0, d1, d2, d3, d4, d5, d6, usuario, imagen01, tipo_imagen01, nombre_imagen01, informacion, evento_congreso, vobo, rank, nivel, staturs, repeticion, autorizo, imagen-02, imagen-03, estrellas) VALUES ()";

		$objStateInsert=$objConnPost->prepare('INSERT INTO eventos (eventoid, fecha, fecha_fin, horario, evento, des, des_en, des_fr, des_po, web, email, clas, subclas, imagen, id_pat, d0, d1, d2, d3, d4, d5, d6, usuario, imagen01, tipo_imagen01, nombre_imagen01, informacion, evento_congreso, vobo, rank, nivel, staturs, repeticion, autorizo, imagen-02, imagen-03, estrellas) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

		$objStateInsert->bindParam(1, $eventoid_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(2, $fecha_date, PDO::PARAM_STR);
		$objStateInsert->bindParam(3, $fecha_fin_date, PDO::PARAM_STR);
		$objStateInsert->bindParam(4, $horario_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(5, $evento_text, PDO::PARAM_STR);
		$objStateInsert->bindParam(6, $des_longblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(7, $des_en_longblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(8, $des_fr_longblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(9, $des_po_longblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(10, $web_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(11, $email_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(12, $clas_int, PDO::PARAM_STR);
		$objStateInsert->bindParam(13, $subclas_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(14, $imagen_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(15, $id_pat_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(16, $d0_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(17, $d1_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(18, $d2_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(19, $d3_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(20, $d4_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(21, $d5_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(22, $d6_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(23, $usuario_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(24, $imagen01_mediumblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(25, $tipo_imagen01_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(26, $nombre_imagen01_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(27, $informacion_longblob, PDO::PARAM_STR);
		$objStateInsert->bindParam(28, $evento_congreso_char, PDO::PARAM_STR);
		$objStateInsert->bindParam(29, $vobo_char, PDO::PARAM_STR);
		$objStateInsert->bindParam(30, $rank_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(31, $nivel_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(32, $staturs_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(33, $repeticion_int, PDO::PARAM_INT);
		$objStateInsert->bindParam(34, $autorizo_varchar, PDO::PARAM_STR);
		$objStateInsert->bindParam(35, $imagen_02_mediumblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(36, $imagen_03_mediumblob, PDO::PARAM_LOB);
		$objStateInsert->bindParam(37, $estrellas_int, PDO::PARAM_INT);

		$objStateInsert->execute();







		intRes=DBPost.QueryValue(" INSERT INTO eventos (eventoid, fecha, fecha_fin, horario, evento, des, des_en, des_fr, des_po, web, email, clas, subclas, imagen, id_pat, d0, d1, d2, d3, d4, d5, d6, usuario, imagen01, tipo_imagen01, nombre_imagen01, informacion, evento_congreso, vobo, rank, nivel, staturs, repeticion, autorizo, imagen-02, imagen-03, estrellas) VALUES (".$eventoid_int.", '".$fecha_date."', '".$fecha_fin_date."', '".$horario_varchar."', '".$evento_text."', '".$des_longblob."', '".$des_en_longblob."', '".$des_fr_longblob."', '".$des_po_longblob."', '".$web_varchar."', '".$email_varchar."', '".$clas_int."', '".$subclas_varchar."', '".$imagen_varchar."', '".$id_pat."', '".$d0_varchar."', '".$d1_varchar."', '".$d2_varchar."', '".$d3_varchar."', '".$d4_varchar."', '".$d5_varchar."', '".$d6_varchar."', '".$usuario_varchar."', '".$imagen01_mediumblob."', '".$tipo_imagen01_varchar."', '".$nombre_imagen01_varchar."', '".$informacion_longblob."', '".$evento_congreso_char."', '".$vobo_char."', ".$rank_int", ".$nivel_int.", ".$staturs_int.", ".$repeticion_int.", '".$autorizo_varchar."', '".$imagen-02_mediumblob."', '"imagen-03_mediumblob"', '".$estrellas_int."'')");


	}

	for ($i = 1; $i <= 10; $i++) {
    	$strQueryBlocks = ;
	}

	for ()

	intCount/10 = 2341

	intCount = 10

	GeoDF.sectur.eventos;


}

class Sync
{



	$usrOrigen;	
	$pwdOrigen;
	$hostOrigen;
	$schemaOrigen;

	$usrDestino;	
	$pwdDestino;
	$hostDestino;
	$schemaDestino;

	$connOrigen;
	$connDestino;

	arrTablas


	function syncDB()
	{}

	function toLog()
	{}

}

Class Evento()
{
	asas
}

