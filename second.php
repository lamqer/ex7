<h2>Second Page</h2>
<p>This is the second page</p>
<h3>PHP Variables</h3>

<?php
$name = '<strong>Garfield</strong>';
$age = '<strong>5</strong>';
echo "Name of the cat is ".$name." and it is ".$age." years old";
 ?>

 <h3>PHP Array</h3>
 <p>Name from the array:</p>
<?php
$names=array('Jim', 'Lisa', 'Bob');
print_r($names);
?>
<br>
<?php
echo "Second name is: ".$names[1];
 ?>

<h3>PHP Accociative Array</h3>
<p>All persons:</p>
<?php
  $fnames=array(
    array('fn' => 'Jim', 'ln' => 'Smith'),
    array('fn' => 'Lisa', 'ln' => 'Simpson'),
    array('fn' => 'Bob', 'ln' => 'Jonesi')
  );
  print_r($fnames);
 ?>
 <br>
 <?php foreach ($fnames as $row) {
   echo $row['ln'].'</br>';
 } ?>
