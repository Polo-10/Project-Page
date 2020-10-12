  <?PHP
  $user = $_POST["usernamelog"];
  $pass = $_POST["passwordlog"];
function checkPass($user, $pass)
{
  if(!$fd = @fopen("baza.txt", "r")) return false;
  while (!feof ($fd)){
    $line = trim(fgets($fd));
    if(($pos = strpos($line, ":"))===false) continue;

    $tempUser = substr($line, 0, $pos);
    if($tempUser != $user) continue;

    $tempPass = substr($line, $pos + 1, strlen($line) - $pos);

    if($tempPass != $pass) continue;
    else{
      fclose($fd);
      return true;
    }
  }
  fclose($fd);
  return false;
}

if(checkPass($_POST["usernamelog"], $_POST["passwordlog"])){
  echo   "<script> 
            alert('Zalogowano!');
            window.location.href='main.php';
        </script>";

}
else{
   echo   "<script> 
            alert('Błedne hasło lub nazwa użytkownika!');
            window.location.href='main.php';
        </script>";
}
?>