<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion des Employés</title>
</head>
<body>
    <div class="container">
<a href="ajouter.php" class="Btn_add"><img src="image/plus.png">Ajouter</a>

<table>
    <tr id="items">
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Ville d'origine</th>
        <th>Formation de base</th>
        <th> Modifier</th>
        <th>Supprimer</th>
    </tr>
    <?php
// inclure la page de connexion
include_once "connexion.php";
// requete pour afficher la liste des employées
$req= mysqli_query($con, "SELECT * FROM emploi");
if(mysqli_num_rows($req) == 0){
    // s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message:
    echo "Il n'y a pas encore d'employé ajouter !" ;
}else{
    // si non , affichons la liste de tous les employés
    while($row=mysqli_fetch_assoc($req)){

        ?>
 <tr>
<td><?=$row['nom']?> </td>
<td><?=$row['prénom']?> </td>
<td><?=$row['date de naissance']?> </td>
<td><?=$row["ville d'origine"]?> </td>
<td><?=$row['formation de base']?> </td>
<!-- Nous alons mettre l'id de chaque employé dans ce lien -->
<td> <a href="Modifier.php"> <img src="image/pen.png" alt=""></a></td>
<td> <a href="supprimer.php?id=<?=$row['id']?>"><img src="image/trash.png" alt=""></a></td>
</tr>

        <?php
    }
}
?>
    <tr>
<td>Kabore</td>
<td>Joseph</td>
<td> 31/12/1994</td>
<td>Koudougou</td>
<td>Lettre modernes</td>
<td> <a href="Modifier.php"> <img src="image/pen.png" alt=""></a></td>
<td> <a href="#"> <img src="image/trash.png" alt=""></a></td>
    </tr>
   
</table>
    </div>
</body>
</html>