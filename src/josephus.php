<html>

<head>
  <title>Josephus PHP</title>
</head>

<body>
  <?php
  $n = $_POST["n"];
  $k = $_POST["k"];
  $soldados = $n;
  $circulo = array();

  echo '<span>Os soldados em vermelho são os mortos e os em preto são os vivos</span><br/>';
  echo '<span>circul para n=' . $n . ' e k=' . $k . '</span>';
  
  function calcEnesimoVivo($n, $k, $circulo, $index, $percorridos)
  {
    if ($k == $percorridos)
      return $k;

    for ($i = $index; $i < $n; $i++) {
      if ($circulo[$i]['vivo'])
        $percorridos++;
      if ($percorridos == $k)
        return $i;
    }
    return calcEnesimoVivo($n, $k, $circulo, 0, $percorridos);
  }

  function showCirculo($circulo)
  {
    echo '<br/>Rodada da morte<br/>';
    foreach ($circulo as $soldado) {
      if ($soldado['vivo'])
        echo '<span style="padding:5">' . $soldado['numero'] . '</span>';
      else
        echo '<span style="color:red;padding:5">' . $soldado['numero'] . '</span>';
    }
  }

  for ($i = 1; $i <= $n; ++$i)
    array_push($circulo, ['numero' => $i, 'vivo' => true]);

  if ($n == 1) {
    echo 'Sobrevivente é o 1';
  } else {
    $indexRemovido = 0;
    while ($soldados > 1) {
      $indexRemovido = calcEnesimoVivo($n, $k, $circulo, $indexRemovido, 0);
      $circulo[$indexRemovido]['vivo'] = false;
      showCirculo($circulo);
      $soldados--;
    }
  }
  ?>
</body>

</html>