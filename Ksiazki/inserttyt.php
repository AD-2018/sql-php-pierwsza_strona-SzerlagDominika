<?php
echo("jestes w insert.php <br>");
echo "<li>". $_POST['tytul'];

require_once ("../lib.php");

//definiujemy zapytanie $sql
$sql = "INSERT INTO bibl_autor (id_tytul, tytul) 
       VALUES (null, '".$_POST['tytul']."')";

//wyświetlamy zapytanie $sql
echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: https://dominika-szerlag.herokuapp.com/Ksiazki/ksiazki.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>