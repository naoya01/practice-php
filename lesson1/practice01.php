<?php 
  $a = 0;
?>

<?php 
  while ($a < 10) {
    $a ++;
    print($a);
  }
?>

<?php for ($a=1; $a<5; $a++ ): ?>
  <?php print($a); ?>
<?php endfor ?>


<?php $arrays = [1,2,3,4] ?>
<?php foreach ($arrays as $array): ?>
  <br>
  <?php print($array) ?>
<?php endforeach ?>