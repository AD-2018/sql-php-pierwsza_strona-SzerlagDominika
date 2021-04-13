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
    echo('<th>ID</th><th>Pracownik</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['imie'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
</div>
      <nav class="uwu">
        1
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
    echo('<th>ID</th><th>Rola</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['rola'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
</div>
    </div>
  </body>
</html>