<?php
class Session{
    public $attribut = [];
    public $key;
    public $value;
    /**
     * @return array
     */
    public function getAttribut()
    {
        return $this->attribut;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    // créer une fonction add
    public function add($key, $value){
        $this->attribut[$key]=$value;
    }

    // créer une fonction update
    public function update($key, $value){
        return $this->add($key, $value);
    }

    //créer une fonction magique __isset
    public function __isset($nouveauAttribut)
    {
        return isset($this->attribut[$nouveauAttribut]);
    }
    // créer une fonction magique __set
    public function __set($nouveauAttribut, $value)
    {
    var_dump('je passe là');
    }
    public function __get($value) {
        echo('impossible d\'afficher la valeur');
    }

    public function remove(){

    }



}