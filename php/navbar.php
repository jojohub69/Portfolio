


<div class="assemblagenavbar">
    <nav class="navperso navbar navbar-expand-lg navbar-light ">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="http://localhost:3000/php/index.php"">Accueil</a>
        <a class="nav-item nav-link active" href="http://localhost:3000/php/docu.php""> Documentation</a>
        <a class="nav-item nav-link active" href="http://localhost:3000/php/articles.php"">Articles</a>
<<<<<<< HEAD
<<<<<<< HEAD
=======
        <a class="nav-item nav-link active" href="http://localhost:3000/php/admin.php"">Admin</a>
        <a class="nav-item nav-link active" href="http://localhost:3000/php/login.php"">Login</a>

>>>>>>> 33485dd (Finition du système de login)
=======
>>>>>>> b0cc7db (Re mise en place de la navbar)
        </div>
    </div>
    </nav>
    <nav class="navperso1 navbar navbar-expand-lg navbar-light ">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <?php   
            if(isset($_SESSION["username"]))  
            {   
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2c131bd (Mise en place du font et embellissement général)
                if($_SESSION["droits"] == 1){
                    ?><a class="nav-item nav-link active" href="http://localhost:3000/php/admin.php"">Admin</a><?php //permet de voir la page admin uniquement si on l'es
                }
            }
            else {
                ?> <a class="nav-item nav-link active inexist" href="http://localhost:3000/php/admin.php"">admin</a> <?php //permet simplement un meilleur alignement de la navbar
            }?>
<<<<<<< HEAD
=======
                if($_SESSION["droits"] == 1){?>
            <a class="nav-item nav-link active" href="http://localhost:3000/php/admin.php"">Admin</a>
            <?php } }?>
>>>>>>> b0cc7db (Re mise en place de la navbar)
=======
>>>>>>> 2c131bd (Mise en place du font et embellissement général)
            <a class="nav-item nav-link active" href="http://localhost:3000/php/login.php"">Se connecter</a>
        </div>
        </div>
    </nav>
</div>