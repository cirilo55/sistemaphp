<?php

namespace Sys\Connection;
use App\View\Components\HandleError;
use PDO;
use PDOException;

class Database
{
    public $host;
    public $dbname;
    public $user;
    public $password;
    public $pdo;

    public function __construct()
    {
        // Carrega as variáveis de ambiente do arquivo .env
        $envPath = realpath(dirname(__FILE__, 3) . '/.env');
        // var_dump($envPath);die();
        // var_dump(dirname(__FILE__, 2));die();
        $env = parse_ini_file($envPath);
        // var_dump($env);
        $this->host = $env['DB_HOST'];
        $this->dbname = $env['DB_DATABASE'];
        $this->user = $env['DB_USERNAME'];
        $this->password = $env['DB_PASSWORD'];
        // var_dump("host=$this->host;dbname=$this->dbname", $this->user, $this->password);die();
    }

    public function connect()
    {
        $translateErrorPtBr = [
            'could not find driver' => 'Erro ao conectar com o banco de dados: driver não encontrado.',
            // Adicione mais mensagens de erro personalizadas conforme necessário
        ];

        // Verifica se há uma mensagem personalizada para o código de erro fornecido
        // var_dump($this->pdo);die();
        if (!$this->pdo) {
            try {
                $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo HandleError::render('Erro ao conectar com o banco de dados: ' . $e->getMessage());
                exit();
            }
        }

        return $this->pdo;
    }

    public function prepareAndExecute($query, $params = [])
    {
        try {
            $stmt = $this->connect()->prepare($query);

            foreach ($params as $paramName => $paramValue) {
                $stmt->bindParam($paramName, $paramValue);
            }

            $stmt->execute();
            
            return $stmt;
        } catch (PDOException $e) {
            echo $query . 'Erro na consulta: ' . $e->getMessage();
            return null;
        }
    }

    public function query($query, $params)
    {
        try {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt;
        } catch (PDOException $e) {
            echo $query.'Erro na consulta: ' . $e->getMessage();
            return null;
        }

    }

    public function execute($query, $params = [])
    {
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute($params);
    }

    public function lastInsertId()
    {
        return $this->connect()->lastInsertId();
    }

    public function saveQuery($query)
    {
        $query = substr($query, 0, 500); // limita a consulta a 500 caracteres
        $date = date('Y-m-d H:i:s');

        $query = addslashes($query);

        $sql = "INSERT INTO query_history (query_date, query_sql) VALUES (:date, :query)";
        $params = array(':date' => $date, ':query' => $query);        

        $this->execute($sql, $params);
    }

    public function executeSaveQuery($query)
    {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    

}
