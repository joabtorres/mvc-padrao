<?php
class HomeController extends Controller
{
    public function index()
    {
        echo $this->loadTemplate("teste");
    }
}
