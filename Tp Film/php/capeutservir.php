    <!-- Icône de menu
    <div class="menu-icon">
    <span></span>
    <span></span>
    <span></span>
    </div> -->

    <!-- Menu -->
    <!-- <nav class="menu">
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Films</a></li>
        <li><a href="#">Acteurs</a></li>
        <li><a href="#">A propos</a></li>
    </ul>
    </nav> -->
    
    <?php
    
    // Afficher du contenu PHP ici...

    // Inclure du code JavaScript
    // echo '<script type="text/javascript">
    //           // Sélectionnez l\'icône de menu et le menu
    //           const menuIcon = document.querySelector(\'.menu-icon\');
    //           const menu = document.querySelector(\'.menu\');

    //           // Ajoutez un événement de clic à l\'icône de menu
    //           menuIcon.addEventListener(\'click\', function() {
    //             // Basculez la classe \'open\' sur l\'icône de menu et le menu
    //             menuIcon.classList.toggle(\'open\');
    //             menu.classList.toggle(\'open\');
    //           });
    //         </script>';

    // function closeMenu() {
    //     echo '<script>
    //     var menuIcon = document.querySelector(\'.menu-icon\');
    //     var menu = document.querySelector(\'.menu\');
    //     menuIcon.classList.remove(\'open\');
    //     menu.classList.remove(\'open\');
    //     </script>';
    // }
    // ?>

    <?php
    // echo '<script type="text/javascript">
    // // Sélectionnez l'icône de menu et le menu
    // const menuIcon = document.querySelector('.menu-icon');
    // const menu = document.querySelector('.menu');

    // // Ajoutez un événement de clic à l'icône de menu
    // menuIcon.addEventListener('click', function() {
    // // Basculez la classe 'open' sur l'icône de menu et le menu
    // menuIcon.classList.toggle('open');
    // menu.classList.toggle('open');
    // });

    // </script>'';

    if (isset ($_POST['submit'])){
        $cate = $_POST['categories'];
        $annee = $_POST['an'];
        $duree = 0;
        
        if (isset($_POST['drone'])) {
            switch ($_POST['drone']) {
                case '+90':
                    $duree = 90;
                    break;
                case '+120':
                    $duree = +120;
                    break;
                case '-120':
                    $duree = -120;
                    break;
                default:
                    $duree = 0;
            }
        }
    
        // Affiche les films
        $film = $newPDO -> prepare('SELECT titre,affiche FROM `film`  
        INNER JOIN categorie ON film.cat = categorie.idcat
        WHERE libelle = :categoriesParam AND ansortie >= :anneesortieParam 
        AND CASE 
        WHEN :dureeParam = "+90" THEN film.duree >= 90 
        WHEN :dureeParam = "-120"
        THEN film.duree <= 120 ELSE film.duree >= 120 END');
    
        $film->bindParam("categoriesParam",$cate);
        $film->bindParam("anneesortieParam",$annee);
        $film->bindParam("dureeParam", $duree, PDO::PARAM_INT);
        $film->execute();
        $films = $film->fetchAll();
    
        foreach ($films as $film) {
            echo '<h2>'.$film['titre'].'</h2>';
            echo '<img src="'.$film['affiche'].'" alt="'.$film['titre'].'" width="200"><br>';
    
        }
        if (($cate == "rien" || $cate == null) && ($annee == "rienan" || $annee == null) && empty($_POST['drone'])) {
            // Si tous les champs du formulaire sont vides, afficher tous les films
            $film = $newPDO -> prepare('SELECT titre,affiche FROM film');
            $film->execute();
            $films = $film->fetchAll();
    
            foreach ($films as $film) {
                echo '<h2>'.$film['titre'].'</h2>';
                echo '<img src="'.$film['affiche'].'" alt="'.$film['titre'].'" width="200"><br>';
            }
        
        }
    
        
        
    
        
        echo '<a href="http://localhost/php_roos/Tp%20film/film.php" target="_blank">Revenir a la page précédente </a>';
    }
    
    ?>
    













    