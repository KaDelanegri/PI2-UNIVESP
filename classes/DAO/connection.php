<?php

class Database
{
    /*Método construtor do banco de dados*/
    public function __construct()
    {
    }

    /*Evita que a classe seja clonada*/
    public function __clone()
    {
    }

    /*Método que destroi a conexão com banco de dados e remove da memória todas as variáveis setadas*/
    public function __destruct()
    {
        $this->disconnect();
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }

   

    /* conexão localhost homeoffice */

    private static $dbtype   = "mysql";
    private static $host     = "localhost";
    private static $port     = "3306";
    private static $user     = "root";
    private static $password = "root";
    private static $db       = "inclutec";

    

    /*Metodos que trazem o conteudo da variavel desejada
        @return   $xxx = conteudo da variavel solicitada*/
    private function getDBType()
    {
        return self::$dbtype;
    }
    private function getHost()
    {
        return self::$host;
    }
    private function getPort()
    {
        return self::$port;
    }
    private function getUser()
    {
        return self::$user;
    }
    private function getPassword()
    {
        return self::$password;
    }
    private function getDB()
    {
        return self::$db;
    }

    public function connect()
    {
        try {
            $this->conexao = new PDO($this->getDBType() . ":host=" . $this->getHost() . ";port=" . $this->getPort() . ";dbname=" . $this->getDB(), $this->getUser(), $this->getPassword());
            // echo 'conectou';
        } catch (PDOException $i) {
            //se houver exceção, exibe
            die("Erro: <code>" . $i->getMessage() . "</code>");
        }

        return ($this->conexao);
    }

    public function disconnect()
    {
        $this->conexao = null;
    }
}
