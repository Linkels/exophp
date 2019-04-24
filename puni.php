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
Boucle de 30 en liste chiffré<br><br>
<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 30)
{
    echo 'Je suis une pérruche ' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++;
}
?>
