<?php

require('connection.php'); 

class usuarioDAO
{
    /*Método construtor do banco de dados*/
    public function __construct()
    {
        $this->con = new Database;
        $this->pdo = $this->con->connect();
    }

    /*Evita que a classe seja clonada*/
    public function __clone()
    {
    }

    /*Método que destroi a conexão com banco de dados e remove da memória todas as variáveis setadas*/
    public function __destruct()
    {
    }

    function acessoUsuario($nome,$senha)
    {
        try {
            $sql = "SELECT idusuario,nome,nome_completo FROM usuario WHERE nome=:nome and senha=:senha";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nome" => $nome,
                ":senha" =>  $senha
            );
            $stmt->execute($params);
            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                // return utf8_encode(json_encode($result));
                return $result;
            } else {
                return 0;
            }
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

    function cadastroUsuario($nome,$nome_completo,$senha)
    {
        try {
            $sql = "insert into usuario (nome, nome_completo, senha) values(:nome,:nome_completo,:senha)";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nome" => $nome,
                ":nome_completo" => $nome_completo,
                ":senha" =>  $senha
            );
            return $stmt->execute($params);
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

    function algoritimo($nota,$id)
    {
        try {
            $sql = "insert into cursos (algoritimo,idusuario) values(:nota,:id)";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nota" => $nota,
                ":id" =>  $id
            );
            return $stmt->execute($params);
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

    function javascript($nota,$id)
    {
        try {
            $sql = "insert into cursos (javascript,idusuario) values(:nota,:id)";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nota" => $nota,
                ":id" =>  $id
            );
            return $stmt->execute($params);
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }
    function css($nota,$id)
    {
        try {
            $sql = "insert into cursos (css,idusuario) values(:nota,:id)";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nota" => $nota,
                ":id" =>  $id
            );
            return $stmt->execute($params);
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

    function html($nota,$id)
    {
        try {
            $sql = "insert into cursos (html,idusuario) values(:nota,:id)";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nota" => $nota,
                ":id" =>  $id
            );
            return $stmt->execute($params);
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

    function htmlput($nota,$id)
    {
        try {
            $sql = "update cursos set html = :nota where idcursos = :id";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nota" => $nota,
                ":id" =>  $id
            );
            return $stmt->execute($params);
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

    function algoritimoput($nota,$id)
    {
        try {
            $sql = "update cursos set algoritimo = :nota where idcursos = :id";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nota" => $nota,
                ":id" =>  $id
            );
            return $stmt->execute($params);
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

    function cssput($nota,$id)
    {
        try {
            $sql = "update cursos set css = :nota where idcursos = :id";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":nota" => $nota,
                ":id" =>  $id
            );
            return $stmt->execute($params);
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

    function notas($id)
    {
        try {
            $sql = "SELECT * from cursos WHERE idusuario=:id";
            $stmt = $this->pdo->prepare($sql);
            $params = array(
                ":id" => $id,
            );
            $stmt->execute($params);
            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                // return utf8_encode(json_encode($result));
                return $result;
            } else {
                return 0;
            }
        } catch (PDOException $th) {
            echo "Mail-ERROR: {$th->getMessage()}";
        }
    }

}