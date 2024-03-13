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
      <a href="#">Databáze knih</a>
      <a href="./vyhledavani.php">Vyhledávání knih</a>
      <h1>Databáze knih</h1>
   </header>
   <main>
   <div class="container">
      <?php
      include("dbLogin.php");
      if (!($con = mysqli_connect($host,$user,$password, $db))){
            die("Nelze se pripojit k db serveru</body></html>");
      }
      mysqli_query($con,"SET NAMES 'utf8'");
      if(!($vysledek = mysqli_query($con, "SELECT isbn, jmeno, prijmeni, nazev, popis FROM knihy"))) {
            die("Nelze provést dotaz</body></html>");
      }
      while ($radek = mysqli_fetch_array($vysledek)) {
            ?> 
               <div class="produkt">
                  <h3><?php echo $radek["nazev"] ?></h3>
                  <h3><?php echo $radek["jmeno"].' '.$radek["prijmeni"] ?></h3>
                  <p><?php echo $radek["popis"] ?></p>
                  <br />
                  <p>ISBN: <?php echo $radek["isbn"] ?></p>
               </div>
            <?php
            }
            mysqli_free_result($vysledek);
            mysqli_close($con);
      ?>

   </main>
</body>
</html>