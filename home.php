<?php
include('Conex/conex.php');
$aq=$pdo->prepare('select  type_dacquesition from acquesition');
$aq->execute();
$data_aq=$aq->fetchAll();
  // if (isset($_POST['select'])) {
  //   // Output the selected value
  //   echo $_POST['select'];
  // } else {
  //   // Handle if no value is selected
  //   echo 'Aucune valeur sélectionnée.';
  // }
 

  // --lot
  
  ?>
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
    <div class="container" id='home_page'>
        <?php include 'Header.php';?>
    <div class="section-Affectation my-4">
        <h2 class='m-2'>Etat d'Affectation</h2>
        <hr class="border-bottom border-3 border-dark">
        <div class="container-fluid">
             <form action="" method="POST">
                <!-- row 1-->
            <div class="row">
            <div class="col-5 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Numéro d’inventaire:</span>
            <input type="text" class="form-control " id='inputs'>
            </div>
            <div class="col-2"></div>
            <div class="col-4 d-flex">
            <span for="" class='form-label mt-1' id='span_text'>Numéro de Serie:</span>
            <input type="text" class="form-control" id='inputs'>
            </div>
            
            
         </div> 
                <!-- row 2-->
                <div class="row mt-3 d-flex">
           
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Type d'acquisition:</span>

            <select class="form-select" id="Select" aria-label="Default select example" name="select">
  <option disabled  selected >Choisir un type d'acquisition...</option>
  <?php

foreach ($data_aq as $r){
  echo ' <option value='.$r['type_dacquesition'].'>'.$r['type_dacquesition'].'</option>' ;
}

?>
 
 
</select>
            </div>
            <!-- 2 -->
       
            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Numéro d'acquisition:</span>

                            <select class="form-select" id="Select" aria-label="Default select example">
  <option disabled selected>Choisir une acquisition...</option>
  <?php
   $aq2=$pdo->prepare('select Numero_dacquesition from articles');
   $aq2->execute();
   $data_aq2=$aq2->fetchAll();
    foreach ($data_aq2 as $r) {
      echo '<option value="' . $r['Numero_dacquesition'] . '">' . $r['Numero_dacquesition'] . '</option>';
    }
  ?>
</select>
            </div>
                        <!-- 3 -->

            <div class="col-4 d-flex">
                            <span for="" class='form-label mt-2' id='span_text'>Lot:</span>

                            <select class="form-select" id="Select" aria-label="Default select example">
  <option disabled selected>Choisir un Lot...</option>
  <?php
  $lot=$pdo->prepare('select lot from articles');
  $lot->execute();
  $data_lot=$lot->fetchAll();
    foreach ($data_lot as $r) {
      echo '<option value="' . $r['lot'] . '">' . $r['lot'] . '</option>';
    }
  ?>
</select>
            </div>
            </div>
                            <!-- row 3-->
                            <div class="row mt-3 d-flex">
           
           <div class="col-4 d-flex">
                           <span for="" class='form-label mt-2' id='span_text'>Article:</span>

           <select class="form-select" id="Select" aria-label="Default select example">
 <option  disabled selected >Choisir un Article...</option>
 <?php
  $Article=$pdo->prepare('select Article from articles');
  $Article->execute();
  $data_Article=$Article->fetchAll();
    foreach ($data_Article as $r) {
      echo '<option value="' . $r['Article'] . '">' . $r['Article'] . '</option>';
    }
  ?>
 
</select>
           </div>
 
        
           </div>
            
            <!-- row 4-->
            <div class="row mt-3 d-flex">
           
           <div class="col-4 d-flex">
                           <span for="" class='form-label mt-2' id='span_text'>Designation:</span>

           <select class="form-select" id="Select" aria-label="Default select example">
 <option  selected >Choisir une designation...</option>
 <?php
  $Designantion=$pdo->prepare('select Designantion from articles');
  $Designantion->execute();
  $data_des=$Designantion->fetchAll();
    foreach ($data_des as $r) {
      echo '<option value="' . $r['Designantion'] . '">' . $r['Designantion'] . '</option>';
    }
  ?>
 
</select>
           </div>
           <!-- 2 -->
      
           <div class="col-4 d-flex">
                           <span for="" class='form-label mt-2' id='span_text'>Marque:</span>

           <select class="form-select" id="Select" aria-label="Default select example">
 <option disabled  selected >Choisir une marque...</option>
 <?php
  $Marque=$pdo->prepare('select Marque from articles');
  $Marque->execute();
  $data_Marque=$Marque->fetchAll();
    foreach ($data_Marque as $r) {
      echo '<option value="' . $r['Marque'] . '">' . $r['Marque'] . '</option>';
    }
  ?>

</select>
           </div>
                       <!-- 3 -->

           <div class="col-4 d-flex">
                           <span for="" class='form-label mt-2' id='span_text'>modele:</span>

           <select class="form-select" id="Select" aria-label="Default select example">
 <option disabled  selected >Choisir un modele...</option>
 <?php
  $modele=$pdo->prepare('select Modele from articles');
  $modele->execute();
  $data_modele=$modele->fetchAll();
    foreach ($data_modele as $r) {
      echo '<option value="' . $r['Modele'] . '">' . $r['Modele'] . '</option>';
    }
  ?>
 
</select>
           </div>
           </div>
             <!-- row 5-->
             <div class="row mt-3 d-flex">
           
           <div class="col-4 d-flex">
                           <span for="" class='form-label mt-2' id='span_text'>Etat:</span>

           <select class="form-select" id="Select" aria-label="Default select example">
 <option disabled selected >Choisir une etat...</option>
 <?php
  $etat=$pdo->prepare('select Etat from etat');
  $etat->execute();
  $data_etat=$etat->fetchAll();
    foreach ($data_etat as $r) {
      echo '<option value="' . $r['Etat'] . '">' . $r['Etat'] . '</option>';
    }
  ?>
 
</select>
           </div>
 
        
           </div>
 <!-- row 6-->
 <div class="row mt-3 d-flex">
           
           <div class="col-6 d-flex">
                           <span for="" class='form-label mt-2' id='span_text'>Personne:</span>

           <select class="form-select w-75" id="Select" aria-label="Default select example">
 <option disabled selected >Choisir une personne...</option>
 <?php
  $personne=$pdo->prepare('select personne from articles');
  $personne->execute();
  $data_personne=$personne->fetchAll();
    foreach ($data_personne as $r) {
      echo '<option value="' . $r['personne'] . '">' . $r['personne'] . '</option>';
    }
  ?>
 
</select>
           </div>
           <!-- 2 -->
      
           <div class="col-6 d-flex">
                           <span for="" class='form-label mt-2' id='span_text'>Entite:</span>

           <select class="form-select w-75" id="Select" aria-label="Default select example">
 <option disabled selected >Choisir une entite...</option>
 <?php
  $Entite=$pdo->prepare('select Entite from articles');
  $Entite->execute();
  $data_Entite=$Entite->fetchAll();
    foreach ($data_Entite as $r) {
      echo '<option value="' . $r['Entite'] . '">' . $r['Entite'] . '</option>';
    }
  ?>
</select>
           </div>

       
           </div>

 <!-- row 7-->
 <div class="row mt-3 d-flex">
           
           <div class="col-4"></div>

           <div class="col-3 d-flex">
           <button class="btn btn-warning mx-2" name="afficher" type='submit' >Afficher</button>
            <button class="btn btn-dark mx-2"  id="btnAnnuler" type='submit' onclick="handelClickSubmit(event)">Annuler</button>

           </div>
           <div class="col-4"></div>

       
           </div>

         </div> 
        </form>
        <div class="">
                  <?php
if (isset($_POST['afficher'])) {
  $Article_p = $pdo->prepare('select * from articles ');
$Article_p->execute();
$datap = $Article_p->fetchAll();

if (count($datap) >0) {
    echo '<div class="zone_table my-4 text-light w-100" >
            <table class="table table-bordered border-dark" id="monTableau">
                <thead class="table-group-divider table-divider-dark">
                    <tr class="bg bg-primary">
                        <th>Designation,Marque,<br>Modele</th>
                        <th>Acquisition</th>
                        <th>Numero d\'inventaire</th>
                        <th>Numero de Serie</th>
                        <th>Etat</th>
                        <th></th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider table-divider-color ">';
    foreach ($datap as $row) {
        echo '<tr class="table-active">
                <td>' . $row['Designantion'] . ', ' . $row['Marque'] . ', ' . $row['Modele'] . '</td>
                // $row[type_dacquesition]
                <td>'. $row['Numero_dacquesition'] . ', ' . $row['lot'] . '</td>
                <td>' . $row['Numero_dinventaire'] . '</td>
                <td>' . $row['Numero_de_serie'] . '</td>
                <td>' . $row['Etat'] . '</td>';
                echo '<td>';
    $c=$pdo->prepare('select * from caracteristique_du_materiel where Numero_dinventaire=:nb ');
    $c->bindParam(':nb',$row['Numero_dinventaire'] );
    $c->execute();
    $tab2=$c->fetchAll();
    if(count($tab2)>0){
      echo '<table class="table table-bordered border-dark">
                <thead class="table-group-divider table-divider-dark">
                    <tr class="bg bg-primary text-dark">
                        <th>Entite</th>
                        <th>Personne</th>
                        <th>Commentaire</th>
                      
                    </tr>
                </thead>
                <tbody class="table-group-divider table-divider-color ">';
                foreach ($tab2 as $row) {
                  echo '<tr class="table-active">
                 
                  <td>' . $row['Entite'] . '</td>
                  <td>' . $row['personne'] . '</td>
                  <td>' . $row['Commentaire'] . '</td></tr>';
                }
                 echo '</tbody>
        </table>';

    }
    echo '</$row>';

                echo'
                <td>
                <button class="btn btn-success">
                <a class="text-decoration-none text-light" href="modifier_article.php?id=' . $row['Numero_dinventaire'] . '">Modifier</a>
                </button>

                
                </td>
            </tr>';
    }
    
    echo '</tbody>
        </table>
    </div>';
}
        }

?>
        </div>

      
        </div>
        
    </div>
    </div>
    <script>
      document.getElementById('afficherButton').addEventListener('click', function() {
    event.preventDefault(); 

});
function handelClickSubmit(event) {
    event.preventDefault(); 
    let v=document.querySelectorAll('#Select');
    let g=document.querySelectorAll('#inputs');
    for (let index = 0; index < v.length; index++) {
      const element = v[index].selectedIndex = 0;
      
    }
    for (let index = 0; index < g.length; index++) {
      const element = g[index].value ='';
      
    }
    var tableau = document.getElementById('monTableau');
    tableau.style.display = 'none';

    
    console.log('Button clicked, but form submission prevented.');
}


</script>
</body>
</html>