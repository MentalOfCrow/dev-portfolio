<?php
defined('ACCESS_GRANTED') or die('Accès interdit');

class Router {
    private $request;
    private $supportedHttpMethods = ["GET", "POST"];
    private $routes = [];

    public function __construct(string $basePath = '') {
        $this->request = $_SERVER['REQUEST_URI'];
        // Suppression des paramètres de requête
        $this->request = strtok($this->request, '?');
        // Suppression du chemin de base
        if (!empty($basePath)) {
            $this->request = str_replace($basePath, '', $this->request);
        }
    }

    public function get(string $path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function post(string $path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    public function resolve() {
        $method = $_SERVER['REQUEST_METHOD'];
        
        if (!in_array($method, $this->supportedHttpMethods)) {
            header("{$_SERVER['SERVER_PROTOCOL']} 405 Method Not Allowed");
            return;
        }

        $path = $this->request;
        
        // Route par défaut
        if ($path === '' || $path === '/') {
            $path = '/home';
        }

        // Vérifier si la route existe
        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];
            if (is_callable($callback)) {
                return call_user_func_array($callback, []);
            } else if (is_string($callback)) {
                require __DIR__ . '/../../public/views/pages/' . $callback . '.php';
                return;
            }
        }

        // Route non trouvée
        header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        require __DIR__ . '/../../public/views/pages/404.php';
    }
} 