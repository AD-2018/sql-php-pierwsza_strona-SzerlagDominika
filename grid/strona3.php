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
    <?php include_once("menugrid.php"); ?>
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
    echo('<th>ID</th><th>PRODUCENT</th><th>PRODUKT</th><th>USUN</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['producent'].'</td><td>'.$row['produkt'].'<td>
        <form action="del3full.php" method="POST">
         <input type="text" name="id" value="'.$row['id'].'" hidden>
          <input type="submit" value="Usuń">
   </form>
   </td>');
        echo('</tr>');
    }

echo('</table>');

include_once("del3form.php"); 
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
    echo('<th>ID</th><th>Producent</th><th>USUN</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_producent'].'</td><td>'.$row['producent'].'<td>
        <form action="del3prod.php" method="POST">
         <input type="text" name="id" value="'.$row['id_producent'].'" hidden>
          <input type="submit" value="Usuń">
   </form>
   </td>');
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
    echo('<th>ID</th><th>Produkty</th><th>USUN</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_produkt'].'</td><td>'.$row['produkt'].'<td>
        <form action="del3prdkt.php" method="POST">
         <input type="text" name="id" value="'.$row['id_produkt'].'" hidden>
          <input type="submit" value="Usuń">
   </form>
   </td>');
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