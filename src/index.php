<html>

<head>
  <title>Josephus PHP</title>
</head>

<body>
  <form action="josephus.php" method="post">
    Informe o numero de soldados: <input type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true" name="n" min="1"><br>
    Informe o primeiro enesimo soldado a ser morto: <input type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true" name="k" min="1"><br>
    <input type="submit">
  </form>

</body>

</html>