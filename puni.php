Plus petit entre 2 et 5<br><br>
<?php echo min(2, 5,);?>
<br><br>
Plus petit entre 14, 17 et 4<br><br>
<?php echo min(14, 17, 4);?>
<br><br>
Nombre aléatoir entre 1 et 100<br><br>
<?php echo rand(1, 100);?>
<br><br>
Nombre aléatoir entre 5 et 100<br><br>
<?php echo rand(5, 100);?>
<br><br>
addition 2 + 2 <br><br>
<?php echo (2 + 2)."\n"; ?>
<br><br>
PGCD de 10 et 100 <br><br>
<?php function pgcd($nombre,$nombre2){
      while($nombre>1){
      $reste = $nombre%$nombre2;
      if($reste == 0){
      break; // sorti quand resultat trouvé
      }
      $nombre=$nombre2;
      $nombre2=$reste;
      }
      return $nombre2; // retourne le resultat
      }
      echo pgcd( 10,100 ); ?>
<br><br>
Phrase if et else entre 1 et 100
<br><br>
<?php $x = rand(1, 100);

if ($x <50){
echo "$x Je vais faire du bon visuel";
}
else{
echo "$x Je suis un pioupiou";
}
?>
<br><br>
Boucle de 30 en liste chiffré<br><br>
<?php
$x = 1;

while ($x <= 30)
{
    echo 'Je suis une pérruche ' . $x . '<br />';
    $x++;
}
?>
