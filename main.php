<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/72fb1d7d88.js" crossorigin="anonymous"></script>
    <title>Logowanie</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.html"><i class="fas fa-car"></i>Start</a></li>
            <li><a href="auta.html"><i class="fas fa-tools"></i>Auta</a></li>
            <li><a href="kontakt.html"><i class="fas fa-phone"></i>Kontakt</a></li>
            <li><a href="main.php"><i class="fas fa-user"></i>Zaloguj się</a></li>
        </ul>
    </nav>
    <section class="log"></section>
    <div class="main_1">
        <h2 class="log1">Z A L O G U J</h2>
        <h2 class="reg1">R E J E S T R A C J A</h2>

        <div class="login">
            <form method="POST" action="mainlog.php" name="mainlog.php">
                <label for="usernamelog">Nazwa użytkownika</label><br>
                <input type="text" name="usernamelog">

                <br><br><br>

                <label for="passwordlog">Hasło</label><br>
                <input type="password" name="passwordlog">

                <br><br><br>

                <input type="submit" value="Zaloguj się" name="login_submit">
            </form>

            <div class="register">
                <form method="POST" action="mainreg.php" name="mainreg.php">
                    <label for="usernamereg">Nazwa użytkownika</label><br>
                    <input type="text" name="usernamereg">

                    <br><br><br>

                    <label for="passwordreg">Hasło</label><br>
                    <input type="password" name="passwordreg">

                    <br><br><br><br>

                    <input type="submit" value="Zarejestruj się">
                </form>
            </div>
        </div>
    </div>