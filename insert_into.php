<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
    
    $servername = 'localhost';
    $dbname= 'mabase';
    $username = 'root';
    $password = '';

    $User_name = $_POST['User_name'];
    $User_firstname = $_POST['User_firstname'];
    $User_mail = $_POST['User_mail'];
    $User_phone = $_POST['User_phone'];
    $User_message = $_POST['User_message'];

    try{
        $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO Renseignements VALUES('$User_name','$User_firstname','$User_mail','$User_phone','$User_message')";
        $dbco->exec($sql); 
        echo "Entrée ajoutée dans la table";
    }
      
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    } 
       ?>
    </body>
</html>