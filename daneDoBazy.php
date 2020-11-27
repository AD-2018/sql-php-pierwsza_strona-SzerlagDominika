<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <title>Dane do Bazy</title>
</head>
<body>
	<h3>DODAJ PRACOWNIKA</h3>
	<form action="insert.php" method="POST">
		<p>Imie</p>
		<input type="text" name="imie"></br>
	<p>Dzial</p>
			<input type="number" name="dzial"></br>
	<p>Zarobki</p>
			<input type="number" name="zarobki"></br>
<p>Data urodzenia</p>
			<input type="date" name="data_urodzenia"></br>
			<input type="submit" value="dodaj pracownika">
	</form>
<br>
<h3>USUN PRACOWNIKA</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usun">
</form>

</body>
</html>

<?php
require_once("lib.php");
 echo ("<br>Tabela<br>");
$sql = "SELECT * FROM pracownicy";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


echo('<table border="1">');
echo('<th>Id</th><th>Imie</th><th>zarobki</th><th>dzial</th><th>Data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td>'.'<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['dzial'].'</td>'.'<td>'.$row['data_urodzenia'].'</td>'.

         '<td>

         <form action="delete.php" method="POST">
          <input type="hidden" name="id" value="'.$row['id_pracownicy'].'"></br>
           <input type="submit" value="Usuń">
    </form>

         </td>');

        echo('</tr>');
    }
  echo('</table>');
?>
