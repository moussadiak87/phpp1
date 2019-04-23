<?php
/*On type une variable pour éviter les problèmes de conversion.
Surtout utilisé pour les nouvelles versions de php.
la function settype prend en paramètres le nom de la variable et sont type entre quotes */
settype($int,'int');
//NULL c'est littérallement Rien
$int = NULL;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>phpp1e5</title>
   </head>
   <body>
     <p><?php echo $int; ?></p>
     <?php $int = 21; ?>
     <p><?php echo $int; ?></p>
   </body>
 </html>
