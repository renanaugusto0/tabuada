<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada | PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Escolha um número</h1>
    <form action="index.php" method="get">
  <label for="numero">Escolha um número:</label>
  <select name="numero" id="numero">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
  <button type="submit">Enviar</button>
</form>
<div id="main">
    <?php 
    $x = 1;
    $numero = isset($_GET["numero"])?$_GET["numero"]:1;
    echo "<h1>A tabuada de $numero é: <br></h1>";
    $i = 1;
    do {
        echo " $numero × $i = " . $numero * $i . "<br>";
        $i++;
    } while($i<11);
    ?>
</div>
</body>
</html>