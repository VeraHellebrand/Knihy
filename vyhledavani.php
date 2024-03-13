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
      <a href="./novaKniha.php">Přidání knihy </a>
      <a href="./dbKnih.php">Databáze knih</a>
      <a href="#">Vyhledávání knih</a>
      <h1>Vyhledávání knih</h1>
   </header>
   <main>
      <form action="vysledekHledani.php" method="POST" >
         <label for="isbn">ISBN:</label>
         <input type="text" name="isbn" id="isbn">
         <label for="jmeno">Jméno:</label>
         <input type="text" name="jmeno" id="jmeno">
         <label for="prijmeni">Příjmení:</label>
         <input type="text" name="prijmeni" id="prijmeni">
         <label for="nazev">Název:</label>
         <input type="text" name="nazev" id="nazev">
         <input class="hledat" type="submit" value="Hledat">
      </form>
   </main>
</body>
</html>