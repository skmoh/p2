<?php
// Inclure le fichier de connexion à la base de données
include('Conex/conex.php');

// Vérifier si l'identifiant de l'article est passé dans l'URL
if (isset($_GET['id'])) {
    // Récupérer l'identifiant de l'article depuis l'URL
    $id_article = $_GET['id'];

    // Préparer et exécuter la requête SQL pour récupérer les données de l'article
    $article = $pdo->prepare('SELECT * FROM articles WHERE Numero_dinventaire = :id');
    $article->bindParam(':id', $id_article);
    $article->execute();
    $data_article = $article->fetch(PDO::FETCH_ASSOC);

    // Vérifier si des données ont été trouvées pour l'identifiant spécifié
    if ($data_article) {
        // Afficher un formulaire pré-rempli avec les données de l'article
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modifier l'article</title>
            <link rel="stylesheet" href=" style/style.css">
            <link rel="stylesheet" href="bootstrap.css">
        </head>
        <body> 
         <div class="container" >
        <?php include 'Header.php';?>
        <div class="section-Affectation my-4" >
        <h2 class='m-2'>Etat du matériel</h2>
        <hr class="border-bottom border-3 border-dark">
        <span class="test">Etat actuel du matériel</span>
        <hr class="border-bottom border-3 border-dark">
        <div class="container-fluid">
             <form action="" method="">
            <div class="row">
            <div class="col-5 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Etat :</span>
            <p>ppp</p>
            </div>
            <div class="col-2"></div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Date de debut :</span>
            <p>ppp</p>
            </div>
            <div class="container-fluid">
             <form action="" method="">
            <div class="row" >
            <div class="col-5 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Entité :</span>
            <p>ppp</p>
            </div>
            <div class="col-2"></div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Personne :</span>
            <p>ppp</p>
            </div>
            <div class="container-fluid">
             <form action="" method="">
            <div class="row">
            <div class="col-5 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Batiment :</span>
            <p>ppp</p>
            </div>
            <div class="col-2"></div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Etage :</span>
            </div>
            <div class="container-fluid">
             <form action="" method="">
            <div class="row">
            <div class="col-5 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Commentaire :</span>
            </div>
    
       
    </div>
    <div class="section-Affectation my-4" >
        <span class="test">Changement d'état du matériel</span>
        <hr class="border-bottom border-3 border-dark">
        <div class="container-fluid">
             <form action="modifier_article.php" method="POST">
            <div class="row">
            <div class="col-5 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Etat :</span>
            </div>
            <div class="col-2"></div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Date de debut :</span>
            </div>
            <div class="container-fluid">
             <form action="" method="">
            <div class="row" >
            <div class="col-5 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Entité :</span>
            </div>
            <div class="col-2"></div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Personne :</span>
            </div>
                         <!-- row 4-->
                         <div class="row mt-3 d-flex">
            
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Batiment :</span>

            <select class="form-select" id="Select" aria-label="Default select example">
  <option  selected >Choisir une Batiment...</option>
 
  
  </select>
            </div>
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Etage:</span>

            <select class="form-select" id="Select" aria-label="Default select example">
  <option disabled  selected >Choisir une Batiment...</option>
  </select>
           
            </div>
           <div class="col-4 d-flex">
            <span for="" class='form-label mt-2' id='span_text'>Bureau:</span>
            </div>
            <div class="container-fluid">
            <div class="row">
            <div class="col-5 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Commentaire :</span>
            </div>
            <a href=""> 
                <button class="btn btn-primary">Enregistrer</button>
            </a>
            <!-- z3 -->
              <span class="test">Fiche de signification du matériel</span>
        <hr class="border-bottom border-3 border-dark">
                    <!-- z3 e1 -->
        <span>Descreption du matériel</span>
        <hr class="border-bottom border-3 border-dark">
            <div class="row mt-3 d-flex">
            
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Désignation :</span>
                            <p>ppp</p>
            </div>
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Marque:</span>
                            <p>ppp</p>
           
            </div>
             <div class="col-4 d-flex">
            <span for="" class='form-label mt-2' id='span_text'>Modéle :</span>
            </div>
            <div class="row mt-3 d-flex">
            
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>N d'inventaire :</span>
                            <p>ppp</p>
            </div>
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>N de série:</span>
                            <p>ppp</p>
            
            </div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-2' id='span_text'>Date de fin de garantie :</span>
            </div>
            <!-- z3 e2 -->
            <span>Carctéristique du matériel</span>
        <hr class="border-bottom border-3 border-dark">
        <div class="Affiché"><center>
        <p >Aucun résultat a affiché</p></center>
</div>
<span>Information sur l'aquisition</span>
        <hr class="border-bottom border-3 border-dark">
        <div class="row mt-3 d-flex">
            
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Type d'acquisition  :</span>
                            <p>ppp</p>
            </div>
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Code:</span>
                            <p>ppp</p>
            
            </div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-2' id='span_text'>Date :</span>
            </div>
            <span>Information sur la livraison</span>
        <hr class="border-bottom border-3 border-dark">
        <div class="row mt-3 d-flex">
            
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Date de livraison  :</span>
                            <p>ppp</p>
            </div>
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>N bon de livraison:</span>
                            <p>ppp</p>
            
            </div>
            <span>Information sur la société</span>
        <hr class="border-bottom border-3 border-dark">
        <div class="row mt-3 d-flex">
            
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Société  :</span>
                            <p>ppp</p>
            </div>
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Télephone  :</span>
                            <p>ppp</p>
            
            </div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-2' id='span_text'>Fax :</span>
            </div>
            
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-2' id='span_text'>Email :</span>
            </div>
            
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-2' id='span_text'>Adresse :</span>
            </div>
            <span class="test">Histoire des états du matériel</span>
        <hr class="border-bottom border-3 border-dark">
        <div>Vrsion 0.1</div>
    </div>
    </div>
        </body>
        </html>
        <?php
    } else {
        echo "Aucun article trouvé avec cet identifiant.";
    }
} else {
    echo "Identifiant d'article non spécifié.";
}
?>
