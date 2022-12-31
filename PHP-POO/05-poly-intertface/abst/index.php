<?php

require_once("Base.php");
require_once("Admin.php");
require_once("User.php");
require_once("Guest.php");

$guest = new Guest();
echo $guest->login();
echo ('<br>');
//Mi nombre es Invitado de la clase guest.


$user = new User('Cesar');
echo $user->login();
echo ('<br>');
//Mi nombre es Cesar de la clase user.


$admin = new Admin('Abril');
echo $admin->login();
echo ('<br>');
//Mi nombre es Abril de la clase Admin.
