<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
      $euro=6.55957;
      printf("%.2f FF<br />",$euro);
      $money1 = 68.75;
      $money2 = 54.35;
      $money = $money1 + $money2;
      // echo $money affichera "123.1";
      echo "affichage sans printf : " . $money . "<br />";
      $monformat = sprintf("%01.2f", $money);

      // echo $monformat affichera "123.10"
      echo "affichage avec printf : " . $monformat . "<br />";

      $year="2002";
      $month="4";
      $day="5";
      $varDate = sprintf("%04d-%02d-%02d", $year, $month, $day) ;

      // echo $varDate affichera "2002-04-05"
      echo "affichage avec sprintf : " . $varDate;
    
      ?>
    
    <hr>
<?php
for ($i = 1; $i <= 150; $i += 2) {
    echo $i . ' ';
}

?>
<hr>
<?php
$age = 1;
 

$reponse = ($age >= 18) ? "majeur" : "mineur"; 

echo "Vous êtes $reponse ."; 
?>
<hr>
<?php
for ($i = 1; $i <= 500; $i++) {
    echo $i . ' ';
}
?>

<hr>

<?php

$i = 1;
do {
    echo "Je dois faire des sauvegardes régulières de mes fichiers" .$i. "<br>" ;
    $i++;
} while ($i <= 500);
?>


</body>
</html>