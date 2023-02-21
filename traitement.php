



<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
 die("La connexion a échoué: " . mysqli_connect_error());
}

$nom = $_POST["name"];
$email = $_POST["email"];

$message = $_POST["message"];

$sql = "INSERT INTO messages (nom, email, message)
VALUES ('$nom', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
 echo "Nouvel enregistrement créé avec succès";
} else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>










