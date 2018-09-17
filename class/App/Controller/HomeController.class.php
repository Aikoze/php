<?php

namespace App\Controller;

use App\Utils\DB;

class HomeController {

	public function show() : array {
	    $db = new DB();
	    $db->query('SELECT * FROM  film');
	    $res = $db->result('App\Entity\Movie');
        return [
            'site',
            [
                'title' => 'Show',
                'text' => 'Séléction des films à l\'affiche',
                'films' => $res,
            ]
        ];
	}

	public function addMovie() : array {
        $db = new DB();
        $db->query('SELECT * FROM film ORDER BY id DESC LIMIT 0,5');
        $films = $db->result('App\Entity\Movie');
        $db->query('SELECT * FROM cesi.type ');
        $types = $db->result('App\Entity\Type');

        return [
            'addMovie',
            [
                'title' => 'Ajouter un film',
                'text' => 'Nos derniers films ajoutés',
                //'params' => json_encode($_GET)
                'films' => $films,
                'types' => $types,
            ]
        ];
	}

    public function submitMovie() : array {
        $db = new DB();
        $db->query('SELECT * FROM film ORDER BY id DESC LIMIT 0,5');
        $films = $db->result('App\Entity\Movie');
        $db->query('SELECT * FROM cesi.type ');
        $types = $db->result('App\Entity\Type');
        if (isset($_POST)) {
            $db = new DB();
            $db->query('INSERT INTO cesi.film(id_director, id_previous, title, title_fr, year, score) VALUES (:id_director, :id_previous, :title, :title_fr, :year, :score)');
        }

        return [
            'addMovie',
            [
                'title' => 'Ajouter un autre film',
                'text' => 'Nos derniers films ajoutés',
                //'params' => json_encode($_GET)
                'films' => $films,
                'types' => $types,
            ]
        ];

    }


}