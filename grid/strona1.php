<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
      <?php
require_once ("../lib.php");

echo("<br>SPRAWY<br>");
$sql = "SELECT * FROM sprawy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Sprawa</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ID'].'</td><td>'.$row['sprawa'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
</div>
      <div class="ho">
      </div>
      <div class="ha">
      <?php
require_once ("../lib.php");

echo("<br>PRAWNICY<br>");
$sql = "SELECT * FROM prawnicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>PRAWNIK</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ID'].'</td><td>'.$row['Imie'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
      </div>
      <div class="he">
        5
      </div>
      <div class="hy">
      <?php
require_once ("../lib.php");

      echo("<br>PRAWNICY I SPRAWY<br>");
$sql = "SELECT id_sad, Imie, sprawa FROM prawnicy, sprawy, sad WHERE prawnicy.ID = sad.id_prawnik AND sprawy.ID = sad.id_sprawa";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>PRAWNIK</th><th>SPRAWA</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_sad'].'</td><td>'.$row['Imie'].'</td><td>'.$row['sprawa'].'</td>');
        echo('</tr>');
    }

echo('</table>');

?>
      </div>
    </div>
  </body>
</html>