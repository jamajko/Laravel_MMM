<!DOCTYPE html>
<html lang="en">

<head>
<title>Registrácia pre lekára</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/loginregister.css">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon3.png">
</head>
<body>
<form class="loginbox" action="{{ route('register') }}" method="POST">
    @csrf
    <div class="loginbox_logo-container">
        <a href="index" target="blank">
            <img class="loginbox_logo" src="img/logo4.png" alt="logo">
        </a>
    </div>
    <div class="loginbox_content">
        <div class="loginbox_header">Registrácia pre lekára</div>
            <input class="loginbox_input" type="text" name="name" placeholder="Zadaj meno a priezvisko" required>
            <input class="loginbox_input" type="email" name="email" placeholder="Zadaj email" required>
            <input class="loginbox_input" type="password" name="password" placeholder="Zadaj heslo" required>
            <input class="loginbox_input" type="password" name="password_confirmation" placeholder="Zadaj heslo znovu" required>
            <input class="loginbox_button" type="submit" name="prihlasenie" value="Registrovanie">
            <div class="loginbox_links">
                <a href="loginlekar" class="loginbox_link">Máš účet a chceš sa prihlásiť?</a>
            </div>
    </div>
</form>
</body>
</html>
