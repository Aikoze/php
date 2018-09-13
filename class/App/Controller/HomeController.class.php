<?php

namespace App\Controller;

use App\Utils\DB;

class HomeController {

	public function show() : array {
	    $db = new DB();
	    $db->query('SELECT * FROM film');
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

	public function other() : array {
        return [
            'site',
            [
                'title' => 'Other',
                'text' => 'Bla bla bla from Other',
                'params' => json_encode($_GET)
            ]
        ];
	}


}