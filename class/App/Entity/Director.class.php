<?php

namespace App\Entity;

class DirectorException extends \Exception
{
}

class Director
{
    public $directorName;
    private $id_director;

    /**
     * @param mixed $DirectorName
     * @return Director
     */
    public function setDirectorName($directorName) : string
    {
        $this->directorName = $directorName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectorName() : string
    {
        return $this->directorName;
    }

    /**
     * @return mixed
     */
    public function getIdDirector()
    {
        return $this->id_director;
    }

    /**
     * @param mixed $id_director
     */
    public function setIdDirector($id_director): void
    {
        $this->id_director = $id_director;
    }

}
