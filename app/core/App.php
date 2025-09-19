<?php
// Classe responsável por "interpretar" a URL e direcionar para o controlador e método corretos
class App
{
    protected string $controller = 'HomeController'; //Classe controller
    protected string $method = 'index'; //metodo da classe
    protected array $params = []; //parametros via url

    public function __construct()
    {
        $url = $this->parseUrl();

        // Verificar se o controller existe
        if (isset($url[0]) && file_exists(__DIR__ . "/../controllers/" . ucfirst($url[0]) . "Controller.php")) {
            $this->controller = ucfirst($url[0]) . "Controller";
            unset($url[0]);
        }

        require_once __DIR__ . "/../controllers/{$this->controller}.php";
        $this->controller = get_class(new $this->controller());

        // Verifica se o método existe
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Parâmetros restantes
        $this->params = $url ? array_values($url) : [];

        // Chama o método com os parâmetros
        $c = new $this->controller;
        call_user_func_array([$c, $this->method], $this->params);
    }
    
    /**
     * parseUrl function retorna um array da url requisitada separando por /
     *
     * @return array|null
     */
    private function parseUrl(): ?array
    {
        return isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : [];
    }
}
