<?php

namespace App\Entity;
use App\Utils\DB;
use App\Utils\DBException;

class MovieException extends \Exception
{
}

/**
 * @property  MovieAsType
 *
 */
class Movie
{
    private $title;
    private $year;
    private $score;
    private $id;
    private $id_director;


    public function getDirectorByMovie() : string {
        $db = new DB();
        $db->query('SELECT name FROM director JOIN film ON film.id_director=director.id where film.id = ' . $this->id);
        $res = $db->result('App\Entity\Director');
        var_dump($res[0]->name);
return "";
        //return $res[0]->name;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function setIdDirector(int $id_director)
    {
        $this->id_director = $id_director;
    }


    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Movie
    {
        if (strlen($title) < 2) throw new MovieException("Title to short");
        $this->title = $title;
        return $this;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): Movie
    {
        if ($year < 1890) throw new MovieException("Date too old");
        $this->year = $year;
        return $this;
    }

    public function __toString()
    {
        return '<b>' . $this->title . '</b> [' . $this->year . ']' . "\n";
    }
    
}