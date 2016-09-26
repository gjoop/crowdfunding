<?php
include("./include/head.php"); 
include("./include/functions.php"); 

?>

<body>

<?php include("./include/header.php");

if ($_GET['type']=='user') {
    $user_info_id->execute(array($_GET['id']));
    $info = $user_info_id->fetch();
    $user_info_id->closeCursor();
?>
    <h2><?php echo $info['login'];?></h2>
    <section>
        Nom : <?php echo $info['nom'];?>
        Prénom : <?php echo $info['prenom'];?>
        E-mail : <?php echo $info['email'];?>
        Phone : <?php echo $info['phone'];?>
        Adresse : <?php echo $info['address'];?>
        Date de naissance : <?php echo $info['birth'];?>
    </section>
<?php
}
else {
    $association_info_id->execute(array($_GET['id']));
    $info = $association_info_id->fetch();
    $association_info_id->closeCursor();
?>
}
    <h2><?php echo $info['login'];?></h2>
    <section>
        Nom : <?php echo $info['nomAssociation'];?>
        E-mail : <?php echo $info['email'];?>
        Phone : <?php echo $info['phone'];?>
        Adresse : <?php echo $info['address'];?>
        Site Web : <?php echo $info['website'];?>
    </section>
    
<?php
}

if($_GET['type']==$_SESSION['type'] AND $_GET['id']==$_SESSION['id']) {
    echo'<a href="./update_form.php">Modifier profil</a> <br/>';
}