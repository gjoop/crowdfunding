<?php

include("./include/head.php");
include("./include/functions.php");
?>


<body>
        
<?php 
    include("./include/header.php");
    
    if (isset($_SESSION['login'])) {
    if ($_SESSION['type']=='association') {
        echo'vous ne pouvez pas faire de don en tant qu\'association';
    }
    }
    else {
?>
    <form method="post" action="./donation.php">
        <input hidden="hidden" name="idUser" id="idUser" type="number" value=<?php echo $_SESSION['id'];?> />
        <input required="required" hidden="hidden" name="idProjet" id="idProjet" type="number" value=<?php echo $_GET['id'];?> />
        <input type="text" name="comment" id="comment" placeholder="Votre commentaire"/>
        <input type="text" name="montant" id="montant" placeholder="Votre montant"/>
        <input type="text" name="bankAccount" id="bankAccount" placeholder="Numéro de compte" value=<?php echo $info['bankAccount'];?> />
        <input type="submit" value="Valider">
    </form>
<?php
}
include("./include/footer.php");
echo '</body>';
?>