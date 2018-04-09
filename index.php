 <?php

 //--------------------------------EXERCICE 1----------------------------
// include ('./inc/pdo.php');
//
// $sql = "SELECT * FROM country ORDER BY Name ASC";
// $query = $pdo ->prepare($sql);
// $query->execute();
//
// $countries = $query->fetchAll(); -->


//echo '<pre>';
//print_r($countries);
//echo '</pre>';
// ------------------------------------Methode bourrin.------------------------
// foreach ($countries as $countrie) {
// echo '<div class="pays">';
//   echo '<h2>';
//   echo $countrie['Name']. ',  ';
//   echo '</h2>';
//   echo '<p>';
//   echo $countrie['Population']. ', ';
//   echo '</p>';
//   echo '<p>';
//   echo $countrie['Code']. ', ';
//   echo '</p>';
// echo '</div>';
// ---------------------------------------Methode clair.---------------------
// echo '<div class="pays">';
//  echo '<h2>' .$countrie['Name']. '</h2>';
//  echo '<p class="population">' . $countrie['Population'] . '</p>';
//  echo '<p>' . $countrie['Code'] . '</p>';
// echo '</div>';
//
// }

//  ----------------------------------methode en alterance. -------------------

/*foreach ($countries as $countrie) {?>
  <div class="pays">
    <h2 class="name"><?php echo $countrie['Name']; ?></h2>
    <p class="population"><?php echo $countrie['Population']; ?></p>
    <p class="code"><?php echo $countrie['Code']; ?><p>
  </div>
<?php }*/

// ------------------------------------EXERCICE2-------------------------

include ('./inc/pdo.php');
$sql = "SELECT * FROM country WHERE Continent='Africa' ORDER BY Population ASC";
$query = $pdo ->prepare($sql);
$query->execute();

 $countries = $query->fetchAll();

 foreach ($countries as $countrie) {?>
   <div class="pays">
     <h2 class="name"><?php echo $countrie['Name']; ?></h2>
     <p class="population"><?php echo $countrie['GovernmentForm']; ?></p>
     <p class="code"><?php echo $countrie['HeadOfState']; ?><p>
   </div>
 <?php }
