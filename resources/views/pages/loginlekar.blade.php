<!DOCTYPE html>
<html lang="en">

<head>
<title>Prihlásenie pre lekára</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/loginregister.css">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon3.png">
</head>
<body>
<form class="loginbox" action="{{ route('login') }}" method="POST">
    @csrf
    <div class="loginbox_logo-container">
        <a href="index" target="blank">
            <img class="loginbox_logo" src="img/logo4.png" alt="logo">
        </a>
    </div>
    <div class="loginbox_content">
        <div class="loginbox_header">Prihlásenie pre lekára</div>
        <input class="loginbox_input" type="email" name="email" placeholder="Zadaj emailovú adresu">
        <input class="loginbox_input" type="password" name="password" placeholder="Zadaj heslo">
        <input class="loginbox_button" type="submit" name="prihlasenie" value="Prihlásenie">
        <div class="loginbox_links">
            <a href="" class="loginbox_link">Zabudol si heslo?</a>
        </div>
        <div class="loginbox_links">
            <a href="registerlekar" class="loginbox_link">Nemáš účet?</a>
        </div>
    </div>
</form>
</body>
</html>
