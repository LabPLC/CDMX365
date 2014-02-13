namespace BackTurCDMX;

class DB
{
	
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
	$strQueryCount = "SELECT COUNT(eventoid) from eventos";
	$strQueryEventos= "SELECT * from eventos order by ASC";

	$strQueryBlocks = "SELECT * FROM eventos limit 50";

	intCount=DB.QueryValue($strQueryCount);

	$arrFetch=DB.QueryRows($strQueryEventos);

	foreach ($arrFetch as $row)
	{
		$eventoid_int=row["eventoid"]; 
	  	$fecha_date=row["fecha"];
  		$fecha_fin_date=row["fecha_fin"];
  		$horario_varchar=row["horario"];
  		$evento_text=row["evento"];
  		$des_longblob=row["des"];
  		$des_en_longblob=row["des_en"];
  		$des_fr_longblob=row["des_fr"];
  		$des_po_longblob=row["des_po"];
  		$web_varchar=row["web_varchar"];
  		$email_varchar=row["email"];
  		$clas_int=row["clas"];
  		$subclas_varchar=row["subclas"];
  		$imagen_varchar=row["imagen"];
  		$id_pat_int=row["id_pat"];
  		$d0_varchar=row["d0"];
		$d1_varchar=row["d1"];
		$d2_varchar=row["d2"];
		$d3_varchar=row["d3"];
		$d4_varchar=row["d4"];
		$d5_varchar=row["d5"];
		$d6_varchar=row["d6"];
		$usuario_varchar=row["usuario"];
		$imagen01_mediumblob=row["imagen01"];
		$tipo_imagen01_varchar=row["tipo_imagen01"];
		$nombre_imagen01_varchar=row["nombre_imagen01"];
		$informacion_longblob=row["informacion"];
		$evento_congreso_char=row["evento_congreso"];
		$vobo_char=row["vobo"];
		$rank_int=row["rank"];
		$nivel_int=row["nivel"];
		$staturs_int=row["staturs"];
		$repeticion_int=row["repeticion"];
		$autorizo_varchar=row["autorizo"];
		$imagen-02_mediumblob=row["imagen-02"];
		$imagen-03_mediumblob=row["imagen-03"];,
		$estrellas_int=row["estrellas"];


		intRes=DBPost.QueryValue(" INSERT INTO eventos (eventoid, fecha, fecha_fin, horario, evento, des, des_en, des_fr, des_po, web, email, clas, subclas, imagen, id_pat, d0, d1, d2, d3, d4, d5, d6, usuario, imagen01, tipo_imagen01, nombre_imagen01, informacion, evento_congreso, vobo, rank, nivel, staturs, repeticion, autorizo, imagen-02, imagen-03, estrellas) VALUES (".$eventoid_int.", '".$fecha_date."', '".$fecha_fin_date."', '".$horario_varchar."', '".$evento_text."', '".$des_longblob."', '".$des_en_longblob."', '".$des_fr_longblob."', '".$des_po_longblob."', '".$web_varchar."', '".$email_varchar."', '".$clas_int."', '".$subclas_varchar."', '".$imagen_varchar."', '".$id_pat."', '".$d0_varchar."', '".$d1_varchar."', '".$d2_varchar."', '".$d3_varchar."', '".$d4_varchar."', '".$d5_varchar."', '".$d6_varchar."', '".$usuario_varchar."', '".$imagen01_mediumblob."', '".$tipo_imagen01_varchar."', '".$nombre_imagen01_varchar."', '".$informacion_longblob."', '".$evento_congreso_char."', '".$vobo_char."', ".$rank_int", ".$nivel_int.", ".$staturs_int.", ".$repeticion_int.", '".$autorizo_varchar."', '".$imagen-02_mediumblob."', '"imagen-03_mediumblob"', '".$estrellas_int."'')");

		if (intRes==true);
		{
			Log.Write("Insert satisfactorio");

		}
		{}


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

