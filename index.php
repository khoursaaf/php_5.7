<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
      <?php $department =
      [80 => 'Somme',
       02 => 'Aisne',
       59 => 'Nord',
       62 => 'Pas-De-Calais'
     ];
     $department[51] = 'Reims';
      ?>
      <p><?php echo $department[51]; ?></p>
    </body>
</html>
