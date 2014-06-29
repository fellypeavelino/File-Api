<?php
	$data1 = '20/02/2013';
	$data2 = '22/02/2013';
	
	$data1 = explode('/', $data1);
	$data2 = explode('/', $data2);
	
	$d1 = strtotime('$data1[2]-$data1[1]-$data1[0]');
	$d2 = strtotime('$data2[2]-$data2[1]-$data2[0]');
	
	$dataf = ($d2 - $d1)/86400;
	////////valor em dias
	if($dataf < 0){
		$dataf = $dataf * -1;
	}
	 echo $dataf."<br/>";
	 
	 //////////////https://www.youtube.com/watch?v=RihN4T-gUvE
	 
	date_default_timezone_get("America/Sao_Paulo");
	//dias/mes/anos horas:minutos:segundos
	function tempo_decorrido($dataIni, $dataFim){
		$set_dataHora = explode(' ',$dataIni);
		$set_data = explode('/', $set_dataHora[0]);
		$set_hora = explode(':', $set_dataHora[1]);
		$dtini = mktime($set_hora[0],$set_hora[1],$set_hora[2], $set_data[1],$set_data[0], $set_data[2]);
		
		$set_dataHora = explode(' ',$dataFim);
		$set_data = explode('/', $set_dataHora[0]);
		$set_hora = explode(':', $set_dataHora[1]);
		$dtfim = mktime($set_hora[0],$set_hora[1],$set_hora[2], $set_data[1],$set_data[0], $set_data[2]);
		
		$time = ($dtfim - $dtini);
		$day = floor($time/86400);
		$horas = floor(($time -($day * 86400))/3600);
		$minu= floor((($time -($day * 86400)) - ($horas*3600))/60);
	}
	
?>