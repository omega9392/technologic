<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    <table>
        <th>
            <td>Nom</td>
            <td>Email</td>
            <td>Sujet</td>
            <td>Message</td>
        </th>
</table>
<table>
    
        <tr>
            <td><?php echo $_POST["name"]; ?></td>
            <td><?php echo $_POST["email"]; ?></td>
            <td><?php echo $_POST["subject"]; ?></td>
            <td><?php echo $_POST["message"];?></td>
        </tr>
    </table>

</body>
</html>







<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Créer la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
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
?>










