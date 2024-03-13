<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vložení do databáze</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <a href="./novaKniha.php">Přidání knihy </a>
        <a href="./dbKnih.php">Databáze knih</a>
        <a href="./vyhledavani.php">Vyhledávání knih</a>
        <br />
    </header>
<?php
if (isset($_POST["isbn"]) && isset($_POST["jmeno"]) && isset($_POST["prijmeni"]) && isset($_POST["nazev"]) && isset($_POST["popis"])) { // Kontrola existence proměnných z $_POST
    include("dbLogin.php");
    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
        die("Nelze se připojit k databázi");
    } 
    
    mysqli_set_charset($con, "utf8");
    // kontrola co posilam za data
    echo"<p>vložená data:</p>";
    print_r($_POST);
    
    // Úprava dat pomocí addslashes()
    $isbn = addslashes($_POST["isbn"]);
    $jmeno = addslashes($_POST["jmeno"]);
    $prijmeni = addslashes($_POST["prijmeni"]);
    $nazev = addslashes($_POST["nazev"]);
    $popis = addslashes($_POST["popis"]);
    
    // Sestavení a provedení dotazu
    $sql = "INSERT INTO knihy (isbn, jmeno, prijmeni, nazev, popis) VALUES ('$isbn', '$jmeno', '$prijmeni', '$nazev', '$popis')";
    if (mysqli_query($con, $sql)) {
        echo "Úspěšně vloženo";
    } else {
        echo "Nelze vykonat dotaz: " . mysqli_error($con);
    }
    
    mysqli_close($con);
}
?>  
</body>
</html>