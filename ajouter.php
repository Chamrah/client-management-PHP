<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajouter.php" method="get">
      <label for="">ID </label>
       <input type="text" name="cin" id="" value=><br>
         <label for="">Cin : </label>
        <input type="text" name="cin" id=""><br>
        <label for="">Nom : </label>
        <input type="text" name="nom" id=""><br>
        <label for="">Prenom : </label>
        <input type="text" name="prenom" id=""><br>
        <label for="">Login : </label>
        <input type="text" name="login" id=""><br>
        <label for="">mot de passe :</label>
        <input type="password" name="pass" id=""><br>
        <label for="">age : </label>
        <input type="number" name="age" id=""><br>
        <input type="submit" value="Envoyer" name="btn1">
    </form>
<?php
   if(isset($_GET['btn1'])){
    $cin = $_GET['cin'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $login = $_GET['login'];
    $pass = $_GET['pass'];
    $age = $_GET['age'];
    
    $conn = new PDO('mysql:host=localhost;dbname=hotel','root','ziadox1');
    $requete = $conn->prepare('INSERT INTO client VALUES(Null,?,?,?,?,?,?)');
    $requete->execute([$cin,$nom,$prenom,$login,$pass,$age]);
    header('location:client.php');
}

     
     
     
     
?>
</body>
</html>