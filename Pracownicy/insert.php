//<?php
//echo("jestes w insert.php");
//echo $_POST['name'];
//
//require_once("lib.php");
//
//
//$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
//       VALUES (null,'".$_POST['imie']."', 1, 76,'1991-11-21')";
//echo ("ok");
//echo $sql;
//if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully";
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
//?>

<?php
echo("jestes w insert.php <br>");
echo "<li>". $_POST['imie'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];

require_once("/lib.php");

//definiujemy zapytanie $sql
$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

//wyświetlamy zapytanie $sql
echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: https://dominika-szerlag.herokuapp.com/daneDoBazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
