<!DOCTYPE html>
<html>
    <head>
        <title>Accès base de données</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <?php
    include 'header.php';
    ?>
    <body>
       <div class="P3">
        <h2>Renseignements</h2> 
        <?php
    
    $servername = 'localhost';
    $dbname= 'mabase';
    $username = 'root';
    $password = '';

    try{
        $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sth = $dbco->prepare("SELECT * FROM Renseignements ORDER BY User_name ASC ");
        $sth->execute(); 

        $NbreData = $sth->rowCount();
        $rowAll = $sth->fetchAll();
    }   
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    } 
    if ($NbreData != 0) 
{
?>
    <table class="result1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Téléphone</th>
            <th>Message</th>
        </tr>
    </thead>
<?php
}
    foreach($rowAll as $row) {
        ?>
    <tr class="result2">
        <td><?php echo $row['User_name']; ?></td>
        <td><?php echo $row['User_firstname']; ?></td>
        <td><?php echo $row['User_mail']; ?></td>
        <td><?php echo $row['User_phone']; ?></td>
        <td><?php echo $row['User_message']; ?></td>
    </tr>
    </div>
    <?php
}
    exit ();
    ?>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>