<?php
    include("./include/head.php");
    include("./include/functions.php");
    $i=1;
    $j=1
?>

    <body>
        
<?php include("./include/header.php");?>

        <section>
            <p>
                Bienvenue sur notre Plateforme de Crowdfunding (Financement participatif).<br/>
                Cette plateforme est dédiée aux associations à but non lucratif, pour leurs permettre de récolter des dons et promesses de dons.<br/>
                Ces dons ou promesses de dons seront soit directement attribués à l’association ou soit dédié à un projet en particulier.
            </p>
        </section>
        
        <section>
            <h2>Derniers projets</h2>
            <p>
                <?php
                    $last_project->execute(array());
                    while($last = $last_project->fetch() AND $i<5) {
                        echo '<a href="./project.php?id=' .$last['idProjet']. '">' .$last['nom']. '</a> <br/>';
                        echo $last['description'] .'<br/>';
                        echo '<a href="./donation_form.php?id=' .$last['idProjet']. '">Faire un don </a> <br/><br/>';
                        $i++;
                    }
                    $last_project->closeCursor();
                ?>
            </p>
            <a href="./project_list.php?sort=last">Afficher plus</a> <br/>
        </section>
        
        <section>
            <h2>Tous les projets</h2>
            <p>
                <?php
                    $abc_project->execute(array());
                    while($abc = $abc_project->fetch() AND $j<15) {
                        echo '<a href="./project.php?id=' .$abc['idProjet']. '">' .$abc['nom']. '</a> <br/>';
                        echo $abc['description'] .'<br/>';
                        echo '<a href="./donation_form.php?id=' .$abc['idProjet']. '">Faire un don </a> <br/><br/>';
                        $j++;
                    }
                    $abc_project->closeCursor();
                ?>
            </p>
            <a href="./project_list.php?sort=abc">Afficher plus</a> <br/>
        </section>

<?php include("./include/footer.php"); ?>
    
    </body>

</html>
