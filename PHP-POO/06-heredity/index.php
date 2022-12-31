<?php

//https://www.php.net/releases/8.0/es.php

class User
{

    public function __construct(
        public $name
    ){
        $this->name = $name;
    }

    // final public function getName() : eviata que puedan hacer modificaciones
    public function getName()
    {
        return $this->name;
    }
}

class Admin extends User
{
    public function getName()
    {
        return "Admin $this->name";
    }
}

$admin = new Admin('Cesar');
echo $admin->getName();

echo("<br/>");

$user = new User('Abril');
echo $user->getName();