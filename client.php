<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="client.css">
</head>
<body>
    
</body>
</html>
<?php  
   $conn = new PDO('mysql:host=localhost;dbname=hotel','root','ziadox1');
   $requete = $conn ->query('SELECT * FROM client');
   $data = $requete ->fetchAll(PDO::FETCH_NUM);
?>
  <table  border=\"1\" >
   <thead>
   <tr>
       <th>ID</th>
       <th>Cin</th>
       <th>Nom</th>
       <th>Prenom</th>
       <th>Login</th>
       <th>Mot de passe</th>
       <th>Age</th>
       <th>Operations</th>
   </tr>
</thead>
<a href="ajouter.php">Ajouter</a>
   
   <?php
            foreach ($data as $row){
        ?>
            <tr style="border-bottom: 1px solid">
                <?php
                    foreach ($row as $element){
                        if($element == $row[6]){
                            if($element <= 18){
                ?>
                                <td><p align="center" style="background-color:green;border-radius:30px;width:60px;color:white;"><?php echo $element ?> ans</p></td>
                <?php
                            }
                            if($element >18 && $element < 30){
                ?>
                                <td><p align="center" style="background-color:yellow;border-radius:30px;width:60px;color:white;"><?php echo $element ?> ans</p></td>
                <?php
                            }
                            if($element >= 30 ){

                                ?>
                                <td><p align="center" style="background-color:red;border-radius:30px;width:60px;color:white;"><?php echo $element ?> ans</p></td>
                <?php
                            }
                        }else{ 
                ?>
                            <td><?php echo $element ?></td>
                <?php
                        }
                    }
                ?>
                <td><a  href="modifier.php?id_client=<?php echo $row[0]?>" style="background-color:blue;text-decoration:none;padding:2px;border-radius:3px;margin-right:3px;color:white;">Modifier</a>
                   <a href="supprimer.php?id_client=<?php echo $row[0]?>" style="background-color:red;text-decoration:none;padding:2px;border-radius:3px;margin-right:3px;color:white;">Supprimer</a></td>

            </tr>
            
        <?php
            }
        

   
?>
