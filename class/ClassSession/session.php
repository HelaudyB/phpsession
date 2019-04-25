<?php
class Session {
    private $attributs=[];


    /**
     * Session constructor.
     * @param array $attributs
     */
    public function __construct(array $attributs)
    {
       /* $this->attributs = $attributs;
        foreach (){

        }*/
    }

    /**
 * @return mixed
 */
public function getAttributs()
{
    return $this->attributs;
}/**
 * @param mixed $attributs
 */
public function setAttributs($attributs)
{
    $this->attributs = $attributs;
}
public function __set($name, $value)
{
   return->$this->attributs;
}

}