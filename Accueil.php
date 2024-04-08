<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="bootstrap.css">
 
</head>
<body>
    <div class="container">
         <?php include 'Header.php';?>
         <h2 class='m-2'>Accueil</h2>
         <hr class="border-bottom border-3 border-dark">
         <?php
echo 'Bonjour '.$_SESSION['username'];

?>
    </div>
       
        
</body>
</html>