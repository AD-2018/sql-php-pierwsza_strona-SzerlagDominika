<?php
echo("jestes w delete.php <br>");
echo $_POST['id'];


require_once ("../lib.php");

//definiujemy zapytanie $sql
$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id'];

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dominika-szerlag.herokuapp.com/Pracownicy/daneDoBazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
