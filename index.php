<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bad Words</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="centered">
    <h1>PHP Bad Words</h1>
    <form action="censura.php" method="POST">
      <div class="top">
        <label for="paragraph">Paragrafo da compilare:</label>
        <textarea name="paragraph" id="paragraph" cols="50" rows="6" placeholder="Inserisci una frase"
          required></textarea>
      </div>
      <div class="bottom">
        <label for="censur">Parola da censurare:</label>
        <input type="text" name="censur" id="censur" placeholder="Inserisci una parola" required>
      </div>
      <button type="submit">Invia</button>
    </form>
  </div>
</body>

</html>