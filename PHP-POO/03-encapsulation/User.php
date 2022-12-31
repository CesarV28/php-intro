<?php

class User {
    // public: todos pueden modificar
    // protected: clases que heredan pueden modificar
    // private: nadie puede modificar

    public const PAGINATE = 25;

    public $username;
    // protected $username;
    // private  $username;

    public function getUsername() {
        # code...
    }

    // Poner en mayúsculas nos ayuda crear rutas absolutas y no relativas var_dump(__DIR__);
}