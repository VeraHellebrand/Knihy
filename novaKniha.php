<!DOCTYPE html>
<html lang="cs">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Přidání nové knihy</title>
   <link rel="stylesheet" href="./style.css">
</head>
<body>
   <header>
      <a href="#">Přidání knihy </a>
      <a href="./dbKnih.php">Databáze knih</a>
      <a href="./vyhledavani.php">Vyhledávání knih</a>
      <h1>Přidání nové knihy</h1>
   </header>
   <main>
      <form action="dbNovaKniha.php" method="POST" >
         <label for="isbn">ISBN:</label>
         <input type="text" name="isbn" id="isbn" required>
         <label for="jmeno">Jméno:</label>
         <input type="text" name="jmeno" id="jmeno" required>
         <label for="prijmeni">Příjmení:</label>
         <input type="text" name="prijmeni" id="prijmeni" required>
         <label for="nazev">Název:</label>
         <input type="text" name="nazev" id="nazev" required>
         <label for="popis">Popis:</label>
         <textarea rows="5" name="popis" id="popis"></textarea>
         <input class="odeslat" type="submit" value="Odeslat">
      </form>
   </main>
</body>
</html>