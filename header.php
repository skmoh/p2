<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        #inputs{
    height: 30px;
    width: 200px;
    margin-left: 2px;
}
#Select{
    width:190px ;
    height: 30px;
      font-size: 11px; /* Example font size */

    }
    #span_text{
        font-size: 12px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="zone1">
        <img src="image/logo_1.png">
    </div>

    <div class="nav">
        <div class="logo">
            <!-- <p><a href="home.php">Logo</a> </p> -->

        </div>
        <a href="Accueil.php"> <button class="btn">Accueil</button> </a>
        <a href="home.php"> <button class="btn">Affectation</button> </a>
        

        <div class="right-links">
<a href="php/logout.php">  <button class="Btn my-2">
<div class="sign_out"><svg viewBox="0 0 512 512"><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path></svg></div>
  
  <div class="text">Logout</div>
</button></a>
      

            <!-- <a href="php/logout.php"> <button class="btn">Log Out</button> </a> -->
     

        </div>
    </div>
    
    <div class='title_parc'>
                    <h2>Parc Informatique</h2>
</div>


    </div>
    
    
</body>
</html>