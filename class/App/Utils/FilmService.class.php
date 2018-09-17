<?php
/**
 * Created by PhpStorm.
 * User: youen
 * Date: 17/09/2018
 * Time: 10:48
 */

namespace App\Utils;

use App\Utils;


class FilmService
{
    public function addFilm($data)
    {
        if (count($data) > 0) {
            $db = new DB();
            $db->query('INSERT INTO cesi.film(title, title_fr, year, score) VALUES (:title, :title_fr, :year, :score)');
            foreach ($data as $k => $v){
                $db->bind($k, $v);
            }
            $db->execute();
        }
        $id = $db->lastInsertId();
        $db->query('INSERT INTO cesi.film_as_type(id_film, id_type) VALUES (:$id ,:type)');
        foreach ($data as $k => $v){
            $db->bind($k, $v);
        }
        $db->execute();
    }

    public function deleteFilm()
    {
        $db = new DB();
        $db->query('DELETE FROM cesi.film WHERE id=:id ');

    }


    public function updateFilm()
    {
        if (isset($_POST)) {
            $db = new DB();
            $db->query('UPDATE cesi.film SET title=:title, title_fr=:title_fr, year=:year, score=:score');
            $db->query('UPDATE cesi.director SET name=:name WHERE id=:id');
        }
    }

}