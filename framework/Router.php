
<?php   

class Router
{

    protected $routes = [];
    
    public function __construct()
    {
        $this->loadRoutes('web');
    }
    

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }
    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }
    public function delete($uri, $action)
    {
        $this->routes['DELETE'][$uri] = $action;
    }
    public function put(string $uri, array $action)
    {
        $this->routes['PUT'][$uri] = $action;
    }

    public function run()
    {

        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


        $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

        $route = $routes[$requestUri] ?? null;

        $action = $this->routes[$method][$requestUri] ?? null;

    /*    echo '<pre>';  
       var_dump($this->routes);
       die;
 */

     if(!$action){
          exit('Route not found'. $method . ' ' . $requestUri);
     }
    
     [$controller, $method] = $action;

     (new $controller())->$method(); 

    }
    protected function loadRoutes($file)
    {

        $router = $this;
        $filePath = __DIR__ . '/../routes/' . $file . '.php';

        require $filePath;
    

    }
}