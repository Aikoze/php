<?php
/**
 * Created by PhpStorm.
 * User: youen
 * Date: 12/09/2018
 * Time: 23:33
 */

namespace App\Entity;


class MovieAsType
{
    private $id_film;
    private $id_type;

    /**
     * @return mixed
     */
    public function getIdFilm()
    {
        return $this->id_film;
    }

    /**
     * @param mixed $id_film
     */
    public function setIdFilm($id_film): void
    {
        $this->id_film = $id_film;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * @param mixed $id_type
     */
    public function setIdType($id_type): void
    {
        $this->id_type = $id_type;
    }
}