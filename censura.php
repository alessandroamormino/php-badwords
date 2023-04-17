<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censura Parola</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="centered">
    <h1>Censura una parola</h1>
    <?php 
      $paragrafo = $_POST['paragraph'];
      $parolaCensurata = $_POST['censur'];
      $paragrafoCensurato = str_ireplace($parolaCensurata, '***',$paragrafo);
    ?>
    <div class="top">
      <h3>Paragrafo completo:</h3>
      <p><i><?php echo $paragrafo; ?></i></p>
      <span>Lunghezza: <?php echo strlen($paragrafo); ?> caratteri</span>
    </div>
    <div class="bottom">
      <h3>Paragrafo censurato:</h3>
      <p><i><?php echo $paragrafoCensurato; ?></i></p>
      <span>Nuova lunghezza: <?php echo strlen($paragrafoCensurato); ?> caratteri</span>
    </div>
  </div>
</body>
</html>