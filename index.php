<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bad Words</title>
</head>
<body>
  <h1>PHP Bad Words</h1>
  <form action="censura.php" method="POST">
    <label for="paragraph">Paragrafo da compilare:</label>
    <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Inserisci una frase"></textarea>
    <label for="censur">Parola da censurare:</label>
    <input type="text" name="censur" id="censur" placeholder="Inserisci una parola">
    <button type="submit">Invia</button>
  </form>
</body>
</html>