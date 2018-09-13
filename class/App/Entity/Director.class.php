<?php

namespace App\Entity;

class DirectorException extends \Exception
{
}

class Director
{
    public $DirectorName;

    /**
     * @param mixed $DirectorName
     * @return Director
     */
    public function setDirectorName($DirectorName) : string
    {
        $this->DirectorName = $DirectorName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectorName() : string
    {
        return $this->DirectorName;
    }
}
