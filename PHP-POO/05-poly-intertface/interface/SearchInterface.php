<?php

interface Search
{
    public function all();
}

class User implements Search
{
    public function all(){
        return "Opteniendo a los Usuarios, JSON";
    }
}

class Post implements Search
{
    public function all(){
        return "Opteniendo a los Posts, XML";
    }
}

$user = new User();
echo $user->all();

echo("<br/>");

$post = new Post();
echo $post->all();