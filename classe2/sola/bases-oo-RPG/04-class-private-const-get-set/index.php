<?php
// Déclaration stricte
// Déclare(strict_types=1)
include "Personnage.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Classe avec getters et setters</title>
</head>
<body>
    <h1>
     Classe avec getters et setters 
    </h1>  
    <h2>Affichage de la classe</h2>
<?php
    $perso1 = new Personnage();
?>
<h3>Constante publique</h3>
    <p>Les constantes sont par défaut public (mais on peut les rendre private ou protected) elles sont en MAJUSCULE et en SNAKE_CASE, elles doivent être initialisées avec une valeur par défaut.</p>
    <pre><code>
     // Mauvaise pratique, on part de l'instance
    echo $perso1::LA_RACE." ";
    // Bonne pratique on part de la class
    echo Personnage::LA_RACE
    </code></pre>
<?php
    // Mauvaise pratique, on part de l'instance
    echo $perso1::LA_RACE." | ";
    // Bonne pratique on part de la class
    echo Personnage::LA_RACE
    // Bonne pratique mais ne fonctionne pas car privé
    // echo Personnage::LE_GENRE
?>
    <h2>Propriétées private</h2>
    <p>On ne peut les lire ou les modifier depuis l'extérieur de la classe (ni depuis les enfants voir protected - héritage).</p>
    <p>Valable pour les 3 grands tyoes : </p>
    <ul>
      <li>propriéte</li>
      <li>constante</li>
      <li>méthode</li>
    </ul>
    <pre><code>
      // Impossible:
      $perso->le_nom = "coucou";
      echo $perso1->l_age;
    </code></pre>
    <h2>setters</h2>
    <h3>Ou mutator, méthodes publiques</h3>
    <p>Ils permettent de modifier les Propriétées private ou protected (ou public en readonly)</p>
<?php
    $perso1->SetLeNom("Pierre");
    var_dump($perso1)
?>
</body>
</html>
