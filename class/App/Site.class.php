<?php

namespace App;

use App\Layout;
use App\Net\HTTPRequest;

class Site {

	private $req;
	private $layout;

	public function __construct() {
		$this->layout = new Layout('views/layout.view.php');

		Router::addRoute(new Route('GET', '/', 'Home', 'show'));
		Router::addRoute(new Route('GET', '/other', 'Home', 'other'));
		Router::addRoute(new Route('GET', '/other/{name:[\w]+}/id/{id:[\d]+}', 'Home', 'other'));

		$this->req = new HTTPRequest();
	}

	public function run() : void {
		list($name, $action) = Router::getController($this->req);
		if (!empty($name) && !empty($action)) {
            $class = 'App\\Controller\\' . $name . 'Controller';
            $ctrl = new $class();
            list($view, $params) = $ctrl->{$action}();
            echo $this->layout->render($view, $params);
        } else {
            echo $this->layout->render('404');
        }
	}
	
}