<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/15/2018
 * Time: 6:31 PM
 */

class Testinh
{
   private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        echo $this->name;

    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
$obj = (new Testinh())->setName('Brathe ')->getName();