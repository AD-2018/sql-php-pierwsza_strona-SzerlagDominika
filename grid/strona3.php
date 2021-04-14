<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style3.css" />
  </head>
  <body>
    <div class="container">
    <div class="nav">
    <a class="link" href="/index.php">Pracownicy</a>
    <a class="link" href="/grid/strona1.php">Strona 1</a>
      <a class="link" href="/grid/strona2.php">Strona 2</a>
      <a class="link" href="/grid/strona3.php">Strona 3</a>
      <a class="link" href="/grid/strona4.php">Strona 4</a>
      <a class="link" href="/grid/strona5.html">Strona 5</a>
      <a class="link" href="/grid/strona6.html">Strona 6</a>
      <a class="link" href="/grid/strona7.html">Strona 7</a>
      <a class="link" href="/grid/strona8.html">Strona 8</a>
      <a class="link" href="/grid/strona9.html">Strona 9</a>
      <a class="link" href="/grid/strona10.html">Strona 10</a>
      <a class="link" href="/grid/strona11.html">Strona 11</a>
      <a class="link" href="/grid/strona12.html">Strona 12</a>
  </div>
      <div class=header>
      <?php
require_once ("../lib.php");

      echo("<br>PRODUKTY I PRODUCENCI<br>");
$sql = "SELECT id, producent, produkt FROM Producent, Produkt, Sklep WHERE Producent.id_producent = Sklep.id_producent AND Produkt.id_produkt = Sklep.id_produkt";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>PRODUCENT</th><th>PRODUKT</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['producent'].'</td><td>'.$row['produkt'].'</td>');
        echo('</tr>');
    }

echo('</table>');

?>
</div>
      <div class="hy">
      <?php
require_once ("../lib.php");

echo("<br>Producenci<br>");
$sql = "SELECT * FROM Producent";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Producent</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_producent'].'</td><td>'.$row['producent'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
      </div>

      <div class="ha">
        3
      </div>
      <div class="ho">
      <?php
require_once ("../lib.php");

echo("<br>Produkty<br>");
$sql = "SELECT * FROM Produkt";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Produkty</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_produkt'].'</td><td>'.$row['produkt'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
 </div>
      <div class="he">
        4
      </div>
    </div>
  </body>
</html>