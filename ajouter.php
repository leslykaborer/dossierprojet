<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//verifier que le bouton ajouter a bien été cliqué
if(isset($_POST['button'])){
   
    // extraction des informations envoyé dans des variables par la methode POST
    extract($_POST);
   
    if(isset($nom) && isset($prenom) && isset($date_de_naissance)
     && isset($ville_dorigine) && isset($formation_de_base)){
        echo 'bien';
    
       include_once "connexion.php";
    //requet d'ajout
    $req= mysqli_query($con , "INSERT INTO emploi(nom, prénom, date_de_naissance, ville_d'origine, formation_de_base)
    VALUES('$nom','$prénom','$date de_naissance', '$ville_d'origine', '$formation_de_base')");
    if($req) {// si la requete a été éffectuée avec succes ,on fait une redirection
     header("location:index.php");

    }else{ // si non 
        $message = "emploi non ajouté";

    }
     }else{
     // si non
     $message = "veuillez remplir tous les champs!";



     }
}  
?>

    <div class="form">
        <a href="index.php" class="baq_Bnt"><img src="image/back.png">Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_messa ge">
        <?php
// si la variable message existe , affichons son contenu
if(isset($message)){
    echo $message;
}
          ?>
        </p>
        <form action=""method="POST">
            <label>Nom</label>
            <input type="text"name= nom>
            <label>Prénom</label>
            <input type="text"name= prénom>
            <label>  Date de naissance</label>
            <input type="date"number= age>
            <label>Ville d'origine</label>
            <input type="text"name= nom>
            <label>Formation de base</label>
            <input type="text"name= nom>
            <input type="submit" value= "Ajouter" name="button">
        </form>
    </div>
</body>
</html>