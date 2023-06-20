<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//connexion a la base de donnee
include_once"connexion.php";
// on recpere le id dans le lien
$id =$_GET['id'];



//verifier que le bouton ajouter a bien été cliqué
if(isset($_POST['button'])){
   
    // extraction des informations envoyé dans des variablespar la methode POST
    extract($_POST);
   
    if(isset($nom) && isset($prenom) && isset($date_de_naissance)
     && isset($ville_dorigine) && isset($formation_de_base)){
     $row = mysqli_fetch_assoc($req); 
// requete de modification
 $req= mysqli_query($con , "UPDATE emploi SET nom = '$nom' , prenom = '$prenom'' , date_de_naissance = $date_de_naissane'
 ,ville_dorigine = '$ville_d'origine' , formation_de_base =' $formation_de_base' WHERE id = $id")
    if($req) {// si la requete a été éffectuée avec succes ,on fait une redirection
     header("location:index.php");

    }else{ // si non 
        $message = "emploi non modifié";

    }
     }else{
     // si non
     $message = "veuillez remplir tous les champs!";



     }
}  
?>

    <div class="form">
        <a href="index.php" class="baq_Bnt"><img src="image/back.png">Retour</a>
        <h2>Ajouter un employé: value="<?$row['nom']?>"></h2>
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

?>
    <div class="form">
        <a href="index.php" class="baq_Bnt"><img src="back.png">Retour</a>
        <h2>modifier l'employé</h2>
        <p class="erreur_messa ge">
        <?php
        if(isset($message)){
            echo $message;
        }
        
        
        ?>
        </p>
        <form action=""method="POST">
            <label>Nom</label>
            <input type="text"name= "nom" value="<?$row['nom']?>">
            <label>Prénom</label>
            <input type="text"name= "prénom"value="<?$row['prénom']?>">>
            <label>  Date de naissance</label>
            <input type="text"number="age"value="<?$row['age']?>">>
            <label>Ville d'origine</label>
            <input type="text"name= "nom"value="<?$row['nom']?>">>
            <label>Formation de base</label>
            <input type="text"name= "nom"value="<?$row['nom']?>">>
            <input type="submit" value= "Modifier" name="button">
        </form>
    </div>
</body>
</html>