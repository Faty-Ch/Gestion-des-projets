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
		#p {
			border-radius: 4px;
			border: none;
			background: rgb(243,31,146);
			background: linear-gradient(90deg, rgba(243,31,146,1) 0%, rgba(177,47,166,1) 28%, rgba(0,255,222,1) 100%);
			cursor: pointer;


		}

		#p:hover {
			cursor: pointer;
			background: rgb(43, 0, 47);
			background: linear-gradient(90deg, rgba(43, 0, 47, 1) 0%, rgba(98, 8, 128, 1) 22%, rgba(255, 86, 237, 1) 100%);
			/* #df2498*/
		}
	#container{
		background: linear-gradient(90deg, rgb(243, 31, 146) 0%, rgb(177, 47, 166) 28%, rgb(33, 71, 66) 100%);
	}	

		/*		table .thead-dark .tr .th {
			color: #fff;
			background-color: #0817f9a3;
			border-color: #0817f9a3;
		}*/
	</style>
</head>

<body>


	<h1 class="text-center  my-4 py-3">Liste des Projets </h1>
	<div class="container row"></div>
	<div class="col-12 mx-12 mx-auto">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th style="color: #fff;
background-color: #f9005dd9;
border-color: #920ddc59;" scope="col">ID</th>
					<th style="color: #fff;
background-color: #f9005dd9;
border-color: #920ddc59;" scope="col">Titre</th>
					<th style="color: #fff;
background-color: #f9005dd9;
border-color: #920ddc59;" scope="col" style="width:150px;">Date Début</th>
					<th style="color: #fff;
background-color: #f9005dd9;
border-color: #920ddc59;" scope="col" style="width:120px;">Date Fin</th>
					<th style="color: #fff;
background-color: #f9005dd9;
border-color: #920ddc59;" scope="col" style="width:200px;">Description</th>
					<th style="color: #fff;
background-color: #f9005dd9;
border-color: #920ddc59;padding-left :48px;" scope="col" colspan="4" style="padding-left :48px;">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach ($this->projets as $projet) {
					echo '<tr><td>' . $i++ . '</td><td>' . $projet['Titre'] . '</td><td>' . $projet['DateDebut'] . '</td><td>' . $projet['DateFin'] . '</td><td>' . $projet['Description'] . '</td></td>
	  <td><a  title="Planifier Le projet" style="color: #1AD038;" href="../TaskController/add/' . $projet['Id'] . '"><i class="fa-solid fa-file-circle-plus"></i> add task</td>
	  <td><a title="Supprimer Projet" style="color: #ff0000;" href="../projetController/delete/' . $projet['Id'] . '"><i class="fa-solid fa-trash"></i>   delete</td> 
	  <td><a  title="Details du Projet"  style="color: #C60FBB;"href="../ProjetController/details/' . $projet['Id'] . '"><i class="fa-solid fa-circle-info"></i>   Details</td>
	  </tr>';
				}
				echo '</table>';
				?>
				<br>
				<a style="color: #000000;" href="../projetController/add" title="Ajouter un Nouveau Projet"><button type="button" id="p" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Ajouter Nouveau Projet</button></a>

</body>

</html>