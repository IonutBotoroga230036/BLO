<?php
session_start();

	include("connection.php");
	include("functions.php");



if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$eritrocite = $_POST['eritrocite'];
		$leucocite = $_POST['leucocite'];
		$trombocite = $_POST['trombocite'];
		$hemoglobina = $_POST['hemoglobina'];
		$hematrocite = $_POST['hematrocite'];
		$glicemie = $_POST['glicemie'];
		$trigliceride = $_POST['trigliceride'];
		$creatinina = $_POST['creatinina'];
		$acid_uric = $_POST['acid_uric'];
		$uree = $_POST['uree'];
		$tgo = $_POST['tgo'];
		$tgp = $_POST['tgp'];
		$bilirubina_totala = $_POST['bilirubina_totala'];
		$bilirubina_indirecta = $_POST['bilirubina_indirecta'];
		$amilaza_serica = $_POST['amilaza_serica'];
		$calciu_total = $_POST['calciu_total'];
		$colesterol_hdl = $_POST['colesterol_hdl'];
		$colesterol_ldl = $_POST['colesterol_ldl'];
		$fribinogen = $_POST['fribinogen'];
		$fier = $_POST['fier'];
		$fosfataza_alcalina = $_POST['fosfataza_alcalina'];
		$lipide_totale = $_POST['lipide_totale'];
		$proteine_totale = $_POST['proteine_totale'];
		$magneziu = $_POST['magneziu'];
		$data_analize = $_POST['data_analize'];
		

			//save to database
			$query = "insert into users (eritrocite,leucocite,trombocite,hemoglobina,hematrocite,glicemie,trigliceride,creatinina,acid_uric,uree,tgo,tgp,bilirubina_totala,bilirubina_indirecta,amilaza_serica,calciu_total,colesterol_hdl,colesterol_ldl,fribinogen,fier,fosfataza_alcalina,lipide_totale,proteine_totale,magneziu,data_analize) values ('$eritrocite','$leucocite','$trombocite','$hemoglobina','$hematrocite','$glicemie','$trigliceride','$creatinina','$acid_uric','$uree','$tgo','$tgp','$bilirubina_totala','$bilirubina_indirecta','$amilaza_serica','$calciu_total','$colesterol_hdl','$fribinogen','$fier','$fosfataza_alcalina','$lipide_totale','$proteine_totale','$magneziu','$data_analize')";
			mysqli_query($con, $query);
			header("Location: Analize.php");
			die;
		
	}

?>