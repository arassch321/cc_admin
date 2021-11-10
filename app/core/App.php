<?php

class App
{

	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->parseURL();
		if (!isset($url[0])) {
			$url[0] = 'home';
		}
		if (file_exists('../controllers/' . $url[0] . '.php')) {
			echo $url[0];
			$this->controller = $url[0];
			unset($url[0]);
		}
		// else {
		// 	$this->controller = 'errorpage';
		// }

		require_once '../controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;


		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
			// else {
			// 	$this->controller = 'errorpage';
			// 	require_once '../controllers/' . $this->controller . '.php';

			// 	$this->controller = new $this->controller;
			// 	$this->method = 'index';
			// }
		}

		if (!empty($url)) {
			$this->params = array_values($url);
		}

		//jalankan controller
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseURL()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}