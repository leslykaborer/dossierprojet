<?php
// connexion  à la base de données
$con = mysqli_connect("localhost","root", "", "tuto");
if(!$con){
echo "vous n'etes pas connectés à la base de données";
}
?>