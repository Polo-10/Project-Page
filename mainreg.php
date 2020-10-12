 <?php
$usernamereg = trim($_POST['usernamereg']);
$passwordreg = trim($_POST['passwordreg']);

if(empty($usernamereg) || empty($passwordreg)) {

// prosty formularz zawierający dwa pola
echo  "<script> 
            alert('Wpisz Dane!');
            window.location.href='main.php';
        </script>";
}
else {

    // dane pochodzące z formularza
    $dane = $usernamereg.":".$passwordreg."\n";
    // przypisanie zmniennej $file nazwy pliku
    $file = "baza.txt";
    //otwarcie pliku baza.txt w trybie zapisu
    $fp = fopen($file, "a");
    // zapisanie danych do pliku
    fwrite($fp, $dane);
    // zamknięcie pliku
    fclose($fp);

     echo "<script> 
            alert('Zarejestrowano!');
            window.location.href='main.php';
        </script>";
}
?>

