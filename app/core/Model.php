<?php
// Classe base para modelos com conexão PDO
class Model
{
    protected \PDO $db; //classe de conexão do banco de dados;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8_gen'");
        } catch (\PDOException $e) {
            echo "Conexão ao banco de dados falhou: " . $e->getMessage();
        }
    }
}
