<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
	#be{
		margin-right:100px;
	}
</style>
</head>
<body>
	



<div class="container row"></div>
    <div class="col-7 mx-10 mx-auto">
    <table class="table">
                <tbody>
					<br>

	 <div class="container row"></div>
    <div class="col-8 mx-12 mx-auto">
    <table class="table" id="be">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tache</th>
                    <th scope="col" style="width:150px;">Début</th>
                    <th scope="col" style="width:120px;">Fin</th>
                    <th scope="col" colspan="4">Action</th>
                    </tr>
                </thead>
                <tbody>
					<?php
if(sizeof($this->details['tasks'])){
	echo '<h1 id="be">Liste des tâches : </h1>';
	$i=1;
	foreach($this->details['tasks'] as $task){
		echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td><td><a title="Diagramme de Gant" href="../ProjetController/gant/'.$task['Debut'].'/'.$task['Fin'].'"><i class="fa-solid fa-chart-gantt"></i></td></tr>';

	}   
	echo'</table>';
}

?>
</body>
</html>
