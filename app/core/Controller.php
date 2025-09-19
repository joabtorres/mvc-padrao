<?php
// Classe base que facilita o carregamento de views
require_once __DIR__ . "/Helper.php";
class Controller
{
    public Helper $helper;
    public function __construct()
    {
        $this->helper = Helper::getInstance();
    }
    /**
     * Está função é responsável para carrega uma view;
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @return void
     */
    public function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        require_once __DIR__ . "/../../public_html/{$viewName}.php";
    }

    /**
     * Está função é responsável para carrega um template estático, a onde ela chama chama uma função lo;
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @return void
     */
    public function loadTemplate($viewName, $viewData = array())
    {
        require_once __DIR__ . "/../../public_html/template.php";
           }

    /**
     * Está função é responsável para carrega uma view dinamica dentro de um template estático
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function loadViewInTemplate($viewName, $viewData = array())
    {
        extract($viewData);
        require_once __DIR__ . "/../../public_html/{$viewName}.php";
    }

    /**
     * model function função utilizada para carregar um class de interação com banco de dados
     *
     * @param string $model nome do banco de dados
     * @return void
     */
    protected function model(string $model)
    {
        require_once __DIR__ . "/../models/{$model}.php";
        return new $model;
    }
}
