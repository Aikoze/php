<?php
namespace App;

use App\Net\HTTPRequest;

class Route {

	private $method;
	private $uri;
	private $parameters;
	private $controller;
	private $action;

	public function __construct($method, $uri, $controller, $action) {
		$this->method = $method;
		$this->uri = trim($uri,'/');
		$this->parameters = $this->parseUri();
		$this->controller = $controller;
		$this->action = $action;
	}

	public function match(HTTPRequest $req) : bool {
	    if (strtolower($this->method) !== strtolower($req->method()))
	        return false;
	    $pattern = $this->getUriPatternMatcher();
		if (empty($pattern) && empty($req->uri())) {
            return true;
        } else if (!empty($pattern)) {
		    preg_match($pattern, $req->uri(), $match);
		    if (count($match) > 0) {
                foreach ($match as $k => $v) {
                    if (!is_int($k)) {
                        $_GET[$k] = $match[$k];
                    }
                }
                return true;
            }
        }
        return false;
	}

	public function getController() : string {
		return $this->controller;
	}

	public function getAction() : string {
		return $this->action;
	}

    private function parseUri() : array {
		$params = [];
		$parts = explode('/', $this->uri);
		foreach ($parts as $part) {
			if (substr($part, 0, 1) !== '{') continue;
			$part = str_replace(['{', '}'], '', $part);
			list($name, $reg) = explode(':', $part);
			$params[$name] = $reg;
		}
		return $params;
	}

    private function getUriPatternMatcher() : string {
        $parts = explode('/', $this->uri);
        foreach ($parts as &$part) {
            if (substr($part, 0, 1) !== '{') continue;
            $part = str_replace(['{', '}'], '', $part);
            $name = substr($part, 0, strpos($part, ':'));
            $part = '(?<' . $name . '>' . $this->parameters[$name] . ')';
        }
        return '/^' . implode('\/', $parts) . '$/';
    }

}

class Router {

	private static $routes = [];

	public static function addRoute(Route $route) : void {
		self::$routes[] = $route;
	}

	public static function getController(HTTPRequest $request) : array {
		foreach (self::$routes as $route) {
			if ($route->match($request)) {
				return [$route->getController(), $route->getAction()];
			}
		}
		return [null, null];
	}

}