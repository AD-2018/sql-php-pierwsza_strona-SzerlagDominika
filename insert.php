//<?php
//echo("jestes w insert.php");
//echo $_POST['name'];
//
//$servername = "mysql-dominikaszerlag.alwaysdata.net";
//$username = "217134";
//$password = "@dominika123";
//$dbname = "dominikaszerlag_baza";
//
//$conn = new mysqli($servername, $username, $password, $dbname);
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}
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

$servername = "mysql-dominikaszerlag.alwaysdata.net";
$username = "217134";
$password = "@dominika123";
$dbname = "dominikaszerlag_baza";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "INSERT INTO Pracownik (null, name, dzial,zarobki,data_urodzenia)
	      VALUES (
					null, 
					'".$_POST['imie']."', 
					'".$_POST['dzial']."', 
					'".$_POST['zarobki']."',
					'".$_POST['data_urodzenia']."'
				";

//wyświetlamy zapytanie $sql
echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
