<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>vote</title>
  </head>
  <body>
    <h1>Comment vous trouvez le cours du PHP ?</h1>
    <form action="validate.php" method="post">
      Bon : <input type="radio" name="question" value="Bon" /> <br />
      Moyen :
      <input type="radio" name="question" value="Moyen" /> <br />
      Faible :
      <input type="radio" name="question" value="Faible" /> <br />
      <input type="submit" value="submit" />
    </form>
  </body>
</html>