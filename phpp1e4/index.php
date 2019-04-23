<?php
/*les variables de type string sont entourées de quotes
les variable de type int, float et boolean n'en prennent pas.*/
$string ='bonjour';
$int = 31;
$float = 109.5;
/*si le boolean est égale a false soit il affiche 0 soit
il affichera rien
s'il est égale a true, il affichera 1*/
$boolean = true;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title></title>
   </head>
   <body>
     <p>la variable string vaut : <?= $string ?></p>
     <p>la variable int vaut : <?= $int ?></p>
     <p>la variable float vaut : <?= $float ?></p>
     <p>la variable boolean vaut : <?=$boolean ?></p>
   </body>
 </html>
