<!DOCTYPE html>
<html lang="cs">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Výsledek hledání</title>
   <link rel="stylesheet" href="./style.css">
</head>
<body>
   <header>
      <a href="./novaKniha.php">Přidání knihy </a>
      <a href="./dbKnih.php">Databáze knih</a>
      <a href="./vyhledavani.php">Vyhledávání knih</a>
      <h1>Výsledek hledání</h1>
   </header>
   <main>
   <div class="container">
   <?php
         $isbn = htmlspecialchars($_POST["isbn"]);
         $jmeno = htmlspecialchars($_POST["jmeno"]);
         $prijmeni = htmlspecialchars($_POST["prijmeni"]);
         $nazev = htmlspecialchars($_POST["nazev"]);
         include("dbLogin.php");
         if (!($con = mysqli_connect($host,$user,$password, $db))){
               die("Nelze se pripojit k db serveru</body></html>");
         }
         $dotaz = "SELECT isbn, jmeno, prijmeni, nazev, popis FROM knihy WHERE 1";
         if (!empty($isbn)) {
            $dotaz .= " AND isbn='$isbn'";
         }
         if (!empty($jmeno)) {
            $dotaz .= " AND jmeno='$jmeno'";
         }
         if (!empty($prijmeni)) {
            $dotaz .= " AND prijmeni='$prijmeni'";
         }
         if (!empty($nazev)) {
            $dotaz .= " AND nazev='$nazev'";
         }

         if(!($vysledek = mysqli_query($con, $dotaz))) {
            die("Nelze provést dotaz</body></html>");
         }
      // vypis knih
      while ($radek = mysqli_fetch_array($vysledek)) {
         ?> 
            <div class="container">
               <div class="produkt">
                  <h3><?php echo $radek["nazev"] ?></h3>
                  <h3><?php echo $radek["jmeno"].' '.$radek["prijmeni"] ?></h3>
                  <p><?php echo $radek["popis"] ?></p>
                  <br />
                  <p>ISBN: <?php echo $radek["isbn"] ?></p>
               </div>
            </div>
         <?php
         }
         mysqli_free_result($vysledek);
         mysqli_close($con);
      ?>

   </main>
</body>
</html>