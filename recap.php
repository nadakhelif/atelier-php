<?php
if(!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['nb']) || !isset($_POST['adresse']) || !isset($_POST['type'])) {
    header('location:resa.html');
    return;
}

$id=uniqid();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$nb = $_POST['nb'];
$adresse  = $_POST['adresse'];
$type = $_POST['type'];
$cin=$_POST["cin"];
function ingredient_exist($ing) {
    return isset($_POST[$ing]);
}
$allIngredients = array("harissa", "salade", "mayo");
$j=0;
for ($i=0;$i<3;$i++){
if (ingredient_exist($allIngredients[$i]))
{
    $ingredients[$j]=$allIngredients[$i];
    $j++;
}
}
function ingredient_a_ajoute($ingredients){
if(count($ingredients)>0){
    return(implode(', ', $ingredients));
}
else{
    return("sans rien");
}
}
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap Commande</title>
    <style>
        * {
            text-align: start;
        }
        th, td {
            padding-right: 20px;
        }
    </style>
</head>
<body>
    <div>Nom: <?= $nom ?></div>
    <div>Prenom: <?= $prenom ?></div>
    <div>Adresse: <?= $adresse ?></div>
    <table>
    <tr>
			<th >ID de la commande</th>
			<td style="text-align:center"><?=$id?></td>
		</tr>
        <tr>
			<th >Nom</th>
			<td style="text-align:center"><?=$nom?></td>
		</tr>
		<tr>
        <th >Prenom</th>
			<td style="text-align:center"><?=$prenom?></td>
		</tr>
		<tr>
        <tr>
			<th >CIN</th>
			<td style="text-align:center"><?=$cin?></td>
		</tr>
        <th >Nb de sandwichs</th>
			<td style="text-align:center"><?=$nb?></td>
		</tr>
		<tr>
        <th >Type</th>
			<td style="text-align:center"><?=$type?></td>
		</tr>
        <tr>
        <tr>
            <th colspan="1">Nom</th>
            <th colspan="1">Quantitée</th>
            <th colspan="1">Prix</th>
        </tr>
        <tr>
            <td colspan="1">Sandwich <?= $type ?> (<?= ingredient_a_ajoute($ingredients) ?>) </td>
            <td colspan="1"><?= $nb?></td>
            <td colspan="1">4 DT</td>
        </tr>
        <tr>
            <th colspan="2">
                <?= $nb < 10 ? "Total:" : "Total avant réduction:" ?>
            </th>
            <td colspan="1">
                <?= ($nb*4)." DT" ?>
            </td>
        </tr>
        <?php 
            if($nb >= 10):
        ?>
                <th colspan="2">Total après réduction:</th>
                <td colspan="1"><?= ($nb*4*0.9)." DT"?></td>
        <?php        
            endif
        ?>
    </table>
    
</body>
</html>