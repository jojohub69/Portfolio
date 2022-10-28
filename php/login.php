<?php
// Initialize the session
session_start();
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "test_portfolio";

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
<center> <!-- formulaire de connection -->
<div class="form_signup">
    <div class="formtitle">Se connecter</div> 
    <br><br>
    <form action="login.php" name="form" id="form" method="post">
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Nom d'utilisateur">
     </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <div><a href="authentification.php">Pas encore de compte ?</a></div>
</div>
</center>
<?php
     $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["username"]))  
    {          
            $stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
            $stmt->execute([$_POST["username"]]); 
            $passwd = $stmt->fetch();

            if ($passwd !=null){
                if (password_verify($_POST["password"], $passwd[0]))
                {    
                     $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username"); /* permet de chercher la colone"droits" determinant si un utilisateur est administrateur ou non */
                     $stmt->execute(['username' => $_POST["username"]]); 
                     $user = $stmt->fetch();
                     $droits = $user[4];
                     $_SESSION["username"] = $_POST["username"]; /* Crée les variables de sessions permettant donc de confirmer la connection et plus */
                     $_SESSION["droits"] = $droits;

                     header("location:articles.php");  
                }  
                else  
                {  
                     echo "Mauvais mot de passe ou nom d'utilisateur";
                }
            }
            else 
                {
                    echo "Nom d'utilisateur inconnu";
                }
        } 

?>
</body>