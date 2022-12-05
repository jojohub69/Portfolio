<?php
require_once('connection.php');
?>
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Contact</title>
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="..\JS\indexjs.js"></script>
</head>

<header>
  <?php
    require_once ('navbar.php');
  ?>
</header>
<body>
<?php


if(isset($_SESSION["username"]))  
 { 
    if($_SESSION["droits"] == 1)
    {
?>
<div class="containeradmin"> <!-- formulaire pour modifier le CV -->
    <div class="form_signup form-admin">
        <center><div class="formtitle">Modifier CV</div> </center>
        <br><br>
        <form action="admin.php" name="form" id="form" method="post">
        <div class="form-group">
            <label for="experiences">experiences</label>
            <input type="text" class="form-control" id="experiences" name="experiences"  placeholder="experiences" required>
        </div>
        <div class="form-group">
            <label for="presentation">presentation</label>
            <input type="text" class="form-control" id="presentation" name="presentation"  placeholder="presentation" required>
         </div>
         <div class="form-group">
            <label for="competences">competences + %</label>
            <input type="text" class="form-control" id="competences" name="competences"  placeholder="par exemple, php;25 css;35" required >
         </div>
         <div class="form-group">
            <label for="diplomes">diplomes</label>
            <input type="text" class="form-control" id="diplomes" name="diplomes"  placeholder="diplomes" required>
         </div>
         <br>
         <center><button type="submit" class="btn btn-primary">Modifier</button></center>
        </form>
    </div>
    <!-- formulaire pour créer un article -->

    <div class="form_signup form-article">
        <center><div class="formtitle">Ajouter article</div></center>
        <br><br>
        <form action="ajout_article.php" name="form" id="form" method="post">
        <div class="form-group">
            <input type="text" class="form-control" id="titre" name="titre"  placeholder="titre" required>
         </div>
         <div class="form-group">
            <textarea class="form-control text_article" id="contenu" name="contenu" placeholder="contenu de l'article" required></textarea>
         </div>
         <br>
         <center><button type="submit" class="btn btn-primary">Créer l'article</button></center>
        </form>
    </div>
</div>













<?php 
}
else { 
    ?>
    <center><h1>Vous n'êtes pas administrateur et ne pouvez pas accéder cette page</h1> </center>
    <?php
    }
}

else {
    ?>
    <center><h1>Veuillez vous connecter pour acceder a la page</h1> </center>
    <?php
}
    if (isset($_POST['experiences'])) {
        $experiences =  $_POST['experiences'];
        $presentation =  $_POST['presentation'];
        $competences =  $_POST['competences'];
        $diplomes =  $_POST['diplomes'];

        $sql = "UPDATE datacv SET experiences = ?, presentation = ?, competences = ?, diplomes = ? WHERE id = 1";
        $conn->prepare($sql)->execute([$experiences, $presentation, $competences, $diplomes]);
} ?>
</body>