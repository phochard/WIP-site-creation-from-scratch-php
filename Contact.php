<!DOCTYPE html>
<html>
    <?php
    include 'header.php';
    ?>
<body> 
<?php
    include 'menu.php';
    ?>
    <h4>Veuillez compléter le formulaire ci-dessous : </h4>
    <form class="default-form" id="myForm" action="insert_into.php" method="POST">
        <div>
            <label for="name">Nom :</label>
            <input type="tex" name="User_name" required maxlenght=30>
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" name="User_firstname" required maxlenght=30>
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" name="User_mail" required maxlenght=30>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" name="User_phone" required maxlenght=30>
        </div>
        <label for="select">Objet de la demande:</label>
        <select class="default-select" name="status-select">
            <optgroup label="Options">
            <option value="default" selected hidden>--Choisissez une option--</option>
            <option value="club">Rendez-Vous</option><!--option 1-->
            <option value="user">Renseignement</option><!--option 2-->
            <option value="user">Avis</option><!--option 3-->
        </optgroup>
        </select>
        <div id="register-club-form" class="select-cible"><!-- A afficher si option 1 sélectionnée -->
            <label for="calendrier">Sélectionnez une date : </label> 
            <div id="planning" widht=100%></div>
            <?php
            include 'PHPpourHTMLplanning.php';
            ?>
            <!--<script type="text/javascript">
                calendrier();
            </script>-->
        </div>
        <div id="register-user-form" class="select-cible"><!-- A afficher si option 2 ou 3 sélectionnée -->
            <label for="msg">Message :</label>
            <textarea id="msg" name="User_message" maxlength="250"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form></br>
    <div  class="bdd">
    <input type="button" value="Consulter la BDD" onClick="window.location.href='select_from.php'">
    </div>
</body>
<?php
    include 'footer.php';
    ?>
</html>