<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
 $conn = new PDO('mysql:host=localhost;dbname=hotel','root','ziadox1');
 $id = $_GET['id_client'];

 
 $requete = $conn ->prepare('SELECT * FROM client where id_client =?');
 $supp = $requete->execute([$id]);
 $data = $requete ->fetchAll(PDO::FETCH_ASSOC);
 
 
  foreach($data as $element){
    ?>
<form action="modifier.php" method="get">
    <label for="">ID :</label>
    <input type="text" name="id1" id="" value="<?php  echo $element['id_client']; ?>"><br>
    <label for="">Cin : </label>
    <input type="text" name="cin" id="" value="<?php  echo $element['cin']; ?>"><br>
    <label for="">Nom : </label>
    <input type="text" name="nom" id="" value="<?php  echo $element['nom']; ?>"><br>
    <label for="">Prenom : </label>
    <input type="text" name="prenom" id="" value="<?php  echo $element['prenom']; ?>"><br>
    <label for="">Login : </label> 
    <input type="text" name="login" id="" value="<?php  echo $element['login']; ?>"><br>
    <label for="">mot de passe :</label>
    <input type="password" name="pass" id="" value="<?php  echo $element['motPasse']; ?>"><br>
    <label for="">age : </label>
    <input type="number" name="age" id="" value= "<?php echo $element['age']; ?>"><br>
    <input type="submit" value="Envoyer" name="btn1" >

</form>
<?php 
}
?>
<?php 
 
   if(isset($_GET['btn1'])){
    $cin = $_GET['cin'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $login = $_GET['login'];
    $pass = $_GET['pass'];
    $age = $_GET['age'];
    $id2 =  $_GET['id1'];
 
    
    $conn = new PDO('mysql:host=localhost;dbname=hotel','root','ziadox1');
    
    $requete = $conn->prepare("UPDATE client SET cin = ? ,nom = ?
     , prenom = ? , login = ? , motPasse = ? ,  age =? WHERE id_client=?");
    $requete->execute([$cin,$nom,$prenom,$login,$pass,$age,$id2]);
    header('location:client.php');

}

     
     
     
     
?>
</body>
</html>