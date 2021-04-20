<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style4.css" />
  </head>
  <body>
    <div class="container">
      <div class="nav">
      <?php include_once("menugrid.php"); ?>
      </div>
      <div class="header">
        <h1>GRID CSS</h1>
      </div>
      <div class="hy">
      <?php
require_once ("../lib.php");

      echo("<br>PRODUKTY I PRODUCENCI<br>");
$sql = "SELECT id_proj, pracownik, projekt FROM pracownik, projekt, pracownik_projekt WHERE pracownik.id = pracownik_projekt.id_pracownik AND projekt.id = pracownik_projekt.id_projekt";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>PRACOWNIK</th><th>PROJEKT</th><th>USUN</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_proj'].'</td><td>'.$row['pracownik'].'</td><td>'.$row['projekt'].'<td>
        <form action="del4full.php" method="POST">
         <input type="text" name="id" value="'.$row['id_proj'].'" hidden>
          <input type="submit" value="Usuń">
   </form>
   </td>');
        echo('</tr>');
    }

echo('</table>');

?>
        </div>

      <div class="ha">
      <?php
require_once ("../lib.php");

echo("<br>Pracownicy<br>");
$sql = "SELECT * FROM pracownik";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Pracownik</th><th>USUN</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['pracownik'].'<td>
        <form action="del4prac.php" method="POST">
         <input type="text" name="id" value="'.$row['id'].'" hidden>
          <input type="submit" value="Usuń">
   </form>
   </td>');
        echo('</tr>');
    }

echo('</table>');
?>
        </div>
      <div class="ho">
      <?php include_once("del4form.php"); ?>
        </div>
      <div class="he">
      <?php
require_once ("../lib.php");

echo("<br>Pracownicy<br>");
$sql = "SELECT * FROM projekt";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Projekt</th><th>USUN</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['projekt'].'<td>
        <form action="del4proj.php" method="POST">
         <input type="text" name="id" value="'.$row['id'].'" hidden>
          <input type="submit" value="Usuń">
   </form>
   </td>');
        echo('</tr>');
    }

echo('</table>');
?>
        </div>
    </div>
  </body>
</html>