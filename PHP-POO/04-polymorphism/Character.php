<?php

class Character{
    //Atributos - mi personaje tiene una vida y un dano de ataque
    public $vida;
    public $damage;

    //Metodos - al Atacar arrojara este mensaje por defecto.
    public function attack(){
        return 'Acabas de atacar';
    }
}

//Estoy creando la clase garen, donde heredara todos, los atributos y metodos de la clase Personaje.
class Warrior extends Character{

    public function __construct($vida,$damage){
        $this->vida = $vida;
        $this->damage = $damage;
    }
    //Polimorfismo, estamos sobre escribiendo la funcion de atacar segun la necesidad que tiene este personaje.
    //Cuando garen ataca arroja un mensaje especial para el (Garen)
    public function attack(){
        return 'Warrior acaba de pegar y te quito: '.$this->damage;
    }
}

//Instancio mi objeto, le envio la vida y el dano que tendra.
$warrior = new Warrior(200, 20);
echo $warrior->attack();