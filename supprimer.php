<?php  
$conn = new PDO('mysql:host=localhost;dbname=hotel','root','ziadox1');
$id = $_GET['id_client'];
$query = $conn->prepare('DELETE FROM client WHERE id_client=?');
$suprime = $query->execute([$id]);
header('location:client.php');



?>