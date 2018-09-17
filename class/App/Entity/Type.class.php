<?php
/**
 * Created by PhpStorm.
 * User: youen
 * Date: 12/09/2018
 * Time: 23:20
 */

namespace App\Entity;

class GenreException extends \Exception
{
}

class Type
{

    private $id;
    public $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

}