
<?php 
include("offcanvas-navbar-74SD/admin-haut.php");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";


$mysqli = new Mysqli($servername, $username, $password, $dbname);
$result = $mysqli->query("SELECT * FROM messages");
echo '<table border="5"> <tr>';
// while($colonne = $result ->fetch_field())
// {
echo '<th> nom </th>';
echo '<th> email </th>';
echo '<th> message </th>';
// }
echo "</tr>";
while ($ligne = $result->fetch_assoc())
{
echo '<tr>';
foreach ($ligne as $indice  => $information)
{
    if($indice == 'nom'){
        echo '<td>' . $information . '</td>';
    }
    if($indice == 'email'){
        echo '<td>' . $information . '</td>';
    }
    if($indice == 'message'){
        echo '<td>' . $information . '</td>';
    }
    

}
echo '</tr>';
}
echo '</table>';


?>
<?php include("offcanvas-navbar-74SD/admin-bas.php");?>




    