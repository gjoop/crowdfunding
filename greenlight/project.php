<?php
    include("./include/head.php");
    include("./include/functions.php");
?>

<body>
        
<?php 
    include("./include/header.php");
    $info_project->execute(array($_GET['id']));
    $info = $info_project->fetch();
    $info_project->closeCursor();
    $sum_don->execute(array($_GET['id']));
    $sum = $sum_don->fetch();
    $sum_don->closeCursor();
?>


        <section>
            <h2><?php echo $info['nom'];?></h2>
            
            <h3>Montant récolté</h3>
            <p>
                <?php echo $sum['somme'];?>
            </p>
            <a href="./donation_form.php?id=<?php echo $_GET['id'];?>">Faire un don</a>
            <h3>Description</h3>
            <p>
                <?php echo $info['description'];?>
            </p>
        </section>
        <?php 
        if(isset($_SESSION['login'])) {
            if($_SESSION['type']=='association' AND $_SESSION['id']==$_GET['id']) {
                echo '<a href=edit_project_form.php?id=' .$_GET['id'].'">Editer projet</a>';
                
        ?>
        <section>
            <form method="post" action="./news.php">
                <input required="required" hidden="hidden" name="idProjet" id="idProjet" type="number" value=<?php echo $_GET['id'];?> />
                <input name="text" id="text" type="text" />
                <input type="submit" value="Valider">
            </form>
        </section>
        <?php
            }
        }
        ?>
        <section>
            <?php 
                $project_news->execute(array($_GET['id']));
                while($news = $project_news->fetch()) {
            ?>
            <h3><?php echo $news['time'];?></h3>
            <p>
                <?php echo $news['text'];?>
            </p>
            <?php
                }
                $project_news->closeCursor();
            ?>
        </section>
    
        <section>
            <?php 
                $project_don->execute(array($_GET['id']));
                while($don = $project_don->fetch()) {
            ?>
            <h3><?php echo $don['time'];?></h3>
            <p>
                <?php echo $don['montant'];?> <br/>
                <?php echo $don['comment'];?>
            </p>
            <?php
                }
                $project_don->closeCursor();
            ?>
        </section>
    
        <?php include("./include/footer.php");?>

</body>
