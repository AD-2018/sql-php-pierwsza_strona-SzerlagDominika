<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <div class="container">
    <div class="nav">
    <?php include_once("menugrid.php"); ?>
  </div>
      <div class="header">
      <?php
require_once ("../lib.php");

echo("<br>Pracownicy<br>");
$sql = "SELECT * FROM osoby";
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
        echo('<td>'.$row['id'].'</td><td>'.$row['imie'].'<td>
        <form action="del2prac.php" method="POST">
         <input type="text" name="id" value="'.$row['id'].'" hidden>
          <input type="submit" value="Usuń">
   </form>
   </td>');
        echo('</tr>');
    }

echo('</table>');
?>
</div>
      <nav class="uwu">
      <?php
require_once ("../lib.php");

      echo("<br>PRACOWNICY I ROLE<br>");
$sql = "SELECT id_inf, imie, rola FROM osoby, rola, systeminf WHERE osoby.id = systeminf.id_osoba AND rola.id = systeminf.id_rola";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>PRACOWNIK</th><th>ROLA</th><th>USUN</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_inf'].'</td><td>'.$row['imie'].'</td><td>'.$row['rola'].'<td>
        <form action="del2full.php" method="POST">
         <input type="text" name="id" value="'.$row['id_inf'].'" hidden>
          <input type="submit" value="Usuń">
   </form>
   </td>');
        echo('</tr>');
    }

echo('</table>');

?>
      </nav>

      <div class="ho">
       2
</div>
      <nav class="owo">
        3
      </nav>
      <div class="ha">
        4
</div>
      <div class="he">
      <?php
require_once ("../lib.php");

echo("<br>ROLE<br>");
$sql = "SELECT * FROM rola";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Rola</th><th>USUN</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['rola'].'<td>
        <form action="del2rola.php" method="POST">
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