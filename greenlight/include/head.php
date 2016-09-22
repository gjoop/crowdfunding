<?php
session_start();
try {
    $db = new PDO('mysql:host=localhost;dbname=greenlight_db', 'admin', 'fQi99ReAzN2FvWDK', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $ex) {
    die('Erreur : ' . $ex->getMessage());
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>

<?php
    if (!empty($titre)) {
        echo '<title> Greenlight - '.$titre.' </title>';
    }
    else {
        echo '<title> Greenlight </title>';
    }
?>
        
        <meta name="keywords" content="projet, crowdfunding, calédonie, université" />
        <meta name="description" content="Greenlight" />
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./style.css" />
        <link rel="icon" type="image/png" href="./media/favicon.png" />
    </head>

